$(document).ready(function () {

    $("#delete-post").on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url  : 'models/posts.php',
            data : ['del', this.value],
            success : function(){
                alert('Запис видалено');
            }
        });
    });
});