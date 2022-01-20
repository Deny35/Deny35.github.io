<?php include "_top.php";?>

<h1>Aktualności</h1>

<?php
    
    foreach(scandir('news') as $plik) 
    if($plik[0]!='.')
     {
       include "news/$plik";
       echo "<hr>\n\n";
     }

?>

<?php include "_bottom.php";?>