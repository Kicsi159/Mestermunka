<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Padlo</title>
    <link rel="icon" href="res/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="res/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Audiowide&display=swap');
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
</head>
<body>
<header>
    <div class="hamburger" id="hamburger"></div>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Főoldal</a></li>
            <li class="dropdown"><a href="termekek.php">Termékek</a>
                <div class="dropdown-content">
                    <a href="padloszonyeg.php">Padlősznyegek</a>
                    <a href="szonyegek.php">Kész szőnyegek</a>
                    <a href="faparkettak.php">Faparketták</a>
                    <a href="laminalt.php">Laminált padlók</a>
                    <a href="pvc.php">PVC-k</a>
                    <a href="wpc.php">WPC-k</a>
                    <a href="tapeta.php">Tapéták</a>
                    <a href="fuggony.php">Függönyök</a>
                </div>
            </li>
            <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
            <li><a href="kapcsolat.php">Kapcsolat</a></li>
            <li id="loginNavItem">
                <?php if (isset($_SESSION['user_name'])) { ?>
                    <span>Bejelentkezve mint, <?php echo $_SESSION['user_name']; ?></span>
                    <a href="logout.php"><button id="logoutBtn">Kijelentkezés</button></a>
                <?php } else { ?>
                    <button id="loginBtn">Bejelentkezés</button>
                    <button id="registerBtn">Regisztráció</button>
                <?php } ?>
            </li>
        </ul>
    </nav>
</header>
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Bejelentkezés</h2>
        <form action="login.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php } ?>
            <label for="login-username">Felhasználó név</label>
            <input type="text" id="login-username" name="uname" placeholder="Felhasználó név" autocomplete="username"><br>
            <label for="login-password">Jelszó</label>
            <input type="password" id="login-password" name="password" placeholder="Jelszó" autocomplete="current-password"><br>
            <button type="submit">Bejelentkezés</button>
        </form>
    </div>
</div>
<div id="registerModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Regisztráció</h2>
        <form action="signup-check.php" method="post">
            <?php if (isset($_GET['error'])) : ?>
                <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
            <?php if (isset($_GET['success'])) : ?>
                <p class="success"><?php echo htmlspecialchars($_GET['success']); ?></p>
            <?php endif; ?>

            <label for="reg-name">Teljes név</label>
            <input type="text" id="reg-name" name="name" placeholder="Teljes név" autocomplete="name"><br>

            <label for="reg-uname">Felhasználó név</label>
            <input type="text" id="reg-uname" name="uname" placeholder="Felhasználó név" autocomplete="username"><br>

            <label for="reg-password">Jelszó</label>
            <input type="password" id="reg-password" name="password" placeholder="Jelszó" autocomplete="new-password"><br>

            <label for="reg-re_password">Jelszó újra</label>
            <input type="password" id="reg-re_password" name="re_password" placeholder="Jelszó újra" autocomplete="new-password"><br>

            <button type="submit">Regisztráció</button>
        </form>
    </div>
</div>
<script>
    document.getElementById('hamburger').addEventListener('click', function() {
        document.getElementById('nav').classList.toggle('open');
    });
</script>
<script src="script.js"></script>
</body>
</html>