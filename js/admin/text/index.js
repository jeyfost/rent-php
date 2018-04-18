function edit() {
    const id = $('#pageSelect').val();
    const text = $('#textInput').val();

    $.ajax({
        type: "POST",
        data: {
            "id": id,
            "text": text
        },
        url: "/scripts/admin/text/ajaxEditText.php",
        beforeSend: function () {
            $.notify("Идёт обновление...", "info");
        },
        success: function (response) {
            switch (response) {
                case "ok":
                    $.notify("Текст успешно изменён.", "success");
                    break;
                case "failed":
                    $.notify("При обновлении текста произошла ошибка. Попробуйте снова.", "error");
                    break;
                default:
                    $.notify(response, "warn");
                    break;
            }
        }
    });
}