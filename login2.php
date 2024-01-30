<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        html,body{
            background-color: green;
            height: 500px;
            display: grid;
            place-items: center;
        }
        #container{
            max-width: 400px;
            background-color: lightgrey;
            margin-top: 52px;
            padding-top: 100px;
            padding-left: 200px;
            padding-bottom: 300px;
            padding-right: 200px;
            box-shadow: 5px yellow;
        }
        #main{
            font-size:;
            padding-bottom: 50px;
            color: coral;
            text-align: center;
        }
        .setting{
            padding-right: 100px;
            padding-top: 10px;
        }
        #style{
            background-color: chocolate;
            padding-right: 118px;
            padding-left: 118px;
            padding-top: 10px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <body>
        <div id="container">
         <div id="main" style="font: bold; font-size: large;">
            Login Form
         </div>
        
        <div>
            <form method="post">
                Enter your email <br>
                <input type="email" class="setting" id="username" placeholder="email" oninvalid="alert('Enter your email first')" name="email" required ><br><br>
                Enter your password <br>
                <input type="password" class="setting" id="password" placeholder="password" oninvalid="alert('password is emty')" name="password" required><br><br>
                <button id="style" onclick="getdata()">Login</button>
                <?php
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        $authentication=array($email,$password);
                        for($i=0;$i<count($authentication);$i++){
                            echo $authentication[$i];
                        }
                    }
                    
                ?>
            </form>
        </div>
        </div>
</body>
</html>