<article>
        <?php
            echo $_GET["sax"]." - saxeli";
            $sax = $_GET["sax"];
            $query = "SELECT * FROM product WHERE saxeli = '$sax'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div>
            <br><?=$row["quantity"]?> - raodenoba
        </div>
        <div>
            <br><?=$row["release_date"]?> - gamoshvebis tarigi
        </div>
        <div>
            <br><?=$row["suitability"]?> - vargisianoba
        </div>
        <div>
            <br><?=$row["company_name"]?> - kompaniis saxeli
        </div>
        <div>
            <br><?=$row["weight"]?> - wona
        </div>
        <div>
            <br><?=$row["calories"]?> - kaloriebi
        </div>
        <div>
            <br><?=$row["fat"]?> - cximianoba
        </div>
        <div>
            <br><?=$row["register_date"]?> - bazashi chaweris tarigi
        </div>
    </article>