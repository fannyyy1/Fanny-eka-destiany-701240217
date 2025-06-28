<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Looping for array</tittle>
</head>
<body>
    <?php

    for ($i = 0; $i < count($nama); $i++)  {//Count berguna untuk menentukan jumlah elemen dan array.
                                            // Sehingga looping akan berhenti ketika isi array sudah tampil semua.
        echo "<li>$nama[$i]</li>";
    }

    ?>
</body>
</html>