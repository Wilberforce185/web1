<?php
$con=mysqli_connect("localhost","root","","register");
if($con){
    $sql="select* from details where username='$username'";
    $result=mysqli_query($con, $sql);
    if($results){
        $row=mysqli_num_rows($result);
        if($row>0){
            echo"user allready exist";
        }
        else{
            $id=$_POST['id'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $sql="insert details(username,email,password) values('$username',)";

        }
        
    }
}
else{
    mysqli_error($con,);
}
?>