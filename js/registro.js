function checkpass(){
    var name=document.getElementById('name').value; //se podria hacer pasando en el onClick el .value sin necesidad del getElementById como en el check email
    re = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    var email=document.getElementById('email').value
    var username=document.getElementById('username').value;
    var pass=document.getElementById('pass').value;
    var pass2=document.getElementById('pass2').value;

    //checkeo de falta de información
    if((name!="" && name.length>1) && (username!="" && username.length>5) && (pass && pass2 !="")){ //no valen numeros ni simbolos
        alert("campos ok");
    } else alert("faltan campos") //mostrar que campos faltan

    
    // if(re.exect(email)){
        //     alert("email ok");
        // }
        // else alert("email not ok")
        
        //checkeo de password
        if(pass==pass2 && pass.length>8) 
            alert("pass ok");
        else alert("pass not ok") //en caso de error quedarse en la pagina. marcar con animate y border en rojo el fallo (?¿)

        checkuser();
}

function check(value) { //funcion con la base de datos. re determina si hay un @ seguido de un dominio y un . algo
    re = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    if (re.exec(value)) {
        alert('email ok');
    }
    else {
        alert('email not ok');
    }   
}
function checkuser(){
    alert("usuario disponible");//hacer la funcion con la base de datos para ver si ya hay un usuario con ese usuario
}
