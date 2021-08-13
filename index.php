<?php
session_start();
include 'connection.php';

?>



<html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="google-signin-client_id" content="144318608772-lnmrm3l9acninha12ultd7gjslrq0tdm.apps.googleusercontent.com">
                <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
        </head>
        <script>
                
               function logout(){
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut();  
                    jQuery.ajax({
                                url:'logout.php',
                                success:function(result){
                                        window.location.href="index.php";
                                }
                        });
                    
                }

                function onLoad(){
                       gapi.load('auth2',function (){
                              gapi.auth2.init();
                       }); 
                }
                
                function gmailLogIn(userInfo){
                        var userProfile=userInfo.getBasicProfile();
                        
                        
                        jQuery.ajax({
                                url:'login_check.php',
                                type:'post',
                                data:'user_id='+userProfile.getId()+'&name='+userProfile.getName()+'&image='+userProfile.getImageUrl()+'&email='+userProfile.getEmail(),
                                success:function(result){
                                        window.location.href="view.php";
                                }
                        });
                }
                </script>
        <body style="background-color:white">
                <?php
                // if(isset($_SESSION['USER_ID'])){
                        ?>
                        <!-- <a href="logout.php" onclick="logout()">Logout</a> -->
                        <?php
                // }else{
                        ?>
                        <img src="spacece.jpeg" style="justify-content: center; padding-left: 30%; height: 100px; width: 600px">

                        <img src="v_g1.jpeg" style="justify-content: center; padding-left: 40%; height: 50px; width: 300px">
                        <img src="parentsimg2.jpeg" style="background-image: : center; padding-left: 25%; height: 300px; width: 800px">
                        <div class="g-signin2" data-onsuccess="gmailLogIn" style="display: flex; justify-content: center; align-items: center; top: 30%;  padding-top: 5%; padding-left: 2%"></div>
                        <h3 style="padding-left: 42.2%; color: orange;">SPACECE INDIA FOUNDATION</h3>
                       <img src="tagline.jpeg" style="justify-content: center; padding-left: 43%; height: 20px; width: 250px">   
                        
                        <?php
                // }
                ?>
                
                
                
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        </body>
</html>

