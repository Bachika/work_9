<div class="body">

<nav>
    <ul>
    <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Error!");
        }else{

            while($row = mysqli_fetch_assoc($result)){
                echo "<li><a href='?sax=".$row["saxeli"]."'>".$row["saxeli"]."</a></li>";
            }
            
        }
    ?>
    </ul>
</nav>
<?php
    if(isset($_GET['top']) && $_GET['top']=="insert"){
        include "view/insert.php";
    }elseif(isset($_GET['top']) && $_GET['top']=="delete"){
        include "view/delete.php";
    }elseif(isset($_GET['top']) && $_GET['top']=="update"){
        include "view/update.php";
    }elseif(isset($_GET['top']) && $_GET['top']=="racxa"){
        include "view/racxa.php";
    }
    elseif(isset($_GET['id']) && $_GET['id']!=""){
        include "view/edit.php";
    }
    else{
        include "view/select.php";
    }

?>


</div>