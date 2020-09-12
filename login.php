<!DOCTYPE html>
<html>
  <head>
    <title> Login </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
    .login{
    background-color: skyblue;
    height: 100vh;
    background-size: cover;
    background-position: center;
    }
    .login-page{
    width: 360px;
    padding: 10% 0 0;
    margin: auto;
    }
    .form {
    position: relative;
    z-index: 1;
    background: rgba(7, 40, 195, 0.8);
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    }
    .form input{
    font-family: "Roboto", sans-serif;
    outline: 1;
    background: #f2f2f2;
    width: 100%;
    border:0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    }
    .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border:0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    cursor: pointer;
    }
    .form button:hover,.form button:active{
    background: #43A047;
    }
    .form .message {
    margin: 15px 0 0;
    color: aliceblue;
    font-size: 12px;
    }
    .form .message a{
    color: #4CAF50;
    text-decoration: none;
    }
    .form .register-form{
    display: none;
    }
    </style>
  </head>
  <body class="login">
    <div class="login-page">
      <div class="form">
        <form class="register-form" action="registration.php" method="post">
          <input name="name" type="text" placeholder="user name" required />
          <input name="password" type="password" placeholder="password" required />
          <input name="email" type="email" placeholder="email id" required />
          <button type="submit"> Create </button>
          <p class="message"> Already Registered? <a href="#"> Login </a> </p>
        </form>
        <form class="login-form" action="validation.php" method="post">
          <input name="name" type="text" placeholder="user name" required />
          <input name="password" type="password" placeholder="password" required />
          <button type="submit"> Login </button>
          <p class="message"> Not Registered? <a href="#"> Register</a></p>
        </form>
      </div>
    </div>
    <script src=" https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity:"toggle"}, "slow")
    }) ;
    </script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>