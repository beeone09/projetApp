<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Qrcode</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <script src="html5-qrcode.min.js"></script>
 
  <div class="row">
    <div class="col">
      <div style="width:500px;" id="reader"></div>
    </div>
    <div class="col" style="padding:30px;">
      <h4>RESULTAT DU SCAN</h4>
      <div id="result">Résultat :</div>
    </div>
  </div>

  <script src="scan.js"></script>

</body>
</html>