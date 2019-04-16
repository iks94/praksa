const spinner = document.getElementById("spinner");

function load() {
    spinner.style.display = "none";
}

setTimeout(load,1500);



const slider = document.getElementById("slider");
const first = document.getElementById("prva");
const second = document.getElementById("druga");

first.style.marginLeft = 0;
let i = 0;

function change(){
    if(i%2==0)
    first.style.marginLeft = "-100%";
    else
    first.style.marginLeft = 0;
    i++;
}

slider.addEventListener('click', change);

const learn1 = document.getElementById("learn1");
const learn2 = document.getElementById("learn2");
const modal = document.getElementById("modal");
const body = document.body;
const x = document.getElementById("close");



function open() {
    modal.style.display = "block";
    body.classList.add("modal-body");
}

learn1.addEventListener('click',open);
learn2.addEventListener('click',open);

function close() {
    modal.style.display = "none";
    body.classList.remove("modal-body");
}

x.addEventListener('click',close);


