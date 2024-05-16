<h2>Search For Movies</h2>
<br>
<form action="<?php echo site_url('Movies/search'); ?>" method='post'>
    <label for ='genre'>Enter the Genre</label>
    <input type='text' id='genre' name='genre'>
    <br>
    <br>
    <button type='submit'>Search Movies</button>
</form>
<br>
<a href='<?php echo site_url('Movies/searchALL')?>'>View All Movies </a>