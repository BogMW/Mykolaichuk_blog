
<div class="single-header-wrapper">
    <a href="/"><div class="back-to-questions"> < </div></a>
    <div class="single-header">
        <div class="filter-bar">
            <div class="logo">Мій блог</div>
             <div <?php if($_SESSION['session_id'] != 1) { echo "style='display: none;'";} ?> class="add-question"><a href="controllers/new-post.php">+</a></div>
        </div>
        <div class="user-panel">
            <div class="user">
                <?php echo $_SESSION['session_name']?>
            </div>
            <a href="logout.php" class="logout">Вийти</a>
        </div>
    </div>
</div>