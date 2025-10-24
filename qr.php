<style>
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    td{
        height: 10px;
        width: 7px;
    }
</style>
<?php
    echo "<table>";
    for($i=0; $i<=30; $i++){
        echo "<tr>";
        for($j=0; $j<=30; $j++){
            $n = rand(0, 1);
            if($n==0){
                $color = "black";
            }else if($n==1){
                $color = "white";
            }
            echo "<td style='background-color: $color'></td>";
        }
        echo "</tr>";
    }
    echo "</table>"
?>