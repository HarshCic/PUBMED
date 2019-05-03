<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>PUBMED ALEXA</title>
</head>

<body>



    <div class="container">
        <div id="login" class="signin-card">
            <div class="logo-image">
                <center><img src="pubmed.png" alt="Logo" title="Logo" width="600" style="margin:30px"></center>
            </div>
            <h1 class="display1">Welcome To PubMed Alexa Skill</h1>
            <form method="POST" action="method.php" id="email" role="form">
                <div id="form-login-username" class="form-group">
                    <input id="email" class="form-control" name="email" type="email"  alt="login" placeholder="Email" required />
                    <span class="form-highlight"></span>
                    <span class="form-bar"></span>
                </div>
                <div>
                    <button class="btn btn-block btn-info ripple-effect" type="submit" name="Submit" alt="sign in">Sign in</button>
                </div>

        </div>
        </form>
    </div>
    </div>
    

</body>

</html>