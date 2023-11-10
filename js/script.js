document.getElementById("createForm").addEventListener("submit", function (e) {
  e.preventDefault();

  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var edad = document.getElementById("edad").value;
  var telefono = document.getElementById("telefono").value;
  crearUsuario(nombre, apellido, edad, telefono);
});

function crearUsuario(nombre, apellido, edad, telefono) {
  fetch("./php/create.php", {
    method: "POST",
    body: new URLSearchParams({
      nombre: nombre,
      apellido: apellido,
      edad: edad,
      telefono: telefono,
    }),
  })
    .then((response) => response.text())
    .then((data) => console.log(data))
    .catch((error) => console.error(error));
}

function obtenerUsuarios() {
  fetch("./php/read.php")
    .then((response) => response.json())
    .then((usuarios) => {
      let html = '<ul class="list-group">';
      usuarios.forEach((usuario) => {
        html += `<li class="list-group-item">${usuario.nombre} ${usuario.apellido} - ${usuario.edad} años - Tel: ${usuario.telefono}</li>`;
      });
      html += "</ul>";
      document.getElementById("usuariosLista").innerHTML = html;
    })
    .catch((error) => {
      console.error("Error al cargar los usuarios:", error);
      document.getElementById("usuariosLista").innerHTML =
        "<p>Ocurrió un error al cargar los usuarios.</p>";
    });
}

document.getElementById("updateForm").addEventListener("submit", function (e) {
  e.preventDefault();
  var id = document.getElementById("updateId").value;
  var nombre = document.getElementById("updateNombre").value;
  var apellido = document.getElementById("updateApellido").value;
  var edad = document.getElementById("updateEdad").value;
  var telefono = document.getElementById("updateTelefono").value;
  actualizarUsuario(id, nombre, apellido, edad, telefono);
});

function actualizarUsuario(id, nombre, apellido, edad, telefono) {
  fetch("./php/update.php", {
    method: "POST",
    body: new URLSearchParams({
      id: id,
      nombre: nombre,
      apellido: apellido,
      edad: edad,
      telefono: telefono,
    }),
  })
    .then((response) => response.text())
    .then((data) => console.log(data))
    .catch((error) => console.error(error));
}

document.getElementById("deleteForm").addEventListener("submit", function (e) {
  e.preventDefault();
  var id = document.getElementById("deleteId").value;
  eliminarUsuario(id);
});

function eliminarUsuario(id) {
  fetch("./php/delete.php", {
    method: "POST",
    body: new URLSearchParams({ id: id }),
  })
    .then((response) => response.text())
    .then((data) => console.log(data))
    .catch((error) => console.error(error));
}
