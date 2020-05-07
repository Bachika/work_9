<article>
    <?php
    $query = "SELECT * FROM product";
    $result = mysqli_query($connection, $query);


        echo "<br>"."<table border = '2'>
        <tr>
        <th>saxeli</th>
        <th>company_name</th>
        <th>weight</th>
        <th>srulad</th>
        </tr>";
        while($rows = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $rows['saxeli'] ."</td>";
            echo "<td>" . $rows['company_name'] . "</td>";
            echo "<td>" . $rows['weight'] . "</td>";
            echo "<td><a href='?sax=".$rows["saxeli"]."'><button>Srulad</button></a></td>";
            echo "</tr>";
        }
            echo "</table>";
    ?>
</article>