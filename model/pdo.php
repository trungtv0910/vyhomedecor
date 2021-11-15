<?php 

function pdo_get_connection()
{   $servername="localhost";
    $username='root';
    $password='';
    try{
        $dburl="mysql:host=$servername;dbname=vyhomedecor; charset=utf8";
       
        $conn = new PDO($dburl,$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conn;
        }
        catch(PDOException $e){
            return "lỗi kết nối :". $e->getMessage();
        }

}




function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn =pdo_get_connection();
        $stmt =$conn->prepare($sql);
        $stmt -> execute($sql_args);
        if($stmt){
            return $stmt;
          } else {
            return false;
           }
    }catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
function pdo_execute_lastId($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn =pdo_get_connection();
        $stmt =$conn->prepare($sql);
        $stmt -> execute($sql_args);
        return $stmt=$conn->lastInsertId();
    }catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}


// truy vaan nhieu du lieu
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn =pdo_get_connection();
        $stmt =$conn->prepare($sql);
        $stmt -> execute($sql_args);
        $row =$stmt->fetchAll();
        return $row;

    }catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

// truy van 1 du lieu
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn =pdo_get_connection();
        $stmt =$conn->prepare($sql);
        $stmt -> execute($sql_args);
        $row =$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}


// truy vaan nhieu du lieu
function pdo_query_column($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn =pdo_get_connection();
        $stmt =$conn->prepare($sql);
        $stmt -> execute($sql_args);
        $row =$stmt->fetchColumn();
        return $row;

    }catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}


?>