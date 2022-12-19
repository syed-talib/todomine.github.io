<?php include 'conn.php';?>



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
    body{
           height:100%;
           background:black;
    }
.box{
      display:grid;
      place-items:center;
     
     
}
a{
      text-decoration:none;
      color:white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   text-transform:capitalize;
}
.del{
    padding:10px 20px;
    background:red;
    border:none;
    color:white;
    border-radius:5px;
}
.upd{
    padding:10px 20px;
    background:limegreen;
    border:none;
    color:white;
    border-radius:5px;
}
button{
    cursor: pointer;
}

table,th{
    box-shadow:0px 0px 5px black;
}
th{
    color:white;
    text-align:center;
    background:black;
}
table,th,td{
  
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   text-transform:capitalize;
   border-collapse:collapse;
  
  
}
th,td{
    padding:10px 20px;
    text-align:center;
  
}
tr:nth-child(even){
    background:lightgrey;
}
tr:nth-child(odd){
    background:white;
}

        *{
                margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                overflow-x: hidden;
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

        

</style>
<body>
    <div class="box">
    <table width="50%">
        <tr>
            <th>task</th>
           
        </tr>

       
<?php

$query="SELECT * FROM `newnotes`";
$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);
while($res=mysqli_fetch_assoc($run)){


?>
       

        <tr>
            <td><?php echo $res['id']?></td>
            <td><?php echo $res['task']?></td>
            <td><button class="del"><a href="delete.php?id=<?php echo $res['id'];?>" class="href"><i class="fa-solid fa-trash"></i></a></button></td>
            <td><button class="upd"><a href="edit.php?id=<?php echo $res['id'];?>" class="href"><i class="fa-solid fa-pen"></i></a></button></td>
        </tr>
<?php
}
?>
        
    </table>

</div>

<div class="Box" id="box">

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



       


</div>

<script>
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
</div>
</body>
</html>