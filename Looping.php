<?php

echo "Looping menggunakan For : </br>";
for ($i = 1; $i <= 10 ; $i++){
    echo "<li>urutan ke-$i</li>";
}

echo "</br>";
echo "Looping menggunakan while";
$i = 1;
while ($i <=10){
    echo "<li>urutan ke-$i</li>";
    $i++;
}

?>