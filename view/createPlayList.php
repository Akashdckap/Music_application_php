<html>
    <head>
        <title>
            create play list
        </title>
    </head>
<body>
    <form enctype="multipart/form-data" method="post" action="/createdPlayList">
        <label>Play list Name</label>
        <input type="text" name="playListName">
        <br>
        <label>Song Name</label>
        <input type="file" name="SongName">
        <br>
        <label>Artist Name</label>
        <input type="text" name="ArtistName">
        <br>
        <input type="text" value="<?php echo $gettedId[0]?>" name="loginId">
        <button type="submit">Done</button>
    </form>
</body>
</html>