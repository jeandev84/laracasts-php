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


/* Collection of posts as Object */
$postObjectCollection = array_map(function ($post) {
    return $post;
}, $posts);

debug($postObjectCollection);


/* Collection of posts as Array */
$postArrayCollection = array_map(function ($post) {
    return (array) $post;
}, $posts);

debug($postArrayCollection);


/* Other Collection */
$arrayCollection = array_map(function ($post) {
    return [
        'title' => $post->title,
        'published' => $post->published
    ];
}, $posts);



/* Title Collection */
$titles = array_map(function ($post) {
    return $post->title;
}, $posts);

debug($titles);