<?php


require_once __DIR__. "/Model/Comment.php";
require_once __DIR__. "/Repository/CommentRepository.php";
require_once __DIR__. "/getConnnection.php";

use Model\Comment;
use Repository\CommentRepositoryImpl;
$connection = getConnecton();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email:"testrepository@test.com",comment:"Hai repository");
// $newComment = $repository->insert($comment);
// var_dump($newComment->getId());


// $comment = $repository->findById(40);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;