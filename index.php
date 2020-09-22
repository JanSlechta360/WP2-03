<?php
$eura = filter_input(INPUT_POST,"eura");
$czk = 27;
$sub =filter_input(INPUT_POST, "odeslat");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($sub)) {
    if (isset($eu)) { ?>
       Výsledek v K: <?= $eura * $czk ?>
       <?php     
    } elseif (condition) {
        # code...
    }
}
    # code...
}






?>
</body>
</html>