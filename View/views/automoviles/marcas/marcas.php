<style>
    img {
        margin-top: 50px;
        transition: 200ms all;
        margin-left: 85px;
    }
</style>

<div class="h-72 bg-white p-12 w-full">
    <h1 class="text-center font-bold text-2xl">Seleccione una marca</h1>
    <div class="bg-white h-48 mx-auto w-96">

        <div class="h-48">
                
                <button id="back" class="float-left mt-24"><i class="fa-solid fa-arrow-left"></i></button>

                <img class="h-32 w-48 inline-block absolute" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-ford" alt="logo-ford">
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-nissan" alt="logo-nissan"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-chevrolet" alt="logo-chevrolet"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-audi" alt="logo-audi"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-renault" alt="logo-renault"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-jeep" alt="logo-jeep"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-dodge" alt="logo-dodge"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-citroen" alt="logo-citroen"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-fiat" alt="logo-fiat"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-mercedes-benz" alt="logo-mercedes-benz"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-peugeot" alt="logo-peugeot"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-toyota" alt="logo-toyota"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-ram" alt="logo-ram"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-volkswagen" alt="logo-volkswagen"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-susuki" alt="logo-susuki"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-mitsubishi" alt="logo-mitsubishi"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-tesla" alt="logo-tesla"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-honda" alt="logo-honda"></a>
                <img class="h-32 w-48 inline-block absolute opacity-0" src="../../../../../consesionaria2.0/View/assets/img/logotipos/logo-hyundai" alt="logo-hyundai"></a>
                <button id="go" class="float-right mt-24"><i class="fa-solid fa-arrow-right"></i></button>
                
        </div>
        
    </div>
    
    <div class="float-right rounded p-1">
        <a href="../../../../../consesionaria2.0/View/views/automoviles/automovil-de-marca.php" class="ml-36 bg-black text-white p-1">Confirmar</a>
    </div>
</div>

<script>
    let go = document.getElementById("go")
    let back = document.getElementById("back")

    let img = document.querySelectorAll("img")
    let contador = 0;
    let num = 0

    go.addEventListener("click", () => {     
        while(contador < img.length && num <img.length-1)
        {
            img[num].style.opacity = "0"
            num++  
            contador++
            break;
        }
        if(num < img.length)
        {
            img[num].style.opacity = "100"
        }
    })
    
    back.addEventListener("click", () => {
        while(num < img.length && num > 0)
        {
            img[num].style.opacity = "0"
            num--
            contador--
            break;
        }
        if(num < img.length)
        {
            img[num].style.opacity = "100"
        }
    })

</script>