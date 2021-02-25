window.addEventListener('DOMContentLoaded', function () {
    const footerCol4Uls = document.querySelectorAll('footer .col-4 ul');

    function equalizeHeights(elems) {
        let heights = [];
        let getHeight = elem => parseFloat(window.getComputedStyle(elem).height);
        Object.values(elems).forEach(elem => heights.push(getHeight(elem)));
        Object.values(elems).forEach(elem => elem.style.height = Math.max(...heights) + 'px');
    }

    equalizeHeights(footerCol4Uls);
    window.addEventListener('resize', equalizeHeights(footerCol4Uls))
})
