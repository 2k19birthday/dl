<!DOCTYPE html>
<html>
  <head>
    <title>My Form</title>
    <link rel="stylesheet" href="style3.css">
  </head>
  <body>
    
  <div class="form-controller">
      <h2>Sign In</h2>
      <form action="signinpageprocess.php" method="post">
        <div class="form-group">
          <input type="text" name="email" id="email" required placeholder="Enter email">
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" placeholder="Enter password">
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Sign In">
        </div>
      </form>
    </div>
    <script src="./script.js"></script>
  </body>
</html>
