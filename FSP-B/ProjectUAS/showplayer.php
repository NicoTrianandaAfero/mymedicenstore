<?php 
    header("Access-Control-Allow-Origin: *");
    $mysqli = new mysqli('localhost', 'root', '', 'projectuasfsp');
    if ($mysqli->connect_errno !== 0) {
        echo $mysqli->error;
        die();
    }
    $arr = [];
    $sql = 'SELECT * FROM permainan';
    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $permainan =[];
    if($result-> num_rows >0){
        while($r2 = mysqli_fetch_assoc($result))
        {
            array_push($permainan,$r2);
        }
        $arr = ['result'=>'success' , 'data'=>$permainan];
    }
    else{
        $arr = ['result'=>'fail' , 'message '=>$mysqli->error];
    }
    echo json_encode($arr);
    $stmt->close();
    $mysqli->close(); 
?>

