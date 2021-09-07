function initPopup() {
    let pop = document.querySelector('#popup');
    let close = document.querySelector('.popup__close');

    pop.style.cssText= " display: block;  ";
    pop.animate([
        { opacity:  '0' },
        { opacity: '1' }
    ], {
        duration: 200,
    })
    setTimeout(()=>{
        pop.style.cssText= "opacity: 1;  display: block; ";
    }, 200);


    document.querySelector("body").style.cssText= "overflow: hidden"
    let overlay =  document.querySelector('.popup__overlay');


    close.addEventListener('click',(e) =>{
        pop.style.cssText= "display: none; opacity: 0;  "
        document.querySelector("body").style.cssText= "overflow: visible"
    });


    overlay.addEventListener('click',(e) =>{
        if (e.target.classList.contains("popup__overlay")) {
            console.log('block-6-form__body')
            pop.style.cssText= "display: none; opacity: 0;  "
            document.querySelector("body").style.cssText= "overflow: visible"
        }
    });
}
document.querySelectorAll('.popup-init-js').forEach((cell)=>{
    cell.addEventListener('click',(e) =>{
        initPopup()
    });

})







