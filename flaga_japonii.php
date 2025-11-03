<style>
     table, tr, td{
          border: 1px solid black;
          border-collapse: collapse;
     }
     td{
          height: 5px;
          width: 5px;
     }
</style>
<?php
     $r = 150/4;
     $sx = 240/2;
     $sy = 150/2;

     echo "<table>";
     for($px=0; $px<150; $px++){
          echo "<tr>";
          for($py=0; $py<240; $py++){
               $c = sqrt(pow($sy-$px, 2)+pow($sx-$py, 2));
               if($c<=$r){
                    echo "<td style='background-color: red;'></td>";
               }else{
                    echo "<td style='background-color: white;'></td>";
               }
          }
          echo "</tr>";
     }
     echo "</table>";
?>