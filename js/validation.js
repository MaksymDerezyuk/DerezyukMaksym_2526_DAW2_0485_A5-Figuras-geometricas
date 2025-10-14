// Validaciones básicas para los formularios de lados
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('formLados');
    if (!form) return;

    function showError(id, msg) {
        var el = document.getElementById('err-' + id);
        if (el) el.textContent = msg;
    }

    function clearError(id) {
        var el = document.getElementById('err-' + id);
        if (el) el.textContent = '';
    }

    var inputs = form.querySelectorAll('input[type="number"]');
    inputs.forEach(function (inp) {
        inp.addEventListener('blur', function () {
            var val = inp.value.trim();
            var name = inp.getAttribute('name');
            if (val === '') {
                showError(name, 'Este campo es obligatorio');
            } else if (isNaN(val) || Number(val) <= 0) {
                showError(name, 'Introduce un número mayor que 0');
            } else {
                clearError(name);
            }
        });
    });

    form.addEventListener('submit', function (e) {
        var valid = true;
        inputs.forEach(function (inp) {
            var val = inp.value.trim();
            var name = inp.getAttribute('name');
            if (val === '' || isNaN(val) || Number(val) <= 0) {
                valid = false;
                showError(name, 'Introduce un número válido mayor que 0');
            }
        });
        if (!valid) e.preventDefault();
    });
});
