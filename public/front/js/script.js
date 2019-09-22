$(document).ready(function() {
    new WOW().init();
    $(".bootstrap-tagsinput").addClass("form-control");

    $(".delete-button").click(function(e) {
        e.preventDefault();
        $(this)
            .parents("form")
            .submit();
    });
});
