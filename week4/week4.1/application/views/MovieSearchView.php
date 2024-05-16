<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     -->

<h2>Search For Movies</h2>

<br>
<form action ="<?php echo site_url('Movies/search'); ?>" method ='post'>
    <label for='genre'>Enter The Genere</label>
    <input type='text' id='genre' name ='genre'>
    <br><br>
    <button type='submit'>Search</button>
</form>
<br>
<a href = "<?php echo site_url('Movies/allmovies');?>">View All The Movies </a>

<!-- 
</body>
</html> -->
