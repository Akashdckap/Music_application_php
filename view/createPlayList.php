

<html>
    <head>
        <title>
            create play list
        </title>
    </head>
<body>
    <form enctype="multipart/form-data" method="post" action="/createplaylist">
        <label>Play list Name</label>
        <input type="text" name="playListName">
        <br>
        <label>Song Name</label>
        <input type="text" name="SongName">
        <br>
<!--        <input type="hidden" value="--><?php //echo $gettedId[0];?><!--" name="loginId">-->
        <button type="submit">Done</button>
    </form>
</body>
</html>