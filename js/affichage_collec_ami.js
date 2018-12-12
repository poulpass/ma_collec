var order = 0;
var time = 0;
var id
$(".id").click(
    function affichageCollec(){
        id = $(".id").val();
        console.log("id")
        $.ajax({
            type:"POST",
            url:'allbook_ami.php',
            data:{
                id: id
            },
            success:function(arg){
                $("#affichage_book").html(arg);
            }
        })
    }
);
$("#alpha").click(
    function affichageCollec(){
        if (order == 0) {
            order = 1;
            $.ajax({
                type:"POST",
                url:'allbook_desc.php',
        
                success:function(arg){
                    $("#affichage_book").html(arg);
                }
            })
        }
        else{
            order = 0;
            $.ajax({
                type:"POST",
                url:'allbook.php',
        
                success:function(arg){
                    $("#affichage_book").html(arg);
                }
            })
        }   
    }

);

$("#date").click(
    function affichageCollec(){
        if (time == 0) {
            time = 1;
            $.ajax({
                type:"POST",
                url:'allbook_id.php',
        
                success:function(arg){
                    $("#affichage_book").html(arg);
                }
            })
        }
        else{
            time = 0;
            $.ajax({
                type:"POST",
                url:'allbook_id_desc.php',
        
                success:function(arg){
                    $("#affichage_book").html(arg);
                }
            })
        }   
    }
);

$("#loupe").change(function() {
    var loupe_txt = $("#loupe").val();
    console.log(loupe_txt)
    $.ajax({
        type:"POST",
        url:'allbook_loupe.php',
        data:{
            loupe: loupe_txt
        },
        success:function(arg){
            $("#affichage_book").html(arg);
        }
    })
});

$("#loupe_ami").change(function() {
    var loupe_txt = $("#loupe_ami").val();
    var idguy = $("#idguy").val();
    console.log(loupe_txt)
    $.ajax({
        type:"POST",
        url:'allbook_loupe_ami.php',
        data:{
            loupe: loupe_txt,
            idguy: idguy
        },
        success:function(arg){
            $("#affichage_book").html(arg);
        }
    })
});