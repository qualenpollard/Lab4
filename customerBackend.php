<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $total_cost = 0;

    $item1_val = 0;
    $item2_val = 0;
    $item3_val = 0;
    $shipping_val = 0;
    $shipping_name = "";

    //Get the values from the text field radio buttons.
    if(isset($_POST['submit'])){
        if(isset($_POST['item1'])){
            $item1_val = (int)$_POST['item1'];
        }
        if(isset($_POST['item2'])){
            $item2_val = (int)$_POST['item2'];
        }
        if(isset($_POST['item3'])){
            $item3_val = (int)$_POST['item3'];
        }
        if(isset($_POST['shipping'])){
            $shipping_val = (int)$_POST['shipping'];
        }
    }

    if($shipping_val == 0) {
        $shipping_name = "Free";
    } else if($shipping_val == 50) {
        $shipping_name = "Over night";
    } else if($shipping_val == 5) {
        $shipping_name = "Three Day";
    }


    $item1_cost = $item1_val * 30;
    $item2_cost = $item2_val * 2;
    $item3_cost = $item3_val * 800;
    $shipping_cost = $shipping_val;

    $total_cost = $item1_cost + $item2_cost + $item3_cost + $shipping_cost;

    echo "<table border=1 align=center>";
        echo '<tr align=center>';
            echo '<td>' ." ". '</td>' . '<td>' ."Quantity". '</td>'.'<td>' ."Cost Per Item". '</td>';
            echo '<td>' ."Sub Total". '</td>' ."<br>";
        echo '</tr align=right>';
        echo '<tr align=right>';
            echo '<td>' ."Item 1". '</td>'.'<td>' .$item1_val. '</td>'.'<td>' ."$30.00". '</td>'.'<td>' ."$".$item1_cost;
        echo '</tr>';
        echo '<tr align=right>';
            echo '<td>' ."Item 2". '</td>'.'<td>' .$item2_val. '</td>'.'<td>' ."$2.00". '</td>'.'<td>' ."$".$item2_cost;
        echo '</tr>';
        echo '<tr align=right>';
            echo '<td>' ."Item 3". '</td>'.'<td>' .$item3_val. '</td>'.'<td>' ."$800.00". '</td>'.'<td>' ."$".$item3_cost;
        echo '</tr>';
        echo '<tr align=right>';
            echo '<td>' ."Shipping". '</td>'.'<td>' .$shipping_name. '</td>'.'<td>' ." ". '</td>'.'<td>' ."$".$shipping_cost;
        echo '</tr>';
        echo '<tr align=right>';
            echo '<td>' ."Total". '</td>'.'<td>' ." ". '</td>'.'<td>' ." ". '</td>'.'<td>' ."$".$total_cost;
        echo '</tr>';
    echo "</table>";

 ?>
