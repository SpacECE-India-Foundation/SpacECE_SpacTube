<?php

require_once 'Config/Functions.php';
$Fun_call = new Functions();

$fetch_video = $Fun_call->select_order('videos', 'v_id', 'DESC');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpacTube Trending</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <link rel="stylesheet" href="Stylesheet/stylesheet.css">
    <style>
.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
.left{
    left: 0px;
}
</style>
</head>

<body>
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

    <div class="container-fluid">

        <div class="container">
            <ul class="nav justify-content-center bg-dark">
                <li class="nav-item">
                    <div class="nav-link heading">SpacTube</div>
                </li>
            </ul>
            <a href="view1.php">
                <button name = "paid" class="btn-btn"><h6>Go to Home</h6></button>
            </a>
            
        </div>
        
    


        <div class="container">
            <div class="ins-box">
                <div class="container">
                    <ul class="nav justify-content-center bg-dark">
                        <li class="nav-item">
                            <div class="nav-link heading">Trending Videos</div>
                        </li>
                    </ul>
                </div>

                <form action="" method ="post">
                  <select name= "filterr">  
                        <option value="all" selected>ALL</option> 
                    <?php
                      if($fetch_video){ 
                        foreach($fetch_video as $video_data){
                          echo "<option value='". $video_data['filter'] ."'>" .$video_data['filter'] ."</option>";
                      }}
                      $abc = $_POST['filterr'];
                    ?>
                  </select>
                  <input type="submit" value="submit" name="submit">
                </form>

                <div class="row row-cols-1 row-cols-md-3">
                    <?php if($fetch_video){ foreach($fetch_video as $video_data){ 
                        if($abc == "all")
                        {
                            if($video_data['status'] ==  "free")
                            {
                                ?>
                                <div class="col mb-4">
                                    <div class="card h-100">
                                    <div class="set-box youtube-video-r">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_data['v_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="card-body pt-2 pb-2">
                                        <h6 class="card-title"><?php echo $video_data['v_date']; ?></h6>
                                        <a href="likecnt.php?btn=<?php echo $video_data['v_id'] ?>">
                                            <button name="likecnt" class ="btn"><img src="like.png" style="justify-content: center; padding-left: 30%; height: 15px; width: 25px"></button>
                                            
                                        </a>
                                        <?php echo $video_data['cntlike']; ?>
                                        <a href="likecnt.php?btn1=<?php echo $video_data['v_id'] ?>">
                                            <button name="dislikecnt" class = "btn"><img src="dislike.png" style="justify-content: center; padding-left: 30%; height: 15px; width: 30px"></button>
                                            
                                        </a>
                                        <?php echo $video_data['cntdislike']; ?>
                                        <button name="share" class = "btn"><a href="whatsapp://send?text=Check out this video : https://www.youtube.com/watch?v=<?php echo $video_data['v_url']; ?>" data-action="share/whatsapp/share" target="_blank"><img src="whatsapp logo.png" style="justify-content: center; padding-left: 30%; height: 15px; width: 25px"></a></button>
                                        <a href="comment.php">
                                            <button name="comment" class="btn"><img src="comments.png" style="justify-content: center; padding-left: 30%; height: 20px; width: 35px"></button>
                                        </a>
                                    </div>
                                    </div>
                                </div>    
                                <?php
                            }
                        }
                        else if($video_data['status'] ==  "free" && $video_data['filter'] == $abc){
                        ?>
                    <div class="col mb-4">
                        <div class="card h-100">
                          <div class="set-box youtube-video-r">
                              <iframe width="460" height="275" src="https://www.youtube.com/embed/<?php echo $video_data['v_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                          <div class="card-body pt-2 pb-2">
                            <h6 class="card-title"><?php echo $video_data['v_date']; ?></h6>
                            <a href="likecnt.php?btn=<?php echo $video_data['v_id'] ?>">
                                <button name="likecnt" class ="btn"><img src="like.png" style="justify-content: center; padding-left: 30%; height: 15px; width: 25px"></button>
                                
                            </a>
                            <?php echo $video_data['cntlike']; ?>
                            <a href="likecnt.php?btn1=<?php echo $video_data['v_id'] ?>">
                                <button name="dislikecnt" class = "btn"><img src="dislike.png" style="justify-content: center; padding-left: 30%; height: 15px; width: 30px"></button>
                                
                            </a>
                            <?php echo $video_data['cntdislike']; ?>
                            <button name="share" class = "btn"><a href="whatsapp://send?text=Check out this video : https://www.youtube.com/watch?v=<?php echo $video_data['v_url']; ?>" data-action="share/whatsapp/share" target="_blank"><img src="whatsapp logo.png" style="justify-content: center; padding-left: 30%; height: 15px; width: 25px"></a></button>
                            <a href="comment.php">
                                <button name="comment" class="btn"><img src="comments.png" style="justify-content: center; padding-left: 30%; height: 20px; width: 35px"></button>
                            </a>
                          </div>
                        </div>
                    </div>    
                    <?php }
                }} ?>
                </div>
                <?php if(!$fetch_video){echo "<h1 class='text-center'>Sorry Vidoes Not Found</h1>";} ?>
            </div>
            <div class="container1" >
                <a href="recents.php">
                    <button type="button">Recently Watched</button>
                </a>
                <!-- <a href="user1.php">
                    <button type="button">Remove Video</button>
                </a> -->
            </div>
        </div>

    </div>







<div class="all-v-btn btn btn-outline-dark">
    <a href="home.php"><i class="fi-xwluxl-gear-wide fi-2x fi-flip-h"></i></a>
</div>

<!--End - Delete - Modal -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>