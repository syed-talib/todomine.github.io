
    <?php include 'connect.php';?>

    <?php
    error_reporting(0);
    session_start();
    
    $profile=$_SESSION['username'];
  if($profile==true){
   
    
    
}
else{
        header('location:index.php');
}
    
    ?>

<?php include 'conn.php';?>
<?php
if(isset($_POST['set'])){
$task = $_POST['tasks'];
$query  = "INSERT INTO `newnotes`(`task`) VALUES ('$task')";
$result = mysqli_query($con,$query);
header('location:showtask.php');



}
?>  



        
<!DOCTYPE html>
<html lang="en">
<head>
        <script src="https://kit.fontawesome.com/67eef92684.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<style>
        body,html{
                height: 100%;
        }
        *{
                margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                overflow-x: hidden;
        }
        .box{
                 background: url('bg4.jpg') no-repeat center;
                 background-size: cover; height: 100vh;width: 100%;
                 transition: .5s;
                

                 
        }
        #section{
              padding: 100px 0px;
              position: fixed;
              width:300px; height: 100vh;
              top: 0;right:0;
              transition: width .5s ease-in-out;
              background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 2px );
-webkit-backdrop-filter: blur( 2px );



        }   
        #section ul li{
                list-style: none;
                margin-top: 20px;
               
        }  
        #section ul li a{
                text-decoration: none;
                font-size: 20px;
                margin: 10px 70px;
                display: flex;
               
                text-transform: capitalize;
                color: black;
        }  
       #section ul li:hover{
        background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 2px );
-webkit-backdrop-filter: blur( 2px );
transition: .5s;


       }
               
        #bar,#xmark{
                  position: fixed;
                  top: 10px;right: 20px;
                  z-index: 2;
                  font-size: 25px;
                  cursor: pointer;
                  color: white;
                  transition: .5s;

        }  
        
        #section li a>i{
                font-size: 20px;
               
        }






        .box .form{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;

        }
        label{
                color: white;
                text-transform: capitalize;
        }
      
        .box .form form{
                  
                  height: 150px;
                  max-width:100%;
                  background:black;
                  display: flex;
                  justify-content:flex-start;
                  align-items: center;
                  flex-wrap: nowrap;
                  gap: 15px;
                  padding-left: 10px;
                  padding-right: 10px;

        }
      #in{
                 padding: 10px 70px;
                 border: none;
                 text-align: left;
                 background: grey;font-weight: 600;
                 text-transform: capitalize;
                 outline: none;
                
        }
        #sub{
                padding: 10px 20px;
                border: none;
                border-radius:5px;
                background: rgb(80, 206, 99);
                color: white;
                font-size: 15px;
                text-transform: capitalize;
                font-weight: 700;
                cursor: pointer;
        }

       
       
      
</style>
<body>
        <div class="box" id="box">

                <i class="fa-solid fa-bars" id="bar"></i>
                <i class="fa-solid fa-xmark" id="xmark"></i>
                        <nav id="section">
                                <ul id="inn">
                                        <li><a href="home.php" class="href"><i class="fa-solid fa-house"></i>&nbsphome</a></li>
                                        <li><a href="welcome.php" class="href"><i class="fa-solid fa-check"></i>&nbspsettask</a></li>
                                        <li><a href="showtask.php" class="href"><i class="fa-solid fa-eye"></i>&nbspshowtask</a></li>
                                        <li><a href="logout.php" class="href"><i class="fa-solid fa-right-from-bracket"></i>&nbsplogout</a></li>
                                </ul>
                        </nav>



                        <div class="form">
                                <form method="POST">
                                        <label for="task">your task</label>
                                        <input type="text" required id="in" name="tasks">
                                        <input type="submit" id="sub" value="set" name="set">
                                </form>
                        </div>
              
              
        </div>

        <script>

     setInterval(() => {
                        box.style.backgroundImage="url('bg1.jpg')";
                }, 4000);


                setInterval(() => {
                        box.style.backgroundImage="url('bg2.jpg')";
                }, 7000);

                setInterval(() => {
                        box.style.backgroundImage="url('bg3.jpg')";
                }, 10000);

                let box = document.getElementById("box");
                let sidenav = document.getElementById("section");
                let bar = document.getElementById("bar");
                let xmark = document.getElementById("xmark");
                box.style.height="100%";
                sidenav.style.width="0px";
                xmark.style.display="none";
                bar.onclick=function(){
                     if(sidenav.style.width=="0px"){
                        sidenav.style.width="250px";
                        xmark.style.display="block";
                        bar.style.display="none";
                       

                     }
                     else{
                        sidenav.style.width="0px";
                       
                     }
                }

                xmark.onclick=function(){
                     if(sidenav.style.width=="250px"){
                        sidenav.style.width="0px";
                        xmark.style.display="none";
                        bar.style.display="block";
                       
                       

                     }
                     else{
                        sidenav.style.width="250px";
                        xmark.style.display="block";
                        bar.style.display="none";
                       
                       
                     }
                }
               
               

               
              
                
        </script>
</body>
</html>