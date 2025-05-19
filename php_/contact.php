<?php
echo "<!DOCTYPE html><html lang='tr'><head><meta charset='UTF-8'>
      <title>Form Sonuçları</title>
      <link rel='stylesheet' href='../css_/syle.css'>
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
      </head><body><div class='container my-5'>";

echo "<h2 class='mb-4'>Gönderilen Bilgiler</h2>";

echo "<table class='table table-bordered'>";
echo "<thead class='table-light'><tr><th style='width:30%'>Alan</th><th>Değer</th></tr></thead><tbody>";

foreach($_POST as $alan => $deger){
    if(is_array($deger)) $deger = implode(', ', $deger);
    echo "<tr><td><strong>".htmlspecialchars($alan)."</strong></td><td>".htmlspecialchars($deger)."</td></tr>";
}

echo "</tbody></table>";

echo "<a href='../pages_/iletisim.html' class='btn btn-primary mt-3'>Geri Dön</a></div></body></html>";
?>

