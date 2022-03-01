<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>

<body>
    <p id="test"></p>
    <p>
        <label>Username</label>
        <input type="text" id="username">
    </p>
    <p>
        <label>Password</label>
        <input type="password" id="password">
    </p>
    <button id="btnlogin">Login</button>
</body>
<script src="jquery-3.5.1.min.js"></script>
<script>
    $('#btnlogin').click(function() {
        var username = $('#username').val();
        var password = $('#password').val();

        $.post('login_ajax.php', {
            uname: username,
            passwd: password
        }).done(function(data) {
            if (data == 'sukses') {
                $('#test').html('sukses');
                window.location = 'index.php';
            } else {
                $('#test').html('gagal');
            }
        })

        // $.ajax({
        //     url : 'login_ajax.php',
        //     data : {
        //             uname:username,
        //             passwd:password
        //             },
        //     method : 'post',
        //     success : function (data) {
        //         if (data == 'sukses') {
        //         $('#test').html('sukses');
        //         window.location = 'index.php';
        //     } else {
        //         $('#test').html('gagal');
        //     }
        //     }
        // })
    });
</script>

</html>