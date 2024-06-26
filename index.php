<?php include('Templates/connect.php')  ?>
<?php include('Templates/header.php')  ?>

<?php 
$fetch_query = "SELECT * FROM `binge`";
$send_fetch_query = mysqli_query($connection, $fetch_query);

$binge = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);
print_r ($binge)
?>



<?php include('Templates/footer.php')  ?>
