var rsli1 = document.getElementById('rsli1');
var rsli2 = document.getElementById('rsli2');
var rsli3 = document.getElementById('rsli3');
var rsli4 = document.getElementById('rsli4');
console.log("script added")
rsli1.click()
setTimeout(() => {
    rsli2.click()
}, 1000);
setTimeout(() => {
    rsli3.click()
}, 2000);
setTimeout(() => {
    rsli4.click()
}, 3000);
setInterval(() => {
    rsli1.click()
    setTimeout(() => {
        rsli2.click()
    }, 1000);
    setTimeout(() => {
        rsli3.click()
    }, 2000);
    setTimeout(() => {
        rsli4.click()
    }, 3000);
}, 4000);

rsli2.addEventListener('click', (e) => {
    if (rsli2.checked) {
        document.querySelector('#inner').style.marginLeft = '-100%';
    }
})
rsli3.addEventListener('click', (e) => {
    if (rsli3.checked) {
        document.querySelector('#inner').style.marginLeft = '-200%';
    }
})
rsli4.addEventListener('click', (e) => {
    if (rsli4.checked) {
        document.querySelector('#inner').style.marginLeft = '-300%';
    }
})