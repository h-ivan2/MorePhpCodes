<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>



<br>

<?php
if (isset($_POST['operation'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operation'];
    $result = 0;

    switch ($op) {
        case '+':
            $result = $num1 + $num2;
            break;

        case '-':
            $result = $num1 - $num2;
            break;

        case '*':
            $result = $num1 * $num2;
            break;

        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "<h4>Division by zero not allowed</h4>";
                exit;
            }
            break;

        default:
            echo "<h4>Invalid Operation</h4>";
    }

    
}
?>

<h2>Simple Calculator Operations</h2>

<form method="post">
    <label>First Number:</label>
    <input type="number" name="num1" required>
    <br><br>

    <label>Second Number:</label>
    <input type="number" name="num2" required>
    <br><br>

    <label>Result:</label>
    <input type="text" value="<?php echo $result; ?>">
    <br><br>


    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
</form>


</body>
</html>
