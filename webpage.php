<?php include("conection.php");
    $email = "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remake login</title>
    <style>
        body {
            background-color: black;
            overflow: hidden;
        }

        .container {
            background-image: url('imgs/11.png');
            height: 94vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .login-box {
            width: 300px;
            padding: 40px;
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            text-align: center;
            z-index: 2;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-transform: uppercase;
        }

        .textbox {
            position: relative;
            margin-bottom: 30px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            background: none;
            border: none;
            border-bottom: 2px solid #fff;
            outline: none;
            color: #fff;
            font-size: 18px;
        }

        .btn {
            width: 100%;
            background: none;
            border: 2px solid #fff;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #fff;
            color: #000;
        }


        /* floating emoji */

        @keyframes floating {
            from {
                transform: translateY(100vh);
            }

            to {
                transform: translateY(-200vh);
            }
        }

        .emoji {
            position: absolute;
            font-size: 30px;
            animation: floating 10s linear infinite;
            z-index: 0;
        }

        .emoji:nth-child(odd) {
            animation-duration: 12s;
        }

        .emoji:nth-child(even) {
            animation-duration: 8s;
        }
    </style>
</head>

<body>
    
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="post">
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="textbox">
                    <input type="text" placeholder="Enter your email" name="email">
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <input type="submit" value="Login" class="btn" name="save_btn">
                <!-- <button type="submit" class="btn">Login</button> -->
            </form>
        </div>
    </div>


    <script>
        const emojis = ["🎈","🎆","🎇","🧨","✨","🎉","🎊","🎀","🎁","🎂","🕯","🪔","🪁","🕯","🕯️"];

        window.onload = function () {
            const body = document.body;


            for (let i = 0; i < 50; i++) {
                const emoji = document.createElement('div');
                emoji.classList.add('emoji');
                emoji.style.left = `${Math.random() * 100}vw`;
                emoji.style.animationDelay = `${Math.random() * 5}s`;
                emoji.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                body.appendChild(emoji);
            }
        };
    </script>
</body>

</html>

<?php
    if(isset($_POST['save_btn']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
    
    
    
      $query="insert into php values('$username', '$email', '$password')";
     $data=mysqli_query($con,$query);
    
    if($data)
    {
        echo"<script>alert('new record iserted')</script>";
    }
    else
    {
        echo"try again ".mysqli_error($con); 
    }
}

?>
