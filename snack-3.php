<?php 

$posts = [
    "13/02/2022" => [
        [
            'title' => 'Post 1',
            'author' => 'Author 1',
            'text' => 'Text 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Author 2',
            'text' => 'Text 2'
        ]
    ],
    "14/02/2022" => [
        [
            'title' => 'Post 3',
            'author' => 'Author 3',
            'text' => 'Text 3'
        ],
        [
            'title' => 'Post 4',
            'author' => 'Author 4',
            'text' => 'Text 4'
        ]
    ],
    "15/02/2002" => [
        [
            'title' => 'Post 5',
            'author' => 'Author 5',
            'text' => 'Text 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Author 6',
            'text' => 'Text 6'
        ]
    ]
];
// var_dump($posts);
// echo "---------------------------";
// var_dump($posts["13/02/2022"]);
// echo "---------------------------";
// var_dump($posts["13/02/2022"][0]);
// echo "---------------------------";
// var_dump($posts["13/02/2022"][0]["title"]);


foreach ($posts as $post => $description) {
    echo "<h3>$post</h3>";
    // echo "----------------POSTS---------------";
    // var_dump($posts);
    // echo "----------------POST---------------";
    // var_dump($post);
    foreach ($description as $item) {
        // echo "----------------DESCRIPTION---------------";
        // var_dump($description);
        // echo "----------------ITEM---------------";
        // var_dump($item);
        $item['title'];
        $item['author'];
        $item['text'];
    }
}

?>