<?php
if(isset($_GET["lessons"])){
$var=$_GET["lessons"];
}
else{
	$var=array(
array("gb",4,4,5),
array("fg",5,4,3),
array("er",4,5,4)
	);
}
$var2="<html>
<head></head><body>
<h1>Which lessons do You want to learn:</h1>
<form action='http://localhost:8080/lessons/index.php' method='GET'>
<input type='text' name='lessons'>Your Name</input><br />
<b>which lessons do you want to learn?</b><br />
<select name='lessons[]' size='4' multiple>
<option value='mysql'>My Sql</option>
<option value='postgresql'>PostgreSql</option>
<option value='javacore'>java Core</option>
<option value='javascript'>javascript</option>
</select>
<input type='submit' name='submit'><br />
</form>
</body>
</html>";
foreach ($var as $index) {
	// code...
	echo $index, " ";
	echo "<br />";
}
echo $var2;
?>