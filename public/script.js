
window.addEventListener("load", function () {
    // Ja lietotājs atrodas otrajā lapā
    if (window.location.pathname === "/form-example") {
        // Pāradresē uz pašas mājaslapas sākumu
        window.location.replace("/");
    }
});

