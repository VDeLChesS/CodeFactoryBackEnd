<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <title>multidimensional Associative Array</title>
    </head>
    <body>
        <?php
        $marks = array(
            "Mark" => array
            (
                "Physics" => 35,
                "Maths"  => 30,
                "Chemistry"  => 39
            ),
            "Anthony" =>   array
            (
                "Physics"  => 30,
                "Maths" => 32,
                "Chemistry"  => 29
            ),
            "Eric" =>   array
            (
                "Physics"  => 31,
                "Maths"  => 22,
                "Chemistry"  => 39
            )
        );
        /* Accessing multidimensional array values */
        echo  "Marks for Mark in Physics: ";
        echo $marks[ 'Mark']['Physics'] . "<br/>" ;
        echo "Marks for Anthony in Maths: ";
        echo $marks['Anthony']['Maths' ] . "<br/>" ;
        echo  "Marks for Eric in Chemistry: " ;
        echo $marks['Eric']['Chemistry' ] .  "<br/>";
        //Output:
        //Marks for Mark in Physics: 35
        //Marks for anthony in Maths: 32
        //Marks for eric in Chemistry: 39
        ?>
    </body>
</html>

