$(document).ready(function() {
    var currentVideo = 1;
    var changeVideo = "video" + currentVideo.toString();


    $('#video1').on('click', function() {
        videos['video1']();
    });
    $('#video2').on('click', function() {
        videos['video2']();
    });
    $('#video3').on('click', function() {
        videos['video3']();
    });
    $('#video4').on('click', function() {
        videos['video4']();
    });
    $('#video5').on('click', function() {
        videos['video5']();
    });

    $('.next').on('click', function(){
        if(currentVideo != 5)
        {
            currentVideo++; 
            changeVideo = "video" + currentVideo.toString();
            videos[changeVideo]();
        }

    });
    $('.previous').on('click', function(){
        if(currentVideo != 1)
        {
            currentVideo--; 
            changeVideo = "video" + currentVideo.toString();
            videos[changeVideo]();
        }

    });

    $('.voting:eq(0)').on('click', function(){
        $('.voting:eq(1)').fadeOut(400, function(){
            $('.voting:eq(1)').remove();
            $('#submit-comment').fadeIn(400);
            $('#add-vote, .comment-box').fadeIn(400);
        });
    });



    $('.voting:eq(1)').on('click', function(){
        $('.voting:eq(0)').fadeOut(400, function(){
            $('.voting:eq(0)').remove();
            $('#submit-comment').fadeIn(400);
            $('#add-vote, .comment-box').fadeIn(400);
        });
    });


    var videos = {
        video1 : function() {
            $('#current-video').removeAttr('src');
            $('#current-video').attr('src',"https://www.youtube.com/embed/tQx4lutEhok?rel=0&&load_iv_policy=3;controls=1&showinfo=0");
            currentVideo = 1;
        },
        video2 : function() {
            $('#current-video').removeAttr('src');
            $('#current-video').attr('src',"https://www.youtube.com/embed/xY7m4KzYR4Q?rel=0&&load_iv_policy=3;controls=1&showinfo=0");
            currentVideo = 2;
        },
        video3 : function() {
            $('#current-video').removeAttr('src');
            $('#current-video').attr('src',"https://www.youtube.com/embed/iBqJKstPY0M?rel=0&&load_iv_policy=3;controls=1&showinfo=0");
            currentVideo = 3;
        },
        video4 : function() {
            $('#current-video').removeAttr('src');
            $('#current-video').attr('src',"https://www.youtube.com/embed/7lVuxkmpxwY?rel=0&&load_iv_policy=3;controls=1&showinfo=0");
            currentVideo = 4;
        },
        video5 : function() {
            $('#current-video').removeAttr('src');
            $('#current-video').attr('src',"https://www.youtube.com/embed/8KPUE0_EDR0?rel=0&&load_iv_policy=3;controls=1&showinfo=0");
            currentVideo = 5;
        }
    };
});