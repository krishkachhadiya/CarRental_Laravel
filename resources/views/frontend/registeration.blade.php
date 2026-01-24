<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register | Cental</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{min-height:100vh;background:linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65)),url('img/car-bg.jpg') center/cover no-repeat;display:flex;align-items:center;justify-content:center;}
.auth-box{width:450px;background:#0b1d35;border-radius:15px;padding:40px;box-shadow:0 15px 40px rgba(0,0,0,.6);}
.auth-box h2{color:#fff;text-align:center;}
.auth-box span{display:block;text-align:center;color:#bbb;margin-bottom:25px;}
.input-group{margin-bottom:15px;}
.input-group input{width:100%;padding:14px;border:none;border-radius:8px;background:#f1f1f1;}
.btn{width:100%;padding:14px;background:#e63946;color:#fff;border:none;border-radius:8px;font-size:16px;cursor:pointer;}
.extra{text-align:center;margin-top:15px;color:#ccc;}
.extra a{color:#e63946;text-decoration:none;}
</style>
</head>
<body>

<div class="auth-box">
    <h2>Create Account</h2>
    <span>Start your journey with us</span>

    <!-- ✅ Form with POST method -->
    <form method="POST" action="/registeration">
        @csrf <!-- very important for Laravel -->

        <div class="input-group">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        </div>

        <button class="btn" type="submit">Register</button>

        @if(session('error'))
            <p style="color:red;text-align:center;">{{ session('error') }}</p>
        @endif
        @if(session('success'))
            <p style="color:green;text-align:center;">{{ session('success') }}</p>
        @endif
    </form>

    <div class="extra">
        Already have an account? <a href="/login">Login</a>
    </div>
</div>

</body>
</html>
