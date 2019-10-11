<?php

require '../libs/functions.php';


class Post
{
    /** @var string */
    public $title;

    /** @var string */
    public $published;


    /**
     * Post constructor.
     * @param $title
     * @param $published
     */
    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}


$posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false)
];


/* array_map() */
$modified = array_map(function ($post) {
    // every post published will be setted to 'true'
    $post->published = true;
    return $post;
}, $posts);

debug($modified);

/* foreach() */
foreach($posts as $post)
{
    $post->published = true;
}

debug($posts);