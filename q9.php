<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading</title>
</head>
<body>

<h3> Enter student Marks </h3>

<form method="post">
    <label for="percent"></label><input type="number" name="marks" step="0.01" placeholder="Enter student marks" required>
    <br><br>
    
    <input type="submit" name="submit" value="Display grade">

</form>

<?php

if(isset($_POST['submit'])){
    $marks=$_POST['marks'];

    if($marks<0 || $marks>100){
        echo "<h4>Invalid marks</h4>";
        return;
    }else{

        $grade="";
    }
    

  switch (true){
    case($marks>=90):
        $grade="A";
        break;
  

    case($marks>=80):
    $grade="B";
        break;

    case($marks>=70):
        $grade="C";
        break;
    case ($marks >= 60):
            $grade = "D";
        break;
    case ($marks >= 50):
            $grade = "E";
        break;
    case ($marks >= 40):
            $grade = "F";
        break;
    case ($marks >= 30):
            $grade = "S";
        break;
    default:
            $grade = "U";
    }

    echo "<h4>Percentage: $marks%</h4>";
    echo "<h4>Grade: $grade</h4>";
}



?>
    
</body>
</html>