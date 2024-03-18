<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        body 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: helvetica, sans-serif;
            font-size: 40px;
            color : hsla(105, 80%, 5%, .6);
            background-image: radial-gradient(ellipse at center, hsla(123, 30%, 67%, .3) 40%, hsla(9, 100%, 30%, .8) 30%, hsla(0, 100%, 0%, .8) 100%);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <title>My Website</title>
</head>
<body>
    <?php
    $name = 'Victor';
    $surName = 'Chesnay';
    $fullName;
    
    function printName()
    {
        $GLOBALS['fullName'] = $GLOBALS['name' ].' '.$GLOBALS['surName'];
        return $GLOBALS[ 'fullName'];
    }
    ?>

    <h1><?php echo printName(); ?></h1>
</body>
</html>