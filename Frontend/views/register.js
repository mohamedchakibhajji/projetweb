console.log("tt")


function verif(){


	var nom= document.getElementById("typeahead").value;
	var prenom=document.getElementById("typeahead").value;
	var email=document.getElementById("Email").value;
	var trouv="faux";
	var password=document.getElementById("Mot de passe").value;
	var passwordverif=document.getElementById("passverif").value;
	var connect="vrai";

	if ((nom=="") || (prenom==""))
	{
		alert("nom et prenom invalide");
		connect="faux";
		return
	}



	for (var i = email.length - 1; i >= 0; i--) 
	{
		if(email[i]=='@'){
			trouv="vrai";
		}

	}

	if (trouv!="vrai") {
		alert("l'adresse doit contenir '@'");
		connect="faux";
		return

	}


	if (password=="") 
	{
		alert("please fill password");
		connect="faux";
		return
	}

		if(password.substr(0,1).toUpperCase()!=password.substr(0,1))
   {
	    alert("le premier caractère doit etre en majuscule");
	    connect="faux";
	    return
   }

	else if (password.length<6)
	{
		alert("mot de passe doit contenir au minimum 6 caractères");
		connect="faux";
		return
	}

	else if (password.length>15)
	{
		alert("mot de passe doit contenir au maximum 15 caractères");
		connect="faux";	
		return
	}



   

   if (password!=passwordverif)
   {
   		alert("ce nest pas le meme password");
   		connect="faux";
   		return
   }

   if(connect=="vrai"){
   	alert("Client enregistré avec succés");
   }


}



function verif2()
{
	var email= document.getElementById("emaill").value;
	

	var trouv="faux";

	for (var i = email.length - 1; i >= 0; i--) 
	{
		if(email[i]=='@'){
			trouv="vrai";
		}
	}

	if (trouv!="vrai") {
		alert("l'adresse doit contenir '@'");
		return

	}

	var password= document.getElementById("password").value;
	if (password=="") 
	{
		alert("please fill password");
		return
	}


	if(password.substr(0,1).toUpperCase()!=password.substr(0,1))
   {
	    alert("le premier caractère doit etre en majuscule");
	    return
   }

}