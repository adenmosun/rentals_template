$(document).ready(function(){
    $("#hidebtn").click(function(){
        $("form").hide(1000);
    });
    $("#showbtn").click(function(){
        $("form").show();
    });
});


$(document).ready(function(){
    $("#hidebtn").click(function(){
        $("#myCarousel").hide(1000);
    });
    $("#showbtn").click(function(){
        $("#myCarousel").show();
    });
});

$(document).ready(function(){
    $("button").click(function(){
        var div = $("#anime");
        div.animate({height: '900px', opacity: '0.4'}, "slow");
        div.animate({width: '1900px', opacity: '0.8'}, "slow");
        div.animate({height: '5px', opacity: '0.4'}, "slow");
        div.animate({width: '5px', opacity: '0.8'}, "slow");
    });
});

$(document).ready(function () {

    $('#contact_form').validate({ 
        rules: {
            email: {
                required: true,
                email: true
            },
            name: {
                required: true,
                minlength: 5
            },
            msg: {
                required: true,
                minlength: 10
            }
        },
        submitHandler: function (form) { 
            alert('valid form submitted');
            return false; // for demo
        }
    });

});