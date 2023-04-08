<!DOCTYPE html>
<html>
    <title>Signup page</title>
    <head>
    <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
<body>
<div class="form-controller">
                <h2>Sign Up</h2>
                <form action="signuppageprocess.php" method="post">
                    <div class="form-group">
                        <input type="text" name="first_name" id="first_name" required placeholder="Enter First name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" id="last_name" required placeholder="Enter Last name">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Enter email">
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
                
            </div>
            <script src="./script.js"></script>
</body>
</html>