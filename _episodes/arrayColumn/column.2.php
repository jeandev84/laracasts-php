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

/* Do this */
$titles = array_column($posts, 'title');
debug($titles);

/* Is the same */
foreach ($posts as $index => $post)
{
    $posts[$index] = (array) $post;
}

debug($posts);
