<?php

function getAllUsers()
{
  global $db;
  $sql = 'SELECT * FROM users';
  $statement = $db->prepare($sql);
  $statement->execute();

  $users = $statement->fetchAll(PDO::FETCH_ASSOC);
  return $users;
}

function getUser(int $userId)
{
  global $db;
  $sql = 'SELECT * FROM users WHERE id = :id';
  $statement = $db->prepare($sql);
  $statement->execute([
    'id' => $userId
  ]);

  $user = $statement->fetch(PDO::FETCH_ASSOC);
  return $user;
}

function isLogged()
{
  if( isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == 1 )
  {
    return true;
  }
  else
  {
    return false;
  }
}
