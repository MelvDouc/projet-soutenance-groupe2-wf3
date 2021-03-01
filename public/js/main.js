window.addEventListener('DOMContentLoaded', function () {
    const registrationFormPseudo = document.querySelector('#registration_form_pseudo'),
        headerNavLinks = document.querySelectorAll('header nav .dropdown a'),
        cardBodyTexts = document.querySelectorAll('p.card-text')

    function getPropValue(elem, prop) {
        return parseFloat(window.getComputedStyle(elem).getPropertyValue(prop));
    }

    function generateRandomUsername() {
        let randomInt = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
        let mythicalHeroes = ['Achille', 'Perseus', 'Ulysse', 'Hector', 'Jason', 'Heraklès'];
        let num = randomInt(1, 99);
        num = (num < 10) ? `0${num}` : num;
        let username = mythicalHeroes[randomInt(0, mythicalHeroes.length - 1)] + num;
        return username;
    }

    if (registrationFormPseudo !== null) {
        registrationFormPseudo.setAttribute('placeholder', 'Exemple : ' + generateRandomUsername());
    }

    //

    function setCategoryLinks() {
        for (link of headerNavLinks) {
            let cat = link.closest('ul').getAttribute('aria-labelledBy').split('-')[0];
            link.href = `/produits/${cat}/${link.innerText.toLowerCase()}`
        }
    }

    // setCategoryLinks();

    //

    function equalizeHeights(elems) {
        let heights = [];
        Object.values(elems).forEach(elem => heights.push(getPropValue(elem, 'height')));
        Object.values(elems).forEach(elem => elem.style.height = Math.max(...heights) + 'px');
    }

    equalizeHeights(cardBodyTexts);
    window.addEventListener('resize', equalizeHeights(cardBodyTexts));
})
