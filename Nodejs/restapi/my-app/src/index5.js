import React from 'react';
import ReactDOM from 'react-dom';
import "./index.css"
import App from './App'

var Greet;
var gtime = new Date().getHours()
let col = {}
if(gtime > 1 && gtime<12){
    Greet = 'Good Morning'
    col.color = "yellow"
}
else if(gtime>= 12 && gtime < 19){
    Greet = 'Good Evening'
    col.color = "brown"

}
else{
    Greet = 'Good Night'
    col.color = "black"
}
ReactDOM.render(<>
    <div>
        <h1>Hello Sir,<span style={col}>{Greet}</span></h1>
    </div>
</>,document.getElementById('root'))



ReactDOM.render(<>
    <App></App>
</>,document.getElementById('root'))











