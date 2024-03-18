<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <style>   
        body 
        {
            display: flex;
            justify-content: space-between;
            font-family: helvetica, sans-serif;
            background-image : radial-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1557683316-973673baf926');
        }
        div
        {
            background-color: rgba(0,0,0,0.5);
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            color:goldenrod
        }

        h2
        {
            color: white;
            text-align: center;
        }
    </style>
        <title>multidimensional Associative Array</title>
    </head>
    <body>
        <div>
            <?php
            function outputCharacteristics($array) {
                echo '<ul>';
                foreach ($array as $key => $value) {
                    echo '<li><strong>' . $key . ' : </strong>';
                    if (is_array($value)) {
                        outputCharacteristics($value);
                    } else {
                        echo $value;
                    }
                    echo '</li>';
                }
                echo '</ul>';
            }
        
            $OSRClassList = array 
            (
                "Wizard" => array
                (
                    "Attack" => "Fireball",
                    "Healing" => "Heal",
                    "Special" => "Teleport",
                    "AttackDamage" => 45 ."pts",
                    "AttackSpeed" => 2,
                    "ManaPoints" => 100 ."pts",
                    "LifePoints" => 250 ."pts"
                ),
                "Warrior" =>   array
                (
                    "Attack" => "Two-Handed Sword",
                    "Defend" => "Shield Block",
                    "Special" => "short-time Invicibility for 5 seconds",
                    "AttackDamage" => 30 ."pts",
                    "AttackSpeed" => 4,
                    "StaminaPoints" => 150 ."pts",
                    "LifePoints" => 180 ."pts"
                ),
                "Archer" =>   array
                (
                    "Attack" => "Bow",
                    "Escape" => "Speed Buff",
                    "Special" => "Two-Handed Crossbow",
                    "AttackDamage" => 40 ."pts",
                    "AttackSpeed" => 3,
                    "Arrows_left" => 43 ."pts",
                    "LifePoints" => 200 ."pts"
                ),
                "Priest" => array (
                    "Attack" => "Giant Mass",
                    "Charge" => "Heavy Head Charge",
                    "Special" => "Enraged Mode",
                    "AttackDamage" => 80 ."pts",
                    "AttackSpeed" => 1,
                    "RagePoints" => 100 ."pts",
                    "LifePoints" => 300 ."pts"
                )
            );
            foreach ($OSRClassList as $className => $classCharacteristics) {
                echo '<h2>' . $className . '</h2>' ;
                outputCharacteristics($classCharacteristics);
            }
            ?>
        </div>
    </body>
</html>
