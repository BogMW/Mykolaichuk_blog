<?php include('includes/header.php')?>

<body>
<div class="container">
    <div class="single-header-wrapper">
        <div class="single-header">
            <div class="filter-bar">
                <div class="logo">Мій блог</div>
                <div <?php if($_SESSION['session_id'] != 1) { echo "style='display: none;'";} ?> class="add-question"><a href="controllers/new-post.php">+</a></div>
            </div>
            <div class="user-panel">
                <div class="user">
                    <?php echo $_SESSION['session_name']?>
                </div>
                <a href="controllers/logout.php" class="logout">Вийти</a>
            </div>
        </div>
    </div>
    <div class="question-block">
        <?php
        while ($row = $posts->fetch()) { ?>
                <div class="questions">
                    <a href="controllers/post.php?id=<?= $row['id']?>">
                    <div class="left-bar">
                        <div class="top-bar">
                            <img ng-src="images/{{question.authorId}}.jpg"/>
                            <div class="question">
                                <p><span>Bogdan posted:</p>
                                <div><?=$row['title']?></div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="right-bar"  <?php if($_SESSION['session_id'] != 1) { echo "style='display: none;'";} ?>>
                        <a href="/controllers/delete-post.php?id=<?= $row['id']?>"><div>Видалити</div></a>
                        <a href="/controllers/edit-post.php?id=<?= $row['id']?>"><div>Редагувати</div></a>
                    </div>
                </div>
        <?php }?>
    </div>
</div>
</body>
