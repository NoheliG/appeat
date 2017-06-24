function validarEmail(valor) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)) {
        return (true)
    } else {
        return (false);
    }
}


function validar() {


    form.submit()
}