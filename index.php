<html>
<head>
    <meta charset="UTF-8">
    <title>PETA 1</title>
</head>
<body>
   <form action="index.php">
    <b>Input Measurement:</b>
    <input type='number' name='number' step='0.001'>
    cm<input type='radio' name='measurement' value='cm' checked>
    inch<input type='radio' name='measurement' value='inch'><br>
    <hr>
    inch<input type='radio' name='conversion' value='inch' checked>
    yard<input type='radio' name='conversion' value='yard'>
    foot<input type='radio' name='conversion' value='foot'><br>
    mm<input type='radio' name='conversion' value='mm'>
    cm<input type='radio' name='conversion' value='cm'>
    m<input type='radio' name='conversion' value='m'>
    
    <input type='submit' value='convert'>
    </form>

    <?php
    if (isset($_GET['number'])) { 
        $measurement =  $_GET['measurement'];
        $conversion = $_GET['conversion'];
        $number = $_GET['number'];
        
        switch($conversion) {
            case 'inch':
                if ( $measurement=='cm') {
                    echo $number * 0.0394 . ' inches';
                }
                else {
                    echo $number . ' inches';
                }
            break;
            case 'yard': 
                if ($measurement == 'cm') {
                    echo $number * 0.011 . ' yards';
                }
                else {
                    echo $number * 0.028 . ' yards';
                }
            break;
            case 'foot':
                if ( $measurement=='cm') {
                    echo $number * 0.033 . ' feet';
                }
                else {
                    echo $number * 0.083 . ' feet';
                }
            break;
            case 'mm': 
                if ($measurement == 'cm') {
                    echo $number * 10 . ' mm';
                }
                else {
                    echo $number * 25.4 . ' mm';
                }
            break;
            case 'cm':
                if ( $measurement=='cm') {
                    echo $number . ' cm';
                }
                else {
                    echo $number *2.54 . ' cm';
                }
            break;
            case 'm': 
                if ($measurement == 'cm') {
                    echo $number * 0.01 . ' m';
                }
                else {
                    echo $number * 0.0254 . ' m';
                }
            break;


        }
    }
    ?>


</body>
</html>

<!-- 

    value
    measurement
    conversion formula
    result of formula = conversion
 -->