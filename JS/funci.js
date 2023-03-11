const incioo = document.getElementById('inicioo');
const cliente = document.getElementById('infoCliente');
const credito = document.getElementById('infoCredito');

// cliente.addEventListener('click',pageCliente)
incioo.addEventListener('click',pageInicio)
cliente.addEventListener('click',pageCliente)
credito.addEventListener('click',pageCredito)

const divvv = document.querySelector(".container")
const divInici = document.querySelector(".container")


const clientet =
`
<div class="table-responsive m-auto">

    <div class="contain">
    <h3>Cuenta de clientes</h3>
    </div>

    <table class="table table-sm align-middle  table-success table-striped table-hover table-bordered">
        <thead class="align-middle  justify-content-center flex-direction">
            <tr>
                <th class="text-black text-center">Nombre</th>
                <th class="text-black text-center">Apellido</th>
                <th class="text-black text-center">NIT/CC</th>
            
                <th class="text-black text-center">Dirección</th>
                <th class="text-black text-center">Ciudad</th>
                <th class="text-black text-center">Teléfono</th>
                <th class="text-black text-center">Cupo Disponible</th>
                <th colspan="2" class="text-black text-center">Estado</th>
                <th class="text-black text-center">Acciones </th>

            </tr>
        </thead>
    </table>
</div>    

`
const inicio =
    `
    <div class="divinicio">
    Inicio
    </div>
    <div class="contenedorcard">

    <div class="divcard">
        <p>Creditos</p>
        <h3>23</h3>
        <img src="../img/img2/tarjeta-de-debito (1).png" alt="">
    </div>
    <div class="divcard"> 
        <p>Número de clientes</p>
        <h3>53</h3>
        <img src="../img/img2/cliente (2).png" alt="">
    </div>
    </div>      

    `
    
function pageInicio() {

    divInici.innerHTML=inicio
}

function pageCliente(){
    divvv.innerHTML = clientet
}

function pageCredito() {
    
}