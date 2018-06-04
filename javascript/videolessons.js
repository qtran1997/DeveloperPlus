$(document).ready(function() {
    $('#filter-all').on('click',function () {
        disable();
        $('.card').each(function (){
            if($(this).is(":visible")) {
                console.log($(this));
            }
            else {
                $('.card').fadeIn(400, function(){
                    enable();
                });
            }
        });


    });
    $('#filter-css').on('click',function () {
        disable();
        $('.card:visible').fadeOut(400 ,function () {
            $('.tut-css').fadeIn(400, function() {
                enable();
            });
        });
    });
    $('#filter-html').on('click',function () {
        disable();
        $('.card:visible').fadeOut(400 ,function () {
            $('.tut-html').fadeIn(400, function (){
                enable();
            });
        });
    });
    $('#filter-bs').on('click',function () {
        disable();
        $('.card:visible').fadeOut(400 ,function () {
            $('.tut-bs').fadeIn(400, function(){
                enable();
            });
        });
    });

    function disable() {
        $('.nav-link').prop('disabled',true);
    };

    function enable() {
        $('.nav-link').prop('disabled',false);
    };
});