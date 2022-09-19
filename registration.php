<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Registration Form Example</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Student Registration form</h2>
        <form class="form-horizontal" action="reg.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name" name="name">Username :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" placeholder="Enter User name" name="name" required>
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
            </div>      
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="psw">Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="psw"  name="psw" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="psw1">Re-Enter Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="psw1"  name="psw1" required>
                </div>
            </div>       
            
          
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit" value="Submit" onclick="checkCheckbox()">Submit</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
