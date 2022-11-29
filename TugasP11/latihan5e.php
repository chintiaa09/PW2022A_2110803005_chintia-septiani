<?php 
if(isset($_POST["submit"])){
    if($_POST["username"] == "chintia" && $_POST["password"] == "nim"){
        header("location: halamanweb.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
<style>
body{
    background-color:tan;
}

.container{
    background-color:snow;
    margin : auto;
    width: 400px;
    height: 400px;
    box-sizing: border-box;
    position: relative;
    font-size: 20px;
    font-family: algerian;
}

.container h2{
    padding-top: 40px;
    padding-bottom: 20px;
    margin-top: 100px;
    text-align: center;
    color: black;
}

.container ul li{
    display: random_int;
    margin-left: 30px;
}

.container form{
    outline-style: none;
    border-style: none;
    border-collapse: collapse;
}

.container form #username,#password{
    width: 200px;
    color: #425F57;
    border-color: #DEF5E5;
    border-radius: 5px;
}

.container button{
    width: 65px;
    text-align: center;
    margin: auto;
    margin-left: 70px;
    font-family: algerian;
    background-color:saddlebrown;
    border-style: none;
    padding: 10px 15px;
    border-radius: 20px;
}

    </style>

</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <ul>
        <form action="halamanweb.php" method="post">
           <li>
            <label for ="username">
                Username :
                <br>
                <input type="text" name="username" id="username">
                <br>
            </label>
           </li>
           <br>
           <li>
            <label for="password">
                Password :
                <br>
                <input type="password" name="password" id="password">
                <br>
            </label>
           </li>
           <br>
           <li>
            <br>
            <button type="submit" name="submit">Login</button>
           </li>
        </form>
        </ul>
        <br>
        <?php if(isset($error)): ?>
            <p style="color:red ; font-style: italic; margin: auto; text-align: center" >Username dan Password Salah !</p>
        <?php endif; ?>

    </div>
</body>
</html>