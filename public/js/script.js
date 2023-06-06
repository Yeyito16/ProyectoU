$(document).ready(function () {
    // Cargar la lista de registros al cargar la página
    loadUserList();
    // Función que reconoce el envio del formulario y agrega un nuevo registro
    $('#addForm').submit(function (e) {
        e.preventDefault();
        let nombre = $('#nombre').val();
        let apellido = $('#apellido').val();
        let telefono = $('#telefono').val();
        let cedula = $('#cedula').val();
        //Banderita para verificar que cada validación es exitosa
        let banderita = true;
        //Verificar que el campo no está vacio a partir de expresioes regulares (Patrones de texto)
        if (nombre.trim() == '' || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s´'-]{3,20}$/.test(nombre)) {
            banderita = false;
            alert('Asegurese de ingresar un nombre válido!')
        }
        if (apellido.trim() == '' || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s´'-]{3,20}$/.test(apellido)) {
            banderita = false;
            alert('Asegurese de ingresar un apellido válido!')
        }
        //Verificar que el campo no está vacio y una exprexión regular (Patrón de texto)
        if (telefono.trim() == '' || !/^\d{10}$/.test(telefono)) {
            banderita = false;
            alert('Asegurese de ingresar un teléfono válido!')
        }
        if (cedula.trim() == '' || !/^\d{8,11}$/.test(cedula)) {
            banderita = false;
            alert('Asegurese de ingresar una cédula válida!')
        }
        if (banderita) {
            let formData = $(this).serialize();
            //Petición ajax
            $.ajax({
                url: 'addPeople.php',
                type: 'POST',
                data: formData,
                success: function (response) {
                    alert(response);
                    loadUserList(); // Actualizar la lista de registros después de agregar o no un nuevo registro
                    $('#addForm')[0].reset(); // Limpiar el formulario
                }
            });
        }
    });
});

// Cargar la lista de registros mediante Ajax
function loadUserList() {
    //Petición ajax
    $.ajax({
        url: 'getPeople.php',
        type: 'GET',
        success: function (response) {
            $('#userTableBody').html(response);
        }
    });
}

// Eliminar un registro mediante Ajax
function deleteUser(id) {
    if (confirm('¿Estás seguro de eliminar este registro?')) {
        //Petición ajax
        $.ajax({
            url: 'deletePeople.php',
            type: 'POST',
            data: { id: id },
            success: function (response) {
                alert(response);
                loadUserList(); // Actualizar la lista de usuarios después de eliminar o no el registro!
            }
        });
    }
}

// Actualizar un registro mediante Ajax
function updateUser(id) {
    let nombre = prompt('Ingrese el nuevo nombre:');
    let apellido = prompt('Ingrese el nuevo apellido:');
    let telefono = prompt('Ingrese el nuevo teléfono:');
    let cedula = prompt('Ingrese la nueva cédula:');

    let banderitaUpdate = true;

    if (nombre.trim() == '' || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s´'-]{3,20}$/.test(nombre)) {
        banderitaUpdate = false;
        alert('Asegurese de ingresar un nombre válido!')
    }
    if (apellido.trim() == '' || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s´'-]{3,20}$/.test(apellido)) {
        banderitaUpdate = false;
        alert('Asegurese de ingresar un apellido válido!')
    }
    //Verificar que el campo no está vacio y una exprexión regular (Patrón de texto!)
    if (telefono.trim() == '' || !/^\d{10}$/.test(telefono)) {
        banderitaUpdate = false;
        alert('Asegurese de ingresar un teléfono válido!')
    }
    if (cedula.trim() == '' || !/^\d{8,11}$/.test(cedula)) {
        banderitaUpdate = false;
        alert('Asegurese de ingresar una cédula válida!')
    }
    if (banderitaUpdate) {
        //Petición ajax
        $.ajax({
            url: 'updatePeople.php',
            type: 'POST',
            data: {
                id: id,
                nombre: nombre,
                apellido: apellido,
                telefono: telefono,
                cedula: cedula
            },
            success: function (response) {
                alert(response);
                loadUserList(); // Actualizamos la lista de usuarios después de la actualización
            }
        });
    }
}