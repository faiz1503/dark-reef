<?php
include "config/koneksi.php";
?>
<html> 
  <head> 
    <title>Login Customer</title> 
    <link href="style1.css" rel="stylesheet" type="text/css" > 
  </head> 

  <body> 
    <div id="utama"> 

      <div class="header"> 

        <div class="header_isi"> 

          <div class="gambar"> 

            <form action="cek_login.php" method="POST"> 
              <div align="center"><img src="css/images/logos.png" ><br />
                <br /> 
                
                <input type="text" name="username" placeholder="Username" class="login_regis" required>     
                <br /> 
                <input type="password" name="password" placeholder="Password" class="login_regis" required> 
                <br /> 
                
                <input type="Submit" value="Log In" class="tombol_login">
                <br>
                </br> 
                </div>
            </form> 

        </div> 

      </div> 
    </div> 
  </body> 
</html>