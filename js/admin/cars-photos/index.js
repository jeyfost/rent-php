function addPhotos() {
    const formData = new FormData($('#photosForm').get(0));

    $.ajax({
        type: "POST",
        dataType: "json",
        data: formData,
        processData: false,
        contentType: false,
        url: "/scripts/admin/cars-photos/ajaxAddPhotos.php",
        beforeSend: function () {
            $.notify("Фотографии добавляются...", "info");
        },
        success: function (response) {
            switch (response) {
                case "ok":
                    $.notify("Фотографии были успешно добавлены.");

                    $('#additionalPhotosContainer').css("opacity", "0");

                    setTimeout(function () {
                        $.ajax({
                            type: "POST",
                            url: "/scripts/admin/cars-photos/ajaxRebuildPhotosContainer.php",
                            success: function (html) {
                                $('#additionalPhotosContainer').html(html);

                                setTimeout(function () {
                                    $('#additionalPhotosContainer').css("opacity", "1");
                                }, 300);
                            }
                        });
                    }, 300);
                    break;
                case "failed":
                    $.notify("Во время добавления фотографий произошла ошибка. Попробуйте снова.", "error");
                    break;
                case "errors":
                    $.notify("Некоторые фотографии имеют недопустимый формат.", "error");
                    break;
                case "partly":
                    $.notify("Некоторые фотографии не были загружены.", "error");
                    break;
                default:
                    $.notify(response, "warn");
                    break;
            }
        }
    });
}