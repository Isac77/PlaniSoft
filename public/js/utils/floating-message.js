/**
* Mensaje flotante de carga
*/
const loadingFMessage = () => {
    $("#floating-message div").html(`
        <span class="text-white">Procesando...</span>
            <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    `);
    $("#floating-message").toggleClass('active');
}

/**
* Mensaje flotante de texto
* @param {String} msj 
*/
const textFMessage = (msj) => {
    $("#floating-message div").html(`
        <span class="text-white">${msj}</span>
        <button class="btn btn-flat-success" type="button">OK</button>
    `);
    $("#floating-message").toggleClass('active');
}

/**
* Oculta el mensaje flotante
*/
const hideFMessage = () => {
    setTimeout(() => {
        $("#floating-message").toggleClass('active');
        $("#floating-message div").html('');
    }, 500);
}