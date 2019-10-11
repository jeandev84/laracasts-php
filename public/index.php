<?php

require '../libs/functions.php';

/*
use Framework\Http\Request;
use Framework\Routing\Router;

$database = require '../src/bootstrap.php';

require Router::load('../routes.php')->direct(Request::uri());

*/


/**
 * arrayFilter : Filter down the collection
 * arrayMap    : Transform an object to somewhere
 * arrayColumn : Pull the value from each item from collection
 */

class Post
{
    /** @var string */
    public $title;


    /** @var string */
    private $author;


    /** @var boolean */
    public $published;


    /**
     * Post constructor.
     * @param $title
     * @param $author
     * @param $published
     */
    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}


$posts = [
  new Post('My First Post', 'JW', true),
  new Post('My Second Post', 'JW', true),
  new Post('My Third Post', 'AM', true),
  new Post('My Fourth Post', 'TR', false)
];



/*
$modified = array_map(function ($post) {
    return new SomeOtherObject($post->title);
}, $posts);
*/


/* Collection Array of posts */
$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

/* Collection by key 'title' from posts collection  */
$titles = array_column($posts, 'title');
debug($titles);


/* Collection by key 'author' from posts collection  */
$authors = array_column($posts, 'author');
debug($authors);

