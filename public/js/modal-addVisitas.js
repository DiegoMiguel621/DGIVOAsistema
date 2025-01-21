document.addEventListener("DOMContentLoaded", function () {
    const btnAgregarVisita = document.getElementById("btn-agregar-visita");
    const modal = document.getElementById("modal-agregar-visita");
    const btnCerrarModal = document.getElementById("btn-cerrar-modal");
    const selectDependencia = document.getElementById("dependencia");
    const labelMunicipio = document.getElementById("label-municipio");
    const inputMunicipio = document.getElementById("municipio");

    // Mostrar el modal
    btnAgregarVisita.addEventListener("click", function () {
        modal.style.display = "flex";
    });

    // Cerrar el modal
    btnCerrarModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Mostrar/Ocultar campo "Municipio"
    selectDependencia.addEventListener("change", function () {
        if (selectDependencia.value === "Municipio") {
            labelMunicipio.classList.remove("hidden");
            inputMunicipio.classList.remove("hidden");
        } else {
            labelMunicipio.classList.add("hidden");
            inputMunicipio.classList.add("hidden");
        }
    });
});
