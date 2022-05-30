<html>
    <head>
        <title>LOG IN</title>
    </head>
    <body>
        <center>
            <h1>Silahkan Login</h1>
            <hr />
            <form action="proseslogin.php" method="POST"></form>
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="submit" value="LOG IN" name
            </tr>
        </table>
        </form>
        </center>
    </body>
</html>

<?php

include '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == "")
{
    header("location: form-login.php");
}
else
{
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        header("location: ../siswa/read.php");
    }
    else
    {
        header("location:  form-login.php");
    }
}
?>
