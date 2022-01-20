<?php include "_top.php";
 session_start();
 ?>
 
<h1> Usuń obrazek</h1>
<form method=post onSubmit="return confirm('Czy na pewno?')">
    Który obrazek chcesz usunąć?</br>
    <?php
        $img = scandir('img');
        sort($img);
        foreach($img as $x)
            if($x[0]!='.')
            {
                echo '<input type="radio" name="plik" value="img/'.$x.'">'.$x.'</input></br>';
            }
    ?>
    <br>
    Hasło
    <input type="password" name="haslo"><br>
    <input type="submit" name="submit" value="Zatwierdź">
    <input type="reset" value="Anuluj">
</form>
<?php
    if(isset($_POST['submit']) && ($_POST['haslo'] == "wsx" || $_SESSION['admin']))
    {
		  unlink($_POST[plik]);
    }
?>

<?php include "_bottom.php";?>