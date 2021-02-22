const h1s = document.getElementsByTagName('h1');

function premiereLettreMajuscule(string) {
    return string.substring(0, 1).toUpperCase() + string.substring(1).toLowerCase();
}

Object.values(h1s).forEach(h1 => h1.innerText = premiereLettreMajuscule(h1.innerText));