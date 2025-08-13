<?php
//include config file
require_once "config.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, password) VALUES ('$username',password)";
    mysqli_query($link, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        background-image: url("../image/com.jpg");
        position: relative;
        min-height: 100vh;
        background-size: cover;
        background-position: right;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .hero::after {
        background-color: #17202A;
        content: "";
        display: block;
        position: absolute;
        background-size: cover;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.75;
    }

    .dfg {
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        backdrop-filter: blur(10px);
        color: white;
        width: 40%;

    }

    .form-control {
        border: none;
        background: transparent;
        border-bottom: 1px solid black;
    }

    ::placeholder {
        color: white;
        opacity: 0.4;
    }
</style>

<body>
    <div class="hero">

    </div>
    <div class="container dfg">
        <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item"><a href="#" class="nav-link active" data-toggle="pill">registration</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link ">Login</a></li>
        </ul>
        <form action="#" method="post">
            <div class="form-group 
                <label for=" name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">

            </div>
            <div class="form-group  <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="username" class="form-control" placeholder="Enter email">

            </div>
            <div class="form-group<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" value="<?php echo $password; ?>">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" value="login" name="submit">submit</button>
            </div>
            <p>Already Have an account? <a href="login.php">login here</a>.</p>
        </form>



    </div>


</body>

</html>