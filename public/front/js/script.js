$(document).ready(function() {
    new WOW().init();
    $(".bootstrap-tagsinput").addClass("form-control");

    $(".question-delete-button").click(function(e) {
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this!",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(willDelete => {
            if (willDelete) {
                $(this)
                    .parents("form")
                    .submit();
            } else {
            }
        });
    });
});
