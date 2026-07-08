<?php
    //start the session
    session_start();
    $connection = mysqli_connect('localhost','root');
    
    $db = mysqli_select_db($connection,'domestick');
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $sql ="SELECT * from admin_login where admin_id = '$user' AND pwd = '$pass'";
        $query = mysqli_query($connection,$sql);
        $row = mysqli_num_rows($query);
            
        if($row == 1){
                echo "Admin Successfully logged in<br>";
                $_SESSION['username'] = $user;
                header('Location: admin_dashboard/yindex.html');
            }
            else{
                echo "Log in failed<br>";
                header('Location:admin_login.php');
            }
        
    }

?>