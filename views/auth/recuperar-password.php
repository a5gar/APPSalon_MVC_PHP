<h1 class="nombre-pagina">Restablecer Contraseña</h1>
<p class="descripcion-pagina">Coloca tu nueva cotraseña a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>

<form class="formulario" method="POST">

    <div class="campo"> 
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Tu Nueva Contraseña" name="password">
    </div>

    <input type="submit" value="Reestablecer" class="boton">
</form>

<div class="acciones">
    <a href="/">Iniciar Sesión</a>
    <a href="/crea-cuenta">Crear Cuenta</a>
</div>