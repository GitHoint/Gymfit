<?php 
require("CONFIG/index_include_config.php");
// pls dont use on uni wifi as it rejects the database 

if (isset($_POST["email"]) && isset($_POST["password"])){
    Login :: Login_Query();
}
if (isset($_POST["emailReg"]) && isset($_POST["passwordReg"]) && isset($_POST["firstnameReg"]) && isset($_POST["surnameReg"])){
    Register :: Register_Query();
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <script src="JS/jquery.js"></script>
    <script src="JS/login-register.js"></script>
    <title>GymFit :: Home</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>
<body>
    <div id="back-image"></div>
    <header>
        <h2 class="heading-title">Welcome To Gymfit</h2>
        <div class="divider-bar"></div>
    </header>
    <div id="hidemenu">
        <div class="panel" id="home">
            <a href="#login" class="button menu-link">Login</a>
            <a href="#register" class="button menu-link">Register</a>
        </div>
    </div>
    <div class="panel" id="login">
        <div class="panel-content">
            <div class="top-bar">
                <a href="#home" class="return-btn">Close</a>
                <h2>Login</h2>
                <span class="divider-full"></span>
            </div>
            <form method="POST" class="form">
                <div>
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="login-input">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="login-input" autocomplete="off">
                </div>
                <div>
                    <button type="submit" class="button">Login</button>
                </div>
            </form>
        </div>        
    </div>
    <div class="panel" id="register">
        <div class="panel-content">
            <div class="top-bar">
                <a href="#home" class="return-btn">Close</a>
                <h2>Register</h2>
                <span class="divider-full"></span>
                <form method="POST" class="form" id="register-form">
                    <p>Register As:</p>
                    <div id="reg-toggle">
                        <label class="slider"><input type="checkbox" name="memberReg" id="member">Member</label>
                        <label class="slider"><input type="checkbox" name="trainerReg" id="trainer">Trainer</label>
                    </div>
                    <div id="name-entry">
                        <div>
                            <label for="firstnameReg">Firstname:</label>
                            <input type="text" name="firstnameReg" class="login-input">
                        </div>
                        <div>
                            <label for="surnameReg">Surname:</label>
                            <input type="text" name="surnameReg" class="login-input">
                        </div>
                    </div>
                    <div>
                        <label for="emailReg">Email:</label>
                        <input type="text" name="emailReg" class="login-input">
                    </div>
                    <div>
                        <label for="passwordReg">Password:</label>
                        <input type="password" name="passwordReg" class="login-input" autocomplete="off">
                    </div>
                    <div>
                        <button type="submit" class="button">Register</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>
    <div>
    </div>
</body>
</html>
