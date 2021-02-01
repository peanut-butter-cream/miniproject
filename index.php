
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <h3>Contact Us Page</h3>
    <form action="submit.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="david2021" 
                   title="At least one number,one letter, must be between 6-15 character in length, no spacing and special characters" pattern="(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,15})$" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="david77@gmail.com" 
                   title="david77@gmail.com" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required>
        </div>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" id="message" name="message" placeholder="Enter your message here" title="Please enter a message" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>


</body>
</html>