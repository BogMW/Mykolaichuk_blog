<?php include('../includes/header.php')?>
<body>
<div class="container">
    <?php include('../includes/user-panel.php')?>
    <form action="" method="post" id="new-post">
        Заголовок</br>
        <input type="text" name="title"></br>
        Тіло посту</br>
        <input type="text" name="content"></br>
        <input type="submit"  name="new-post" value="Розмістити запис"></br>
    </form>
</div>

</body>