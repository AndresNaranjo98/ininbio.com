document.body.onload = productosCarritos();


function productosCarritos(){
    var carrito = document.getElementById('contar');
    var contar = localStorage.getItem("contar");
    carrito.textContent = contar;
}

var btnElm = document.getElementById('Click');
      var carrito = document.getElementById('contar');
      var contar = localStorage.getItem("contar");
      
      btnElm.onclick = function conteoCarrito(){
      
      contar++;
      
      localStorage.setItem("contar", contar);

      carrito.innerHTML = localStorage.getItem("contar");
      return carrito;


    }
    // contar++;
    // btnElm.innerHTML = contar;


