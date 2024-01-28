function formatNumber(number) {
    return new Intl.NumberFormat('es-ES').format(number);
}

function convertirKilometrosAMillas(kilometros) {
    var millas = (kilometros * 0.621371).toFixed(2);
    return millas;
}
