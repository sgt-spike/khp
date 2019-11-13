let home = '/khp/index.php';
let stories = '/khp/familystories.php';
let events = '/khp/events.php';
let whoweare = '/khp/whoweare.php';
let donate = '/khp/donate.php';
let sponsors = '/khp/sponsors.php';
let contact = '/khp/contact.php';


window.onload = function() {
    setActiveLink();
};
let aLinks = document.querySelectorAll('.nav-item-a');
sidebarLinks = document.querySelectorAll('.nav-sidebar-item-a');

function setActiveLink() {

    for (i = 0; i < aLinks.length; i++) {
        if (aLinks[i].classList.contains('active')) {
            aLinks[i].classList.remove('active');
        }
    }
    sidebarLinks.forEach(link => {
        if (link.classList.contains('active')) {
            link.classList.remove('active');
        }
    });

    if (location.pathname == home) {
        document.querySelector('#home').className = 'active';
        document.querySelector('#sidebar-home').className = 'active';
    } else if (location.pathname == stories) {
        document.querySelector('#stories').className = 'active';
        document.querySelector('#sidebar-stories').className = 'active';
    } else if (location.pathname == events) {
        document.querySelector('#events').className = 'active';
        document.querySelector('#sidebar-events').className = 'active';
    } else if (location.pathname == whoweare) {
        document.querySelector('#us').className = 'active';
        document.querySelector('#sidebar-us').className = 'active';
    } else if (location.pathname == sponsors) {
        document.querySelector('#sponsors').className = 'active';
        document.querySelector('#sidebar-sponsors').className = 'active';
    } else if (location.pathname == donate) {
        document.querySelector('#donate').className = 'active';
        document.querySelector('#sidebar-donate').className = 'active';
    } else if (location.pathname == contact) {
        document.querySelector('#contact').className = 'active';
        // document.querySelector('#contact').style.color = '#ffffff';
        document.querySelector('#sidebar-contact').className = 'active';
        // document.querySelector('#sidebar-contact').style.color = '#ffffff';
    }
}