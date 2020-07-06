<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>mini-site-routing</title>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil !</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page 1</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page 2</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/connexion.php?page=connexion">Page connexion</a>
</head>
<body>
    <?php
    if($_GET['page'] == 1){
       echo'<h1>Accueil !</h1>';
       
    }
    elseif($_GET['page'] ==2){
        echo'<h1>Page 2!</h1>';
    }
    elseif($_GET['page'] ==3){
        echo'<h1>Page 3</h1>';
    }
    elseif($_GET ['page'] =='connexion'){
        echo'<h1>Page connexion</h1>';
        include ("connexion.php");
    }
    ?>
<?php
    if(array_key_exists('id',$_SESSION)){
    echo'Login: '.$_SESSION ['id']; 
    }
    if(array_key_exists('id',$_SESSION)){
        
    }
   else{
       if($_COOKIE['id']) {
        $_SESSION['id']=$_COOKIE['id'];    
       }
       else {
        echo"<p><a href='http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/connexion.php?page=connexion'>Revenir à page de connexion</a>";
    }
   }

  
?>
</body>
</html>
