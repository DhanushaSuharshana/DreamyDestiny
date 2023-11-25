$(document).ready(function () {
    $('#district').change(function () {
       

        var disID = $(this).val();

        $('#city-bar').empty();
        $.ajax({
            url: "post-and-get/city_list.php",
            type: "POST",
            data: {
                district: disID,
                action: 'GETCITYSBYDISTRICT'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option value=""> -- Select your City -- </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#city-bar').empty();
                $('#city-bar').append(html);
            }
        });
    });
});