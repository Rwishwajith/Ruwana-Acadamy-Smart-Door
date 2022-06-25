const id=document.getElementById("getUID");
const name=document.getElementById("div_refresh");
const tute=document.getElementById("tute");
const grade=document.getElementById("grade");
const month=document.getElementById("Month");
const fee=document.getElementById("Fee");
const add=document.getElementById("btnsave");
const database=firebase.database();
add.addEventListener('click',(e)=>{
    e.preventDefault();
    database.ref('/Information/'+id.value).set({
        Fee:fee.value,
        ID:id.value,
        Name:name.value,
        Grade:grade.value,
        Month:month.value,
        Tute:tute.value
        
    });
});