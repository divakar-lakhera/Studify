


<!doctype html>
<html class="stretchedToMargin"lang="en">
<head>
       
        <title>Studify|Sign In</title>
        <meta name="author" content="Divakar">
        <meta name="charset" content="UTF-8">
        <meta name="description" content="Sign In to Continue">
        <meta name="viewport" content="width=device-width ,initial-scale=1,shrink-to-fit=no">
        <!--Animate CSS-->
        <link rel="stylesheet" href="css/animate.css">
        <!--Linking Bootstrap CDN-->
        <link rel="stylesheet" href="../bootstrap4-res/css/bootstrap.css">
        <!--Linking custom stylesheet-->
        <link rel="stylesheet" href="css/style.css">
        
     
    </head>

<body class="text-center">
<form method="POST">
    <div class="form-group">
        <img class="mb-2 animated zoomIn"src="../res/astronaut.svg" alt="bootstrap-sym" width="73" height="73">
    </div>
    <div class="form-group">
        <h1 class="h3 font-weight-normal mb-4">Please sign in</h1>
    </div>
    <div class="from-group">
        <input type="email" id="inemail " class="form-control " name="eadd" placeholder="Email Address" required autofocus>
    </div>
    <div class="from-group">
        <input type="password" id="pass" class="form-control " name="pass" placeholder="Password" required>
    </div>
    <div class="from-group">
            <input class="mt-3 mb-4 "type="checkbox" id="toRemember">
            Remember Me
    </input>
    <div class="from-group">
        <button class="btn btn-primary btn-lg " type="submit" id="signIn">Sign in</button>
        <button class="btn btn-primary btn-lg " type="button" onclick="location.href='register.php'" id="regs">Register</button> 
    </div>
    </div>
    <div class="from-group">
        <p class="text-muted  " id="cptrt">&copy; Divakar Lakhera 2018-19</p>
    </div>
</form>

</body>
</html>
