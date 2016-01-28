<?php
    $a = $_POST['txtA'];
    $b = $_POST['txtB'];
    $ope = $_POST['selOpe'];
    
            
    if (is_numeric($a)) {
    } else {
    $lmes = '<FONT COLOR="RED">計算に失敗しました。半角数字を入力してください。';
    $a = $b = ''; 
    }
    
    if (is_numeric($b)) {
    } else {
    $lmes = '<FONT COLOR="RED">計算に失敗しました。半角数字を入力してください。';
    $a = $b = '';
    }   

    
    switch ($ope) {
        case "＋":
            $answer = $a + $b;
            break;
        case "－":
            $answer = $a - $b;
            break;
        case "×":
            $answer = $a * $b;
            break;
        case "÷":
            $answer = $a / $b;
            break;
        default:
            break;
    }
      
      
?>
    
<html>
    <head>
        <meta charset="utf-8">
            <title>calc.html</title>
    </head>
    <body>
        <form name="form1" action="calc.php" method="post">
            <input type = "text" name = "txtA">
            <select name="selOpe" size=1>
                <option value = "＋">＋</option>
                <option value = "－">－</option>
                <option value = "×">×</option>
                <option value = "÷">÷</option>
            </select>　
            <input type = "text" name = "txtB">
            <?php     
            print htmlspecialchars(" = ".$answer."\n");
            ?>
            <br>
            <?php
            print ($lmes)
            ?>
            <br>
            <input type = "submit" value = "計算">
            <input type = "reset" value = "クリア"> 
       </form>
    </body>
</html>

