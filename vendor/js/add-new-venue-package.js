$(document).ready(function () {
    $('#step-1').click(function () {
//        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your package name",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#pax').val() || $('#pax').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the maximum number of Pax for the package",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "please enter the package price",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            $('#collapseOne').collapse("hide");
            $('#collapseTwo').collapse("show");
        }
    });

    $('#step-2').click(function () {
        if (!$('#package-picture').val() || $('#package-picture').val().length === 0) {
            swal({
                title: "Error!",
                text: "please upload at least one of your package image",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            $('#collapseTwo').collapse("hide");
            $('#collapseFour').collapse("show");
        }
    });

//    $('#step-3').click(function () {
//
//        checked = $("input[type=checkbox]:checked").length;
//
//        if (checked < 1) {
//            swal({
//                title: "Error!",
//                text: "please select at least one facility",
//                type: 'error',
//                timer: 2000,
//                showConfirmButton: false
//            });
//        } else {
//            $('#collapseThree').collapse("hide");
//            $('#collapseFour').collapse("show");
//        }
//    });

    $('#create').click(function () {
        var description = tinyMCE.get('description').getContent(), patt;
        patt = /^<p>(&nbsp;\s)+(&nbsp;)+<\/p>$/g;
        if (description === '' || patt.test(content)) {
            swal({
                title: "Error!",
                text: "please enter Room description",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        }
    });

    $('#step-prev-1').click(function () {
        $('#collapseTwo').collapse("hide");
        $('#collapseOne').collapse("show");
        $.scrollTo(100, 0, "slow", "#collapseOne");
    });
    $('#step-prev-2').click(function () {
        $('#collapseThree').collapse("hide");
        $('#collapseTwo').collapse("show");
        $.scrollTo(100, 0, "slow", "#collapseTwo");
    });

    $('#step-prev-3').click(function () {
        $('#collapseFour').collapse("hide");
        $('#collapseThree').collapse("show");
        $.scrollTo(100, 0, "slow", "#collapseThree");
    });
});
 