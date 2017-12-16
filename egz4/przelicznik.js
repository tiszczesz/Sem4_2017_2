window.onload = start;

function start(){
    document.getElementById('kelwiny').onclick = kelwiny;
    document.getElementById('far').onclick = far;
}
function kelwiny(){
    var temp = parseFloat(document.getElementById("temp").value);
    if(!isNaN(temp)){
        document.getElementById("wynik").innerHTML = (temp+273.15)+"K";
    }else{
        alert("Błąd danych");   
         document.getElementById("wynik").innerHTML = "";
    }
}