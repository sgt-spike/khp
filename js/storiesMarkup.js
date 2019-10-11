let xhr = new XMLHttpRequest();
let main = document.querySelector('main');
document.addEventListener('DOMContentLoaded', initialLoad);

function initialLoad(e) {
    e.preventDefault();
    main.id = 'main-stories';

    xhr.open('GET', `php/markup.php?q=stories`, true);
    xhr.onload = function() {
        if (this.status == 200) {
            let page = JSON.parse(this.responseText);
            main.innerHTML = page.markup;
        }
    }
    xhr.send();
    setTimeout(setLinks, 2000);
}

function setLinks() {
    let storiesLinks = document.querySelector('#stories-ul').querySelectorAll('li');
    for (i = 0; i < storiesLinks.length; i++) {
        storiesLinks[i].addEventListener('click', storyPage);
    }
}

function storyPage(e) {
    e.preventDefault();
    with(this) {
        switch (id) {
            case 'arrow':
                main.id = 'main-stories';
                break;
            case 'danica':
                main.id = 'main-danica';
                break;
            case 'nathan':
                main.id = 'main-nathan';
                break;
        }
    }
    xhr.open('GET', `php/markup.php?q=${this.id}`, true);
    xhr.onload = function() {
        if (this.status == 200) {
            let page = JSON.parse(this.responseText);
            main.innerHTML = page.markup;
            document.querySelector('i').addEventListener('click', initialLoad);
        }
    }
    xhr.send();
}