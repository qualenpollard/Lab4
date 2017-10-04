<?php
    echo "<table border=0>";

    for ($i =1; $i < 101; $i++){
        echo('<tr>');
        for ($j = 1; $j < 101; $j++){
        echo( '<td>' .$j*$i.'</td>');
        }
        echo('</tr>');
    }

    echo("</table>");
?>
