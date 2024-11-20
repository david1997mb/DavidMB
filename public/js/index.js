const temaOscuro = () => {
    document.querySelector("body").setAttribute("data-bs-theme", "dark");
    document.querySelector("#dl-icon").setAttribute("class", "bi bi-sun-fill");
    localStorage.setItem("tema", "dark");
};

const temaClaro = () => {
    document.querySelector("body").setAttribute("data-bs-theme", "light");
    document.querySelector("#dl-icon").setAttribute("class", "bi bi-moon-fill");
    localStorage.setItem("tema", "light"); 
};

const cambiarTema = () => {
    document.querySelector("body").getAttribute("data-bs-theme") === "light"
        ? temaOscuro()
        : temaClaro();
};
const inicializarTema = () => {
    const temaGuardado = localStorage.getItem("tema");
    if (temaGuardado === "dark") {
        temaOscuro();
    } else {
        temaClaro();
    }
};

document.addEventListener("DOMContentLoaded", inicializarTema);
