<?php

$albums = [
    [
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "year" => 1988,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
        "genre" => "Rock"
    ],
    [
        "title" => "Live at Wembley 86",
        "author" => "Queen",
        "year" => 1992,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
        "genre" => "Pop"
    ],
];

$json_albums = json_encode($albums);
header('Content-Type: application/json');
// var_dump($json_albums);
echo $json_albums;
