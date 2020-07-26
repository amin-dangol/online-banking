
<html>
<head>
    <style>
            .p{
                color:red;
            }
    </style>
</head>
<body>

<?php
$con=mysqli_connect("Localhost", "root", "", "test");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
$account = $_POST['account'];
$username = $_POST['username'];
$password = $_POST['pwd'];

$sql = "SELECT * FROM balance where account_number='$account' && username='$username' && pwd='$password'";
?>
<p> <b> <center><font size=7>Muna Swan Saving & Credit Co-Operative ltd.</font></center> </b> </p> <br> <br>
<b> <u><center><font size=5>Your Balance Amount is:</font></center></u> </b> <br> <br><br><br><br><br><br>
<?php
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<center><br><b><font size=10> ". $row["amount"]. "</font></b><br><br><font size=5>Username= " . $row["username"] . "<br>Account Number=" .$row["account_number"]. "</font><br><center>";
    }
} else {
    echo "You have entered Invalid Details. Try Again";
    //echo "<a href="balance.html"> <input type="submit" value="try again"></a>";
}
$con->close();
?>
<br><br>
<a href="balance.html"><input type="submit" value="Thank You"></a>
</body>
</html>
