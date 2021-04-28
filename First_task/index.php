<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $a="<p><strong>Richard III</strong> (2 October 1452 – 22August 1485) was King of England for two years, from 1483 until 
        his death in 1485 in the Battle of Bosworth Field. He was the last king of the House of 
        York and the last of the Plantagenet dynasty. His defeat at Bosworth Field, the decisive battle 
        of the Wars of the Roses, is sometimes regarded as the end of the Middle Ages in England. 
        He is the subject of the play<cite>Richard III</cite> by";
        $a = strip_tags($a);
    $b= substr($a, 0, 290);
    $b = rtrim($b, "!,.-");
    $b = substr($b, 0, strrpos($b, ' '));
    $link='';
    $pieces = explode(" ", $b);
    for($i=0; $i<count($pieces); $i++){ 
        if($i==count($pieces)-2 or $i==count($pieces)-1)
        $link.=" ".$pieces[$i];
    }
    $trimmed= trim($b,$link);
    
    // $link=$trimmed.$link;
    echo "$trimmed.<a href='main.php'>$link...</a>";



    ?>
</body>
</html>