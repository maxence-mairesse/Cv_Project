document.addEventListener('DOMContentLoaded', function () {
    const animatedElement = document.querySelector('.animated-element');

function target (e){

}
    function isElementInViewport(e) {

        const rect = e.getBoundingClientRect();

        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        if (isElementInViewport(animatedElement)) {
            animatedElement.classList.add('animate');
            // Désactive l'écouteur d'événements une fois l'animation déclenchée

        }else {
            animatedElement.classList.remove('animate')
        }
    }



    // Ajoute un écouteur d'événements de défilement pour déclencher l'animation
    window.addEventListener('scroll', handleScroll);

    // Déclenche l'animation si l'élément est déjà visible lors du chargement initial
    handleScroll();
});
