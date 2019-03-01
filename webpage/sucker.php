<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php if(!isset($_POST["name"]) || !isset($_POST["card"]) || !isset($_POST["cardnumber"]) || !isset($_POST["cardtype"])) { ?>
		<h1>Error!</h1>
		<p>You did not fill out form completely1 <a href="buyagrade.html">Try Again!</a></p>
<?php 
	} else {
?>		

	<h1>Thanks Suckers!</h1>
	<p>Your information has been recorded.</p>
	<dl>
		<dt>Name</dt>
		<dd>
			<?=$_POST["name"]?>
		</dd>
		<dt>Section</dt>
		<dd>
			<?=$_POST["card"]?>
		</dd>

		<dt>Credit Card</dt>
		<dd>
			<?=$_POST["cardnumber"]?> (<?=$_POST["cardtype"]?>)
		</dd>
	</dl>

	<div>
		<?=
			$data = $_POST["name"].";".$_POST["card"].";".$_POST["cardnumber"].";".$_POST["cardtype"]."\n";
			file_put_contents("sucker.txt", $data, FILE_APPEND);
		?>
	</div>
	<p>Here all the suckers who have been submitted here</p>

		<pre>
				<?= file_get_contents("sucker.txt")?><br>
		</pre>

<?php 
	}
?>


</body>
</html>