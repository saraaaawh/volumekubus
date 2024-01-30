<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Mencari Volume Kubus </title>
</head>
<body>
 <h1>Mencari Volume Kubus</h1>

 <?php
 function hitungVolumeKubus($sisi1,$sisi2,$sisi3) {
    return ($sisi1 * $sisi2 * $sisi3);
 }

 $sisi1 = 6;
 $sisi2 = 6;
 $sisi3 = 6;

  $volume = hitungVolumeKubus($sisi1, $sisi2, $sisi3);
  echo "Volume kubus dengan sisi1 $sisi1, sisi2 $sisi2 dan sisi3 $sisi3 adalah $volume";
  ?>
  </body>
  </html>
