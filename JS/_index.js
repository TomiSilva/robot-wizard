let button = document.querySelector('#button');
let button2= document.querySelector('#button2');
let button3= document.querySelector('#button3');
let form = document.querySelector('#form');


function ocultar() {
    button.addEventListener('click', function() {

        respuesta1.classList.add('remove');
        respuesta2.classList.add('active');
        button2.classList.add('active');
              
        
    });

    button2.addEventListener('click', function() {
        
        respuesta2.classList.toggle('active');
        respuesta3.classList.add('active');     
        

    })

    button3.addEventListener('click', function(){
        
        preguntas.classList.toggle('centro');
        preguntas.classList.add('remove');
        form.classList.add('active'); 
        form.classList.add('centro');
        

    })


    



}

ocultar();