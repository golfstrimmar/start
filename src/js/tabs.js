// ============tabs ==================

    const MyTabs = () => {
        let tabs = document.querySelector('.tabs-container-js');


        let singles = Array.prototype.slice.call(tabs.children);
        singles.forEach((cell) => {
            let title = cell.querySelector('.tab-title-js')
            let span = title.querySelector(' span');
            let hidden = cell.querySelector('.tab-hidden-js');
            let svg = cell.querySelector('.tab-title-js svg');
            let p = true;

            function openItems(e) {
                if (p === true) {
                    hidden.style.cssText = " transform: scaleY(1); max-height: 500px;"
                    svg.style.cssText = "transform: rotate(180deg); stroke: #282828;"
                    span.style.cssText = "color: #282828;"
                    p = !p
                    console.log(p)
                } else {
                    hidden.style.cssText = " transform: scaleY(0); max-height: 0;"
                    svg.style.cssText = "transform: rotate(0deg); stroke:  #B18223 ;"
                    span.style.cssText = "color: #B18223;"
                    p = !p
                    console.log(p)
                }
            }


            title.addEventListener('click', openItems)

        })


    };

let tabs = document.querySelectorAll('.tabs-container-js');
if (tabs.length) {
    MyTabs();
}



