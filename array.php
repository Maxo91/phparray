<?php 

    $family = [
        "Tom"   => ["Roomate" => "Shane"],
        "Andy"  => [
            "Cousing" => "Michele",
            "Mother"  => "Sophy"
        ],
        "Jwall" => ["Friend" => "Chunk"]
    ];

    foreach($family as $key => $value){
        foreach($value as $name => $name1){
            echo "{$key} {$name} {$name1}<br>";
        }
    }

?>