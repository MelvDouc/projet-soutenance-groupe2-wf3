window.addEventListener('DOMContentLoaded', function () {
    const footerCol4Uls = document.querySelectorAll('footer .col-4 ul'),
        registrationFormPseudo = document.querySelector('#registration_form_pseudo');

    function equalizeHeights(elems) {
        let heights = [];
        let getHeight = elem => parseFloat(window.getComputedStyle(elem).height);
        Object.values(elems).forEach(elem => heights.push(getHeight(elem)));
        Object.values(elems).forEach(elem => elem.style.height = Math.max(...heights) + 'px');
    }

    equalizeHeights(footerCol4Uls);
    window.addEventListener('resize', equalizeHeights(footerCol4Uls))

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
})
