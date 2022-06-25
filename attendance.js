$(document).ready(function()
{
var rootRef = firebase.database().ref().child("users");

rootRef.on("child_added", snap =>
{ 
	var name= snap.child("Name").val();
	var id= snap.child("ID").val();
	
	
	$("#table_body").append("<tr><td>" + name + " </td><td>" + id + " </td></tr>" );
	
});
});