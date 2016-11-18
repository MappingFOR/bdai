<?php

    $Status['Login'] = false;

    if ( isSet ( $_GET['logout'] ) ) {
        unset( $_SESSION['user'] );
        header('Location: index.php');
    }

    if( isSet ( $_POST['login'])  && isSet ( $_POST['haslo'] ) ) {
        $Login = addslashes($_POST['login']);
        $Password = MD5( $_POST['haslo'] );
        
        $Users = mysql_query('SELECT * FROM users WHERE Login = "'.$Login.'" AND Password = "'.$Password.'"') or die( mysql_error() );
        
        if( mysql_num_rows( $Users ) > 0 ) {
            $_SESSION['user'] = $Login;
            $Status['Login'] = true;
            header('Location: index.php');
        }

    } else if ( !isSet ( $_SESSION['user'] ) ) 
        echo '<br><a href="?site=logowanie">Zaloguj</a><br>';
    
    if(isSet ( $_SESSION['user'] )){
        echo 'Witaj, '.$_SESSION['user'].'!';
        echo '<br>  <a href="?site=dodaj">Dodaj osobę</a><br>'; 
     
      echo '<a href="?site=index&logout">Wyloguj</a><br>';    
    }

    echo '<a href="index.php">Strona główna</a><hr>';