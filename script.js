
$(document).ready(function () {

    $("#error").hide();

    // Handle form submission
    $('#contact-form').submit(function (e) {
        e.preventDefault();

        $("#error").hide();

        var first_name = $("input#first_name").val();
        if (first_name == "") {
            $("#error").fadeIn().text("First Name required.");
            $("input#first_name").focus();
            return false;
        }

        var last_name = $("input#last_name").val();
        if (last_name == "") {
            $("#error").fadeIn().text("Last Name required.");
            $("input#last_name").focus();
            return false;
        }

        var phone = $("input#phone_number").val();
        if (phone == "") {
            $("#error").fadeIn().text("Phone number required");
            $("input#phone_number").focus();
            return false;
        }

        var email = $("input#email").val();
        if (email == "") {
            $("#error").fadeIn().text("Email required");
            $("input#email").focus();
            return false;
        }


        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $(this).serialize(),
            success: function (response) {
                console.log(response);
                if (response == 'success') {
                    $('#myModal').css('display', 'block');
                    $("body").addClass("modal-open");
                    console.log("saved");
                } else {
                    console.log("something Wrong");
                }
            }
        });
    });

    // Close modal when close button is clicked
    $('#modal-okay-button').click(function () {
        $('#myModal').css('display', 'none');
        $("body").removeClass("modal-open");
    });

    $(document).on("click", function (event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').css("display", "none");
            $("body").removeClass("modal-open");
        }
    });

    return false;
});

