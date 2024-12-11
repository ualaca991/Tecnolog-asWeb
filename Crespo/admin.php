<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="css/styles_admin.css">
</head>

<body>
    <!-- Header de administrador -->
    <header class="admin-header">
        <div class="logo-container">
            <div class="logo">
                <img class="icono" src="images/header/Logo.jpeg" alt="Logo">
                <img class="nombre" src="images/header/Nombre.jpg" alt="Óptica Crespo">
            </div>
        </div>
        <h1 class="admin-title">Inicio Administrador</h1>
    </header>

    <!-- Contenedor principal -->
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="#panel"><img src="images/admin/panel.png" class="sidebar-icon" onclick="adminProductos.php"> Panel</a></li>
                    <li><a href="#productos"><img src="images/admin/productos.png" class="sidebar-icon"> Productos</a></li>
                    <li><a href="#citas"><img src="images/admin/calendario.png" class="sidebar-icon"> Citas</a></li>
                    <li><a href="#estadisticas"><img src="images/admin/stats.png" class="sidebar-icon"> Estadísticas</a></li>
                    <li><a href="#ventas"><img src="images/admin/ventas.png"class="sidebar-icon"> Ventas</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="main-content">
            <!-- Sección de Modificar Ofertas -->
            <div class="section">
                <div class="flex-container">
                    <div class="content">
                        <h1>Modificar Ofertas</h1>
                        <button onclick="location.href='#'">Ver todo</button>
                    </div>
                    <div class="image-container">
                        <img src="images/admin/mbappe.jpg" alt="Modificar Ofertas">
                    </div>
                </div>
            </div>

            <!-- Sección de Visualizar Catálogo -->
            <div class="section">
              <div class="flex-container reverse-layout">
                    <div class="image-container">
                      <img src="images/admin/catalogoGafas.jpg" alt="Visualizar Catálogo">
                    </div>
                    <div class="content">
                        <h1>Visualizar Catálogo</h1>
                        <p>Vista previa del catálogo de productos</p>
                        <button onclick="location.href='#'">Ver todo</button>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="flex-container">
                    <div class="content">
                        <h1>Estadísticas</h1>
                        <p>Previa visualización de la estadisticas</p>
                        <button onclick="location.href='#'">Acceso a Estadísticas</button>
                    </div>
                    <div class="image-container">
                        <img src="images/admin/estadisticas.jpeg" alt="Visualizar Catálogo">
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include_once "footer2.php" ?>
</body>

</html>
