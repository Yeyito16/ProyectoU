<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con Ajax y PHP</title>
     <!-- CDN Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>
    <div class="container">
        <div class="mainTitle">
            <h1>Registro General</h1>
        </div>
        <div class="secTitle">
            <h2>Agregar Registro</h2>
        </div>
        <div class="displayReg">
            <div class="formCont">
                <form id="addForm" class="firstForm" autocomplete="off">
                    <input type="text" class="inputForm" id="nombre" name="nombre" placeholder="Nombre" required>
                    <input type="text" class="inputForm" id="apellido" name="apellido" placeholder="Apellido" required>
                    <input type="number" class="inputForm" id="telefono" name="telefono" placeholder="Teléfono" required>
                    <input type="number" class="inputForm" id="cedula" name="cedula" placeholder="Cédula" required>
                    <div class="sendBtn">
                        <button class="btnForm" type="submit">Agregar Registro</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="thirdTitle">
            <h2>Lista de Personas</h2>
        </div>
        <div class="tableCont">
            <table id="userTable" class="tableMain" border="1">
                <thead>
                    <tr>
                        <th class="light tblHead">Nombre</th>
                        <th class="dark tblHead">Apellido</th>
                        <th class="light tblHead">Teléfono</th>
                        <th class="dark tblHead">Cédula</th>
                        <th class="light tblHead" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                </tbody>
            </table>
        </div>
    </div>
    <!-- CDN JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SCRIPTS -->
    <script src="./public/js/script.js"></script>
</body>
</html>
