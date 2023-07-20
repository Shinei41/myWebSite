const value = document.getElementById('value'); 
const loadingPageBack = () => {
    const loader = document.querySelector('#js-loader'); 
    loader.classList.add('opacity'); 
}

if(!sessionStorage.getItem('visited')) {
    sessionStorage.setItem('visited', 'first'); 
    window.addEventListener('load', () => {
        setTimeout(loadingPageBack, 3000); 
    }); 
}else {
    loadingPageBack(); 
}

let i = 0

const tomeId = setInterval(function() {
     value.innerHTML = `${i}%`; 

     i++; 

     if(i > 100) {
        clearInterval(tomeId); 
     }
}, 25)

const burger = document.querySelector('.burger')
const nav = document.querySelector('.nav-links')
// const navLinks = document.querySelector('.nav-li')

burger.addEventListener('click', () => {
    nav.classList.toggle("nav-active"); 

    //burger animataion
     burger.classList.toggle("toggle");
})

