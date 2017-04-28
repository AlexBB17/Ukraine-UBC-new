var _init = [];

window.onload = function() {
    for (var i in _init) {
        if (typeof(_init[i]) == 'function') {
            _init[i]();
        }
    }
}

_init.push(function() {
    var showMenu = document.getElementById('show-menu');
    showMenu.onclick = function() {
        var menu = document.getElementsByClassName('js-nav-menu')[0];
        if (!menu.getAttribute('style')) {
            menu.style.display = 'block';
        } else {
            menu.removeAttribute('style');
        }
    }
});