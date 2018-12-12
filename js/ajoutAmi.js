$("#valideNewUser").click(function(){
	var mail_user = $("#mailami").val();
  
	$.ajax({
		type:"POST",
		url:'./addfriend.php',
		data:{
			mailami: mail_user,
		},
		success: function(arg){
			M.toast({html: arg})  

		}
	});
});

$(".deleteUser").click(function(){
    var x = $(this).attr("value");
  console.log(x);
    $.ajax({
      type:"POST",
      url:"refususer.php",
      data:{
        nom: x,
      },
      success: function(arg){
        M.toast({html: arg});  
      }
    })
    $(this).parent().parent().parent().hide();
  });

  $(".ajoutami").click(function(){
    var x = $(this).attr("value");
  console.log(x);
    $.ajax({
      type:"POST",
      url:"acceptami.php",
      data:{
        nom: x,
      },
      success: function(arg){
        M.toast({html: arg});  
      }
    })
    $(this).parent().hide();
  });

  $("#ajoutlivre").click(function(){
    var titre = $("#titre").val();
    var tome = $("#numero").val();
    var autor = $("#autor").val();
    var bd = $("#bd").val();
    $.ajax({
      type:"POST",
      url:"newbook.php",
      data:{
        titre: titre,
        tome: tome,
        autor: autor,
        bd: bd
      },
      success: function(arg){
        M.toast({html: arg});  
      }
    })
  });

  