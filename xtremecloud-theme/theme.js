document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('xc-toggle-theme');

    if (!toggle) return;

    toggle.addEventListener('click', () => {
        // Aquí podrías alternar clases si más adelante quieres modo claro
        toggle.classList.toggle('xc-btn-active');
    });
});
