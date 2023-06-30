<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP EX</title>
</head>
<body>
    <form action="./server.php" method="GET">
        <input type="text" name="userPhrase" id="userPhrase">
        <input type="text" name="userCancelWord" id="userCancelWord">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    echo 'hello';
?>