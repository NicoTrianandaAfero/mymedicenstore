<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $arr = array(5,8,3);
    
    if(isset($arr[4]))
    {
        echo $arr[4];
    }
?>
<body>
    <?php
        unset($arr[1]);
        print_r($arr);
        $arr[2] = 6;
        $arr[] = 9;
        $arr[1] = 12;
        $arr[8] = 13;
        $arr[]="x";
        $arr[0]="a";
        $arr["nama"] = "bejo";
        $arr[] = "halo";
        print_r($arr);
    ?>
</body>
</html>
