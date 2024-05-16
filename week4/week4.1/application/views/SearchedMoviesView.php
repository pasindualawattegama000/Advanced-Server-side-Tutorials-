<h2> <?php echo $title; ?> </h2>
<table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Genre</th>
                <th>IMDB Rating</th>
                <th>Release Year</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
            <tr>
                <td><?php echo $movie['title']; ?></td>
                <td><?php echo $movie['director']; ?></td>
                <td><?php echo $movie['genre']; ?></td>
                <td><?php echo $movie['IMDB_rating']; ?></td>
                <td><?php echo $movie['release_year']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>