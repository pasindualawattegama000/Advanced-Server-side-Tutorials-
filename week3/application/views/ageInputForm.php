<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Please enter your date of birth</h2> <br>

    <form action = "<?php echo site_url('age/calculate_age'); ?>" method ="post"> 
        <input type= "date" id ="dob" name="dob"> <br>
        <button type = "submit"> Calculate Age </button>
    </form>
</body>
</html>