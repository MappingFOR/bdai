
        <?php
        
        
            if (( $polaczenie ) && ( $baza )) {
		        $struktura = mysql_query( 'SELECT * FROM person' ) or die( mysql_error() );
                
                while ( $rekord = mysql_fetch_assoc ( $struktura ) ) {
                    $ludzie[] = $rekord;
                }
                
                echo '<table border="1">
                
                <tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Miasto</th><th>NrDomu</th><th>NrMieszkania</th><th>KodPocztowy</th><th>PESZEL</th><th>Telefon</th><th>Email</th><th>Stan</th></tr>';
                
                foreach ( $ludzie as $ludz ) {
                    echo '<tr><td>'.implode('</td><td>',$ludz).'</td>';
					//echo '<b>'. $ludz['id'] . '</b> ' . $ludz['imie'] . '<b>' . $ludz['nazwisko'] . '</b>';
                    if ( isSet ( $_SESSION['user'] ) ) echo '<td><a href="?id_del='.$ludz['ID'].'">Usun</a> | <a href="?site=edycja&id_edit='.$ludz['ID'].'">Edytuj</a><br></td>'; else echo '<br>';
                    echo '</tr>';
			    }
                
                
                echo '</table>';
                if ( isSet ( $_GET['id_del']) ) {
                    $usun = mysql_query( 'DELETE FROM person WHERE ID='.((int) $_GET['id_del']) ) or die( mysql_error() );
                    header('Location: index.php');
                }
                
	       } else 
		        echo 'Coś poszło nie tak';
        
        ?>	
	</body>
</html>