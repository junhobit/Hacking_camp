<?php
$answer = $_GET["q"];
if($answer=="pepsi is the best")
{
echo "<script>alert('flag:_Pepsi_is_the_best_');</script>";
echo "<script>
   history.back();
</script>;";
}
else if($answer=="코카콜라vs펩시")
{
echo "<script>alert('당연히 펩시가 최고지 ㅋㅋㅋㅋ');</script>";
echo "<script>
   history.back();
</script>;";
}
else
{
echo "<meta http-equiv='refresh' content='0; url=http://search.daum.net/search?w=tot&q={$answer}'>"; 
}
?>

