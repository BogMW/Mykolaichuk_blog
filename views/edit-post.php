<?php include('../includes/header.php')?>
<body>
<div class="container">
    <?php include('../includes/user-panel.php')?>
    <?php $row=$sql->fetch();?>
    <form action="" method="post" id="new-post">
        Заголовок</br>
        <input type="text" name="title" value="<?=$row['title']?>"></br>
        Тіло посту</br>
        <input type="text" name="content" value="<?=$row['content']?>"></br>
        <input type="submit"  name="edit-post" value="Розмістити запис"></br>
    </form>
</div>

</body>