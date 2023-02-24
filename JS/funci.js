const incioo = document.getElementById('inicioo');
const cliente = document.getElementById('infoCliente');
const credito = document.getElementById('infoCredito');

// cliente.addEventListener('click',pageCliente)
credito.addEventListener('click',pageCredito)
const divvv = document.querySelector(".container")


if (incioo.addEventListener('click',pageInicio)) {
    
    function pageInicio() {
        innerHTML=divvv
    }
} 
if (cliente.addEventListener('click',pageCliente)) {
    function pageCliente(){
    
        divvv.innerHTML='<div class="table-responsive m-auto"><table class="table table-sm align-middle  table-success table-striped table-hover table-bordered"><thead class="align-middle  justify-content-center flex-direction"><tr><th class="text-black text-center">Nombre</th><th class="text-black text-center">Apellido</th><th class="text-black text-center">NIT/CC</th><th class="text-black text-center">Dirección</th><th class="text-black text-center">Ciudad</th><th class="text-black text-center">Teléfono</th><th class="text-black text-center">Cupo Disponible</th><th colspan="2" class="text-black text-center">Estado</th></tr></thead></div>'
    }

}



function pageCredito() {
    
}