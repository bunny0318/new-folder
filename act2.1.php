<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
</head>
<body>

<?php 

    if (isset($_POST['test'])) {
        echo $_POST['test'];
    }
?>

    <form action="index.php" method="POST">
        0<input type="radio" name="test" value="0 is spelled as zero"><br/>
        1<input type="radio" name="test" value="1 is spelled as one"><br/>
        2<input type="radio" name="test" value="2 is spelled as two"><br/>
        3<input type="radio" name="test" value="3 is spelled as three"><br/>
        4<input type="radio" name="test" value="4 is spelled as four"><br/>
        5<input type="radio" name="test" value="5 is spelled as five"><br/>
        6<input type="radio" name="test" value="6 is spelled as six"><br/>
        7<input type="radio" name="test" value="7 is spelled as seven"><br/>
        8<input type="radio" name="test" value="8 is spelled as eight"><br/>
        9<input type="radio" name="test" value="9 is spelled as nine"><br/>
        <input type="submit">
    </form>
</body>
</html>