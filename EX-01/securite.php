<?php
    $login=$_POST ['login'];
    $password=$_POST['password'];

    if(isset($_POST['password']) AND $_POST['password'] == "2020"){
        echo'<p>Login : '.$login.'</p>';
        echo'<p>Password : '.$password.'</p>';
    }

   else{
        echo'<p>Mauvais couple identifiant / mot de passe.</p>';
    }
    ?>
