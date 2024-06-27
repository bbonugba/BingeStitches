<?php  include ('Templates/connect.php')?>
<?php  include ('Templates/header.php')?>

<?php 
$video_name = " ";
$video_link = " ";
$video_description = " ";
$posted_by = " ";

if(isset($_POST['submit'])){
    $video_name = $_POST['video_name'];
    $video_link = $_POST['video_name'];
    $video_description = $_POST['video_description'];
    $posted_by = $_POST['posted_by'];

    $create_query = "INSERT INTO `binge`(`video_id`, `video_name`, `video_link`, `description`,`posted_by`, `date_added`) VALUES ('$video_name','$video_link','$video_description','$posted_by')";

    $send_query = mysqli_query($connection,$create_query);

    if($send_query){
        header('Location:index.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <h4 class="grey-text text-darken-2">Add new Video</h4>
            <form action="add_vid.php" method="post">
                <div class="row">
                    <div class="col s12 l3 input-field">
                        <input type="text" name="video_name" id="video_name">
                        <label for="video_name">Video Name</label>
                    </div>
                    <div class="col s12 l3 input-field">
                        <input type="text" name="video_link" id="video_link">
                        <label for="video_link">Video Link</label>
                    </div>
                    <div class="col s12 l3 input-field">
                        <input type="text" name="description" id="description">
                        <label for="description">Description</label>
                    </div>
                    <div class="col s12 l3 input-field">
                        <input type="text" name="posted_by" id="posted_by">
                        <label for="posted_by">Posted by</label>
                    </div>
                    <div class="center-align">
                        <input type="submit" value="submit" class="btn btn-large" >
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>


<?php  include ('Templates/footer.php')?>