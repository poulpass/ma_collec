$("#changeProfil").click(function(){
	var nom_user = $("#nom").val();
	var mail_user = $("#mail").val();
  
	$.ajax({
		type:"POST",
		url:'./connection/requetteChangeUser.php',
		data:{
			user_pseudo: nom_user,
			mail: mail_user,
			avatar: avatar
		},
		success: function(arg){
			M.toast({html: arg})  
			affichageAdmin();
		}
	});
});