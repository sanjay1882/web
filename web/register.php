
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<form action="insert.php" method="post">
    <div class="register-container">
        <h1 style="padding: 20px; font-family: poppins;">  <i class='bx bx-user-plus'></i>Register</h1>

        <div class="usrname"><input type="text" name="username" placeholder="Name" required ><i class='bx bx-user'></i><br></div>
        <div class="usrname"><input type="email" name="email" placeholder="Email" required ><i class='bx bx-user'></i><br></div>


        <div class="mobile"> <input type="tel" name="mobile" placeholder="Mobilenumber" required pattern="[0-9]{10}"id="mobile" ><i class='bx bx-dialpad-alt'></i><br></div>



        <div class="verify"><input type="checkbox" id="verify"onclick="document.getElementById('sent').innerHTML='OTP sent Successfully'"><a id="sent" >Verify</a><br></div>
       

        <div class="otp"> <input type="text" name="OTP" placeholder="OTP" required pattern="[0-9]{6}"><i class='bx bx-message-dots'></i><br></div>


        <div class="submitotp"><input type="submit" id="submit" placeholder="Verify" required name="verify"><br></div>


        <div class="dob">DOB <input type="date" name="dob"  required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}"><br></div>


        <div class="password"><input type="password" name="password" placeholder="Create Password" required><i class='bx bxs-lock-alt'></i><br></div>

<div class="createacc"><button >Create account</button></div>
<div class="having" style="font-family:poppins; font-size: small;">Have an account already?<a href="login.html" style="text-decoration:none;font-family: poppins,sans-serif;">SIGNIN</h5></a></div>

    </div>
</form>
</body>

</html>