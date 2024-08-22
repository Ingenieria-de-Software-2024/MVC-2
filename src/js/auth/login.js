const { validarFormulario, Toast } = require("../funciones")

const formulario = document.querySelector('form')

const iniciar = async (e) => {
    e.preventDefault()
    if (!validarFormulario(formulario)) {
        Toast.fire({
            icon: 'info',
            title: 'Debe llenar todos los campos'
        })

        return;
    }

    try {
        const body = new FormData(formulario)
        const url = "/MVC-2/API/login"
        const config = {
            method: 'POST',
            body
        }

        const respuesta = await fetch(url, config);
        const data = await respuesta.json();
        console.log(data);
        const { codigo, mensaje, detalle } = data;


        let icon = 'info'
        if (codigo == 1) {
            icon = 'success'
            formulario.reset();
            location.href = '/MVC-2/menu'
        } else {
            icon = 'error'
            console.log(detalle);
        }

        Toast.fire({
            icon: icon,
            title: mensaje
        })
    } catch (error) {
        console.log(error);
    }
}

formulario.addEventListener('submit',iniciar)