<x-layouts.layout title="Contacto">
  <div class="hero min-h-[65vh]">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-neutral-content">
      <div class="max-w-4xl w-full p-5 bg-base-100 rounded-lg shadow-xl">
        <h1 class="text-4xl font-bold mb-5 text-center">Contacto</h1>
        <form action="/enviar" method="POST">
          @csrf
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Columna izquierda -->
            <div class="space-y-4">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Nombre <span class="text-red-500">*</span></span>
                </label>
                <input type="text" name="nombre" class="input input-bordered w-full" placeholder="Tu nombre" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Apellido</span>
                </label>
                <input type="text" name="apellido" class="input input-bordered w-full" placeholder="Tu apellido (opcional)" />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Correo electrónico <span class="text-red-500">*</span></span>
                </label>
                <input type="email" name="correo" class="input input-bordered w-full" placeholder="Tu correo electrónico" required />
              </div>
            </div>
            
            <!-- Columna derecha -->
            <div class="space-y-4">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Mensaje <span class="text-red-500">*</span></span>
                </label>
                <textarea name="mensaje" class="textarea textarea-bordered w-full" placeholder="Escribe tu mensaje..." required></textarea>
              </div>
            </div>
          </div>

          <!-- Botón de envío -->
          <div class="form-control mt-6 text-center">
            <button type="submit" class="btn btn-primary w-full sm:w-auto mx-auto">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layouts.layout>