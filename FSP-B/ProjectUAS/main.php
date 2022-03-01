<?php
$nama;
$player;
if (isset($_POST['btnsubmit'])) {
    $nama = $_POST['txtnama'];
    $player = $_POST['rdoplayer'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permainan</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 150px;
            margin: 0 auto;
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid #555;

        }

        .cross {
            background-image: url('asset/cross.png');

        }

        img {
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Welcome , <?= $nama ?></h1>
    <h2>You , <?= $player ?></h2>
    <input type="hidden" id="player" name="player" value="<?= $player ?>">
    <table>
        <tr>
            <td class="item" box="1"></td>
            <td class="item" box="2"></td>
            <td class="item" box="3"></td>

        </tr>
        <tr>
            <td class="item" box="4"></td>
            <td class="item" box="5"></td>
            <td class="item" box="6"></td>
        </tr>
        <tr>
            <td class="item" box="7"></td>
            <td class="item" box="8"></td>
            <td class="item" box="9"></td>
        </tr>
    </table>
    <script>
 
        setInterval(function () {
            $(document).ready(function() {
                var player = $('#player').val();
       $.post('http://localhost/fsp/projectUAS/showplayer.php').done(function(data) {
           var permainan = JSON.parse(data);
        //    console.log(permainan);
           if (permainan['result'] == "success") {
               $.each(permainan['data'], function(i, item) {
                   if(item.player == player && item.box==1 && item.box==5  && item.box==9   ){
                       console.log(player +  " Win");
                   }
                   else{
                    console.log(player +  " LOSE");
                   }
                   var img = "<img src='asset/" + item.player + ".png'>";
                   $('td[box=' + item.box + ']').html(img);
               });
               
           } else {
               console.log("Waiting To Load " + permainan['messenge']);
           }
       });

   })
    }, 1000); 
        
        $('body').on('click', '.item', function() {
            var player = $('#player').val();
            var box = $(this).attr('box');
            var img = "<img src='asset/" + player + ".png'>";
            $.post('http://localhost/fsp/projectUAS/inputgame.php', {
                player: player,
                box: box
            }).done(function(data) {
                if (data == "berhasil") {
                    $('td[box=' + box + ']').html(img);
                } else {
                    alert("Waiting To Load " + data);
                }
            });
        });

    
    </script>
</body>

</html>