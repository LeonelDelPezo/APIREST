<!-- Archivo: app/Views/contactos/Agregar.php -->
<h2>Agregar Producto al Carrito</h2>
<form method="post" action="<?= site_url('contactos/agregar') ?>">
    <label for="nombre">Nombre del Producto:</label>
    <input type="text" name="nombre" required>

    <label for="precio">Precio:</label>
    <input type="number" name="precio" required>

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" required>

    <button type="submit">Agregar al Carrito</button>
</form>
