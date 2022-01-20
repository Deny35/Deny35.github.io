<?php include "_top.php";?>

<h1> Fibbonacci</h1>
Poniżej  znajdzie sie rozwiązanie trzeciego ćwiczenia
<ul>
<?php
	$a = 0;
	$b = 1;
	$c = $a;
	while ($c < 10000)
		{
			echo $c." ";
			$c = $a + $b;
			$a = $b;
			$b = $c;
		}

?>
</ul>

<?php include "_bottom.php";?>