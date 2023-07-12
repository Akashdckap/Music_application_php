<html>
<head>
    <title>
        Home page
    </title>
    <style>
        body{
            background-color: cornflowerblue;
        }
        button {
            height: 30px;
            width: 100px;
            font-size: 15px;
        }
    </style>
</head>
<body>
<center>
    <h2>Hello Welcome to Music application</h2>
</center>

<!--    Login Form    -->
    <div id="login">
        <button type="submit">Login</button>
    </div>
    <form method="post" action="/login" class="loginForm">
        <label>Email</label>
        <input type="email" name="userEmail">
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
<!--    <div class="registration">-->
<!--        <button>Registration</button>-->
<!--    </div>-->
<!--    <form method="post" action="/registration" class="regForm">-->
<!--        <label>UserName</label>-->
<!--        <input type="text" name="userName">-->
<!--        <br>-->
<!--        <label>Email</label>-->
<!--        <input type="text" name="email">-->
<!--        <br>-->
<!--        <label>Password</label>-->
<!--        <input type="password" name="password">-->
<!--        <button type="submit">Register</button>-->
<!--    </form>-->
<center>
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
</center>
</body>
</html>
<script>
    const loginBtn = document.querySelector("#login");
    const loginForm = document.querySelector(".loginForm");
    const adminBtn = document.querySelector("#adminLogin");
    const adminLoginForm = document.querySelector(".adminLoginForm");
    const regBtn = document.querySelector(".registration");
    const regForm = document.querySelector(".regForm");


    loginForm.style.display ="none";
    loginBtn.addEventListener("click",()=>{
        loginForm.style.display ="block";
    })
    adminLoginForm.style.display = "none";
    adminBtn.addEventListener("click",()=>{
        adminLoginForm.style.display="block";
    })
    regForm.style.display="none";
    regBtn.addEventListener("click",()=>{
        regForm.style.display = "block";
    })
</script>