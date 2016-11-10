<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Мій перший блог</title>
    <link rel='stylesheet' href='css/style.css'>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>
<body>

<?php
var_dump($posts);
while ($row = $posts->fetch()) { ?>
    <a href="post.php?id=<?= $row['id'] ?>"><h3><?=$row['title']?></h3></a>
    <p><em><?=$row['date']?></em></p>
    <p><?=$row['content']?></p>
<?php }?>

</body>
