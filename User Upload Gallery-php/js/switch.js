
    $("#switch .color a").click(function () {
        $("#theme").attr({
            href: "assets/stylesheets/themes/" + $(this).attr("id") + ".css"
        });
        $(".color .current").removeClass("current");
        $(this).toggleClass("current")
    });
    $("#show").css({
        "margin-left": "-200px"
    });
    $("#hide, #show").click(function () {
        if ($("#switch").is(":visible")) {
            $("#switch").animate({
                "margin-left": "-200px"
            }, 1000, function () {
                $(this).hide()
            });
            $("#show").animate({
                "margin-left": "0px"
            }, 1000).show()
        } else {
            $("#show").animate({
                "margin-left": "-200px"
            }, 1000, function () {
                $(this).hide()
            });
            $("#switch").show().animate({
                "margin-left": "0"
            }, 1000)
        }
    })

