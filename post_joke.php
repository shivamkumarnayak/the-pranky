
<?php

    include('session.php');

if(isset($_POST['submit'])){

    $sql="INSERT INTO user_jokes (username,email,category,jokes)
    VALUES('$_POST[username]','$login_session','$_POST[category]','$_POST[jokes]')";

    if(mysqli_query($con, $sql)){
        header("Location:./home.php", true, 301);
        exit();
    }

    mysqli_close($con);
}

