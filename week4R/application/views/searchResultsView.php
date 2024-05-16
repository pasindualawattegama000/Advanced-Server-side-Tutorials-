<h2><?php echo $title?></h2>
<br>
<table class="table table-striped table-dark">
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Director</th>
        <th scope="col">Genre</th>
        <th scope="col">IMDB rating</th>
        <th scope="col">Release Year</th>
    </tr>

    <?php foreach($movies as $movie): ?>
    <tr>
        <td><?php echo $movie['title']?></td>
        <td><?php echo $movie['director']?></td>
        <td><?php echo $movie['genre']?></td>
        <td><?php echo $movie['IMDB_rating']?></td>
        <td><?php echo $movie['release_year']?></td>
    </tr>
    <?php endforeach;?>

</table>