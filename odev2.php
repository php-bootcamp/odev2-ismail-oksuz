<!DOCTYPE html>
<html>
<head>
	<title>Odev-2</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Günlük Kalori Hesaplama</h2>
	<hr>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<table>
			<tr>
				<td><label >Sex :</label></td>
				<td>
					<input type="radio" name="sex" value="famale">Famale
					<input type="radio" name="sex" value="male" checked="">Male
				</td>
			</tr>
			<tr>
				<td><label for="weight">Weight :</label></td>
				<td><input type="Number" id="weight" name="weight" value="55" required=""></td>
			</tr>
			<tr>
				<td><label for="height">Height :</label></td>
				<td><input type="number" id="height" name="height" value="170" required=""></td>
			</tr>
			<tr>
				<td><label for="age">Age :</label></td>
				<td><input type="number" id="age" name="age" value="25" required=""></td>
			</tr>
			<tr>
				<td></td>
				<td align="right">
					<button type="submit" name="klrHesapla">Hesapla</button>
				</td>
			</tr>
		</table>
	</form>

	<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$age = $_POST['age'];

		if ($_POST['sex'] == "famale") {
			echo 10 * $weight + 6.25 * $height - 5 * $age + 5;
		}
		elseif ($_POST['sex'] == "male") {
			echo 10 * $weight + 6.25 * $height - 5 * $age - 161;
		}
	}
	?>
</body>
</html>