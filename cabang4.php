<html>
    <head>
    </head>
    <body>
        <?php
            $tujuan = "Malang";

            echo "Mau main kemena ? " . $tujuan . "<br>";
            echo "<br> pesan: ";

            switch($tujuan) {
                case "Batu";
                    echo "<b>Jangan lupa bawa jaket</b>";
                    break;
                case "Bandung";
                    echo "<b>Awas kalau belanja laper mata</b>";
                    break;
                case "Bali";
                    echo "<b>Pakai sunblock SPF 50</b>";
                    break;
                case "Malang";
                    echo "<b>Ngapain jalan-jalan ke malang</b>";
                    break;
                default;
                    echo"<b>Ya udah belajar aja</b>";
            }
        ?>
    </body>
</html>