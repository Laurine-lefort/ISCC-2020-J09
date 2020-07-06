<?php
    $login=$_POST ['login'];
    $password=$_POST['password'];

    if(isset($_POST['password']) AND $_POST['password'] == "2020"){
        echo'<p>Login : '.$login.'</p>';
        echo'<p>Password : '.$password.'</p>';
    }

   else{
        echo'<p>Mauvais couple identifiant / mot de passe.</p>';
        echo'<p> <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/connexion.php?page=connexion">Page connexion</a>';
    }
    ?>
