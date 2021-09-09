$(document).ready(function() {
    $(".idAdmin").hide();
    $(".inputFullname").hide();
    $(".inputTlp").hide();
    $(".inputEmail").hide();
    $(".inputPassword").hide();
    $("#checkbox1").click(function() {
        if($(this).is(":checked")) {
            $(".idAdmin").show();
            $(".inputFullname").show();
            $(".inputTlp").show();
            $(".inputEmail").show();
            $(".inputPassword").show();
            $('.checkAdmin').hide();
        }
    });
    $("#checkbox2").click(function() {
        if($(this).is(":checked")) {
            $('.checkAdmin').hide();
            $(".idAdmin").hide();
            $(".inputFullname").show();
            $(".inputTlp").show();
            $(".inputEmail").show();
            $(".inputPassword").show();
        }
    });
});
