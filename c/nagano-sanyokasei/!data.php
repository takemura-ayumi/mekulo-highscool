<?php
$co = [
    'slug' => 'nagano-sanyokasei',
    'image' => 'factory.jpg',
    'company_name' => '株式会社 長野三洋化成',
    'catch_copy' => 'ホースやまな板のトップメーカー',
    'industry' => ['E'],
    'post_code' => '389-0511',
    'address' => '長野県東御市滋野2305',
    'homepage' => 'http://www.sanyokasei.co.jp/office/',
    'logo_filename' => 'logo.svg',
    'latitude' => 36.350373,//緯度
    'longitude' => 138.38194,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_seizou' => [
        'name' => '製造職',
        'url' => 'job_seizou',
        'catch_copy' => 'プラスチック製品のスペシャリスト',
        'work' => ['538'],
        'image' => 'job_seizou/first-view.jpg',
        'latitude' => 36.350373,//緯度
        'longitude' => 138.38194,//経度
        'MBTI' => 'Isfj'
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年 月  日（ ）  時  分～', 
                'date' => '2025-0 -  ',
                'deadline' => '2025-0 -  ',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'first-view.jpg',
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
    ],
];

// 目次
$toc = [
    'top' => [
        'name' => '企業TOP',
        'icon' => 'factory.png',
        'url' => '',
    ],
    'job' => [
        'name' => '募集職種',
        'icon' => 'carrier.png',
        'url' => '',
        'submenu' => $occupation,
		],
	];