<!doctype html>
<html>
<head>
<h1>이 사이트에서 "yumdda" 검색하면 염따 티 준다.</h1>
</head>
<body>
<form action="yumdda.php" method="get">
<input type="text" name="id"></br>
<input type="submit" value="search"></br>
</form>
<form action="yumdda.php" method="get">
<input type="hidden" name="name"></br>
</form>
<?php
$answer = $_GET["name"];
if($answer=="yumdda")
{
echo "<script>alert('flag:T_YumDdA_T');</script>";
echo "<script>
   history.back();
</script>;";
}
else if($_GET["id"]=="yumdda")
{
echo "<script>alert('이걸속네 ㅋㅋ');</script>";
echo "<script>window.location.reload();</script>";
}
else
{
echo "<script>alert('Ay');</script>";
echo "<script>window.location.reload();</script>";
}
?>
</body>
<html>