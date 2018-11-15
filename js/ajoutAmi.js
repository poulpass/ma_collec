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