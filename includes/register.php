<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .logo{
    text-align:center;
    font-size:28px;
    font-weight:bold;
    color:yellow;
    }
    input{
    width:100%;
    padding:10px;
    margin-top:8px;
    }
    </style>


</head>
<body style="background-color:black;">
  <div class="logo">ZenMart</h2>  
  <div class="container col-12 col-md-3 mt-4" style="background-color:white;">
    <h4 style="color:black; font-family:Arial; font-weight:bold; text-align:start">Sign in or create account</h4>
    <h6 style="color:black; font-family:Arial; font-weight:bold; text-align:start">Enter mobile number or email</h6>
    <form method="POST" action="register_process.php">
        
    <input type="text" name="name" required><br>
    
    <button type="submit" name="register">Sign In</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
       
</body>
</html>
