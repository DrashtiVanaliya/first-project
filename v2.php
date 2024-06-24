<?php include("conection.php");

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    
</head>

<body>
    <div >
               
        <form action="" method="POST">
            <input type="text" 
                   name="username" 
                   placeholder="Enter your Username" ><br><br>
                   
            <input type="text"
                   name="lastname" 
                   placeholder="Enter your last name"><br><br>

            


            <input type="submit" name="save_btn" value="save">
                
                
            </div>
            </form>
</body>

</html>

 <?php


if(isset($_POST['save_btn']))
{
  $fname=$_POST['username'];
  $lname=$_POST['lastname'];
  

  $query="insert into try values('$fname','$lname')";
  $data=mysqli_query($con,$query);

  if($data)
  {
    echo"<script>alert('new record iserted')</script>";
  }
  else{
    echo"try again ".mysqli_error($con); 
  }
}

?>




 