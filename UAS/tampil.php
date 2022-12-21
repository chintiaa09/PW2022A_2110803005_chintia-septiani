<?php 
if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "2110803005"){
        header("Location: login.php");
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
    background-image: url(th.jpg);
}

.container{
    background-image: url(1.jpg);
    margin : auto;
    width: 350px;
    height: 350px;
    border-radius: 20px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    box-sizing: border-box;
    position: relative;
    font-size: 15px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.container h2{
    padding-top: 40px;
    padding-bottom: 20px;
    margin-top: 100px;
    text-align: center;
    color: #CD853F;
}

.container ul li{
    display: grid;
    margin-left: 30px;
}

.container form{
    outline-style: none;
    border-style: none;
    border-collapse: collapse;
}

.container form #username,#password{
    width: 200px;
    color: #D2691E;
    border-color: #DEB887;
    border-radius: 5px;
}

.container button{
    width: 65px;
    text-align: center;
    margin: auto;
    margin-left: 70px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color: #F0E68C;
    border-style: none;
    padding: 10px 15px;
    border-radius: 10px;
}

    </style>

</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <ul>
        <form action="login.php" method="post">
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