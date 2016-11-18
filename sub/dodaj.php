	    <form action="?site=dodaj" method="post"> 
            <input type="text" name="Imie" placeholder="Imie"/><br />
            <input type="text" name="Nazwisko" placeholder="Nazwisko"/><br />
            <input type="text" name="Miasto" placeholder="Miasto"/><br />
            <input type="text" name="NrDomu" placeholder="Nr Domu"/><br />
            <input type="text" name="NrMieszkania" placeholder="Nr Mieszkania"/><br />
            <input type="text" name="KodPocztowy" placeholder="Kod Pocztowy" maxlength="6"/><br />
            <input type="text" name="NrPodatkowy" placeholder="Nr Podatkowy" maxlength="11"/><br />
            <input type="text" name="NrTelefonu" placeholder="Nr Telefonu" maxlength="9"/><br />
            <input type="text" name="Email" placeholder="Email"/><br />
            <input type="text" name="Stan" placeholder="Stan"/><br />
            <input type="submit" value="Dodaj" /><br />
            <a href="?site=index">Wróć</a></center>
        </form>
        <?php
    
            if ( isset( $_POST['Imie'] ) &&  isset( $_POST['Nazwisko'] ) && isset( $_POST['Miasto'] ) && isset( $_POST['NrDomu'] ) && isset( $_POST['NrMieszkania'] ) && isset( $_POST['KodPocztowy'] ) &&  isset( $_POST['NrPodatkowy'] ) && isset( $_POST['NrTelefonu'] ) && isset( $_POST['Email'] ) && isset( $_POST['Stan'] )) {
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

				$dodawanie = mysql_query("INSERT INTO `person` (`id`, `Imie`, `Nazwisko`, `Miasto`, `NrDomu`, `NrMieszkania`, `KodPocztowy`, `NrPodatkowy`, `NrTelefonu`, `Email`, `Stan`) VALUES (NULL, $imie, $nazwisko, $miasto, $nrdomu, $nrmieszkania, $kodpocztowy, $nrpodatkowy, $nrtelefonu, $email, $stan);") or die(mysql_error());
				header('Location: index.php');
			}
        ?>	
	</body>
</html>