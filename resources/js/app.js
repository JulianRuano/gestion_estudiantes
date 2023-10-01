import "./bootstrap";

function eliminarAlumno(alumnoId) {
  if (confirm("¿Desea eliminar el registro?")) {
    axios
      .delete(`/alumnos/${alumnoId}`)
      .then(function (response) {
        // Maneja la respuesta exitosa aquí, por ejemplo, redirige o actualiza la página.
        console.log("Registro eliminado con éxito");
        // Puedes redirigir o recargar la página aquí si es necesario
        window.location.reload();
      })
      .catch(function (error) {
        // Maneja los errores aquí, por ejemplo, muestra un mensaje de error.
        console.error("Error al eliminar el registro", error);
      });
  }
}
