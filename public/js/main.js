window.addEventListener('DOMContentLoaded', function () {
    const footerCol4Uls = document.querySelectorAll('footer .col-4 ul'),
        registrationFormPseudo = document.querySelector('#registration_form_pseudo'),
        navULCategories = document.querySelectorAll('nav ul li');

    function getPropValue(elem, prop) {
        return parseFloat(window.getComputedStyle(elem).getPropertyValue(prop));
    }

    function equalizeHeights(elems) {
        let heights = [];
        Object.values(elems).forEach(elem => heights.push(getPropValue(elem, 'height')));
        Object.values(elems).forEach(elem => elem.style.height = Math.max(...heights) + 'px');
    }

    equalizeHeights(footerCol4Uls);
    window.addEventListener('resize', equalizeHeights(footerCol4Uls))

    //

    function equalizeWidths(elems) {
        let childrenWidth = 100 / elems.length;
        Object.values(elems).forEach(elem => elem.style.width = childrenWidth + '%');
    }

    equalizeWidths(navULCategories);

    //

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


})
