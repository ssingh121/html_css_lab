<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
</head>
<body>
    <div align="center">
        <h1>Time Table</h1>
        <table border="2">
            <tr>
                <th></th>
                <?php
                for($a=1;$a<=10;$a++){
                    echo '<th>'. $a.'</th>';
                }
                ?>
            </tr>
            <?php      
               for ($i = 1; $i <= 10; $i++) 
               {
                    echo "<tr>";
                    echo "<th>$i</th>";                   
                    for ($j = 1; $j <= 10; $j++) 
                    {
                        $formatted_value = number_format($i / $j, 3);
                        echo "<td>$formatted_value</td>";
                    }
                    echo " </tr>";
                }                  
            ?>
        </table>
    </div>
</body>
</html>