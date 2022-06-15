<?php
include('partial/menu.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin </h1>
        <br><br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>user Name</td>
                    <td>
                        <input type="text" name="userName" placeholder="Your user name">
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Your password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value=" Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('partial/footer.php') ?>

<?php
//process the value form and save it in database
//chcek weather the button is clicked or not
if (isset($_POST['submit'])) {
    //Button clicked
    // echo 'Button clicked';

    //1.get the data from form
    $full_name = $_POST['full_name'];
    $userName = $_POST['userName'];
    $password =md5($_POST['password']) ; //password encryption with MD5

    //2.sql query to save data into database
    $sql = "INSERT INTO tbl_admin SET
    full_name = '$full_name',
    userName = '$userName',
    password = $password
    ";
    //3.Execute query and sava data into a database
    $conn = mysqli_connect('localhost','root', '') or die (mysqli_error()); //database connection
    $db_select = mysqli_select_db($conn,'food_order') or die (mysqli_error());

   // $res = mysqli_query($conn,$sql) or die (mysqli_error());
}

?>