<?php
if (isset ($_POST ['roll'])) {
    $codes=array();
    while (count($codes) < 200) {
        $code=mt_rand(pow(10,13),pow(10,16)-1);
        $codes["$code"]=1;
        echo $code. "<br>";
}
}
?>

<form action="task1.php" method="POST">
    <input type ="submit" name ="roll" value="Generate Recharge Pin">
</form>