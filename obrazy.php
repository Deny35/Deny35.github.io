<?php include "_top.php";?>

<h1>Galeria</h1>

<?php
  foreach(scandir('img') as $plik)
  {
    if($plik[0]!='.')
      echo "<img src='img/$plik' width='600'/>";
  }
?>

<?php include "_bottom.php";?>