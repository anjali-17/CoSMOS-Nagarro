<?php
include("connection.php");

if(isset($_POST["submit"])) {
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM turystab 
            WHERE uname='$uname' AND pass='$pass'";
    $result = mysql_query($sql);
    $numRows = mysql_num_rows($result);
    if($numRows==1) {
        session_start();
        $_SESSION["uname"] = $uname;
        header("Location: ./profile.php");
    } else {
        echo "Invalid Login Information";   
    }
}
?>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
<table>
<tr><td>User Name</td><td><input type="text" name="uname" /></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" /></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Login" /></td></tr>
</table>
</form>