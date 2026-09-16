<h1 style="text-align: center; margin: 20px 0 30px 0; color: #2c3e50;">Algunos de nuestros productos</h1>

<div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center; max-width: 1100px; margin: 0 auto;">
    <?php while($product = $productos->fetch_object()): ?>
        <div style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; width: 230px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between;">
            
            <div>
                <?php if (!empty($product->imagen)): ?>
                    <img src="/aura-boutique/uploads/images/<?=$product->imagen?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; margin-bottom: 12px;" alt="<?=$product->nombre?>">
                <?php else: ?>
                    <div style="width: 100%; height: 200px; background: #eee; display: flex; align-items: center; justify-content: center; border-radius: 6px; margin-bottom: 12px; color: #888;">Sin imagen</div>
                <?php endif; ?>

                <h3 style="font-size: 1.1rem; color: #333; margin-bottom: 8px; font-weight: 600;"><?= $product->nombre ?></h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 10px; height: 40px; overflow: hidden;"><?= $product->descripcion ?></p>
            </div>

            <div>
                <p style="color: #27ae60; font-weight: bold; font-size: 1.3rem; margin-bottom: 12px;">$<?= number_format($product->precio, 2) ?></p>
                <a href="#" style="background: #e67e22; color: white; padding: 8px 15px; text-decoration: none; border-radius: 4px; display: block; font-weight: bold;">Comprar</a>
            </div>

        </div>
    <?php endwhile; ?>
</div>