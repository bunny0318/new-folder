<html>
<head>
</head>
<body>
<?php

$arr1 = [
    [1, 'James Harden', 'Rockets', 'SG', 97,'6\'5"'],
    [2,'LeBron James', 'Lakers','SF', 97, '6\'9"'],
    [3,'Giannis Antetokounmpo','Bucks','PF', 97, '6\'11"'],
    [4, 'Kawhi Leonard','Clippers', 'SF', 96, '6\'7"'],
    [5,'Anthony Davis', 'Lakers', 'PF', 96, '6\'10"']
];

$num = $_GET['number'];

switch($num) {
    case 1: 
        for($i=0; $i < 6; $i++) {
            echo $arr1[0][$i].' ';
        }
        break;
    case 2:
        for($i=0; $i < 6; $i++) {
            echo $arr1[1][$i].' ';
        }
        break;
    case 3:
        for($i=0; $i < 6; $i++) {
            echo $arr1[2][$i].' ';
        }
        break;
    case 4:
        for($i=0; $i < 6; $i++) {
            echo $arr1[3][$i].' ';
        }
        break;        
    case 5:
        for($i=0; $i < 6; $i++) {
            echo $arr1[4][$i].' ';
        }
        break;
        default:
        echo "UNKNOWN INPUT";
}   
?>
</body>
</html>