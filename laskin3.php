<html>
<head>
<meta charset="utf-8">
<title>Laskin</title>
<style>
body {
  background-color: blue;
  text-align: center;
  padding-top: 10em;
  font-size: 18px;
  font-family: Arial;
  color: white;
}
</style>
</head>

<body>

<h1>PHP LASKIN</h1>

<form method="post" attribute="post" action="laskin3.php">
<p>Numero<br/>
<input type="number" id="first" name="first"></p>

<p>
<input type="radio" name="group1" id="add" value="add" checked="true">+
<input type="radio" name="group1" id="subtract" value="subtract">-
<input type="radio" name="group1" id="times" value="times">*
<input type="radio" name="group1" id="divide" value="divide">/
</p>

<p>Numero<br/>
<input type="number" id="second" name="second"></p>




<button type="submit" name="answer" id="answer" value="answer">Laske</button>
</form>

<p>
<?php
$first = $_POST['first'];
$second= $_POST['second'];
if($_POST['group1'] == 'add') {
echo $first + $second;
}
else if($_POST['group1'] == 'subtract') {
echo $first - $second;
}
else if($_POST['group1'] == 'times') {
echo $first * $second;
}

else if($_POST['group1'] == 'divide') {
echo $first / $second;
}
else {
    echo "Syötä numeroita";
}
?>
</p>

</body>
</html>
