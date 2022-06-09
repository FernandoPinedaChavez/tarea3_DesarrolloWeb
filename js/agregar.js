const formulario = document.querySelector('#formulario');

formulario.addEventListener('submit', (event) => {
    event.preventDefault();

    const data = new FormData(formulario);

    fetch('templates/insertar.php', {
        method: 'post',
        body: data
    })
    .then(res => res.text())
    .then(datos => {
        console.log(datos);
        alert("Datos Ingresados Correctamente");
    })
    .catch(error => {
        console.log(error);
        alert("Error al Ingresar los datos");

    });

    formulario.reset();
})