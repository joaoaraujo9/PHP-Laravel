$(document).ready(function(){
    $(".up,.down").click(function(){
        var row = $(this).parents("tr");
        if ($(this).is(".up")) {
            row.insertBefore(row.prev());
        } else if ($(this).is(".down")) {
            row.insertAfter(row.next());
        }
    });
});
