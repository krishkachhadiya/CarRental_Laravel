<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | Cental</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}
body{
    min-height:100vh;
    background:linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65)),
    url('{{ asset('frontend/img/car-bg.jpg') }}')center/cover no-repeat;
    display:flex;
    align-items:center;
    justify-content:center;
}
.auth-box{
    width:420px;
    background:#0b1d35;
    border-radius:15px;
    padding:40px;
    box-shadow:0 15px 40px rgba(0,0,0,.6);
}
.auth-box h2{
    color:#fff;
    text-align:center;
    margin-bottom:10px;
}
.auth-box span{
    display:block;
    text-align:center;
    color:#bbb;
    margin-bottom:25px;
}
.input-group{
    margin-bottom:18px;
}
.input-group input{
    width:100%;
    padding:14px;
    border:none;
    border-radius:8px;
    outline:none;
    background:#f1f1f1;
}
.btn{
    width:100%;
    padding:14px;
    background:#e63946;
    color:#fff;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
}
.btn:hover{
    background:#d62828;
}
.extra{
    text-align:center;
    margin-top:15px;
    color:#ccc;
}
.extra a{
    color:#e63946;
    text-decoration:none;
    font-weight:500;
}
</style>
</head>
<body>

<div class="auth-box">
    <h2>Welcome Back</h2>
    <span>Login to continue your journey</span>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn">Login</button>

        @if(session('error'))
            <p style="color:#ffb3b3; text-align:center; margin-top:10px;">
                {{ session('error') }}
            </p>
        @endif
    </form>

    <div class="extra">
        Don’t have an account?
        <a href="{{ url('/registeration') }}">Register</a>
    </div>
</div>

</body>
</html>
