<?php

// Multi Dimensional Array (Array Into Array)

$student = [
    "Mark" => [
        "age" => 25,
        "class" => 10,
        "roll" => 2
    ],
    "Luck" => [
        "age" => 15,
        "class" => 9,
        "roll" => 3
    ],
    "Mathew" => [
        "age" => 26,
        "class" => 11,
        "roll" => 5
    ],
    "Jacob" => [
        "age" => 28,
        "class" => 12,
        "roll" => 1
    ]
    ];

    $FruitsArray = [
        "berries" => [
            "strawberry",
            "blueberry",
            "blackberry"
        ],
        "citrus" => [
            "orange",
            "lemon",
            "lime"
        ],
        "tropical" => [
            "banana",
            "mango",
            "pineapple"
        ]
        ];

        $NumbeArray = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];


        foreach($FruitsArray as $key => $Value){
            echo $key ."\n";
            foreach($Value as $fruits){
                echo " - " . $fruits ."\n";
            }
        }

        echo PHP_EOL;

        $invoice = [
            "invoiceNumber" => "INV-123",
            "invoiceDate" => "Date-23/10/2024",
            "invoiceItems" => [
                "item"=> "Art Paper",
                "Quantity" => 2,
                "UOM" => "Sheet",
                "Price" => 5,
                "PUOM" => "Sheet"

            ],
            [
                "item"=> "Solid Card Paper",
                "Quantity" => 5,
                "UOM" => "Sheet",
                "Price" => 10,
                "PUOM" => "Sheet"

            ]
            
            ];

            echo $invoice['invoiceNumber'];
            echo PHP_EOL;
            echo "................................";
            echo PHP_EOL;
            echo $invoice['invoiceDate'];
            echo PHP_EOL;
            echo "................................";
            foreach($invoice["invoiceItems"] as $item){
                echo $item["item"] . " - " . $item["Quantity"];
            }

        


