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
<title>SpacECE Youtube Gallery</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script defer src="https://friconix.com/cdn/friconix.js"> </script>
<link rel="stylesheet" href="Stylesheet/stylesheet.css">
</head>
<body>
<div class="container" style="background-color: white">
    <div class="container" style="background-color: white">
        <ul class="nav justify-content-center background-color-white" >
            <li class="nav-item">
                <h1 style="color: orange; background-color: white">SPACECE Video Gallery</h1>
            </li>
        </ul>
    </div>
   
    <div class="container">
        <div class="ins-box">
            <form method="post" id="video-ins" action="">
                <div class="form-row justify-content-center">
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
                    <div class="form-group col-sm-12 col-lg-2 mb-0">
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

    
</body>
</html>
