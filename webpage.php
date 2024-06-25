<?php include("conection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<script>

const emojis = ["🎈","🎆","🎇","🧨","✨","🎉","🎊","🎀","🎁","🎂","🕯","🪔"];

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

    <div class="@keyframes floating ">
    <div class="emoji">
    <div class="emoji:nth-child(odd)">
    <div class=".emoji:nth-child(even)">
    <div class="background">
        <div class="login-box">
            <h2>Login</h2>
            <form>
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="textbox">
                    <input type="text" placeholder="Enter your email" name="email" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
<?php


  $fname=$_POST['username'];
  $email=$_POST['email'];
  $pass=$_POST['$password'];
  

  $query="insert into demo values('$fname','$lname')";
  $data=mysqli_query($con,$query);

  if($data)
  {
    echo"<script>alert('new record iserted')</script>";
  }
  else{
    echo"try again ".mysqli_error($con); 
  }


?>









