<?php
#Visit https://t4tutorials.com for more tutorials
if(isset($_POST['sub'])){
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];
    $oprnd=$_POST['sub'];
    if($oprnd=="+")
        $ans=$num1+$num2;
    else if($oprnd=="-")
        $ans=$num1-$num2;
    else if($oprnd=="x")
        $ans=$num1*$num2;
    else if($oprnd=="/")
        $ans=$num1/$num2;
}?>
<html>
<head>
</head>
<body>
<!–– Visit https://t4tutorials.com for more tutorials -->
<div class="container">
    <form method="post" action="">
        <h1>Simple Calculator</h1>
        <br>
        First Number:<input name="n1" value="">
        <br>
        Second Number:<input name="n2" value="">
        <br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/">
        <br>
        <br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
    </form>
</div>
</body>
</html>