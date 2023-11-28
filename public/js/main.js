/* Fullscreen */
function fullScreen(btn) {

    if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen();
        btn.innerHTML = '<i class="bi bi-fullscreen-exit"></i>';
    } else {
        document.exitFullscreen();
        btn.innerHTML = '<i class="bi bi-fullscreen"></i>';
    }
}
