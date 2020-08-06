<?php

    if(isset($_POST['sub'])){
        $name = $_POST['uname'];
        $pswd = $_POST['password'];

        if(strlen($name) < 8){
            echo "<h1>Sorry cant auth... you....</h1>";
        }
        else{
            $connect = mysqli_connect('localhost','root','','loginapp');

            if($connect){
                echo "Connection established....";
            }
            else{
                echo "Connection failed....";
            }
        }
    }

?>