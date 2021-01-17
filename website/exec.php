<?php
include 'liveexecute.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12) no-repeat center center fixed;
            height: 100vh;
        }        

        .form-head{
            height:25px;            
            background-color: black;
        }
        .form-body{
            padding:20px;
            padding-bottom: 0;
        }
        #main {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-block {
            margin-top: 0;
            border-radius: 0;
            background-color: #FFFFFF;
            overflow: hidden;
        }

        @media only screen and (min-width: 576px) {
            .form-block {
                border-radius: 10px;
                background-color: #FFFFFF;
                overflow: hidden;
            }

        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="container" id="main">
        <div class="form-block">
            <div class="form-head">
            <ul>
                <li style="display: inline-block; color:red;">⬤ </li>
                <li style="display: inline-block; color:yellow;">⬤ </li>
                <li style="display: inline-block; color:green;">⬤ </li>
            </ul>
            </div>
            <div class="form-body">
                <pre>
                <?php 
                $IP=$_POST['IP'];
                $MDP=$_POST['MDP'];
                $user=$_POST['user'];
                $EMAIL=$_POST['EMAIL'];
                $private_key=$_POST['private_key'];
                $wallet_seed=$_POST['wallet_seed'];
                $variable_ansible="IP=$IP user=$user MDP=$MDP email=$EMAIL servername=$IP pkey=$private_key seed=$wallet_seed" ;
                liveExecuteCommand("sudo /usr/bin/ansible-playbook /etc/ansible/playbook.yml -v --extra-vars '$variable_ansible'" );
                ?></pre>
            <div class="form-block">
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script> 
        $('body').bind('heightChange', function(){
            $("html, body").animate({ scrollTop: $(document).height() }, 250);
        });
        </script>
</body>

</html>