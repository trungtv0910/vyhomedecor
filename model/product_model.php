<?php
function list_Product() {
    $sql="SELECT tbl_product.* ,tbl_category_child.cateChildName, tbl_category.cateName
    FROM tbl_product 
    INNER JOIN tbl_category_child on tbl_category_child.cateChildId =tbl_product.cateChildId
    INNER JOIN tbl_category on tbl_category.cateId = tbl_product.cateId;";
    $res = pdo_query($sql);
    return $res;
}
function insert_product($data,$file)
{
    $prodName =$data['prodName'];
    $cateId =$data['cateId'];
    $cateChildId =$data['cateChildId'];
    $quantity =$data['quantity'];
    $discount =$data['discount'];
    $type =$data['type'];
    $prodDesc =$data['prodDesc'];
    $price =$data['price'];
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
 
        if($uploadOk==1){
            $uploadToManyImage=$_FILES['images']['name'];
            $dataImage=array();
            $dem=0;
            for($i=0;$i<count($uploadToManyImage);$i++){
               $imageFileType = strtolower(pathinfo($_FILES['images']['name'][$i],PATHINFO_EXTENSION));
                if($imageFileType == "jpg" || $imageFileType =="png" || $imageFileType =="jpeg" || $imageFileType == "gif" ){
                    $dem++;
                    move_uploaded_file($_FILES["images"]["tmp_name"][$i], $path.$_FILES['images']['name'][$i]);
                    $newArray = array('id'=>$dem,'image'=>$_FILES['images']['name'][$i]);
                    array_push($dataImage,$newArray);
                }
            }
            $dataImage=json_encode($dataImage);
                $sql ="INSERT tbl_product(prodName,prodDesc,quantity,price,image,imageSmall,dateInput,view,type,cateChildId,cateId,discount) 
                values('$prodName','$prodDesc',$quantity,$price,'$imageName','$dataImage','$dateInput',$view,$type,$cateChildId,$cateId,$discount)";
                $res =pdo_execute($sql);
                // echo $sql;
                return $res;
        }else
        {
            return 0;
        }
        
            
        









}

?>