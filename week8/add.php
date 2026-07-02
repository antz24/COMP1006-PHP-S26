<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson</title>
</head>
<body>
    <?php
        require_once('crud.php');
        require_once('validate.php');

        $crud = new crud();
        $valid = new validate();
        if(isset($_POST['Submit']))
            {
                $name = $crud->escape_string($_POST['name']);
                $age = $crud->escape_string($_POST['age']);
                $email = $crud->escape_string($_POST['email']);

                $msg = $valid->checkEmpty($_POST, array('name', 'age', 'email'));
                $checkAge = $valid->validAge($_POST['age']);

                if ($msg != null)
                    {
                        echo "<p>$msg</p>"
                        echo "<a href='javascript:self.history.back();'>Go Back</a>";
                    }
                else if(!checkAge)
                    {
                        echo "<p> Must provide Valid Age</p>";
                    }
                else if(!checkEmail)
                    {
                        echo "<p> Email must include an @</p>";
                    }
                else
                    {
                        $result = $crud->execute("INSERT INTO week8phpusers(name,age,email) VALUES ('$name', '$age', '$email')");
                    }
            }
    ?>
</body>
</html>