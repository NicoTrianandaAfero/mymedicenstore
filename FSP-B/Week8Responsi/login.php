<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax</title>
</head>
<body>
	<p>
		<label>Username</label>
		<input type="text" name="username">

	</p>
	<p>
		<label>Password</label>
		<input type="password" name="pasword">

	</p>
	<button id="btnlogin">Login</button>

</body>
<script src="jquery-3.5.1.min.js" >
	$('btnlogin').click(function){
		var username =  $('#username').val(); //ngambil value username
		var password = $('#password').val();

		$.post('login_ajax.php', 
		{
			uname : username,
			pasword : password
		}).done(function(data){
			if (data == 'sukses'){
				$(#'test').html('sukses');
				window.location = 'index.php';
			}else {
				$(#'test').html('gagal');
			}

		})

	}

</script>
</html>