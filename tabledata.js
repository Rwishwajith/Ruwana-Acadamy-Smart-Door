$(document).ready(function()
{
var rootRef = firebase.database().ref().child("users");

rootRef.on("child_added", snap =>
{ 
	var name= snap.child("Name").val();
	var id= snap.child("ID").val();
	var gender= snap.child("Gender").val();
	var email= snap.child("email").val();
	var subject= snap.child("Subject").val();
	var mobile= snap.child("Mobile").val();
	
	$("#table_body").append("<tr><td> <input type=checkbox name=myCheckbox />   </td><td>" + name + " </td><td>" + id + "</td><td>" + gender + "</td><td>" + email + "</td><td>" + subject + "</td><td>" + mobile + "</td></tr>" );
	
});
});
