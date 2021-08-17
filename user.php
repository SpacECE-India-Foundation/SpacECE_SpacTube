  <?php

    include 'Config/Functions.php';
    $Fun_call = new Functions();

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
    <!-- <div class="container" style="background-color: white">
        <div class="container" style="background-color: white">
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
                    <div class="nav-link heading">Upload Video</div>
                </li>
            </ul>
            <br>
                <form method="post" id="video-ins" action="">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-12 col-lg-6 mb-0">
                            <input type="text" class="form-control" name="video_code" placeholder="Enter Youtube Video URL">
                        </div>
                        <div class="form-group col-sm-12 col-lg-6 mb-0">
                            <input type="text" class="form-control" name="date" placeholder="Enter Video Upload Date">
                        </div>
                        <br><br>
                        <div class="form-group col-sm-12 col-lg-6 mb-0">
                            <input type="text" class="form-control" name="title" placeholder="Enter Youtube Video Title">
                        </div>
                        <div class="form-group col-sm-12 col-lg-6 mb-0">
                            <input type="text" class="form-control" name="desc" placeholder="Enter Video Desciption">
                        </div>
                        <br><br>
                        <div class="form-group col-sm-12 col-lg-6 mb-0">
                            <input type="text" class="form-control" name="length" placeholder="Enter Video Length">
                        </div>
			<div class="form-group col-sm-12 col-lg-6 mb-0">
                            <input type="text" class="form-control" name="filter" placeholder="Enter Video Filter">
                        </div>
                        <div class="form-group col-sm-12 mb-0">
                            <br>
                            <p>
                                Select Status: 
                                <select name="status">
                                <option value="">Select...</option>
                                <option value="free">Free</option>
                                <option value="created">Created</option>
                                </select>
                            </p>
                        </div>
                        <div class="form-group col-sm-12 col-lg-2 mb-0">
                            <br><br>
                            <input type="submit" name="submit" value="Upload" class="btn btn-outline-dark" data-toggle="modal"
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
                $url = $_POST['video_code'];
                // Here is a sample of the URLs this regex matches: (there can be more content after the given URL that will be ignored)

                // http://youtu.be/dQw4w9WgXcQ
                // http://www.youtube.com/embed/dQw4w9WgXcQ
                // http://www.youtube.com/watch?v=dQw4w9WgXcQ
                // http://www.youtube.com/?v=dQw4w9WgXcQ
                // http://www.youtube.com/v/dQw4w9WgXcQ
                // http://www.youtube.com/e/dQw4w9WgXcQ
                // http://www.youtube.com/user/username#p/u/11/dQw4w9WgXcQ
                // http://www.youtube.com/sandalsResorts#p/c/54B8C800269D7C1B/0/dQw4w9WgXcQ
                // http://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ
                // http://www.youtube.com/?feature=player_embedded&v=dQw4w9WgXcQ

                // It also works on the youtube-nocookie.com URL with the same above options.
                // It will also pull the ID from the URL in an embed code (both iframe and object tags)

                preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                $video_url = $match[1];
                // echo $video_url;
                $selectquery = "SELECT MAX(`v_id`) AS max_id FROM `videos` ";
                $rowSQL = mysqli_query($conn, $selectquery); 
                $row = mysqli_fetch_assoc($rowSQL); 
                $video_id = $row['max_id'] + 1; 
                $video_date = $_POST['date'];
                // echo $video_date;
                
                $video_unique = rand(1000000000000000, 10000000000000000);
                // echo $video_unique;
                $video_status = $_POST['status'];
                // echo $video_status;
                $video_title = $_POST['title'];
                $video_desc = $_POST['desc'];
                $video_length = $_POST['length'];
                $video_filter = $_POST['filter'];

                $insertquery = "INSERT into `videos`(`v_id`, `v_url`, `v_date`, `v_uni_no`, `status`, `filter`, `title`, `desc`, `length`, `cntlike`, `cntdislike`, `views`, `cntcomment`) values ('$video_id', '$url', '$video_date', '$video_unique', '$video_status', '$video_filter', '$video_title', '$video_desc', '$video_length',0,0,0,0)";
                
                // echo $insertquery;

                $res = mysqli_query($conn, $insertquery);
                if($res)
                {
                    ?>
                    <script>alert("Video uploaded succesfully!");</script>
                    <?php
                }
                else {
                    ?>
                    <script>alert("Video not uploaded!");</script>
                    <?php

                }
                    
            }

        ?>

        <!-- <div class="container1">
            <a href="logout.php">
                <button type="button">Logout</button>
            </a>
            <a href="home.php">
                <button type="button">Back to Gallery</button>
            </a>
        </div> -->
    <div class="all-v-btn btn btn-outline-dark">
        <a href="home.php"><i class="fi-xwluxl-gear-wide fi-2x fi-flip-h"></i></a>
    </div>
        
</body>
</html>

