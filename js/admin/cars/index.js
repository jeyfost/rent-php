function carTypeSelect(id) {
    const type = $('#typeSelect').val();

    $.ajax({
        type: "POST",
        data: {
            "id": id,
            "type": type
        },
        url: "/scripts/admin/cars/ajaxSelectType.php",
        success: function (response) {
            if(response === "empty") {
                $('#placesContainer').html("");
            } else {
                $('#placesContainer').html(response);
            }
        }
    });
}

function editCar() {
    const id = $('#carSelect').val();
    const type = $('#typeSelect').val();
    const name = $('#nameInput').val();
    const year = $('#yearInput').val();
    const engine = $('#engineInput').val();
    const consumption = $('#consumptionInput').val();
    const transmission = $('#transmissionInput').val();
    const body = $('#bodyInput').val();
    const places = $('#placesInput').val();
    const description = $('#descriptionInput').val();
    const hour_1 = $('#1_hourInput').val();
    const day_1 = $('#1_dayInput').val();
    const days_2 = $('#2_daysInput').val();
    const days_3_10 = $('#3_10_daysInput').val();
    const days_10_20 = $('#10_20_daysInput').val();
    const days_20_30 = $('#20_30_daysInput').val();
    const min_term = $('#min_termInput').val();

    if(name !== "") {
        if(year !== "") {
            if(engine !== "") {
                if(consumption !== "") {
                    if(transmission !== "") {
                        if(body !== "") {
                            if(hour_1 !== "") {
                                if(day_1 !== "") {
                                    if(days_2 !== "") {
                                        if(days_3_10 !== "") {
                                            if(days_10_20 !== "") {
                                                if(days_20_30 !== "") {
                                                    if(min_term !== "") {
                                                        $.ajax({
                                                            type: "POST",
                                                            data: {
                                                                "id": id,
                                                                "type": type,
                                                                "name": name,
                                                                "year": year,
                                                                "engine": engine,
                                                                "consumption": consumption,
                                                                "transmission": transmission,
                                                                "body": body,
                                                                "places": places,
                                                                "description": description,
                                                                "hour_1": hour_1,
                                                                "day_1": day_1,
                                                                "days_2": days_2,
                                                                "days_3_10": days_3_10,
                                                                "days_10_20": days_10_20,
                                                                "days_20_30": days_20_30,
                                                                "min_term": min_term
                                                            },
                                                            url: "/scripts/admin/cars/ajaxEditCar.php",
                                                            beforeSend: function () {
                                                                $.notify("Информация обновляется...", "info")
                                                            },
                                                            success: function (response) {
                                                                switch(response) {
                                                                    case "ok":
                                                                        $.notify("Информация успешно обновлена.", "success");
                                                                        break;
                                                                    case "failed":
                                                                        $.notify("Во время обновления информации произошла ошибка. Попробуйте снова.", "error");
                                                                        break;
                                                                    case "places":
                                                                        $.notify("Вы не ввели количество мест.", "error");
                                                                        break;
                                                                    default:
                                                                        $.notify(response, "warn");
                                                                        break;
                                                                }
                                                            }
                                                        });
                                                    } else {
                                                        $.notify("Вы не ввели минимальный срок аренды.", "error");
                                                    }
                                                } else {
                                                    $.notify("Вы не ввели стоимость за 20-30 дней.", "error");
                                                }
                                            } else {
                                                $.notify("Вы не ввели стоимость за 10-20 дней.", "error");
                                            }
                                        } else {
                                            $.notify("Вы не ввели стоимость за 3-10 дней.", "error");
                                        }
                                    } else {
                                        $.notify("Вы не ввели стоимость за 2 дня.", "error");
                                    }
                                } else {
                                    $.notify("Вы не ввели стоимость за 1 день.", "error");
                                }
                            } else {
                                $.notify("Вы не ввели стоимость за 1 час.", "error");
                            }
                        } else {
                            $.notify("Вы не ввели тип кузова.", "error");
                        }
                    } else {
                        $.notify("Вы не ввели тип трансмисии.", "error");
                    }
                }
            } else {
                $.notify("Вы не ввели тип двигателя.", "error");
            }
        } else {
            $.notify("Вы не ввели год выпуска.", "error");
        }
    } else {
        $.notify("Вы не ввели название.", "error");
    }
}

function deleteCar() {
    const id = $('#carSelect').val();

    $.ajax({
        type: "POST",
        data: {"id": id},
        url: "/scripts/admin/cars/ajaxCarName.php",
        success: function (name) {
            if(confirm("Вы действительно хотите удалить " + name + "?")) {
                $.ajax({
                    type: "POST",
                    data: {"id": id},
                    url: "/scripts/admin/ajaxDeleteCar.php",
                    beforeSend: function () {
                        $.notify(name + " удаляется...", "info");
                    },
                    success: function (response) {
                        switch (response) {
                            case "ok":
                                $.notify(name + " успешно удалён.", "success");

                                setTimeout(function () {
                                    window.location = "/admin/cars/";
                                }, 3000);
                                break;
                            case "failed":
                                $.notify("Во время удаления автомобиля произошла ошибка. Попробуйте снова.", "error");
                                break;
                            default:
                                $.notify(response, "warn");
                                break;
                        }
                    }
                });
            }
        }
    });
}