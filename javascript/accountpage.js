$(document).ready(function () {
    var ectoggle = 0;
    var pctoggle = 0;
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