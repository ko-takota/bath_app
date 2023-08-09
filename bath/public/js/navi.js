const showNavLinksButton = document.getElementById('naviButton');
const navLinksOpen = document.getElementById('navLinksOpen');

showNavLinksButton.addEventListener('click', () => {
    if (navLinksOpen.style.display == 'none') {
        navLinksOpen.style.display = 'block';
    } else {
        navLinksOpen.style.display = 'none';
    }
});
