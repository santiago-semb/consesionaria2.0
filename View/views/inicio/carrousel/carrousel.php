<div id="contenido" class="p-12">
<div class="h-24 bg-gray-200"><img class="w-36 h-24 ml-8" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-ford.png"></div>

        <button id="back" class="float-left mt-32 ml-64"><i class="fa-solid fa-arrow-left"></i></button>

        <div class="w-96 h-64 absolute ml-96 mt-12">
            <img id="img-auto" class="camionetas-ford w-72 h-64 float-right" src="../../../../../consesionaria2.0/View/assets/img/automoviles/maverick-hibrida.png" alt="auto">
        </div>
        <div class="w-96 h-64 absolute ml-96 mt-12">
            <img id="img-auto" class="camionetas-ford w-72 h-64 opacity-0 float-right" src="../../../../../consesionaria2.0/View/assets/img/automoviles/bronco.png" alt="auto">
        </div>
        <div class="w-96 h-64 absolute ml-96 mt-12">
            <img id="img-auto" class="camionetas-ford w-72 h-64 opacity-0 float-right" src="../../../../../consesionaria2.0/View/assets/img/automoviles/maverick.png" alt="auto">
        </div>
        
        <button id="go" class="float-right mt-32 mr-64"><i class="fa-solid fa-arrow-right"></i></button>
        
</div>
</div>

<script>
    // botones siguiente y anterior
    let go = document.getElementById("go")
    let back = document.getElementById("back")

    let ford = document.getElementsByClassName("camionetas-ford") 

    carrousel(ford)   
    carrousel(chevrolet)
    
    function carrousel(marca)
    {
        let contador = 0;
        let num = 0

        go.addEventListener("click", () => {     
        while(contador < marca.length && num <marca.length-1)
        {
            marca[num].style.opacity = "0"
            num++  
            contador++
            break;
        }
        if(num < marca.length)
        {
            marca[num].style.opacity = "100"
        }
    })
    
    back.addEventListener("click", () => {
        while(num < marca.length && num > 0)
        {
            marca[num].style.opacity = "0"
            num--
            contador--
            break;
        }
        if(num < marca.length)
        {
            marca[num].style.opacity = "100"
        }
    })
    }

</script>