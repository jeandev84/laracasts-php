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




/* Filtrer les articles non-publies */

$unpublishedPosts = array_filter($posts, function ($post) {
    // return $post->published === false;
    return (! $post->published);
});


debug($unpublishedPosts);

/* Filtrer les articles publies */

$publishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});


debug($publishedPosts);