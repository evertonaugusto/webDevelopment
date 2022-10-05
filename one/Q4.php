<?php 

    $number1 = null; 
    $number2 = null; 
    $result = null; 
    $op = null;

    if(isset($_POST["number1"], $_POST["number2"], $_POST["op"])){

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $op = $_POST["op"];

        switch($op){
            case "sum":
                $result = $number1 + $number2;
                break;
            case "subtract":
                $result = $number1 - $number2;        
                break;
            case "multiply":
                $result = $number1 * $number2;
                break;
            case "division":
                $result = $number1 / $number2;
                break;
            default:
                echo "Selecione uma operação!";
                break;
        }
    } else  {
        echo "Verifique se preencheu todos os campos corretamente!";
    }
?>

<html>
        <head></head>
    <body>

        <br/><br/> <br/><br/>
        <form action="Q4.php" method="POST">

            VALOR 1: <input type="number" name="number1" value="<?=$number1?>"><br/><br/>
            VALOR 2: <input type="number" name="number2" value="<?=$number2?>"><br/><br/><br/>
            RESULTADO: <input type="text" name="result" value="<?=$result?>"><br/><br/>

            OPERAÇÕES: 
            <input type="radio" name="op" value="sum">
            SOMA ( + )

            <input type="radio" name="op" value="subtract">
            SUBTRAIR ( - )

            <input type="radio"  name="op" value="multiply">
            MULTIPLICAR ( * )

            <input type="radio"  name="op" value="division">
            DIVIDIR ( / )
            <br/><br/>

           <input type="submit" value="Enviar"> <br/><br/>

        </form>
    </body>

</html>