<div style="max-width: 500px; margin: 0 auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
    <h2 style="margin-bottom: 20px; color: #2c3e50;">Crear Nuevo Producto</h2>

    <form action="<?=base_url?>Producto/save" method="POST" enctype="multipart/form-data">
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Nombre del producto:</label>
            <input type="text" name="nombre" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Descripción:</label>
            <textarea name="descripcion" rows="3" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Precio ($):</label>
            <input type="number" step="0.01" name="precio" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Stock / Unidades:</label>
            <input type="number" name="stock" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Categoría:</label>
            <?php 
                require_once 'models/categoria.php';
                $cat_model = new Categoria();
                $categorias_lista = $cat_model->getAll();
            ?>
            <select name="categoria" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <?php while($cat = $categorias_lista->fetch_object()): ?>
                    <option value="<?= $cat->id_categoria ?>"><?= $cat->nombre ?></option>
                <?php endwhile; ?>
            </select>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Imagen del Producto:</label>
            <input type="file" name="imagen" accept="image/*" required style="width: 100%;">
        </div>

        <button type="submit" style="background: #27ae60; color: white; padding: 10px 15px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; width: 100%;">Guardar Producto</button>
    </form>
</div>