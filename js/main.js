$(document).ready(function () {
    $('.zayavka_btn').click(function (e) { 
        e.preventDefault();
        $('.zayavka').show();
    });

    $(".zayavka").on("submit", function(){
        $.$.ajax({
            type: "post",
            url: "send.php",
            data: $(this).serialize(),
            dataType: "dataType",
            success: function () {
                $(".zayavka_send").show()
            }
        });
        return false;
    })
});