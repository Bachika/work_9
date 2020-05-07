<?php
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_edit = "SELECT * FROM product WHERE id=$id";
    $result = mysqli_query($connection, $sql_edit);
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['updatebutton'])){
        $id= $_POST['id'];
        $saxeli = $_POST['saxeli'];
        $quantity = $_POST['quantity'];
        $release_date = $_POST['release_date'];
        $suitability = $_POST['suitability'];
        $company_name = $_POST['company_name'];
        $weight = $_POST['weight'];
        $calories = $_POST['calories'];
        $fat = $_POST['fat'];
        $register_date = $_POST['register_date'];
        $sql_update = "UPDATE product SET  saxeli = '$saxeli',
                                        quantity = '$quantity',
                                        release_date = '$release_date',
                                        suitability = '$suitability',
                                        company_name='$company_name',
                                        weight='$weight',
                                        calories='$calories',
                                        fat='$fat',
                                        register_date='$register_date'
        WHERE id='$id'";
    mysqli_query($connection, $sql_update);
    header('Location: index.php?top=update');
    }
?>
<article>
    <h1>EDIT ITEM</h1>
    <form action="" style = "padding:20px" method="post">
    saxeli
    <br>
    <input type="text" name="saxeli" value="<?=$row['saxeli']?>">
    <br><br>
    quantity
    <br>
    <input type="number" name="quantity" value="<?=$row['quantity']?>">
    <br><br>
    release_date
    <br>
    <input type="date" name="release_date" value="<?=$row['release_date']?>">
    <br><br>
    suitability
    <br>
    <input type="text" name="suitability" value="<?=$row['suitability']?>">
    <br><br>
    company name
    <br>
    <input type="text" name="company_name" value="<?=$row['company_name']?>">
    <br><br>
    weight
    <br>
    <input type="number" name="weight" value="<?=$row['weight']?>">
    <br><br>
    calories
    <br>
    <input type="number" name="calories" value="<?=$row['calories']?>">
    <br><br>
    fat
    <br>
    <input type="number" name="fat" value="<?=$row['fat']?>">
    <br><br>
    register_date
    <br>
    <input type="date" name="register_date" value="<?=$row['register_date']?>">
    <br><br>
    <input type="hidden" name="id" value=<?=$row['id']?>>
    <input type="submit" name="updatebutton" value="UPDATE">
    </form>
</article>