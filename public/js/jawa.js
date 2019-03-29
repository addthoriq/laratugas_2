$(document).ready(function(){
    $('.sidebar-menu').tree()
    $('.alert').alert('')
    $("#inputNama").blur(function(){
        var nama    = $("#inputNama").val();
        if (nama == "") {
            $("#bintang").text("*");
            $("#inputNama").css("border-color", "#a94442");
        }else {
            $("#bintang").text("");
        }
    });
    $("#inputEmail").blur(function(){
        var email    = $("#inputEmail").val();
        var pesan    = "Email Terverifikasi ";
        if (email == "") {
            $("#bintang2").text("*");
            $("#inputEmail").css("border-color", "#a94442");
        }else if (email.search('@')>=0) {
            $("#pesanEmail").text(pesan);
        }else {
            $("#bintang2").text("*");
            $("#inputEmail").css("border-color", "#a94442");
        }
    });
    $("#inputPassword").blur(function(){
        var pass    = $("#inputPassword").val();
        if (pass == "") {
            $("#bintang3").text("*");
            $("#inputPassword").css("border-color", "#a94442");
        }else {
            $(".bintang").text("");
        }
    });
});
