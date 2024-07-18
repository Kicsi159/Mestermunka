<footer>
        <section>
            <p><strong>First Padló</strong>
                <br>6000.Kecskemét, Ladánybenei út 1.
               <br>+36 70/2888228
               <br><a href="https://www.facebook.com/firstpadlo.hu?locale=hu_HU" target="_blank">facebook</a>
               <br><a href="mailto:firstpadlo@gmail.com">firstpadlo@gmail.com</a>
                <br></p>
        </section>
        <?php
        date_default_timezone_set('Europe/Budapest');
                
                $now = date('H');
                $dayOfWeek = date('N');
                $info = 'Jelenleg nyitva';

                switch ($dayOfWeek) 
                {
                    case 6: 
                    case 7: 
                        $open = 9;
                        $close = 14;
                        if ($now < $open) 
                        {
                            $next = $open - $now;
                            $info = 'Jelenleg még zárva. Nyitás ' . $next . ' óra múlva.';
                        } 
                        elseif ($now >= $close) 
                        {
                            $next = 24 - $now + $open;
                            $info = 'Jelenleg már zárva. Nyitás ' . $next . ' óra múlva.';
                        }
                        break;
                    default: 
                        $open = 7;
                        $close = 18;
                        if ($now < $open) 
                        {
                            $next = $open - $now;
                            $info = 'Jelenleg még zárva. Nyitás ' . $next . ' óra múlva.';
                        } 
                        elseif ($now >= $close) 
                        {
                            $next = 24 - $now + $open;
                            $info = 'Jelenleg már zárva. Nyitás ' . $next . ' óra múlva.';
                        }
                        break;
                }
        echo '<section>
            <p><strong>Nyitvatartás</strong>
            <br>Hétfő-Péntek 07:00-18:00
            <br>Szomat-Vasárnap 9:00-14:00
            <br>'. $info .'
            </p>
        </section>';
        ?>
        <a href="index.php" class="logo">
            <img src="res/fp.png" alt="firstlogo">
        </a>
</footer>