<?php

require_once 'app/init.php';

$itemsQuery = $db->prepare("
  SELECT *
  FROM items
  ");

$itemsQuery->execute();

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

foreach($items as $item) {
  echo $item['name'];
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>To do</title>
</head>
<body>
  <div class="list">
    <h1 class="header">To do.</h1>
    <ul>
      <li></li>
    </ul>

    <form class="item-add" action="add.php" method="post">
      <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
      <input type="submit" value="Add" class="submit">
    </form>
  </div>
</body>
</html>
