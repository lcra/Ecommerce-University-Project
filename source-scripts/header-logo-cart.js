let img = document.querySelector('img');
let start = img.src;
let hover = img.getAttribute('data-hover'); //specified in img tag

img.onmouseover = () => { img.src = hover; }
img.onmouseout = () => { img.src = start; } //to revert back to start