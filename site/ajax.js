$(document).ready(function () {
    $('#register').click(function () {
        $.ajax({
            url: 'reg.php',
            method: 'POST',
            dataType: 'html',
            data: $('.login100-form').serialize(),
            success: function (data) {
                $('.message').html(data);
            }
        });
    });
});

