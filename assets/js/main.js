let mobileMenu = document.querySelector('.mobileMenu');
mobileMenu.addEventListener('click', e => {
    e.preventDefault();
    let navMenu = document.querySelector('.nav nav ul');
    if(navMenu.style.display == 'block') {
        navMenu.style.display = 'none';
    } else {
        navMenu.style.display = 'block';
    }
});

let tags = document.querySelectorAll('.tagInfoNav ul li');
let tagContents = document.querySelectorAll('.tagContent');
for(let tag=0; tag<tags.length; tag++) {
    tags[tag].addEventListener('click', e => {
        e.preventDefault();
        let $attr = e.target.getAttribute('data-tag');
        let tagContent = document.querySelector('.tagContent[data-tags="'+$attr+'"]');
        for(let tagContent=0; tagContent<tagContents.length; tagContent++) {
            tagContents[tagContent].classList.remove('active');
        }
        for(let t=0; t<tags.length; t++) {
            tags[t].classList.remove('active');
        }
        e.target.classList.add('active');
        tagContent.classList.add('active');
        
    });
}

let menus = document.querySelectorAll('.nav ul li a');
for(let m=0; m<menus.length; m++) {
    menus[m].addEventListener('click', e => {
        e.preventDefault();
        alert('Oops! Page under construction!! Try again later!!!');
    });
}

let modalActivators = document.querySelectorAll('.modalActivator');
let modals = document.querySelectorAll('.modal');
let modalCloses = document.querySelectorAll('.modalClose');
for(let i=0; i<modalActivators.length; i++) {
    modalActivators[i].addEventListener('click', e => {
        e.preventDefault();
        let $attr = e.target.getAttribute('data-mod');
        for(let m=0; m<modals.length; m++) {
            modals[m].classList.remove('add');
        }
        let $modal = document.querySelector('.modal[data-modal="'+$attr+'"]');
        $modal.classList.add('active');
    });
}

for(let i=0; i<modalCloses.length; i++) {
    modalCloses[i].addEventListener('click', e => {
        e.preventDefault();
        let $attr = e.target.getAttribute('data-close');
        let $modal = document.querySelector('.modal[data-modal="'+$attr+'"]');
        $modal.classList.remove('active');
    });
}

let heroContentHeader = document.querySelector('.heroContentHeader');
let heroContentParagraph = document.querySelector('.heroContentParagraph');