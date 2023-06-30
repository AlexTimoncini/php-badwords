<?php 
    $userPar = $_GET['userPhrase'];
    $userBadWord = $_GET['userCancelWord'];
    $result = str_replace($userBadWord, '****', $userPar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serverrrr</title>
</head>
<body>
    <pre><?php echo $result; ?></pre>
</body>
</html>