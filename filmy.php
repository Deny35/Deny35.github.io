<?php include "_top.php";?>

<h1>Filmy</h1>

<ul>
<?php

  $obrazki=scandir('films');


  foreach($obrazki as $plik)
  {
    if($plik[0]!='.')
    {
      echo "<video width='300' height='300' controls><source src='films/$plik' type='video/mp4'></video><br>";
    }
   
  }
?>
</ul>


<?php include "_bottom.php";?>