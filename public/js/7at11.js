$(function () {
    let name = null;
    let uniqueID = Math.floor(10000 + Math.random() * 90000);
    $('form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/admin/test",
            data: $(this).serializeArray(),
            success: function (response) {
                switch (response) {
                    case '1':
                        $('#counter').val(response);
                        // $("#form").children().remove();
                        break;
                    case '2':
                        $('#counter').val(response);
                        $("#form").addClass('d-none');
                        $('#follow').removeClass('d-none');
                        $("#next").children().attr('disabled', 'yes');
                        break;
                    case '3':
                        $('#counter').val(response);
                        $("#follow").remove();
                        $('#upload').removeClass('d-none');
                        $("#next").children().attr('disabled', 'yes');
                        break;
                    case '4':
                        $('#counter').val(response);
                        $("#next").remove();
                        $("#upload").remove();
                        $('#thankyou').removeClass('d-none');
                        break;
                    default:
                        $('#counter').val(response);
                        alert(response);
                        break;
                }
            }
        });
    });
    $('#follow').click(function (e) {
        e.preventDefault();
        let tab = window.open("https://www.instagram.com/7ateleven/", "_blank", fullscreen = "yes");
        $("#next").children().removeAttr('disabled');
    });
    $('#upload').click(function (e) {
        e.preventDefault();
        name = $('#name').val();
        let phonenumber = 8619777098;
        let url = `https://api.whatsapp.com/send?phone=+91%20${phonenumber}&text=Hii%0amy%20name%20is%20${name}%0amy%20unique%20token%20is%20${uniqueID}`
        let tab = window.open(url, "_blank", fullscreen = "yes");
        $("#next").children().removeAttr('disabled');
    });
});