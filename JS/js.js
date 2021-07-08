let consejobtn = document.querySelector('#consejo');
let suconsejo = document.querySelector('#suconsejo');
let otroconsejobtn = document.querySelector('#otro-consejo');
let randomfig = document.querySelector('#randomfig');
let robotwizard = document.querySelector('#robotwizard');
let sectionbotones= document.querySelector('.sectionbotones')

function consejos() {
    
    consejobtn.addEventListener('click', function(){
        location.reload();
    })

    otroconsejobtn.addEventListener('click', function(){
        suconsejo.innerHTML="Deberás pensar dos veces dónde metés tus datos personales... <br> Los datos que llenaste hace un rato son los que más se usan en recuperación de cuentas de correos electrónicos. <br> ¡Evitá hackeos y caer en estafas!";
        randomfig.classList.remove('centro');
        randomfig.classList.add('remove');
        robotwizard.classList.add('centro');
        sectionbotones.classList.remove('sectionbotones');
        sectionbotones.classList.add('remove');

        
    })

}

consejos();

