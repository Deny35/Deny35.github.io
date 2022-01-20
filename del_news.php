<?php include "_top.php";
session_start();
?>

<form method=post onSubmit="return confirm('Czy na pewno?')">
	<h1>Który news chcesz usunąć?</h1>
	</br>
	<?php
		$newsy=scandir('news');
		sort($newsy);
  	foreach($newsy as $x)
  	{
		if($x[0]!='.')
     	{
			echo '<input type="radio" name="plik" value="news/'.$x.'">'.$x.'</input></br>';
		}
	}
	?>
	<br>
	Hasło
    <input type="password" name="haslo"><br>
    <input type="submit" name="submit" value="Usuń">
    <input type="reset" value="Anuluj">
</form>
<?php
	if(isset($_POST['submit']) && ($_POST['haslo'] == "wsx"))
    {
		unlink($_POST[plik]);
	}
?>

<?php include "_bottom.php";?>