<?php
    // include_once 'lib/format.php';
    function loadAll_product_home() {
        $sql = "SELECT * FROM tbl_product where 1 order by prodId desc";
        $listproduct = pdo_query($sql);
        return $listproduct;
    }
    function load_listNew_product_home() {
        $sql = "SELECT * FROM tbl_product where 1 order by prodId desc limit 15";
        $listproduct = pdo_query($sql);
        return $listproduct;
    }


    function load_product_condition($start=0,$limit=10,$type=0,$cateId=0,$cateChildId=0,$key=""){
        $sql = "SELECT * FROM tbl_product where 1 ";
        if($cateId>0){
            $sql .=" And cateId=$cateId ";
        }
        if($cateChildId>0){
            $sql .=" And cateChildId=$cateChildId ";
        }
        if(!empty($key)){
            $sql .=" And prodName like '%$key%' ";
        }
        $sql .= " order by prodId desc limit $start,$limit";
        $listproduct = pdo_query($sql);
        return $listproduct;
    }

    function load_new_product() {
        $sql = "SELECT * FROM tbl_product where 1 order by prodId desc limit 0,1";
        $newproduct = pdo_query($sql);
        return $newproduct;
    }

    function load_topview_product() {
        $sql = "SELECT * FROM tbl_product where 1 order by view desc limit 0,8";
        $topviewproduct = pdo_query($sql);
        return $topviewproduct;
    }

    function load_top_sellers() {
        $sql = "SELECT * FROM tbl_product where 1 order by type desc limit 0,10";
        $topsellersproduct = pdo_query($sql);
        return $topsellersproduct;
    }

    function load_top_highligth() {
        $sql = "SELECT * FROM tbl_product where 1 order by type desc limit 0,4";
        $tophighlightsproduct = pdo_query($sql);
        return $tophighlightsproduct;
    }

    function list_Product() {
        $sql="SELECT * FROM tbl_product ORDER BY prodId DESC";
        $res = pdo_query($sql);
        return $res;
    }
    function loadOne_product($prodId)
    {
        $sql ="SELECT * FROM tbl_product where prodId =$prodId";
        $res =pdo_query_one($sql);
        return $res;
    }
    function loadOne_product_similar($prodId,$cateId)
    {
        $sql ="SELECT * FROM tbl_product where cateId=".$cateId." AND prodId <> $prodId";
        $res =pdo_query($sql);
        return $res;
    }
    function insert_product($data,$file)
    {
        $prodName =$data['prodName'];
        $prodName_unsigned=convert_name($prodName);
        $cateId =$data['cateId'];
        $cateChildId =$data['cateChildId'];
        $quantity =$data['quantity'];
        $discount =$data['discount'];
        $type =$data['type'];
        $prodDesc =$data['prodDesc'];
        $price =$data['price'];
         $size =$data['size'];
          $material=$data['material'];
        $color=$data['color'];
        $mass=$data['mass'];

        $prodDesc = trim($prodDesc);
        $des_array=array(
        'color'=>$color,
        'mass'=>$mass,
        'size'=>$size,
        'material'=>$material,
        'des'=>$prodDesc

        );
        
        $des_array=json_encode($des_array,JSON_UNESCAPED_UNICODE);
       

        if(isset($data['image'])){
            $imageName =$data['image'];
            $uploadOk =1;
        }else{
            $imageName ='';
            $uploadOk =0;
        }
        $view=0;
        $dateInput =date("Y-m-d");
        $path = "../uploads/";
        $time=time();
    
            if($uploadOk==1){
                $uploadToManyImage=$_FILES['images']['name'];
                $dataImage=array();
                $dem=0;
                for($i=0;$i<count($uploadToManyImage);$i++){
                $imageFileType = strtolower(pathinfo($_FILES['images']['name'][$i],PATHINFO_EXTENSION));
                    if($imageFileType == "jpg" || $imageFileType =="png" || $imageFileType =="jpeg" || $imageFileType == "gif" ){
                        $dem++;
                        move_uploaded_file($_FILES["images"]["tmp_name"][$i], $path.$time.$_FILES['images']['name'][$i]);
                        $newArray = array('id'=>$dem,'image'=>$time.$_FILES['images']['name'][$i]);
                        array_push($dataImage,$newArray);
                    }
                }
                $dataImage=json_encode($dataImage);
                    $sql ="INSERT tbl_product(prodName,prodName_unsigned,prodDesc,quantity,price,image,imageSmall,dateInput,view,type,cateChildId,cateId,discount) 
                    values('$prodName','$prodName_unsigned','$des_array',$quantity,$price,'$imageName','$dataImage','$dateInput',$view,$type,$cateChildId,$cateId,$discount)";
                    $res =pdo_execute($sql);
                //    echo $res=$sql;
                    return $res;
            }else
            {
                return 0;
            }
    }
    function update_product($data,$file){
        $prodId= $data['prodId'];
    $prodName =$data['prodName'];
    $prodName_unsigned=convert_name($prodName);
    $cateId =$data['cateId'];
    $cateChildId =$data['cateChildId'];
    $quantity =$data['quantity'];
    $discount =$data['discount'];
    $type =$data['type'];
   $prodDesc =$data['prodDesc'];
    $price =$data['price'];
   $size =$data['size'];
  $material=$data['material'];
  $color=$data['color'];
    $mass=$data['mass'];
   $prodDesc = trim($prodDesc);

  $des_array=array(
  'color'=>$color,
  'mass'=>$mass,
  'size'=>$size,
  'material'=>$material,
  'des'=>$prodDesc

  );

  $des_array=json_encode($des_array,JSON_UNESCAPED_UNICODE);

    
       $sql= "UPDATE tbl_product SET prodName='$prodName',  prodName_unsigned='$prodName_unsigned',prodDesc='$des_array',quantity=$quantity,discount=$discount,type=$type ,price =$price,cateId=$cateId,cateChildId=$cateChildId";
        if(isset($data['imageSmall'])){
            $imageSmall =$data['imageSmall'];
            $sql .=", imageSmall ='$imageSmall' ";
        }
        if(isset($data['image'])){
            $image =$data['image'];
            $sql .= ",image='$image' ";
        }
            $sql .="  where prodId =$prodId ";
            // echo $sql;
        if(pdo_execute($sql)==true){
            return true;
        }else{
            return false;
        }
    return false;
    }

        function  deleteImgById($data,$id,$prodId){
        $data =json_decode($data,true);     
        

            $dataImg=array();
            $temp=0;
            for($i=0;$i<count($data);$i++){
                if($id !=$data[$i]['id']){
                    $newArray= array('id'=>$temp++, 'image'=>$data[$i]['image']);
                    array_push($dataImg,$newArray);
                }
            }
            $imageSmall=json_encode($dataImg);
            $sql ="UPDATE tbl_product SET imageSmall='$imageSmall' where prodId =$prodId";
            return pdo_execute($sql);
        }




    // h??m up load nhi???u ???nh nh???
    function upload_ImgSmall($data,$file,$dataOld,$prodId){
        
        $dataOld;
        $dataOld =json_decode($dataOld,true);
        $path = "../uploads/";
        $time=time();
        if(isset($_FILES['images']['name'])){
            $newData= $_FILES['images']['name'];
            

            $temp=count($dataOld);
            for($i=0; $i<count($newData);$i++){
                if(!empty($newData[$i])){
                    $temp+=1;
                    
                    $newArray = array('id'=>$temp,'image'=>$time.$newData[$i] );
                    array_push($dataOld,$newArray);
                    move_uploaded_file($_FILES['images']['tmp_name'][$i],$path.$time.$_FILES['images']['name'][$i]);
                }
            }
        }
        $imageSmall =json_encode($dataOld);

        $sql ="UPDATE tbl_product SET imageSmall='$imageSmall' where prodId =$prodId";
        if(pdo_execute($sql)){
            return true;
        }
        return false;
    
    }

    function delete_product($prodId)
    {
    $sql ="DELETE FROM tbl_product Where prodId =$prodId";
    return pdo_execute($sql);
    }

    function loadProduct_category($cateId){
        $sql="SELECT * FROM tbl_product where 1 ";
        if(isset($cateId)){
            $sql.= " AND cateId=$cateId ";
        }
        $sql.= " ORDER BY prodId DESC";
        return pdo_query($sql);
    }
function    update_view_product($prodId){
    $sql="UPDATE tbl_product SET view=view+1 where prodId = $prodId ";
    return pdo_execute($sql);
}