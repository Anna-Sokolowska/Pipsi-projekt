let slider = document.querySelector('.slider');
let sliderInner = document.querySelector('.slider-inner');
let card = document.querySelectorAll('.slider-inner .card');
let pressed = false;
let startx;
let x = 0;

slider.addEventListener('mousedown', (e) => {
    pressed = true;
    startx = e.offsetX - 0;
    console.log(startx)
    slider.style.cursor = 'grabbing'
})
slider.addEventListener('mouseenter', (e) => {
    slider.style.cursor = 'grab'
})
slider.addEventListener('mouseup', (e) => {
    pressed = false;
    slider.style.cursor = 'grab'
})

slider.addEventListener('mousemove', (e)=>{
    if(!pressed) return;
    e.preventDefault();
    x = e.offsetX;
    sliderInner.style.left = `${x - startx}px`
    console.log(sliderInner.style.left);
})
