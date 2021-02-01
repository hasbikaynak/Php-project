<?php

function getAllBlogs()
{
  global $db;
  $sql = 'SELECT * FROM blog';
  $statement = $db->prepare($sql);
  $statement->execute();

  $blogs = $statement->fetchAll(PDO::FETCH_ASSOC);
  return $blogs;
}

function getBlog(int $blogid)
{
  global $db;
  $sql = 'SELECT * FROM blog WHERE id = :id';
  $statement = $db->prepare($sql);
  $statement->execute([
    'id' => $blogid
  ]);

  $blog = $statement->fetch(PDO::FETCH_ASSOC);
  return $blog;
}

?>