$(document).ready(function(){
    $("#user-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".content-container").filter(function() {
            var result = $(this).text().toLowerCase().indexOf(value) > -1;
            $(this).toggle(result);
        });
    });
});
