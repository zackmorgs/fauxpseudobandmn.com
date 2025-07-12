
const scrollToContent = () => {
    let content = document.querySelector('.content');

    // smooth scroll to content
    if (content) {
        content.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
            content: 'nearest'
        });
    } else {
        console.error('Content element not found');
    }
};

const handleNavClick = (event) => {
    let nav_main = document.getElementById('nav_main');

    event.target.innerText = nav_main.classList.contains('open') ? 'Menu' : 'Close';

    nav_main.classList.toggle('open');
    event.preventDefault();
    event.stopPropagation();
};

const handleNavState = () => {
    const nav_main = document.getElementById('nav_main');

    if (nav_main) {
        let navLinks = nav_main.querySelectorAll('a');
        let pathname = window.location.pathname;
        if (pathname != "/") {
            console.log('Current pathname:', pathname);
            navLinks.forEach((link) => {
                // console.log(link.href);
                if (link.href.includes(pathname)) {
                    link.classList.add('active');
                }
            });
        }
    } else {
        console.error('Navigation elements not found');
    }
};

// onload
document.addEventListener('DOMContentLoaded', () => {
    handleNavState();
});
