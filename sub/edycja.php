<?php 
		if ( isSet ( $_GET['id_edit'] ) ) {
		
		if ( ( $polaczenie ) && ( $baza ) ) {
            $id = (int) $_GET['id_edit'];
            $struktura = mysql_query( "SELECT * FROM `person` WHERE `person`.`ID` = $id;" );	
            
            while ( $rekord = mysql_fetch_assoc ( $struktura ) ) {
					$ludzie[] = array ( 'imie' => $rekord['Imie'], 'nazwisko' => $rekord['Nazwisko'], 'miasto' => $rekord['Miasto'], 'nrdomu' => $rekord['NrDomu'], 'nrmieszkania' => $rekord['NrMieszkania'], 'kodpocztowy' => $rekord['KodPocztowy'], 'nrpodatkowy' => $rekord['NrPodatkowy'], 'nrtelefonu' => $rekord['NrTelefonu'], 'email' => $rekord['Email'], 'stan' => $rekord['Stan']  );
		    }
            
            foreach ( $ludzie as $ludz ) {
				
            
        
	?>
	<form action="?site=edycja&id_edit=<?=$id ?>" method="post"> 
        <input type="text" name="Imie" value="<?php echo $ludz['imie'] ?>" /> Imię<br />
        <input type="text" name="Nazwisko" value="<?php echo $ludz['nazwisko'] ?>" /> Nazwisko<br />
        <input type="text" name="Miasto" value="<?php echo $ludz['miasto'] ?>" /> Miasto<br />
        <input type="text" name="NrDomu" value="<?php echo $ludz['nrdomu'] ?>" /> Nr Domu<br />
        <input type="text" name="NrMieszkania" value="<?php echo $ludz['nrmieszkania'] ?>" /> Nr Mieszkania<br />
        <input type="text" name="KodPocztowy" value="<?php echo $ludz['kodpocztowy'] ?>" maxlength="6"/> Kod Pocztowy<br />
        <input type="text" name="NrPodatkowy" value="<?php echo $ludz['nrpodatkowy'] ?>" maxlength="11"/> Nr Podatkowy<br />
        <input type="text" name="NrTelefonu" value="<?php echo $ludz['nrtelefonu'] ?>" maxlength="9"/> Nr Telefonu<br />
        <input type="text" name="Email" value="<?php echo $ludz['email'] ?>" /> E-mail<br />
        <input type="text" name="Stan" value="<?php echo $ludz['stan'] ?>" /> Stan<br />
		<input type="submit" value="Edytuj" /><br>
		<a href="?site=index">Wróć</a></center>
	</form>
    <?php
            }
            
            if ( isset( $_POST['Imie'] ) &&  isset( $_POST['Nazwisko'] ) ) {
				$imie = "'".addslashes($_POST['Imie'])."'";
				$nazwisko = "'".addslashes($_POST['Nazwisko'])."'";
				$miasto = "'".addslashes($_POST['Miasto'])."'";
				$nrdomu = "'".addslashes($_POST['NrDomu'])."'";
				$nrmieszkania = "'".addslashes($_POST['NrMieszkania'])."'";
                $kodpocztowy = "'".addslashes($_POST['KodPocztowy'])."'";
				$nrpodatkowy = "'".addslashes($_POST['NrPodatkowy'])."'";
				$nrtelefonu = "'".addslashes($_POST['NrTelefonu'])."'";
				$email = "'".addslashes($_POST['Email'])."'";
				$stan = "'".addslashes($_POST['Stan'])."'";
                $edycja = mysql_query( "UPDATE `person` SET `Imie` = $imie, `Nazwisko` = $nazwisko, `Miasto`= $miasto, `NrDomu`= $nrdomu, `NrMieszkania`= $nrmieszkania, `KodPocztowy`= $kodpocztowy, `NrPodatkowy`= $nrpodatkowy, `NrTelefonu`= $nrtelefonu, `Email`= $email, `Stan`= $stan WHERE `person`.`ID` = $id;" ) or die( mysql_error() );
                header('Location: index.php'); 
            }
         }
        }
           
    ?>
	</body>
</html>