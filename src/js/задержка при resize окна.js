let myTimer;
$(window).resize(function()  {
    var interval = 500;
    clearInterval(myTimer);
    myTimer = setInterval(function () { doAnim(); }, interval);
});

function doAnim(){
    clearInterval(myTimer);
    if (window.innerWidth <= 767){ MyGalarySm();}else{MyGalaryLg();}
}