<!-- <div class="container">
            <div class="ins-box" id="load_videos">
            </div>
        </div>
    </div>


    <div class="all-v-btn btn btn-outline-dark">
        <a href="view.php"><i class="fi-xwluxl-table-wide fi-2x"></i></a>
    </div>

    <div class="container1">
        <a href="logout.php">
            <button type="button">Logout</button>
        </a>
        <a href="user.php">
            <button type="button">Upload Video</button>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript">

    $(document).ready(function (){
        $('#load_videos').load('Ajax/Load_gallery.php');

        $('#video-ins').on('submit', function(e){
            e.preventDefault();
            $video_url = $('#video_code').val().trim();
            $('#ins_status').text('');
            if($video_url != ''){
                $.ajax({
                    type: "POST",
                    url: "Ajax/Video_process.php",
                    data: { 'video_url' : encodeURIComponent($video_url) },
                    success: function (response) {
                        $json_res = JSON.parse(response);
                        if($json_res.status == 101){
                            $('#load_videos').load('Ajax/Load_gallery.php');
                            $('#ins_status').text('Successfully Video Added');
                            $("#video-ins").trigger("reset");
                        }
                        else{
                            console.log($json_res.msg);
                        }
                    }
                });
            }
            else{
                $('#ins_status').text('Please Enter Video Code');
            }
        });   
    });
    </script> -->




<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpacECE Video Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <link rel="stylesheet" href="Stylesheet/stylesheet.css">
</head>

<body>


        <div class="container">
            <div class="ins-box">
                <form method="post" id="video-ins" action="/Ajax/video_process.php">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-12 col-lg-6 mb-0">
                            <input type="text" class="form-control" id="video_code" placeholder="Enter Youtube Video URL">
                        </div>
                        <div class="form-group col-sm-12 col-lg-2 mb-0">
                            <input type="submit" value="Upload" class="btn btn-outline-dark" data-toggle="modal"
                                data-target="#exampleModalCenter">
                        </div>
                    </div>
                </form>
            </div>
        </div>




<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript">
    
    $(document).ready(function (){

        $delete_no = '';

        $('#load_videos').load('Ajax/Load_gallery.php');


        $('#video-ins').on('submit', function(e){
            e.preventDefault();
            $video_url = $('#video_code').val().trim();
            $('#ins_status').text('');
            if($video_url != ''){
                $.ajax({
                    type: "POST",
                    url: "Ajax/Video_process.php",
                    data: { 'video_url' : encodeURIComponent($video_url) },
                    success: function (response) {
                        $json_res = JSON.parse(response);
                        if($json_res.status == 101){
                            $('#load_videos').load('Ajax/Load_gallery.php');
                            $('#ins_status').text('Successfully Video Added');
                            $("#video-ins").trigger("reset");
                        }
                        else{
                            console.log($json_res.msg);
                        }
                    }
                });
            }
            else{
                $('#ins_status').text('Please Enter Video Code');
            }
        });

        $(document).on('click', '#video_update', function(){
            $update_no = $(this).data('update_no');
            $('#upd_status').text('');
            $.getJSON("Ajax/Fetch_update.php", {'update_no' : encodeURIComponent($update_no)}, function(json_data){
                if(json_data.status == 200){
                    $('#update_no').val($update_no);
                    $('#update_iframe').attr('src', 'https://www.youtube.com/embed/'+json_data.code);
                }
                else{
                    console.log(json_data.code);
                }
            });
        });

        $('#update_video').on('submit', function(e){
            e.preventDefault();
            $upd_video_url = $('#update_url').val().trim();
            $upd_video_no = $('#update_no').val().trim();
            if($upd_video_url != '' && $upd_video_no != ''){
                $.ajax({
                    type: "POST",
                    url: "Ajax/Video_process.php",
                    data: { 
                        'upd_video_url' : encodeURIComponent($upd_video_url),
                        'upd_video_no' : encodeURIComponent($upd_video_no) },
                    success: function (response) {
                        $json_res = JSON.parse(response);
                        if($json_res.status == 104){
                            $('#update_reset').trigger('click');
                            $('#load_videos').load('Ajax/Load_gallery.php');
                            $("#update_video").trigger("reset");
                        }
                        else{
                            console.log($json_res.msg);
                        }
                    }
                });
            }
            else{
                if($upd_video_url == ''){
                    $('#upd_status').text('Please Enter Video Code');
                }
                if($upd_video_no == ''){
                    $('#upd_status').text('Video No Not Found');
                }
                
            }
        });

        $(document).on('click', '#video_delete', function(){
            $delete_no = $(this).data('delete_no');
        });

        $('#video_delete').on('click', function(){
            if($delete_no != ''){
                $.ajax({
                    type: "POST",
                    url: "Ajax/Video_process.php",
                    data: { 'de_video_no' : encodeURIComponent($delete_no) },
                    success: function (res) {
                        var json_data = JSON.parse(res);
                        if(json_data.status == '107'){
                            $('#video_delete').trigger('click');
                            $('#load_videos').load('Ajax/Load_gallery.php');
                        }
                        else{
                            console.log(json_data.msg);
                        }
                    }
                });
            }
            else{
                $('#de_status').text('Video Not Found');
            }
        });



    });

    </script>

</body>

</html> -->