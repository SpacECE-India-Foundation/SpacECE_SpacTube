<?php

include 'Config/Functions.php';
$Fun_call = new Functions();

$fetch_video = $Fun_call->select_order('videos', 'v_id', 'DESC');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpacTube</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <link rel="stylesheet" href="Stylesheet/stylesheet.css">
    <center>
    	<img src="spacece_logo.jpeg" style="align: center; justify-content: center; width: 50%; height: auto ">
    </center>

    <br><br>
    <style>
.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
</style>
</head>
<body>
<div class="container" style="background-color: white">
    <!-- <div class="container" style="background-color: white">
        <ul class="nav justify-content-center background-color-white" >
            <li class="nav-item">
                <h1 style="color: orange; background-color: white">SpacTube</h1>
            </li>
        </ul>
    </div> -->

    <div class="topright" >
            <a href="logout.php">
                <button type="button">Logout</button>
            </a>
            <!-- <a href="user.php">
                <button type="button">Upload Video</button>
            </a>
            <a href="user1.php">
                <button type="button">Remove Video</button>
            </a> -->
    </div>

    <div class="container">
            <ul class="nav justify-content-center bg-dark">
                <li class="nav-item">
                    <div class="nav-link heading">SpacTube</div>
                </li>
            </ul>
            
            <a href="view.php">
                <button name = "free" class="btn-btn"><h6>Go to Free Section</h6></button>
            </a>
            <a href="view1.php">
                <button name = "paid" class="btn-btn"><h6>Go to Paid Section</h6></button>
            </a>
            <a href="trending.php">
                <button name = "trending" class="btn-btn"><h6>Trending Videos</h6></button>
            </a>
            <a href="https://www.spacece.co/about-us" target="_blank">
                <button name = "about" class="btn-btn"><h6>About Us</h6></button>
            </a>
            <a href="http://api.whatsapp.com/send?phone=+919096305648" target="_blank">
                <button name = "contact" class="btn-btn"><h6>Contact Us</h6></button>
            </a>
            <!-- <a href="user.php">
                <button name = "upload" class="btn-btn"><h6>Upload Video</h6></button>
            </a>
            <a href="user1.php">
                <button name = "remove" class="btn-btn"><h6>Remove Video</h6></button>
            </a> -->
            <!-- <a href="recents.php">
                <button name = "recent" class="btn-btn"><h6>Recently Watched</h6></button>
            </a> -->
        </div>
   
    <div class="container">
            
        <div class="ins-box">
            <ul class="nav justify-content-center bg-dark">
                <li class="nav-item">
                    <div class="nav-link heading">Remove Video</div>
                </li>
            </ul>
            <br>
            <form method="post" id="video-ins" action="">
                <div class="form-group col-sm-12 mb-0">
                    <form>
                    Video to be removed:
                    <select name ="remove">
                        <option disabled selected>-- Select Video id --</option>
                        <?php
                            include "connection.php";  // Using database connection file here
                            $records = mysqli_query($conn, "SELECT `v_id` From `videos` ORDER BY `v_id`");  // Use select query here 

                            while($data = mysqli_fetch_array($records))
                            {
                                echo "<option value='". $data['v_id'] ."'>" .$data['v_id'] ."</option>";  // displaying data in option menu
                            }	
                        ?>  
                    </select>
                    </form>
                    <div class="centre">
                        <br><br>
                        <input type="submit" name="submit" value="Remove" class="btn btn-outline-dark" data-toggle="modal"
                            data-target="#exampleModalCenter">
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

    <?php

        include 'connection.php';
        

        if(isset($_POST['submit']))
        {
            $id = $_POST['remove'];
            
            $removequery = "DELETE FROM `videos` WHERE `v_id` = $id ";

            $res = mysqli_query($conn, $removequery);
            if($res)
            {
                ?>
                <script>alert("Video removed succesfully!");</script>
                <?php
            }
            else {
                ?>
                <script>alert("Video not removed!");</script>
                <?php

            }

            header('location: home.php');
                exit();
        }

    ?>

    <div class="all-v-btn btn btn-outline-dark">
        <a href="home.php"><i class="fi-xwluxl-gear-wide fi-2x fi-flip-h"></i></a>
    </div>
    
</body>
</html>
