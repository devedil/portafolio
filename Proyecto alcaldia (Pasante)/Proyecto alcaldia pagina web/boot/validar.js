const form = document.querySelector(".formulario");
const nombre = document.querySelector("#nombre");
const cedula = document.querySelector("#cedula");
const fecha = document.querySelector("#fecha");
const numero = document.querySelector("#numero");
const terminos = document.querySelector("#terminos");
const errorMessage = document.querySelector("#formulario__mensaje");
const inputs = [nombre, cedula, fecha, numero];

form.addEventListener("submit", function(e) {
  e.preventDefault();
  let isValid = true;

  for (const input of inputs) {
    if (!input.value) {
      isValid = false;
      input.parentElement.classList.add("formulario__grupo-input-error");
    } else {
      input.parentElement.classList.remove("formulario__grupo-input-error");
    }
  }

  if (!terminos.checked) {
    isValid = false;
    terminos.parentElement.classList.add("formulario__grupo-input-error");
  } else {
    terminos.parentElement.classList.remove("formulario__grupo-input-error");
  }

  if (!isValid) {
    errorMessage.style.display = "block";
  } else {
    errorMessage.style.display = "none";
    // aquí puedes hacer un submit del formulario a un servidor
  }
});




/*const formulario =document.getElementById('formulario')
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,

   }

function validar() {
  var nombre_completo, correo, usuario, contrasena, expresion;
  nombre_completo = document.getElementById("nombre_completo").value;
  correo = document.getElementById("correo").value;
  usuario = document.getElementById("usuario").value;
  contrasena = document.getElementById("contrasena").value;

  expresion = /\w+@\w+\.+[a-z]/;

  if (
    nombre_completo === "" ||
    correo === "" ||
    usuario === "" ||
    contrasena === ""
  ) {
    alert("Por favor complete todos los campos");
    return false;
  } else if (nombre_completo.length > 50) {
    alert("El nombre es muy largo");
    return false;
  } else if (correo.length > 50) {
    alert("El correo es muy largo");
    return false;
  } else if (!expresion.test(correo)) {
    alert("El correo no es valido");
    return false;
  } else if (usuario.length > 50 || contrasena.length > 50) {
    alert("El usuario y la clave solo deben tener 20 caracteres como maximo");
    return false;
  }
}*/
