<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css"> 

  <!-- Updated to use a relative path -->
</head>
<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="signinbai.png" alt="illustration" class="illustration" style="width:100%;" />
                <h1 class="opacity">LOGIN</h1>
                <form action="login.php" method="POST">
                    <input type="text" placeholder="USERNAME" name="username" />
                    <input type="password" placeholder="PASSWORD" name="password" /> <!-- Removed space in name attribute -->
                    <button class="opacity">SUBMIT</button><!-- href =C:/xampp/htdocs/PROJECT/Project/index.html -->
                </form>
                <div class="register-forget opacity">
                    <a href="tempreg.html">REGISTER</a>
                   <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
    </section>
    <script src="./script.js"></script>
</body>
</html>



