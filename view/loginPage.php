<html>
<head>
    <title>LoggedIN Page</title>
</head>
<style>
    body{
        background-color: cornflowerblue;
    }
    button{
        height:30px;
        border-radius: 5px;
        border: none;
    }
</style>
<body>
<center>
    <h2>Try Premium to share songs</h2>
</center>
    <div>
        <form method="post" action="/createplaylist">
            <button type="submit" class="playList" >Create Playlist</button>
        </form>
    </div>
    <div>
        <button type="submit">Try Premium!</button>
    </div>
    <h4>Upcoming songs</h4>
<!--    <div>-->
<!--        <form method="post" action="/upcoming">-->
<!--        <button type="submit">-->
<!--            upcoming Playlists-->
<!--        </button>-->
<!--        </form>-->
<!--    </div>-->
<div>
<?php foreach ($getSongs as $Songs): ?>
    <table>
        <tr>
            <th>SongName: </th>
            <td><?php echo $Songs->songName?></td>
            <br>
        </tr>
        <tr>
            <th>Artist Name: </th>
            <td><?php echo $Songs->ArtistName?></td>
        </tr>
    </table>
<?php endforeach; ?>
</div>
</body>
</html>
