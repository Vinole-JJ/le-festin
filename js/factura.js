function registro(){
var plato = document.getElementById("plato").value;
var cantidad = document.getElementById("cantidad").value;
var precio = 0;
var suma = 0;

if (plato=="sandwich") {precio=3}
if (plato=="arepa") {precio=3}
if (plato=="arroz") {precio=5}
if (plato=="pasta") {precio=5}
if (plato=="rata") {precio=10}
if (plato=="pizza") {precio=10}

suma = precio*cantidad + precio*cantidad*0.05

alert("FACTURA" + "\n" + plato + ":" + " " + precio + "$" + "\n" + "cantidad" + ":" + " " + cantidad + "\nsubtotal:" + " " + precio*cantidad + "$" + "\nIva:" + " " + precio*cantidad*0.05 + "$" + " " + "(5%)" + "\ntotal:" + " " + suma)

}

