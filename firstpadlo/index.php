<?php include 'pages/begin.php'; ?>
    <main>
        <h1>Minden ami melegburkolat!</h1>
        <h1>És még annál is <a href="termekek.php">több</a>!</h1>
        <div class="image-gallery">
            <div class="image-container">
                <img src="media/foldal1.jpg" alt="Image 1">
                <img src="media/foldal2.jpg" alt="Image 2">
                <img src="media/foldal3.jpg" alt="Image 3">
                <img src="media/foldal4.jpg" alt="Image 4">
            </div>
        </div>
        <?php
            $text = file_get_contents('content/home-text.txt');
            echo '<p><strong>'. $text .'</strong></p>'
        ?>
    </main>
    <aside>
        <ul class="features">
            <li>
                <img src="res/img/icon-delivery.png" alt="teherautó">
                <h3><a href="szolgaltatasok.php">Házhozszállítás</a></h3>
            </li>
            <li>
                <img src="res/img/icon-refund.png" alt="pénz">
                <h3><a href="szolgaltatasok.php">10-30 év gyártói garancia és pénzvisszatérítés</a></h3>
            </li>
            <li>
                <img src="res/img/icon-service.png" alt="szerelés">
                <h3><a href="szolgaltatasok.php">Kivitelezés</a></h3>
            </li>
            <li>
                <img src="res/img/icon-mashine.png" alt="varrás">
                <h3><a href="szolgaltatasok.php">Ingyenes függönyvarrás</a></h3>
            </li>
            <li>
                <img src="res/img/icon-money.png" alt="kedvezmény">
                <h3><a href="szolgaltatasok.php">Mennyiségi kedvezmény</a></h3>
            </li>
        </ul>
    </aside>
    <H2>Legnépszerűbb termékeink</H2>
    <ul class="gallery">
                <li>
                    <a href="media/svédpadló.jpg" data-fancybox="gallery" target="_blank">
                        <img src="media/thumbs/svédpadló.jpg" alt="kedvelt"> 
                    </a>
                </li>
                <li>
                    <a href="media/oci.jpg" data-fancybox="gallery" target="_blank">
                        <img src="media/thumbs/oci.jpg" alt="kedvelt">
                    </a>
                </li>
                <li>
                    <a href="media/KAN01-622-1.jpg" data-fancybox="gallery" target="_blank">
                        <img src="media/thumbs/KAN01-622-1.jpg" alt="kedvelt">
                    </a>
                </li>
                <li>
                    <a href="media/dallam.jpeg" data-fancybox="gallery" target="_blank">
                        <img src="media/thumbs/dallam.jpg" alt="kedvelt">
                    </a>
                </li>
                <li>
                    <a href="media/türkíz.jpg" data-fancybox="gallery" target="_blank">
                        <img src="media/thumbs/türkíz.jpg" alt="kedvelt">
                    </a>
                </li>
                <li>
                    <a href="media/wpc.jpg" data-fancybox="gallery" target="_blank">
                        <img src="media/thumbs/wpc.jpg" alt="kedvelt">
                    </a>
                </li>
    </ul>
    <?php include 'pages/end.php'; ?>
    <script src="script.js"></script>
    <script> Fancybox.bind()</script>
</body>
</html>