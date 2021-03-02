window.addEventListener('DOMContentLoaded', function () {
    const registrationFormPseudo = document.querySelector('#registration_form_pseudo');

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
