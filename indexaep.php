<!DOCTYPE html>
<html>
<head>
	<title>AEP 2</title>
</head>
<body>
	<pre>
	<?php

		require_once 'AEP2.php';

        $l1= new pessoa("marlon",1992,9745529923, 1.68, 96.9);
        $l1->Calculaimc();
        $l1->Getimc();
        $l1->Calculaidade();
        $l1->Getidade();

		print_r($l1);
	?>
	</pre>
</body>
</html>