<!DOCTYPE html>
<html>
<head><title>Calc numbers</title></head>
<body>
<style>
body
{
	background-color: black;
}
h4
{
	color: white;
}
</style>
<h1 align="center">This html page for numbers</h1>
<br>
<h4>e = <?php ?></h4><br>
<h4>&#120529; = <?php ?></h4><br>
<h4>ф = <?php ?></h4><br>

<br><form method="POST">
<input name="del" type="submit" value="if you don't need html press this button to delete html file">
</form>
<?php
if(isset($_POST['del']))
{
	unlink('index.php');
}
?>
</body>
</html>