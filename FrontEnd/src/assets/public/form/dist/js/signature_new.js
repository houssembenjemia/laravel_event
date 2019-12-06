var isSign = false;
var leftMButtonDown = false;

jQuery(function () {
    //Initialize sign pad
    init_Sign_Canvas();
});

function fun_submit() {
    if (isSign) {
        var canvas = $("#canvas").get(0);
        var signature = canvas.toDataURL();
        var title = 'Succés';
        var _msg = 'Signature prise avec succés.';
        Success(title, _msg);
        $('#signature').val(signature);
        console.log($('#signature').val());
    } else {
        var title = 'Signature';
        var msg = 'Veuillez signer svp.';
        Error(title, msg);
    }
}
$('#addProp').click(function () {
    var title = 'Succés';
    var _msg = 'Signature prise avec succés.';
    Success(title, _msg);
});
function closePopUp() {
    jQuery('#divPopUpSignContract').popup('close');
    jQuery('#divPopUpSignContract').popup('close');
}

function init_Sign_Canvas() {

    isSign = false;
    leftMButtonDown = false;

    //Set Canvas width
    var sizedWindowWidth = $(window).width();
    if (sizedWindowWidth > 700)
        sizedWindowWidth = $(window).width() / 2;
    else if (sizedWindowWidth > 400)
        sizedWindowWidth = sizedWindowWidth - 100;
    else
        sizedWindowWidth = sizedWindowWidth - 50;

//    $("#canvas").width(sizedWindowWidth);
//    $("#canvas").height(200);

    $("#canvas").css("width", "100% !important");
    $("#canvas").css("height", "auto");
    $("#canvas").css("border", "1px solid #000");

    var canvas = $("#canvas").get(0);

    canvasContext = canvas.getContext('2d');

    if (canvasContext) {
        canvasContext.canvas.width = sizedWindowWidth;
        canvasContext.canvas.height = 200;

        canvasContext.fillStyle = "#fff";
        canvasContext.fillRect(0, 0, sizedWindowWidth, 200);

        /*
         canvasContext.moveTo(50, 150);
         canvasContext.lineTo(sizedWindowWidth - 50, 150);
         canvasContext.stroke();
         
         canvasContext.fillStyle = "#000";
         canvasContext.font = "20px Arial";
         canvasContext.fillText("x", 40, 155);
         */
    }
    // Bind Mouse events
    $(canvas).on('mousedown', function (e) {
        if (e.which === 1) {
            leftMButtonDown = true;
            canvasContext.fillStyle = "#000";
            var x = e.pageX - $(e.target).offset().left;
            var y = e.pageY - $(e.target).offset().top;
            canvasContext.moveTo(x, y);
        }
        e.preventDefault();
        return false;
    });

    $(canvas).on('mouseup', function (e) {
        if (leftMButtonDown && e.which === 1) {
            leftMButtonDown = false;
            isSign = true;
        }
        e.preventDefault();
        return false;
    });

    // draw a line from the last point to this one
    $(canvas).on('mousemove', function (e) {
        if (leftMButtonDown == true) {
            canvasContext.fillStyle = "#000";
            var x = e.pageX - $(e.target).offset().left;
            var y = e.pageY - $(e.target).offset().top;
            canvasContext.lineTo(x, y);
            canvasContext.stroke();
        }
        e.preventDefault();
        return false;
    });

    //bind touch events
    $(canvas).on('touchstart', function (e) {
        leftMButtonDown = true;
        canvasContext.fillStyle = "#000";
        var t = e.originalEvent.touches[0];
        var x = t.pageX - $(e.target).offset().left;
        var y = t.pageY - $(e.target).offset().top;
        canvasContext.moveTo(x, y);

        e.preventDefault();
        return false;
    });

    $(canvas).on('touchmove', function (e) {
        canvasContext.fillStyle = "#000";
        var t = e.originalEvent.touches[0];
        var x = t.pageX - $(e.target).offset().left;
        var y = t.pageY - $(e.target).offset().top;
        canvasContext.lineTo(x, y);
        canvasContext.stroke();

        e.preventDefault();
        return false;
    });

    $(canvas).on('touchend', function (e) {
        if (leftMButtonDown) {
            leftMButtonDown = false;
            isSign = true;
        }

    });
    console.log(canvasContext);
    $('#signature').val('');
}


// Show error bootstrap plugin
function Error(title, msg) {

    $('#modal_title').html(title);
    $('.alert-success').hide();
    $('.alert-danger').show();
    $('.alert-danger').html(msg);
    $('#info').modal('show');

}

// Show Success bootstrap plugin
function Success(title, msg) {
    $('#modal_title').html(title);
    $('.alert-success').show();
    $('.alert-danger').hide();
    $('.alert-success').html(msg);
    $('#info').modal('show');
}