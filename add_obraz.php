<?php include "_top.php";
session_start();
?>

<h1> Dodaj obrazek</h1>
<form action="" method="post" enctype="multipart/form-data">

    Prześlij obrazek:<br><input type="file" name="img"><br>
    Hasło: <input type="password" name="haslo"><br>
    <input type="submit" value="Zatwierdź" name='submit'>
    <input type="reset">
</form>
<?php

    if(isset($_POST["submit"]) && ($_POST['haslo'] == "wsx" || $_SESSION['admin'])) 
    {
        $target_file = "img/".basename($_FILES["img"]["name"]); //określa ścieżkę pliku do przesłania
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); // dodanie do folderu
    
    }
?>
</p>

<?php include "_bottom.php";?>