<div style="max-width: 900px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px;">
    <h2 style="margin-bottom: 15px;">Gestión de Productos</h2>

    <a href="<?=base_url?>Producto/crear" style="display: inline-block; background: #27ae60; color: white; padding: 8px 12px; text-decoration: none; border-radius: 4px; margin-bottom: 15px; font-weight: bold;">+ Crear Producto</a>

    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #2c3e50; color: white;">
                <th style="padding: 10px; text-align: left;">ID</th>
                <th style="padding: 10px; text-align: left;">Nombre</th>
                <th style="padding: 10px; text-align: left;">Precio</th>
                <th style="padding: 10px; text-align: left;">Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php while($pro = $productos->fetch_object()): ?>
                <tr style="border-bottom: 1px solid #ccc;">
                    <td style="padding: 10px;"><?= $pro->id_producto ?? $pro->id ?></td>
                    <td style="padding: 10px;"><?= $pro->nombre ?></td>
                    <td style="padding: 10px;">$<?= number_format($pro->precio, 2) ?></td>
                    <td style="padding: 10px;"><?= isset($pro->stock) ? $pro->stock : ($pro->unidades ?? 0) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
