<?php include "_top.php";
session_start();
?>

<h1> Dodaj news</h1>
<form method=post>
	<input type="text" name="tytul" placeholder="Tytuł"/>
	<br>
	<textarea name="tekst" placeholder="Wpisz opis" cols="50" rows="10"></textarea>
	<br>
	Hasło
    <input type="password" name="haslo"><br>
    <input type="submit" name="submit" value="Dodaj">
    <input type="reset" value="Anuluj">
</form>
<?php

	$i=1;
	if(isset($_POST["submit"]) && ($_POST['haslo'] == "wsx")) 
    {
		while($j=1)
		{
			$plik="news/news$i.html";
			if(file_exists($plik))
			{
				$i++;
				$j=1;
            }
            
			else
			{
				$tytul = $_POST[tytul];
				$tekst = $_POST[tekst];
				$open = fopen("news/news$i.html","w");
				fwrite($open, "<h2>$tytul</h2>$tekst");
				fclose($open);
				break;
			}
		}
	}
?>

<?php include "_bottom.php";?>