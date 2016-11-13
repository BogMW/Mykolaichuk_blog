$(document).ready(function () {

    $("#delete-comment").on('click', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url  : 'delete-comment.php',
            data : ['del', this.value],
            success : function(){
                alert('Запис видалено');
            }
        });
    });
});