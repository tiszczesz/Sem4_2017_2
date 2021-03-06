
window.onload = start;

function start() {
    var dane = GetAll();
    document.getElementById("koszyk").innerHTML = ToTable(dane);
    document.getElementById("oblicz").onclick = Oblicz;

    function Oblicz() {
        var ilosci = [];
        document.getElementById("wynik").innerHTML="";        
        for (var i = 0; i < dane.length; i++) {
            var ilosc = parseFloat(document.getElementById("il" + i).value);
            if(isNaN(ilosc) || ilosc<0){
                document.getElementById("wynik").innerHTML = "Błędne dane";
                return;
            }
            ilosci.push(ilosc);
        }
        var total = 0;
        for (var i = 0; i < dane.length; i++) {
            total += dane[i][1] * ilosci[i];
        }
        document.getElementById("wynik").innerHTML = total.toFixed(2) + " zł";
    }
}

function GetAll() {
    return [["Czekolada", 2.50], ["Herbata", 4.89], ["Chleb", 3.69], 
        ["Papierosy", 15.20],["Papier toaletowy",0.99]
    ];
}
function ToTable(dane) {
    var html = "<table>";
    for (var i = 0; i < dane.length; i++) {
        html += "<tr><td class='nazwa'>" + dane[i][0] + "</td><td class='cena'>"
                + (dane[i][1]).toFixed(2)
                + " zł</td><td><input type='number' id='il" 
                + i + "' value='0'/> szt.</td></tr>";
    }
    return html + "</table>";
}

