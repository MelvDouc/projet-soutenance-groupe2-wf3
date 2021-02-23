const h1s = document.getElementsByTagName('h1');

function premiereLettreMajuscule(elem) {
    if (elem != null) {
        let str = elem.innerText;
        elem.innerText = str.substring(0, 1).toUpperCase() + str.substring(1);
    }
}

Object.values(h1s).forEach(h1 => premiereLettreMajuscule(h1));