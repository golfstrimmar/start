
function initPopupCommon() {
    let Parent = document.querySelector('html');
    let singles = Array.from(document.getElementsByClassName('popup-init-js'))

    singles.forEach((cell) => {

// ----------------------------------
        function initCommon(){
            let id =cell.getAttribute("rel")
            let popup =     document.querySelector(id);
            popup.animate([
                { opacity:  '0' },
                { opacity: '1' }
            ], {
                duration: 200,
            })
            setTimeout(()=>{
                popup.style.cssText= "opacity: 1;  display: block; ";
            }, 200);
            document.querySelector("body").style.cssText= "overflow: hidden"
            let overlay =  popup.querySelector('.popup__overlay');
            let close = popup.querySelector('.popup__close');

            close.addEventListener('click',(e) =>{
                document.querySelector("body").style.cssText= "overflow: visible"
                popup.animate([
                    { opacity:  '1' },
                    { opacity: '0' }
                ], {
                    duration: 200,
                })
                setTimeout(()=>{
                    popup.style.cssText= "opacity: 0;  display: none; ";
                }, 200);
            });

            overlay.addEventListener('click',(e) =>{
                if (e.target.classList.contains("popup__overlay")) {
                    popup.animate([
                        { opacity:  '1' },
                        { opacity: '0' }
                    ], {
                        duration: 200,
                    })
                    setTimeout(()=>{
                        popup.style.cssText= "opacity: 0;  display: none; ";
                    }, 200);
                    document.querySelector("body").style.cssText= "overflow: visible"
                }
            });

        }
// -----------------------------
        cell.addEventListener('click',(e) =>{
            initCommon();
        });
    })
}

initPopupCommon();




