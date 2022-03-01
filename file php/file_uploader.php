<?php
function resize_image($file_asli,$max_w,$max_h){
    $file_info = getimagesize($file_asli);
    $asli_w = $file_info[0];
    $asli_h = $file_info[1];
    $rasio = $asli_w / $asli_h;

    if(($max_w/$max_h) > $rasio){
        $baru_w = $max_h * $rasio;
        $baru_h = $max_h;
    }
    else{
        $baru_h = $max_w / $rasio;
        $baru_w =$max_w;
    }
    $source_asli = imagecreatefromjpeg($file_asli);
    $canva = imagecreatetruecolor($baru_w,$baru_h);
    imagecopyresampled($canva, $source_asli, 0,0,0,0, $baru_w, $baru_h, $asli_w, $asli_h);
    return $canva;
}

$photo = $_FILES["photo"]
if($photo["error"] == 0){
	 $file_info = getimagesize($photo["tmp_name"]);
	if(empty($file_info)){
		$message = "ini bukan gambar";
	}else{
		if($file_info['mime'] == 'image/jpeg'){
		  if ($photo['size'] <=1048576){
		  	$ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
		  	$file_asli = "uploads/".$nama.".".$ext;
		  	move_uploaded_file($photo['tmp_name'], $file_asli);
		  	$canvas = resize_image($file_asli, 300, 200);
		  	imagejpeg($canvas, "uploads/".$nama."_copy".$ext);
			$message = "berhasil upload!"
		  }else {
		  	$message = "ukuran gambar kebesaran!";
		  }					  			
		}
		else{
			$message = "file bukan jpg!"
		}		
	}
}else {
	
  $message = "gagal upload";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	echo $message;

	 ?>

</body>
</html>
