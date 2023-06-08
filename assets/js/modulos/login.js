
/*

El evento "DOMContentLoaded" es un evento del navegador que se dispara cuando el documento HTML ha sido completamente cargado y analizado, y todos los elementos del DOM (Document Object Model) están disponibles para ser manipulados.

*/

const formularioLogin = document.getElementById("formularioLogin");
const alertCorreo = document.querySelector(".alertCorreo");
const alertClave = document.querySelector(".alertClave");


document.addEventListener("DOMContentLoaded", () => {
    formularioLogin.addEventListener("submit", (event) => {
        event.preventDefault();

        let formulario = new FormData(event.target);
        
        const alertas = [
            {
                error: "correo",
                condition: !(/^(.*)+@+([a-z*])+.+com/g.test(formulario.get("correo"))),
                selector: alertCorreo
            },
            {
                error: "clave",
                condition: formulario.get("clave").length === 0,
                selector: alertClave
            }
        ];

        alertas.map(alert => {
            if (alert.condition) {
                alert.selector.style.display = "block";
                alert.selector.textContent = `El campo ${alert.error} es requerido`;
            } else {
                alert.selector.style.display = "none";
                alert.selector.textContent = "";
            }
        });

        if (formulario.get("correo") && formulario.get("clave")) {
            const url = BASE_URL + "home/validar";
            const http = new XMLHttpRequest();
            http.open("POST", url, true);
            //Enviamos el formData del login
            http.send(formulario);

            http.onreadystatechange = () => {
                if (http.status === 200 && http.readyState === 4) {
                   // implmentar cógido en caso de no haber problemas de autenticación;
                   const responseData = JSON.parse(http.responseText);
                    if(responseData["mensaje"] = "success"){
                        window.location = `${BASE_URL}admin`;
                    }
                    alert(responseData["mensaje"]);
                }
            }
        }
    });
});