<?php
  // Array
  $someArray = [
    [
      "name"   => "Jonathan Suh",
      "gender" => "male"
    ],
    [
      "name"   => "William Philbin",
      "gender" => "male"
    ],
    [
      "name"   => "Allison McKinnery",
      "gender" => "female"
    ]
  ];

  // Convert Array to JSON String
  $someJSON = json_encode($someArray);
  echo $someJSON;
?>

