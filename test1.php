<?php 

    if(isset($_POST['btn-salary'])) {
        $salary = $_POST['salary'];
        if($salary >= 10000) {
            $bonus = $salary * 300;
        } elseif ($salary  >= 50000) {
            $bonus = $salary * 200;
        } elseif ($salary >= 1000000) {
            $bonus = $salary * 100;
        } else {
            $bonus = $salary;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
</head>
<body>
    <h1>Salary</h1>
    <?php if(isset($bonus)) { ?>
        <p><?php echo $bonus ?></p>
    <?php }?>
    <form method="post">
        <input type="text" name="salary" id="">
        <input type="submit" name="btn-salary" value="Confirm">
    </form>
    
</body>
</html>