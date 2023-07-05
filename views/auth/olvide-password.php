<h1 class="nombre-pagina">Olvide la Contraseña</h1>
<p class="descripcion-pagina">Restablece tu contraseña escribiendo tu correo a continuación</p>

<form action="/olvide" method="POST" class="formulario">

    <div class="campo">
        <label for="email">Correo</label>
        <input 
            type="email" 
            name="email" 
            id="email" 
            placeholder="Tu Correo"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">Iniciar Sesión</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>