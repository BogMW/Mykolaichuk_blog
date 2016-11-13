<?php include('../includes/header.php')?>
<body>
<?php
$row = $post->fetch();
$comments_count = $comments->rowCount();
?>


<div class="container">
    <?php include('../includes/user-panel.php') ?>
    <div class="single-questions">
        <div class="single-question-wrapper">
            <div class="single-question">
                <div class="single-author">
                    <div>
                        <img ng-src="{{profile.users[profile.questionToShow].userPhoto}}">
                        <div class="question">
                            <p><span>Bogdan</span> запостив:</p>
                            <h3><?=$row['title']?></h3>
                        </div>
                    </div>
                </div>
                <div class="hidden-question"><?=$row['title']?></div>
                <div class="single-text">
                    <div class="single-detail"><?=$row['content']?></div>
                </div>
                <div class="give-answer">
                    COMMENT
                </div>
            </div>
            <form class="new-comment" method="post" action="">
                <input type="text" name="comment-content" class="new-comment-content">
                <input type="submit" name="new-comment" value="Коментувати" class="give-answer">
            </form>
            <h4>Всього по цьому запису є <?=$comments_count?> коментів.</h4>

            <?php
            while ($row2 = $comments->fetch()) { ?>
            <div class="single-answer-container" value="<?=$row2['id']?>">
                <div class="single-answer">
                    <div class="answer-image-container">
                        <img ng-src="{{profile.users[answer.userId-1].userPhoto}}">
                    </div>
                    <div class="single-text">
                        <div class="single-detail">
                            <p><span><?=$row2['name']?></span> прокоментував це - <?=$row2['date']?></p>
                            <div><?=$row2['content']?></div>
                        </div>
                    </div>
                    <div class="hidden-comment"><?=$row2['content']?></div>
                </div>
                <a href="delete-comment.php?id=<?=$row2['com_id']?>" <?php if(($_SESSION['session_id'] != $row2['author_id'])&&($_SESSION['session_id'] != 1)) { echo 'hidden';} ?>  >Видалити коммент</a>
            </div>
            <?php }?>

        </div>
    </div>
</div>
</body>

