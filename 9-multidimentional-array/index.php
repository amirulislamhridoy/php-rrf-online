<!-- multidimentional array -->

<?php
    $array = [
        "first_name" => 'Fahim',
        "last_name" => 'Soudagor',
        "address" => [
            "house" => "20",
            "city"=> "Gazipur"
        ]
    ];
    echo $array['address']['house'], '<br> <br/>';
?>

<!-- ***********************
exersize -->
<?php
    $array1 = [
        "first_name" => "Omer",
        "address" => [
            "country" => [
                "name" => "BD",
            ]
        ]
    ];
    echo $array1['address']['country']['name']
?>