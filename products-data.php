<?php
$products = [
    'ssflatbars' => [
        'name' => 'S.S. Flat Bar',
        'image' => 'images/panchratnaContent/Products/ss-flatbar.jpg',
        'url' => 'project-single.php',
        'tag' => 'S.S. Flat Bars'
    ],
    'sschannels' => [
        'name' => 'S.S. Channels',
        'image' => 'images/panchratnaContent/Products/ss-channel.jpg',
        'url' => 'project-single.php',
        'tag' => 'S.S. Channels'
    ],
    'ssbrightbars' => [
        'name' => 'S.S. Bright Bars',
        'image' => 'images/panchratnaContent/Products/ss-bright-bar.jpg',
        'url' => 'project-single.php',
        'tag' => 'S.S. Bright Bars'
    ],
    'ssroundbars' => [
        'name' => 'S.S. Round Bars',
        'image' => 'images/panchratnaContent/Products/ss-round-bar.jpg',
        'url' => 'project-single.php',
        'tag' => 'S.S. Round Bars'
    ]
];

$structureMap = [
    'structure-1' => [
        'ssroundbars',
        'sschannels',
        'ssbrightbars'
    ],
    'structure-2' => [
        'ssflatbars'
    ]
];


$product_details = [
    'sschannels' => [
        "type" => 'structure-1',
        'name' => 'S.S. Channels',
        'tagline' => 'Durable and corrosion-resistant channels',
        'image' => 'images/panchratnaContent/Products/ss-channel.jpg',
        'description' => [
            'As a leading stainless steel inventory holder in India, we offer both types – Parallel (Non-Taper) as well as Non-Parallel (Taper) SS channels in different sizes (both imperial & metric) and stainless steel grades.',
            'All the channels are hot rolled for their high strength . Stainless steel channels are C-shaped structural components made from stainless steel. They are widely used in construction, manufacturing, and various other industries due to their strength, durability, and corrosion resistance.'
        ],
        'specifications' => [
            ['Length', 'Upto 6.4 metres'],
            ['Supply condition', 'HRAP'],
            ['Tolerance', 'EN 10279'],
            ['Bars End Finish', 'Deburred ends or plain ends'],
            ['Grades', '304, 304L, 316, 316L']
        ],
        'size_charts' => [
            [
                'name' => 'Taper Sizes',
                'headers' => ['Size (mm)', 'Thickness (mm)'],
                'values' => [
                    ['101.6, 40.23, 4.76', '7.5'],
                    ['101.6, 43.71, 8.15', '7.52'],
                    ['100, 50, 6', '8.5'],
                    ['65, 42, 5.5', '7.5'],
                    ['50, 38, 5', '7'],
                    ['50, 25, 3', '3.3'],
                    ['50, 25, 5', '6'],
                    ['76.2, 35.81, 4.32', '6.93'],
                    ['101.6, 40.23, 4.67', '7.52'],
                    ['101.6, 43.71, 8.15', '7.52'],
                    ['127, 47.625', '9.52'],
                    ['127, 44.45, 4.83', '8.13'],
                    ['127, 47.88, 8.26', '8.13'],
                    ['152.4, 48.77, 5.08', '8.71'],
                    ['152.4, 51.66, 7.98', '8.71'],
                    ['203.2, 64.26, 12.37', '9.90'],
                    ['40, 35, 5', '7'],
                    ['50, 25, 5', '6'],
                    ['50, 38, 5', '7'],
                    ['60, 30, 6', '6'],
                    ['65, 42, 5.5', '7.5'],
                    ['75, 40, 4.7', '6.9'],
                    ['80, 45, 6', '8'],
                    ['100, 50, 6', '8.5'],
                    ['120, 55, 7', '9'],
                    ['140, 60, 7', '10'],
                    ['160, 65, 7.5', '10.5'],
                ]
            ],
            [
                'name' => 'Non – Taper Sizes',
                'headers' => ['Size (mm)', 'Thickness (mm)'],
                'values' => [
                    ['101.6, 44.45', '6.35'],
                    ['101.6, 50.8', '6.35'],
                    ['100, 50, 5', '5'],
                    ['100, 50, 6', '6'],
                    ['80, 40, 6', '6'],
                    ['80, 40, 5', '5'],
                    ['75, 40, 6', '6'],
                    ['75, 40, 5', '5'],
                    ['50, 25, 5', '5'],
                    ['50.8, 25.4', '3.18'],
                    ['50.8, 25.4', '4.76'],
                    ['50.8, 25.4', '6.35'],
                    ['76.2, 34.925', '4.76'],
                    ['76.2, 38.1', '4.76'],
                    ['76.2, 38.1', '6.35'],
                    ['60, 30, 5', '5'],
                    ['120, 60, 6', '6'],
                    ['130, 65, 6', '6'],
                    ['150, 75, 6', '6'],
                ]
            ]
        ]
    ],
    'ssbrightbars' => [
        "type" => 'structure-1',
        'name' => 'S.S. Bright Bars',
        'tagline' => 'Polished finish for precision applications',
        'image' => 'images/panchratnaContent/Products/ss-bright-bar.jpg',
        'description' => [
            'Our bright bars are subjected to various testing, such as ultrasonic testing and eddy current testing, which test the surface and internal defects, and this makes us produce high-quality bright bars that promote good business relationships with international clients.',
            'They have excellent weldability and machinability, which make them highly favourable for precision machining components and constructing large, sturdy structures. These bars are available in various shapes and sizes, including bright square bars, and are used across industries. '
        ],
        'specifications' => [
            ['Length', 'Upto 6.5 metres'],
            ['Cold Drawn', 'Centreless Ground, Peeled & Polished, Rough Peeled or Smooth Turned Bars'],
            ['Tolerances', 'h7, h8, h9, h10, h11, k12, k13, ASTM A484'],
            ['Surface Finish', 'Ra upto 0.2 mm (8.7 RMS)'],
            ['Straightness', 'Upto 0.5 mm per metre'],
            ['Grit Polish', 'K240, K320 or as per Customer’s requirement'],
            ['Heat Treatment', 'Soft Annealing, Solution Annealing, Oil & Water Quenching, Tempering & Aging'],
            ['Bars End Finish', 'Chamfered ends 30°, 45°, 60° and Plain Ends without Burrs or Sharp Edges'],
            ['Dimensions', 'As per EN, DIN, JIS, ASTM, BS, ASME, GOST, AISI (NACE MR0175, MR0103)'],
            ['Grades', '202, 303, 304, 304L, 310/310S, 316, 316L, 316Ti, 317/317L, 321/321H, 347/347H, 410, 416, 420, 430, 431, 440C, 446']
        ],
        "one_line_size" => "Diameter: 3mm - 350mm"
    ],
    'ssroundbars' => [
        "type" => 'structure-1',
        'name' => 'S.S. Round Bars',
        'tagline' => 'Versatile and robust',
        'image' => 'images/panchratnaContent/Products/ss-round-bar.jpg',
        'description' => [
            'Stainless steel round bars are highly resistant to rust, oxidation, and staining, making them ideal for applications in harsh environments, including those exposed to moisture, chemicals, or high salinity. This is due to the chromium content forming a protective oxide layer.',
            'They possess high tensile strength, enabling them to withstand heavy loads and mechanical stress without deforming, making them suitable for demanding applications in construction, automotive, and aerospace industries.'
        ],
        'specifications' => [
            ['Length', 'Upto 8 meters'],
            ['Tolerance', 'ASTM A484, EN10060'],
            ['Hot Rolled (Black) Surface', ''],
            ['100% Ultrasonically Tested', ''],
            ['Spot ground or fully ground condition', ''],
            ['Cold-Swappable', ''],
            ['Heat Treatment', 'Soft Annealing, Solution Annealing, Spheroidized Annealing, Oil and Water Quenching, Tempered & Normalized']
        ],
        'one_line_size' => '16 mm – 125 mm (5/8 inch – 5 inch)',
        'size_charts' => []
    ],
    'ssflatbars' => [
        "type" => 'structure-2',
        'name' => 'S.S. Flat Bars',
        "products" => [
            [
                'name' => 'S.S. Angle Bar',
                'tagline' => 'Precision angles for structural applications',
                'image' => 'images/panchratnaContent/Products/ss-flatbar.jpg',
                'description' => [
                    'Stainless steel angle bars are ideal for structural, architectural, and engineering purposes.',
                    'They provide excellent corrosion resistance, high strength, and versatility in fabrication.'
                ],
                'specifications' => [
                    ['Length', 'Upto 6 metres'],
                    ['Finish', 'Polished / HRAP'],
                    ['Grades', '304, 304L, 316, 316L'],
                    ['Tolerance', 'EN 10056'],
                    ['Supply Condition', 'Hot Rolled / Cold Drawn']
                ]
            ],
            [
                'name' => 'S.S. HRAP Flat Bar',
                'tagline' => 'High-quality HRAP stainless flat bars',
                'image' => 'images/panchratnaContent/Products//ss-flatbar.jpg',
                'description' => [
                    'HRAP stainless steel flat bars are manufactured through hot rolling and pickling for improved surface quality.',
                    'They are widely used in fabrication, construction, and decorative applications.'
                ],
                'specifications' => [
                    ['Length', 'Upto 6 metres'],
                    ['Finish', 'HRAP'],
                    ['Grades', '304, 304L, 316, 316L'],
                    ['Tolerance', 'EN 10058'],
                    ['Supply Condition', 'Hot Rolled Annealed Pickled']
                ],
            ]
        ],
        'size_charts' => [
            [
                'headers' => ['Side (mm)', 'Thickness (mm)'],
                'values' => [
                    ['20 x 20', '3'],
                    ['25 x 25', '4'],
                    ['30 x 30', '5'],
                    ['40 x 40', '6'],
                    ['50 x 50', '8']
                ]
            ]
        ]
    ],
];

?>