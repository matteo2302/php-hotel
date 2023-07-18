<?php 
  $hotels = [

      [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
      ],
      [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
      ],
      [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
      ],
      [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
        [
            'name' => 'Hotel cala di volpe',
            'description' => 'Hotel cala di volpe Descrizione',
            'parking' => true,
            'vote' => 5,
            'distance_to_center' => 7.6
        ],

    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Hotels</title>
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Hotel</th>
      <th scope="col">descrizione</th>
      <th scope="col">parcheggio</th>
      <th scope="col">voto</th>
      <th scope="col">distanza dal centro</th>
    </tr>
  </thead> <? foreach($hotels as $hotel): ?>
  <tbody>
    <tr>
      <th scope="row"><?= $hotel['name']?></th>
      <td><?= $hotel['description']?></td>
      <? if('parking') : ?>
      <td><i class="fa-solid fa-xmark"></i></td>
      <? else : ?>
        <td><i class="fa-solid fa-check"></i></td>
      <? endif ?>  
      <td><?= $hotel['vote']?></td>
      <td><?= $hotel['distance_to_center']?></td>
    </tr>
  </tbody>
  <? endforeach?>
</body>
</html>