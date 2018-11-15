$("#valideNewUser").click(function(){
	var nom_user = $("#nom").val();
	var mail_user = $("#mail").val();
	var password_user = $("#password").val();
	var droit_user = document.querySelector('input[name="role"]:checked').value;
  
	$.ajax({
		type:"POST",
		url:'admin_back/requetteNewUser.php',
		data:{
			nom: nom_user,
			mail: mail_user,
			password: password_user,
			droit: droit_user
		},
		success: function(arg){
			M.toast({html: arg})  
			$("#listeAdmin").html("");
			affichageAdmin();
		}
	});
});