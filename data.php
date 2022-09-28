<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    $data = [
        [
            "name" => 'Dung',
            "email" => 'trandungksnb00@gmail.com',
            "age" => 22
        ],
        [
            "name" => 'Nam',
            "email" => 'nam@gmail.com',
            "age" => 30
        ]
    ];
    echo json_encode($data);
?>