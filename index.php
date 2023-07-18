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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Hotels</title>
</head>
<body>
  <? foreach($hotels as $hotel): ?>
  <ul>
    <li><?= $hotel['name']?></li>
    <li><?= $hotel['description']?></li>
    <li><?= $hotel['parking']?></li>
    <li><?= $hotel['vote']?></li>
    <li><?= $hotel['distance_to_center']?></li>
  </ul>
  <? endforeach?>
</body>
</html>