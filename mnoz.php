<?php include "_top.php";?>
<h2> Tabliczka mnożenia </h2>
<a href="?n=10"> do 10 <br></a>
<a href="?n=20"> do 20<br> </a>
<a href="?n=30"> do 30 <br></a>
<?php
$n=+$_GET["n"];
if(!isset($n)) $n=20;
$i=1;
$j=1;

echo '<table border=1>';
for($i=1;$i<=$n;$i++){
	echo '<tr>';
	for($j=1;$j<=$n;$j++){
		echo '<td style="background-color:'.(($j%2==0)?'green':'yellow').'" >'.($i*$j).'</td>';
	}
	echo '</tr>';
}
echo '</table>';
?>
<?php include "_bottom.php";?>