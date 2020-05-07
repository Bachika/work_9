<?php
  $query = "SELECT id, saxeli FROM product";
  $result = mysqli_query($connection, $query);
  if(isset($_GET['remove'])){
     // echo $_GET['remove'];
     $remove = $_GET['remove'];
     $delete_query = "DELETE FROM product WHERE id='$remove'";
     mysqli_query($connection,  $delete_query);

    header('Location: ?top=delete');
    }
?>
<article>
    <h1>DELETE</h1>
    <?php
        while($row = mysqli_fetch_assoc($result)){
            if($row["saxeli"]==""){
                $row["saxeli"] = "delete me!!!";
             }
           echo "<p><a href='?top=delete&remove=".$row["id"]."'>".$row["saxeli"]."</a></p>";
        }
    ?>
</article>