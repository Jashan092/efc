var nav_item_1 = document.getElementById('nav1-item-1-a');
var products = document.getElementById('products');
var header2 = document.getElementById('header_2');
function prdtg() {
    if(products.style.display !='grid'){
        products.style.display = 'grid'
        nav_item_1.style.backgroundColor = 'rgb(230, 226, 226)'
        nav_item_1.style.transitionDuration = '0.7s'
    }
    else{
        products.style.display = 'none'
        nav_item_1.style.backgroundColor = 'rgb(247, 247, 247)'
    }
}