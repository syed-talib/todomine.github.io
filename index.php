<?php include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
body,html{height: 100%;}
.box{ background: url('bgimg.jpg') no-repeat center; background-size: cover; height: 100%;
     display: flex; justify-content: center; align-items: center;}
     .box form{
               display: flex;
               flex-direction: column;
              padding: 10px;
               
               background-color:#3a3b3c;
               gap: 20px; position: relative;
     }
               input{
                     padding: 10px;
                      border: 1px solid #848484;
                      border-radius: 3px;
                      outline: none;
                      background-color: #3a3b3c;
                      color: #e5eaf5;
                      transition: .5s;
                      width: 250px;
               }
               .input1+span{
                  position: absolute;
                  left: 10px;padding: 10px;
                  color: #848484;
                  font-size: 1em;
                  pointer-events: none;
                  transition: .5s;
               }
               .input2+span{
                  
                  position: absolute;
                  left: 10px;padding: 10px;
                  top: 65px;
                  color: #848484;
                  font-size: 1em;
                  pointer-events: none;
                  transition: .5s;
               }
               input:focus+span,input:valid+span{
                  color: #8bf0ba;
                  transform: translateX(10px)
                  translateY(-7px);
                  font-size: .7em;
                  background-color: transparent;
                  background-color:#3a3b3c;
                  padding: 0px 5px;

               }
               input:valid,input:focus{
                  border: 1px solid #8bf0ba;
               }
               input:nth-child(5){
                  background-color: #c3f0d8;
                  border: none;
                  color: black;
                  font-weight: 700;
                  text-transform: capitalize;
                  cursor: pointer;

               }
               input:nth-child(5):hover{
                  background-color: #8bf0ba;
                  transition: none;
               }
               

</style>
<body>
   
  <div class="box">
   

      <form action="connect.php" method="POST">
            
         <input type="text" required="required" name="user" class="input1">
         <span>username</span>
         <input type="password" name="pwd" required="required" class="input2">
         <span>password</span>
         <input type="submit" name="sub" value="login">
       </form>
     
    
  </div>
   
</body>
</html>
