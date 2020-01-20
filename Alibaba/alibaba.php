<?php
$cookie = $_COOKIE['name'];
$answer = $_POST["answer"];
if($cookie=="0530")
{
echo "<script>alert('0530');</script>";
echo "<script>alert('flag:Dong_bang_jaju_wa_');</script>";
}
else
{
echo "<script>alert('{$answer}');</script>";
echo "<script>alert('Do not working....');</script>";
}
echo "<script>
   history.back();
</script>;";
?>
