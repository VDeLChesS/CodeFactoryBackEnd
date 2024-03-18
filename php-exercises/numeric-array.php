<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <title>Numeric Arrays</title>
    </head>
    <body>
        <?php
        /* Creating array */
        $numbers = array(10, 20, 30 , 40, 50);
        echo "First element in array is " . $numbers[0 ] . "<br/>";
        
        echo "Second element in array is " . $numbers[1 ] . "<br/>" ;

        echo "Third element in array is " . $numbers[2 ] . "<br/>";

        echo "Fourth element in array is " . $numbers[3 ] . "<br/>";

        echo "Fifth element in array is " . $numbers[4 ] . "<br/>";

        //Output:

        //First element in array is 10

        //Second element in array is 20

        //Third element in array is 30

        //Fourth element in array is 40

        //Fifth element in array is 50


        /* Replacing values using indexes */

        $numbers[0] = "Ten";

        $numbers[1] = "Twenty";

        $numbers[2] = "Thirty";

        $numbers[3] = "Fourty";

        $numbers[4] = "Fifty";


        echo "First element is now " . $numbers[0] . "<br/>";

        echo "Second element is now " . $numbers[1 ] . "<br/>";

        echo "Third element is now " . $numbers[2] . "<br/>";

        echo "Fourth element is now " . $numbers[3 ] . "<br/>";

        echo "Fifth element is now " . $numbers[4] . "<br/>";

     

        //Output:

        //First element is now Ten

        //Second element is now Twenty

        //Third element is now Thirty

        //Fourth element is now Fourty

        //Fifth element is now Fifty
        ?>
        
    </body>
</html>