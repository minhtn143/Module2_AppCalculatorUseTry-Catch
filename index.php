<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App Simple Calculator</title>
</head>
<body>
<h2>App Simple Calculator</h2>
<form method="post" id="formGet" action="result.php">
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


</body>
</html>


