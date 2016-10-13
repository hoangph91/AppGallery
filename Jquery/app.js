$(document).ready(function() {
    var scrollBody = function(flag){
        if (flag === true) {
            $("body").css("overflow", "scroll");
        } else{
            $("body").css("overflow", "hidden");
        }
    };
    console.log(5);
    var currIndex;
    var showImageFunc = function(currIndex, isFirst) {
        var element = $(".image-item")[currIndex];
        var imgURL = $(element).css('background-image').slice(5, -2);
        imgURL = "url('" + imgURL + "')";
        if (isFirst === true) {
            $("#showImage").fadeIn("fast", function() {
                $("#menu").css("display","none");
                $("#showImage").css("background-image", imgURL);
                $("#showImage").css("background-repeat", "no-repeat");
                $("#showImage").css("background-size", "847.5px 565px")
                $("#divShow").css("display", "block");
                scrollBody(false);
                $("#showImage").css("display", "block");
                $("#showImage").animate({opacity: '1'});
            });
        } else {
            $("#showImage").css("background-image", imgURL);
            $("#showImage").css("background-repeat", "no-repeat");
        }
    };

    var slideIndex = function(currImage) {
        var count = $(".image-item").length;
        var index;
        for (index = 0; index < count; index++) {
            if ($(".image-item")[index] == currImage) {
                return index;
            }
        }
    };

    $(".image-item").on("click", function() {
        currIndex = slideIndex(this);
        console.log(currIndex);
        showImageFunc(currIndex, true);
    });

     /* Set button */
    $("#btn-close").on("click", function() {
        $("#menu").show();
        $("#showImage").css("display","none")
        $("#divShow").css("display","none");
         scrollBody(true);

    });
    $("#btn-left").on("click", function() {
        currIndex += -1;
        console.log(currIndex);
        if (currIndex < 0) {
            currIndex = $(".image-item").length - 1;
        }
        showImageFunc(currIndex, false);
    });
    $("#btn-right").on("click", function() {
        currIndex += 1;
        if (currIndex === $(".image-item").length) {
            currIndex = 0;
        }
        showImageFunc(currIndex, false);
    });
   $(document).on(
    "keydown",
        function(e) {
            switch (e.keyCode) {
                case 27:
                    {
                        $("#divShow").css("display", "none");
                        $("#showImage").css("display", "none");
                        scrollBody(true);
                        break;
                    }
                case 37:
                    {
                        currIndex += -1;
                        if (currIndex < 0) {
                            currIndex = $(".image-item").length - 1;
                        }
                        showImageFunc(currIndex, false);
                        break;
                    }
                case 39:
                    {
                        currIndex += 1;
                        if (currIndex === $(".image-item").length) {
                            currIndex = 0;
                        }
                        showImageFunc(currIndex, false);
                    }
                default:
                    break;
            }
        });
});