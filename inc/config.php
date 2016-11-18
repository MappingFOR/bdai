<?php

    session_start();
    $polaczenie = @mysql_connect( 'localhost', 'root', '' ) or die( mysql_error() );
    $baza = @mysql_select_db( 'projekt', $polaczenie ) or die ( mysql_error() );

    //$Users = mysql_query('SELECT * FROM users WHERE Login = "'.$Login.'" AND Password = "'.$Password.'"') or die( mysql_error() );
        