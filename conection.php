<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="responsive_form1";

$con = mysqli_connect($servername,$username,$password,$dbname);


if($con)
{
    echo"connection ok";

}
else
{
    echo"fail".mysqli_connect_error();
}
?>