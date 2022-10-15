<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i =0;
        while ($i < 1000){
            echo $i;
            $i++;
            if ($i + 2){
                continue;
            }
            
            print $i; echo "<br>";
        }
        ?>
    </body>
</html>