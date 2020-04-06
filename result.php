<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App Simple Calculator</title>
</head>
<body>
<h2>App Simple Calculator</h2>
<form method="post" id="formGet" action="">
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>
                    <label for="firstOperand">First operand: </label>
                </td>
                <td>
                    <label>
                        <input type="text" name="firstOperand" value="">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="operator"> Operator</label>
                </td>
                <td>
                    <label>
                        <select name="operator">
                            <option value="+"> +</option>
                            <option value="-"> -</option>
                            <option value="*"> *</option>
                            <option value="/"> /</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="secondOperand">Second operand:</label>
                </td>
                <td>
                    <label>
                        <input type="text" name="secondOperand" value="">
                    </label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Calculate</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
<h3> RESULTS: </h3>
<?php
include 'function.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNumber = $_REQUEST["firstOperand"];
    $secondNumber = $_REQUEST["secondOperand"];
    $operator = $_REQUEST["operator"];

    define("ADDITION", "+");
    define("SUBTRACTION", "-");
    define("MULTIPLICATION", "*");
    define("DIVISION", "/");


    switch ($operator) {
        case ADDITION:
            try {
                $result = sum($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
        case SUBTRACTION:
            try {
                $result = sub($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
        case MULTIPLICATION:
            try {
                $result = multi($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
        case DIVISION:

            try {
                $result = div($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
    }

}
?>

</body>
</html>
