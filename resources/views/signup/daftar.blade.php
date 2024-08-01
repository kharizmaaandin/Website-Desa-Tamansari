<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Login/style.css">
    <title>DAFTAR</title>
 </head>
<body>  
    <div class="container">
       <div class="box">
        <div class="header">
            <p>DAFTAR</p>
        </div>
        <form action="/confirmDaftar" method="post">
          @csrf
          <div class="input-box">
            <label for="username">username</label>
            <input type="username" class="input-field" name="username" id="username" required>
            <i class="bx bx-envelope"></i>
          </div>
          <div class="input-box">
            <label for="email">Email</label>
            <input type="email" class="input-field" name="email" id="email" required>
            <i class="bx bx-envelope"></i>
          </div>
          <div class="input-box">
              <label for="pass">Password</label>
              <input type="password" class="input-field" name="password" id="pass" required>
              <i class="bx bx-lock"></i>
          </div>
          <div class="input-box">
              <label for="token">Token</label>
              <input type="text" class="input-field" name="token" id="token" required>
              <i class='bx bx-message-square-dots'></i>
          </div>
          <div class="input-box">
              <p>Sudah punya akun? <a href="/Masuk" style="text-decoration: none">Masuk</a></p>
          </div>
          <div class="input-box">
              <input type="submit" class="input-submit" value="DAFTAR">
          </div>
          <div class="bottom" style=" ">
            <div style="text-align: center; color: red;">{{ session('login_error') }}</div>
          </div>
        </form>
       </div>
       <div class="wrapper"></div>
    </div>
</body>
</html>