    <?php
    require_once 'Config/Functions.php';
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
            <a href="user.php">
                <button name = "upload" class="btn-btn"><h6>Upload Video</h6></button>
            </a>
            <a href="user1.php">
                <button name = "remove" class="btn-btn"><h6>Remove Video</h6></button>
            </a>
            <!-- <a href="recents.php">
                <button name = "recent" class="btn-btn"><h6>Recently Watched</h6></button>
            </a> -->
        </div>

        <div class="container">
            <div class="ins-box" id="load_videos">
            </div>
        </div>
    </div>


    <div class="all-v-btn btn btn-outline-dark">
        <a href="view.php"><i class="fi-xwluxl-table-wide fi-2x"></i></a>
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
    </script>
</body>
</html>




