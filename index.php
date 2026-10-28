<?php
include('conexion.php');

// Cerrar sesión si el usuario hace clic en Salir
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php#inicio");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Basketball Store</title>
    <script>
        function mostrarSeccion(idSeccion) {
            document.getElementById('inicio').style.display = 'none';
            document.getElementById('iniciar_sesion').style.display = 'none';
            document.getElementById('registro').style.display = 'none';
            
            document.getElementById(idSeccion).style.display = 'block';
        }
    </script>
</head>
<body bgcolor="#f4f4f4" text="#000000" link="#0000ee" vlink="#551a8b" style="margin: 0; padding: 0;">

    <!-- MENSAJE DE BIENVENIDA ARRIBA DEL HEADER -->
    <?php if (isset($_SESSION['usuario_nombre'])): ?>
        <table width="100%" bgcolor="#ff6600" cellpadding="8" cellspacing="0">
            <tr>
                <td align="center">
                    <font color="#ffffff" size="4" face="Arial">
                        <b>¡BIENVENIDO, <?php echo strtoupper($_SESSION['usuario_nombre']); ?>!</b>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="index.php?logout=1"><font color="#ffffff"><u>Cerrar Sesión</u></font></a>
                    </font>
                </td>
            </tr>
        </table>
    <?php endif; ?>

    <!-- HEADER / ENCABEZADO -->
    <table width="100%" bgcolor="#1a1a1a" cellpadding="15" cellspacing="0">
        <tr>
            <td align="center">
                <font color="#ffffff" size="6" face="Arial">
                    <b>BASKETBALL STORE</b>
                </font>
                <br>
                <font color="#ff6600" size="3" face="Arial">
                    <i>La tienda oficial de los apasionados del baloncesto</i>
                </font>
            </td>
        </tr>
    </table>

    <!-- BARRA DE NAVEGACIÓN -->
    <table width="100%" bgcolor="#333333" cellpadding="12" cellspacing="0">
        <tr>
            <td align="center">
                <font face="Arial" size="4">
                    <a href="#inicio" onclick="mostrarSeccion('inicio');"><font color="#ffffff"><b>INICIO</b></font></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="#iniciar_sesion" onclick="mostrarSeccion('iniciar_sesion');"><font color="#ffffff"><b>INICIAR SESIÓN</b></font></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="#registro" onclick="mostrarSeccion('registro');"><font color="#ffffff"><b>REGISTRARSE</b></font></a>
                </font>
            </td>
        </tr>
    </table>

    <br><br>

    <!-- ========================================== -->
    <!-- SECCIÓN 1: INICIO Y CATÁLOGO DE TENIS -->
    <!-- ========================================== -->
    <div id="inicio" style="display: block;">
        <center>
            <font face="Arial" size="5" color="#1a1a1a">
                <h2>CATÁLOGO DE TENIS DE BASKETBALL</h2>
            </font>
            <font face="Arial" size="3" color="#555555">
                <p>Selección especial con los mejores modelos del mercado</p>
            </font>
        </center>

        <!-- TABLA DE PRODUCTOS (8 TENIS) -->
        <table align="center" width="90%" border="1" cellspacing="10" cellpadding="10" bordercolor="#cccccc" bgcolor="#ffffff">
            <tr align="center">
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=250" width="180" height="150" alt="Nike Air Zoom"><br><br>
                    <font face="Arial" size="3"><b>Nike Air Zoom GT Cut</b></font><br>
                    <font face="Arial" size="2" color="#666666">Edición Especial</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$3,299 MXN</b></font>
                </td>
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1552346154-21d32810aba3?w=250" width="180" height="150" alt="Jordan Retro 4"><br><br>
                    <font face="Arial" size="3"><b>Air Jordan Retro 4</b></font><br>
                    <font face="Arial" size="2" color="#666666">Clásicos de Leyenda</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$4,599 MXN</b></font>
                </td>
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1608256246200-53e635b5b65f?w=250" width="180" height="150" alt="Curry Flow"><br><br>
                    <font face="Arial" size="3"><b>Curry Flow 10</b></font><br>
                    <font face="Arial" size="2" color="#666666">Súper Ligeros</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$3,899 MXN</b></font>
                </td>
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=250" width="180" height="150" alt="LeBron 20"><br><br>
                    <font face="Arial" size="3"><b>LeBron XX Trinity</b></font><br>
                    <font face="Arial" size="2" color="#666666">Máxima Amortiguación</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$4,199 MXN</b></font>
                </td>
            </tr>
            <tr align="center">
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=250" width="180" height="150" alt="KD 15"><br><br>
                    <font face="Arial" size="3"><b>Nike KD 15 Kevin Durant</b></font><br>
                    <font face="Arial" size="2" color="#666666">Agarre Extremo</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$3,499 MXN</b></font>
                </td>
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?w=250" width="180" height="150" alt="Puma MB.02"><br><br>
                    <font face="Arial" size="3"><b>Puma MB.02 LaMelo Ball</b></font><br>
                    <font face="Arial" size="2" color="#666666">Diseño Estelar</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$3,199 MXN</b></font>
                </td>
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1579338559194-a162d19bf842?w=250" width="180" height="150" alt="Freak 4"><br><br>
                    <font face="Arial" size="3"><b>Zoom Freak 4 Giannis</b></font><br>
                    <font face="Arial" size="2" color="#666666">Velocidad y Tracción</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$2,999 MXN</b></font>
                </td>
                <td width="25%">
                    <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?w=250" width="180" height="150" alt="Dame 8"><br><br>
                    <font face="Arial" size="3"><b>Adidas Dame 8 Lillard</b></font><br>
                    <font face="Arial" size="2" color="#666666">Control Total</font><br>
                    <font face="Arial" size="4" color="#ff6600"><b>$2,799 MXN</b></font>
                </td>
            </tr>
        </table>
    </div>

    <!-- ========================================== -->
    <!-- SECCIÓN 2: INICIAR SESIÓN -->
    <!-- ========================================== -->
    <div id="iniciar_sesion" style="display: none;">
        <br><br>
        <table align="center" width="450" border="1" cellspacing="0" cellpadding="20" bordercolor="#cccccc" bgcolor="#ffffff">
            <tr>
                <td align="center">
                    <font face="Arial" size="5" color="#1a1a1a">
                        <h2>INICIAR SESIÓN</h2>
                    </font>
                    
                    <form action="procesar.php" method="POST">
                        <input type="hidden" name="accion" value="login">
                        <table width="100%" cellpadding="8" border="0">
                            <tr>
                                <td>
                                    <font face="Arial" size="3"><b>Correo Electrónico:</b></font><br>
                                    <input type="email" name="correo" placeholder="ejemplo@correo.com" required style="width: 95%; padding: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font face="Arial" size="3"><b>Contraseña:</b></font><br>
                                    <input type="password" name="contrasena" placeholder="********" required style="width: 95%; padding: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><br>
                                    <input type="submit" value="ENTER" style="padding: 8px 30px; background-color: #ff6600; color: white; border: none; font-weight: bold; cursor: pointer;">
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><br>
                                    <font face="Arial" size="2">
                                        Si no tienes cuenta <a href="#registro" onclick="mostrarSeccion('registro');"><font color="#ff6600"><b>Registrarse</b></font></a>
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>

    <!-- ========================================== -->
    <!-- SECCIÓN 3: REGISTRARSE -->
    <!-- ========================================== -->
    <div id="registro" style="display: none;">
        <br><br>
        <table align="center" width="500" border="1" cellspacing="0" cellpadding="20" bordercolor="#cccccc" bgcolor="#ffffff">
            <tr>
                <td align="center">
                    <font face="Arial" size="5" color="#1a1a1a">
                        <h2>CREAR UNA CUENTA</h2>
                    </font>

                    <form action="procesar.php" method="POST">
                        <input type="hidden" name="accion" value="registro">
                        <table width="100%" cellpadding="6" border="0">
                            <tr>
                                <td>
                                    <font face="Arial" size="3"><b>Nombre Completo:</b></font><br>
                                    <input type="text" name="nombre" placeholder="Juan Pérez" required style="width: 95%; padding: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font face="Arial" size="3"><b>Correo Electrónico:</b></font><br>
                                    <input type="email" name="correo" placeholder="correo@ejemplo.com" required style="width: 95%; padding: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font face="Arial" size="3"><b>Contraseña:</b></font><br>
                                    <input type="password" name="contrasena" placeholder="Crea una contraseña" required style="width: 95%; padding: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font face="Arial" size="3"><b>Número de Celular:</b></font><br>
                                    <input type="tel" name="celular" placeholder="6561234567" required style="width: 95%; padding: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font face="Arial" size="3"><b>País:</b></font><br>
                                    <select name="pais" required style="width: 97%; padding: 5px;">
                                        <option value="">-- Selecciona tu país --</option>
                                        <option value="México">México</option>
                                        <option value="Estados Unidos">Estados Unidos</option>
                                        <option value="España">España</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Chile">Chile</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><br>
                                    <input type="submit" value="REGISTRARSE" style="padding: 10px 30px; background-color: #ff6600; color: white; border: none; font-weight: bold; cursor: pointer;">
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>

    <br><br><br>

    <!-- FOOTER / PIE DE PÁGINA -->
    <table width="100%" bgcolor="#1a1a1a" cellpadding="15" cellspacing="0" style="position: fixed; bottom: 0; left: 0;">
        <tr>
            <td align="center">
                <font color="#ffffff" size="3" face="Arial">
                    Jaime Omar Morales Reynoso 5-J
                </font>
            </td>
        </tr>
    </table>

</body>
</html>