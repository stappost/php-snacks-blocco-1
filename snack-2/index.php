<?php 
    if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        if(strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)){
            $message = 'Accesso riuscito';
            
        }
        else{
            $message = 'Accesso negato';
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" methods='GET'>
        <input type="text" name='name' placeholder='Name'>
        <input type="mail" name='mail' placeholder='Mail'>
        <!-- <input type="number" name="age" id="age"> -->
        <input type="text" name='age' placeholder='Age'>
        <button type="submit">login</button>
    </form>
    <?php echo ($message) ?? ''?>
</body>
</html>