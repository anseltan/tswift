<?php
 $albums = ["Fearless", "1989", "Red", "Reputation", "Speak Now"];
 require_once("ClassDAO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Choice</title>
</head>
<body>
    <?php
        // Populate form if $_POST is empty else show selection
        if (empty($_POST)) {
        echo "<h1>Top 5 Taylor Albums</h1>";
        echo "<table border = '1'>
        <tr>
            <th>Album Name</th>
            <th>Album Photo</th>
        </tr>

        <tr>
            <td>Fearless</td>
            <td><img src = 'fearless.png' width = '200' height = '200'></td>
        </tr>

        <tr>
            <td>1989</td>
            <td><img src = '1989.png' width = '200' height = '200'></td>
        </tr>

        <tr>
            <td>Red</td>
            <td><img src = 'red.png' width = '200' height = '200'></td>
        </tr>

        <tr>
            <td>Reputation</td>
            <td><img src = 'rep.jpg' width = '200' height = '200'></td>
        </tr>

        <tr>
            <td>Speak Now</td>
            <td><img src = 'speaknow.jpg' width = '200' height = '200'></td>
        </tr>
        </table>";
            echo "Select the Taylor Swift album of your choice:";
            echo "<form method='post' action='album.php'>";
            echo "<select name='albumSelect[]' id='albumSelect' multiple>";
            foreach ($albums as $album) {
                echo "<option value='$album'>$album</option>";
                }
            echo "</select>";
            echo "<input type='submit'/>";
            echo "</form>";} 

            else {
            $songDB = new SongDAO;
            // var_dump($_POST);
            // $test = $songDB->retrieveAll();
            // var_dump($test);
            echo "<h1>TAYLOR SONGS RECOMMENDATION</h1>";
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>Album</th><th>Song</th><th>Youtube Vid</th><th>Spotify Link</th>";
            echo "</tr>";
            
            foreach ($_POST["albumSelect"] as $albumName) {
                $songs = $songDB->retrieveByAlbumName($albumName);
                $rowCount = count($songs);
                // populate first row
                echo "<tr>";
                    echo "<td rowspan=$rowCount><a href='{$songs[0]->getYtLinkA()}'>$albumName</a></td>";
                    echo "<td>{$songs[0]->getSongName()}</td>";
                    echo "<td><iframe width='560' height='315' src='{$songs[0]->getYtLinkB()}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></td>";
                    echo "<td><a href = '{$songs[0]->getSpotifyLink()}'>{$songs[0]->getSongName()}</a></td>";
                echo "</tr>";

                foreach ($songs as $song) {
                    if ($song->getSongName() != $songs[0]->getSongName()) {
                        echo "<tr>";
                        echo "<td>{$song->getSongName()}</td>";
                        echo "<td><iframe width='560' height='315' src='{$song->getYtLinkB()}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></td>";
                        echo "<td><a href = '{$song->getSpotifyLink()}'>{$song->getSongName()}</a></td>";
                        echo "</tr>";
                    }
                }
            }
            echo "</table>";
        }
    ?>
    
</body>
</html>