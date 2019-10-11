let xhr = new XMLHttpRequest();
let main = document.querySelector('main');
document.addEventListener('DOMContentLoaded', initialLoad);

function initialLoad(e) {
    e.preventDefault();
    main.id = 'all';

    xhr.open('GET', `php/markup.php?q=all`, true);
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
    let boardLinks = document.querySelector('#board').querySelectorAll('div');
    for (i = 0; i < boardLinks.length; i++) {
        boardLinks[i].addEventListener('click', boardPage);
    }
}

function boardPage(e) {
    e.preventDefault();
    with(this) {
        switch (id) {
            case 'arrow':
                console.log(this);
                main.id = 'all';
                break;
            case 'us1':
                main.id = 'main-execdir';
                break;
            case 'us2':
                main.id = 'main-founder';
                break;
            case 'us3':
                main.id = 'main-vp';
                break;
            case 'us4':
                main.id = 'main-treasurer';
                break;
            case 'us5':
                main.id = 'main-treasurer';
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