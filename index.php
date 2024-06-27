<?php include('Templates/connect.php')  ?>
<?php include('Templates/header.php')  ?>

<?php 
$fetch_query = "SELECT * FROM `binge`";
$send_fetch_query = mysqli_query($connection, $fetch_query);

$binge = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);
// print_r ($binge)    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binge VidBlog</title>
    <link rel="stylesheet" href="CSS/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        .text {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; !important
            /* font-size: 50px; !important */
            
        }
    </style>
</head>
<body>
    <main>
        <div class="container grey-text">
            <h2><em><strong>Binge Stitches</strong></em></h2>
            <p>
            Bees! Welcome to our Blog- Binge Stitches- where we spend a great amout of time as 'sewists', get creative, rub minds (or should I say hands!) together and have fun playing around with them. We are constantly uploading numerous hot new videos on sewing styles, techniques, fabrics, accessories and related stuff for your streaming pleasure! So, come along and have unserrated fun on our blog😘😊.
            </p>
        </div>
    </main>
</body>
</html>


<?php include('Templates/footer.php')  ?>
