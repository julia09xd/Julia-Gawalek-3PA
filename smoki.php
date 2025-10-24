<style>
    td, tr, table{
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>
<?php
    $conn = mysqli_connect("localhost", "root", "", "smoki");
    $q = "select * from smok";
    $result = mysqli_query($conn, $q);

    echo "<table>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nazwa"]."</td>";
        echo "<td>".$row["dlugosc"]."</td>";
        echo "<td>".$row["szerokosc"]."</td>";
        echo "<td>".$row["pochodzenie"]."</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);

    

?>