<x-layouts.layout title="Contacto">
  <div class="hero ">
    <div class="hero h-65 "></div>
    <div class="hero text-neutral">
      <!-- Contenedor ajustado al tamaño más pequeño -->
      <div class="max-w-4xl w-full p-5 bg-white rounded-lg shadow-xl h-auto">
        <h1 class="text-3xl font-bold mb-5 text-center text-black">Contacto</h1>
        <form action="/enviar" method="POST">
          @csrf
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Columna izquierda para Nombre y Apellido -->
            <div class="space-y-4">
              <div class="form-control">
                <label class="label">
                  <span class="label-text text-black">Nombre <span class="text-red-500">*</span></span>
                </label>
                <input type="text" name="nombre" class="input input-bordered w-full text-sm py-2" placeholder="Tu nombre" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text text-black">Apellido</span>
                </label>
                <input type="text" name="apellido" class="input input-bordered w-full text-sm py-2" placeholder="Tu apellido (opcional)" />
              </div>
            </div>
            <!-- Columna derecha para Correo y Mensaje -->
            <div class="space-y-4">
              <div class="form-control">
                <label class="label">
                  <span class="label-text text-black">Correo electrónico <span class="text-red-500">*</span></span>
                </label>
                <input type="email" name="correo" class="input input-bordered w-full text-sm py-2" placeholder="Tu correo electrónico" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text text-black">Mensaje <span class="text-red-500">*</span></span>
                </label>
                <textarea name="mensaje" class="textarea textarea-bordered w-full text-sm py-2" placeholder="Escribe tu mensaje..." required></textarea>
              </div>
            </div>
          </div>

          <!-- Botón de envío -->
          <div class="form-control mt-6 text-center">
            <button type="submit" class="btn btn-primary w-full sm:w-auto mx-auto text-sm py-2">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layouts.layout>
