<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/18/2017
 * Time: 1:13 PM
 */
include_once 'DBConnection.php';
class Post
{
    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content)
    {
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;

    }

    public static function all(){
        $conn = DBConnection::getInstance();
        $list = [];
        $query = $conn->query('SELECT * FROM test_db.post');
        while($row = $query->fetch_assoc()){
            $list[] = new Post($row['id'], $row['author'], $row['content']);
        }
        return $list;
    }
}