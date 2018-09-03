<?php

    session_start();

if(isset($_SESSION['username'] )|| isset($_SESSION['admin']))
    {
        header('Location:index.php');
    }
    include_once('connection.php');
    $response='';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userid=$_POST['user_id'];
       $name=$_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $password= md5($password);
       
        if(empty($name) || empty($email) || empty($password))
        {
            $response = 'Fields cannot be empty';
        }
        else
        {
            
            $query = "SELECT `username`, `email`,`password` FROM `admin` WHERE `username`='$name' AND `password`='$password' AND `email`='$email'";

            
            $result = mysqli_query($conn , $query);
            if(mysqli_num_rows($result) > 0)
            {
                $_SESSION['admin'] = $name;
                header('location:admin/ems_admin.php');
            }

            
            $query = "SELECT `name`, `email`, `password` FROM `users` WHERE `name`='$name' AND `email`='$email' AND `password`='$password'";

            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result) > 0)
            {
               
                while($row= mysqli_fetch_assoc($result))
                {
               
                $_SESSION['username'] = $name;
                $_SESSION['user_id'] = $userid;
                $_SESSION['useremail'] = $email;
                $_SESSION['userpass'] = $password;
            }

                header('location:home.php');
            }
            else
            {
                $response = 'Email or Password is wrong';
            }
        }
        

    }
?>