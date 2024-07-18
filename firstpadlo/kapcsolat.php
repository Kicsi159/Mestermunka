<?php
include 'pages/begin.php';
?>
<main>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.625409925282!2d19.660464075845443!3d46.929746034472856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743d7cade25dcc9%3A0x3afd2fa5b3bc4caf!2zRmlyc3QgUGFkbMOzIMOBcnVow6F6!5e0!3m2!1shu!2shu!4v1720187651201!5m2!1shu!2shu" width="98%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</main>
<section>
    <h2>Vásárlói vélemények</h2>
    <?php
    $db_user = 'root';
    $db_pass = 'mysql';
    $db_name = 'firstpadlo';
    $dsn = 'mysql:host=localhost;dbname=' . $db_name . ';charset=utf8mb4';
    $db = new PDO($dsn, $db_user, $db_pass);
    $is_logged_in = isset($_SESSION['user_name']);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($is_logged_in) 
        {
            $name = trim($_POST['name']);
            $email = $_POST['email'];
            $rating = $_POST['rating'];
            $message = $_POST['message'];

            if ($name && $email) 
            {
                $file = fopen('content/customer-reviews.txt', 'a');
                $line = $name . ';' . $email . ';' . $rating . ';' . $message . ';0';
                fwrite($file, $line . PHP_EOL);
                fclose($file);

                echo '<a name="msg"></a><p class="message success"><strong>Üzenet tárolva!</strong> A bejegyzésed rendszerünk rögzítette. Köszönjük hozzászólásodat!</p>';
            } 
            else 
            {
                echo '<a name="msg"></a><p class="message error"><strong>Hibásan kitöltve!</strong> Név és e-mail cím megadása kötelező!</p>';
            }
        } 
        else 
        {
            echo '<a name="msg"></a><p class="message error"><strong>Bejelentkezés szükséges!</strong> Az értékelés leadásához kérjük, <a href="#" id="loginLink">jelentkezz be</a>.</p>';
        }
    }
    ?>
    <a name="input"></a>
    <form action="kapcsolat.php#msg" method="post">
    <div>
    <label for="name">Név</label>
    <input type="text" id="name" name="name" autocomplete="name">
</div>
<div>
    <label for="email">E-mail cím</label>
    <input type="email" id="email" name="email" autocomplete="email">
</div>
        <div class="rating">
            <input type="radio" id="star5" name="rating" value="5">
            <label for="star5">&#9734;</label>

            <input type="radio" id="star4" name="rating" value="4">
            <label for="star4">&#9734;</label>

            <input type="radio" id="star3" name="rating" value="3">
            <label for="star3">&#9734;</label>

            <input type="radio" id="star2" name="rating" value="2">
            <label for="star2">&#9734;</label>

            <input type="radio" id="star1" name="rating" value="1">
            <label for="star1">&#9734;</label>
        </div>
        <div>
            <label for="message">Üzenet</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <button type="submit">Elküldöm</button>
    </form>
</section>
<?php include 'pages/end.php'; ?>
<script src="script.js"></script>
</body>
</html>