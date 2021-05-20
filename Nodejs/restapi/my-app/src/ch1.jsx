import REact from 'react';
import  reactDOM from 'react-dom';

function Sum(a,b){
    let sum = a + b;
    return <h2>The sum of two numbers is {sum}</h2>
}
function Div(a,b){
    let divide = a/b;
    return <h2>The divide answer is {divide}</h2>
}
function sub(a,b){
    let sub = a-b;
    return <h2>The sub is {sub}</h2>
}
function mul(a,b){
    let mul = a*b;
    return <h2>The mul is {mul}</h2>
}

export { Sum };