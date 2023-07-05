<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<form action="/crear-cuenta" method="POST"  class="formulario">

    <div class="campo">
        <label for="nombre">Nombre</label>
        <input 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Tu Nombre"
        />
    </div>

    <div class="campo">
        <label for="apellido">Apellido</label>
        <input 
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Tu Apellido"
        />
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input 
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Tu teléfono"
        />
    </div>

    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu E-mail"
        />
    </div>

    <div class="campo">
        <label for="email">Contraseña</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu Contraseña"
        />
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">Iniciar Sesión</a>
    <a href="/olvide">¿Olvidaste tu Contraseña?</a>
</div>