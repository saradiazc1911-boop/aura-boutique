<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Boutique</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f8f9fa; color: #333; }
        header { background: #2c3e50; color: white; padding: 1.5rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        header h1 { font-size: 1.8rem; letter-spacing: 1px; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: 500; transition: color 0.3s; }
        nav a:hover { color: #f39c12; }
        .container { max-width: 1100px; margin: 30px auto; padding: 0 20px; min-height: 70vh; }
        footer { background: #2c3e50; color: white; text-align: center; padding: 1.5rem; margin-top: 40px; }
    </style>
</head>
<body>
    <header>
        <h1>AURA BOUTIQUE</h1>
        <nav>
            <a href="<?=base_url?>">Inicio</a>
            <a href="#">Catálogo</a>
            
            <?php if (isset($_SESSION['admin'])): ?>
                <a href="<?=base_url?>categoria/index" style="color: #f1c40f;">Gestionar Categorías</a>
                <a href="<?=base_url?>producto/gestion" style="color: #f1c40f;">Gestionar Productos</a>
            <?php endif; ?>

            <?php if (isset($_SESSION['identity'])): ?>
                <span style="color: #f39c12; margin-left: 15px;">Hola, <?= $_SESSION['identity']->nombres ?></span>
                <a href="<?=base_url?>usuario/logout">Cerrar Sesión</a>
            <?php else: ?>
                <a href="<?=base_url?>usuario/registro">Registro</a>
                <a href="<?=base_url?>usuario/login">Login</a>
            <?php endif; ?>
        </nav>
    </header>
    <div class="container">