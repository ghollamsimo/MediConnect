const choicerole = document.getElementById('role');
const Specialiter = document.getElementById('Specialiter');

Specialiter.style.display = 'none';

choicerole.addEventListener('change', function() {
    if (choicerole.value === 'Medecin') {
        Specialiter.style.display = 'block';
    } else {
        Specialiter.style.display = 'none';
    }
});
