<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
@$content = $_REQUEST['fname']; 
$file = fopen("news.txt", "w") or die("Unable to open file!");
fwrite($file, $content);
fclose($file);
?>

</body>
</html>




