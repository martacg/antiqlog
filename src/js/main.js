(function(){

    //LOADER

    const pagina = document.getElementById("loader");
    setTimeout(() => {
        pagina.classList.add("opacity");
    }, 1000);
    setTimeout(() => {
        pagina.classList.add('hidden');
    }, 2000);
    
    

}());


//STICKY

const header = document.getElementById("header");

window.addEventListener("scroll", function() {
        
    var scroll = window.pageYOffset | document.body.scrollTop;
      
    if (scroll > 1) { 
        header.classList.add("sticky");
    }else if (scroll <= 1) { 
        header.classList.remove("sticky"); 
    }
});
      

//FORM

const msgBox = document.getElementById("msgBox");

function validar(formulario) {
        if(formulario.name.value=="" || formulario.lastname.value == "" || formulario.phone.value == "" || formulario.email.value == "" || formulario.comments.value == ""){
            msgBox.classList.remove("msg__box--success");
            msgBox.classList.add("msg__box--error");
            msgBox.innerHTML = "Faltan datos por rellenar";
            return false;
        }
        if(!formulario.legal.checked){
            msgBox.classList.remove("msg__box--success");
            msgBox.classList.add("msg__box--error");
            msgBox.innerHTML = "Es necesario aceptar el aviso legal.";
            return false;
        }
    
    return enviaForm(formulario);
}

function enviaForm(formulario){

    
    msgBox.classList.remove("msg__box--error");
    msgBox.classList.remove("msg__box--success");
    msgBox.classList.add("msg__box--info");

    msgBox.innerHTML = "Procesando...";
    
    const XHR = new XMLHttpRequest();
  
    let urlEncodedData = "",
        urlEncodedDataPairs = [],
        name;
  
    // Convertir data object en array
    for( name in formulario ) {
      urlEncodedDataPairs.push( encodeURIComponent( name ) + '=' + encodeURIComponent( formulario[name] ) );
    }
  
    urlEncodedData = urlEncodedDataPairs.join( '&' ).replace( /%20/g, '+' );
  
    // Procesamiento con éxito
    XHR.addEventListener( 'load', function(event) {
      msgBox.classList.remove("msg__box--error");
      msgBox.classList.add("msg__box--success");
      formulario.reset();
      msgBox.innerHTML = "¡Mensaje Enviado!";
    } );
  
    // Error al procesar
    XHR.addEventListener( 'error', function(event) {
        msgBox.classList.remove("msg__box--error");
        msgBox.classList.add("msg__box--success");
        msgBox.innerHTML = "Se ha producido un error.";
    } );
  
    // Configurar solicitud
    XHR.open( 'POST', 'https://martagonzalez.dev/lab/frontend-test/sendMail.php' );
  
    // Encabezado HTTP requerido para las solicitudes POST de datos de formulario
    XHR.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
  
    // Enviar data
    XHR.send( urlEncodedData );

}