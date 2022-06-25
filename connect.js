const id=document.getElementById("getUID");
const name=document.getElementById("div_refresh");
const gender=document.getElementById("gender");
const email=document.getElementById("email");
const subject=document.getElementById("subject");
const tname=document.getElementById("tname");
const mobile=document.getElementById("mobile");
const add=document.getElementById("btnsave");
const database=firebase.database();
add.addEventListener('click',(e)=>{
    e.preventDefault();
    database.ref('/users/'+id.value).set({
        ID:id.value,
        Name:name.value,
        Gender:gender.value,
        Email:email.value,
        Subject:email.value,
        Tname:Tname.value,
        Mobile:mobile.value
    });
});