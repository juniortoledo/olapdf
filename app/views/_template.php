<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olá</title>
  <!-- bootstrap 5 -->
  <link rel="stylesheet" href="<?= CSS ?>bootstrap.css">
</head>

<body>

  <div class="container mt-5">
    <div class="col-12 text-center border-bottom">
      <img width="180px" src="<?= IMAGES ?>logo.svg" alt="logo" />
      <p>Jornal online</p>
    </div>
    <?= $this->section('content') ?>
  </div>

  <!-- bootstrap js 5 -->
  <script src="<?= JS ?>bootstrap.js"></script>
</body>

</html>