<!DOCTYPE html>
<html>
<head>
	<title>Fwrite Example</title>
</head>
<body>
	<h2>fwrite - Read/Write Mode ('r+')</h2>
	<?php
	$textFile = './data/data.txt';

	$str = 'File written at ' . date('H:i:s, j M Y') . ".\n";

	$fileHandle = fopen($textFile, 'r+');

	$written = fwrite($fileHandle, $str);

	if($written){
		echo "$written bytes wre successfully written to the file";
	} else {
		echo "There was an error writing the string to the file";
	}

	fclose($fileHandle);
	?>

	<p>
		<a href="<?php echo $textFile; ?>">View data.txt</a>
	</p>
</body>
</html>