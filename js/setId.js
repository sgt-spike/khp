let main = document.querySelector('main');
let url = window.location.href.substr(window.location.href.search("=") + 1);
main.id = url;