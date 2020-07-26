<?php

try{
        

            $first = $_POST['first'];
            $middle = $_POST['middle'];
            $last = $_POST['last'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $relation = $_POST['marital'];
            $gender = $_POST['gender'];
            $birth = $_POST['date'];
            $mobile = $_POST['mobile'];
            $account = $_POST['account'];
            $citizenship = $_POST['citizenship'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(strlen($mobile)<10 || strlen($mobile)>10){
                echo '<script language="javascript">';
                echo 'alert("Your mobile number must be of 10 digits.")';
                echo '</script>';
                // header("refresh:2; url= registration.php");
                }
                else if(strlen($account)<8 || strlen($account)>8){
                    echo '<script language="javascript">';
                    echo 'alert("You must choose 8 digits account number.")';
                    echo '</script>'; 
                }
                else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo '<script language="javascript">';
                    echo 'alert("Invalid Email.")';
                    echo '</script>';
                  }
                else{
        # database connect
        $conn = new mysqli('localhost', 'root', '', 'final');
        if($conn->connect_error)
        {
            die('connection failed:' .$conn->connect_error);
            print_r('connection died');
        }
        else{
            $sql="insert into huawei(first, middle, last, address, email, marital, gender, birth, mobile, account, citizenship, username, password) values('$first', '$middle', '$last', '$address', '$email', '$relation', '$gender', '$birth', '$mobile', '$account', '$citizenship', '$username', '$password')";
            $query=mysqli_query($conn,$sql);
            if($query){
                echo ("<p> <b> <center><font size=9>Welcome to Muna Swan Saving and Credit Co-Operative Ltd.</font></center> </b> </p>");
                
                header("refresh:2; url= registration.php"); /* Redirect browser */
                
            }else{
                echo (mysqli_error($conn));
                echo ("<p> <b> <center><font size=9>The form is not accepted.</font></center> </b> </p>");
                echo ("<p> <b> <center><font size=5>Account Number is already in use. Choose another account number.</font></center> </b> </p>");
                echo ("<p> <b> <center><font size=3>Thank You.</font></center> </b> </p>");
            }
            
        }
        $conn->close();

    }
}
    catch (Exception $e ){
        echo ($e);
    }

?>