<?php
    if(isset($_POST['insertbutton'])){
    $saxeli = $_POST['saxeli'];
    $quantity = $_POST['quantity'];
    $release_date = $_POST['release_date'];
    $suitability = $_POST['suitability'];
    $company_name = $_POST['company_name'];
    $weight = $_POST['weight'];
    $calories = $_POST['calories'];
    $fat = $_POST['fat'];
    $register_date = $_POST['register_date'];
    $sql = "INSERT INTO product (saxeli, quantity, release_date, suitability, company_name, weight, calories, fat, register_date)
    VALUES ('$saxeli',
    '$quantity',
    '$release_date',
    '$suitability',
    '$company_name', 
    '$weight',
    '$calories',
    '$fat',
    '$register_date')";

    mysqli_query($connection, $sql);
    header('Location: ?top=insert');
    }
?>
<article>
    <h1>INSERT</h1>
    <form action="" style = "padding:20px" method="post">
    saxeli
    <br>
    <input type="text" name="saxeli">
    <br><br>
    quantity
    <br>
    <input type="number" name="quantity">
    <br><br>
    release_date
    <br>
    <input type="date" name="release_date">
    <br><br>
    suitability
    <br>
    <input type="text" name="suitability">
    <br><br>
    company name
    <br>
    <input type="text" name="company_name">
    <br><br>
    weight
    <br>
    <input type="number" name="weight">
    <br><br>
    calories
    <br>
    <input type="number" name="calories">
    <br><br>
    fat
    <br>
    <input type="number" name="fat">
    <br><br>
    register_date
    <br>
    <input type="date" name="register_date">
    <br><br>
    <input type="submit" name="insertbutton" value="INSERT">
    </form>
</article>