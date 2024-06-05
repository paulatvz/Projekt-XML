<?php

$xml = simplexml_load_file('escape_room.xml');

?>

<!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Paula Nikolić">
  <title>Escape room Zagreb</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg" style="background-color: #7393B3;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo1.png" alt="Bootstrap" width="30" height="24">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="pocetna.php">Escape room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="sekundarna.php">Recenzije soba</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h2 class="mt-5" style="text-align: center; color: #7393B3;">Escape room u Zagrebu</h2>

  <div class="container">
    <table class="table mt-5 text-white" style="background-color: #7393B3;">
      <thead>
        <tr>
          <th>Naziv</th>
          <th class="text-center">Broj soba</th>
          <th class="text-center">Broj igrača</th>
          <th class="text-center">Trajanje <br> (u minutama)</th>
          <th class="text-center">Lokacija</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php foreach ($xml->escape_room as $escape): ?>
          <tr>
            <td><?php echo $escape->naziv; ?></td>
            <td class="text-center"><?php echo $escape->sobe; ?></td>
            <td class="text-center"><?php echo $escape->broj_igraca; ?></td>
            <td class="text-center"><?php echo $escape->trajanje; ?></td>
            <td class="text-center"><?php
            if (isset($escape->lokacije->adresa)) {
              foreach ($escape->lokacije->adresa as $adresa) {
                echo $adresa . "<br>";
              }
            } else {
              echo 'Nepoznata lokacija';
            } ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <nav aria-label="Page navigation example" class="mb-5">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <footer class="text-white px-4 py-2" style="background-color: #7393B3; text-align: right;">
    <p>Paula Nikolić <br> 2024</p>
  </footer>

</body>

</html>