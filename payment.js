$(document).ready(function()
{
var rootRef = firebase.database().ref().child("Information");

rootRef.on("child_added", snap =>
{ 
	var fee= snap.child("Fee").val();
	var id= snap.child("ID").val();
	var name= snap.child("Name").val();
	var tute= snap.child("Tute").val();
	var grade= snap.child("Grade").val();
	var month= snap.child("Month").val();
    
	
	$("#table_body").append("<tr><td>" + name + " </td><td>" + id + "</td><td>" + tute + "</td><td>" + grade +  "</td><td>" + month + "</td><td>" + fee + "</td><td> <button> Edit </button> <button> Delete </button>  </td></tr>" );
	
});
});
