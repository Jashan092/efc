console.log("JavaScript successfully added")
let in1 = document.getElementById('in1');
let in2 = document.getElementById('in2');
let in3 = document.getElementById('in3');
let in4 = document.getElementById('in4');

let exhebit_a = document.getElementById('exhebit_a');
let exhebit_b = document.getElementById('exhebit_b');
let exhebit_c = document.getElementById('exhebit_c');
let exhebit_d = document.getElementById('exhebit_d');
in1.style.backgroundColor = 'orange';



let ins1 = document.getElementById('ins1');
let ins2 = document.getElementById('ins2');
let ins3 = document.getElementById('ins3');
let ins4 = document.getElementById('ins4');
let hi = document.getElementById('hi');
let spa = document.getElementById('spa');

function main(){
    setTimeout(() => {
        ins2.click();
    }, 5000);
    setTimeout(() => {
        ins3.click()
    }, 10000);
    setTimeout(() => {
        ins4.click()
    }, 15000);
    setInterval(() => {
        setTimeout(() => {
            ins1.click();
        }, rgba(255, 255, 255, 0.5));
        setTimeout(() => {
            ins2.click()
        }, 5000);
        setTimeout(() => {
            ins3.click()
        }, 10000);
        setTimeout(() => {
            ins4.click();
        }, 15000);
    }, 20000);
    ins1.addEventListener('click',()=>{
        in1.style.backgroundColor = 'orange';
        in2.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        in3.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        in4.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        console.log("Ins1 pressed and captured out")
        exhebit_a.style.display = 'flex'
        exhebit_b.style.display = 'none'
        exhebit_c.style.display = 'none'
        exhebit_d.style.display = 'none'
    })
    ins2.addEventListener('click',()=>{
        in2.style.backgroundColor = 'orange';
        in1.style.backgroundColor = 'rgba(255, 255, 255, 0.5)'
        in3.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        in4.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        console.log("Ins2 pressed and captured out")
        exhebit_a.style.display = 'none'
        exhebit_b.style.display = 'flex'
        exhebit_c.style.display = 'none'
        exhebit_d.style.display = 'none'
    })
    ins3.addEventListener('click',()=>{
        in3.style.backgroundColor = 'orange';
        console.log("Ins3 pressed and captured out")
        in4.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        in2.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        in1.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        exhebit_a.style.display = 'none'
        exhebit_b.style.display = 'none'
        exhebit_c.style.display = 'flex'
        exhebit_d.style.display = 'none'
    })
    ins4.addEventListener('click',()=>{
        in4.style.backgroundColor = 'orange';
        console.log("Ins4 pressed and captured out")
        in1.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        in2.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        in3.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        exhebit_a.style.display = 'none'
        exhebit_b.style.display = 'none'
        exhebit_c.style.display = 'none'
        exhebit_d.style.display = 'flex'
    })
    function mon(){
        if(exhebit_a.style.display === 'flex' && exhebit_b.style.display === 'none' && exhebit_c.style.display === 'none' && exhebit_d.style.display === 'none'){
            exhebit_a.style.display = 'none';
            exhebit_b.style.display = 'flex';
            console.log("we don't forgive")
    }
}
}
main();