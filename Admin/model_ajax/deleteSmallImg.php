<?php
include_once '../../model/pdo.php';
include_once '../../model/global.php';
include_once '../../model/product_model.php';

if(isset($_POST['prodId'])){

     $prodId= $_POST['prodId'];
     $id= $_POST['id'];
    $data =$_POST['dataImg'];
    // $product=loadOne_product($prodId);
    // $data=json_decode($product['imageSmall'],true);
    $data=json_decode($data,true);

    $newData=array();
    $count=1;
    for($i=0 ;$i<count($data);$i++){
        if($data[$i]['id']!=$id){
            $new =array('id'=>$count, 'image'=>$data[$i]['image'] );
            $count++;
            array_push($newData,$new);
        }
    }
    $dataArray =$newData;
    $dataJson = json_encode($newData);
    foreach($dataArray as $value)
    {?>
        <li class="smallImgOld">
            <img width="100%" src="<?= BASE_URL ?>uploads/<?= $value['image'] ?>" alt="">
                                        <div class="smallDelete" >X
                                            <input id="x" class="img" type="hidden"   value="<?= $value['id'] ?>">
                                        </div>
                                    </li>
    <?php }
    echo ' <input id="dataImg" type="hidden" value='.$dataJson.' name="imageSmall">';
   

}


?>