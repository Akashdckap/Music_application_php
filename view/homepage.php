<html>
<head>
    <title>
        Home page
    </title>
</head>
<body>
    <h2>Hello Welcome to Music application</h2>

<!--    Login Form    -->
    <div id="login">
        <button type="submit">Login</button>
    </div>
    <form method="post" action="/login" class="loginForm">
        <label>Email</label>
        <input type="text" name="userName">
        <br>
        <label>Password</label>
        <input type="password" name="passWord">
        <br>
        <button type="submit">Login</button>
    </form>

<!--    Admin Login Form   -->
    <div id="adminLogin">
        <button type="submit">Admin</button>
    </div>
    <form method="post" action="/adminPage" class="adminLoginForm" >
        <label>UserName</label>
        <input type="text" name="adminName">
        <br>
        <label>Email id</label>
        <input type="email" name="mail">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Admin Login</button>
    </form>

    <?php foreach ($getSongs as $Songs): ?>
    <table>
        <tr>
            <th>SongName</th>
            <td><?php echo $Songs->songName?></td>
            <br>
        </tr>
        <tr>
            <th>Artist Name</th>
            <td><?php echo $Songs->ArtistName?></td>
        </tr>
    </table>
    <?php endforeach; ?>
</body>
</html>
<script>
    const loginBtn = document.querySelector("#login");
    const loginForm = document.querySelector(".loginForm");
    const adminBtn = document.querySelector("#adminLogin");
    const adminLoginForm = document.querySelector(".adminLoginForm");

    loginForm.style.display ="none";
    loginBtn.addEventListener("click",()=>{
        loginForm.style.display ="block";
    })
    adminLoginForm.style.display = "none";
    adminBtn.addEventListener("click",()=>{
        adminLoginForm.style.display="block";
    })
</script>