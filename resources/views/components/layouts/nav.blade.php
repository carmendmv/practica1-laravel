<nav class="h-10v bg-nav flex flex-row, justify-start items-center px-4">
   
    <button class="btn btn-primary btn-outline btn-sm mr-2 bg-white">About</button>
    <button class="btn btn-primary btn-outline btn-sm mr-2 bg-white">Contacto</button>
    <button class="btn btn-primary btn-outline btn-sm mr-2 bg-white">Noticias</button>
    @auth 
        <button class="btn btn-primary btn-outline btn-sm mr-2 bg-white">Mi perfil</button>
    @endauth
    

</nav>