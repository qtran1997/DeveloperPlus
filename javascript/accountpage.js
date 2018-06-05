$(document).ready(function () {
    var ectoggle = 0;
    var pctoggle = 0;
    $('#namechangebutton').on('click', function(){
        if(ectoggle ==0) {
            $('#namechange').removeAttr('disabled');
            $('#namechange').attr('enabled');
            $('#namechange').val($('#namechange').attr('placeholder'));
            $('#namechangebutton').text('DONE');
            ectoggle = 1;
        }
        else{
            $('#namechange').removeAttr('enabled');
            $('#namechange').attr('disabled', true);
            $('#namechangebutton').text('EDIT');
            ectoggle = 0;
        }
    });
    $('#emailchangebutton').on('click', function(){
        if(ectoggle ==0) {
            $('#emailchange').removeAttr('disabled');
            $('#emailchange').attr('enabled');
            $('#emailchange').val($('#emailchange').attr('placeholder'));
            $('#emailchangebutton').text('DONE');
            ectoggle = 1;
        }
        else{
            $('#emailchange').removeAttr('enabled');
            $('#emailchange').attr('disabled', true);
            $('#emailchangebutton').text('EDIT');
            ectoggle = 0;
        }
    });
    $('#passwordchangebutton').on('click', function(){
        if(pctoggle ==0) {
            $('.passwordchange').removeAttr('disabled');
            $('.passwordchange').attr('enabled');
            $('.passwordchange').attr('placeholder', '');
            $('#passwordchangebutton').text('DONE');
            pctoggle = 1;
        }
        else{
            $('.passwordchange').removeAttr('enabled');
            $('.passwordchange').attr('disabled', true);
            $('#passwordchangebutton').text('EDIT');
            pctoggle = 0;
        }
    });
});