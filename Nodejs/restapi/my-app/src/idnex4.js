import React from 'react'
import reactDom from 'react-dom'
import "./index.css"
var time = new Date().toLocaleTimeString();
var date = new Date().toLocaleDateString();

reactDom.render(<>
<div><h4>The Time Is {time}</h4>
    <h4>The Date Is {date}</h4>
</div>
</>,document.getElementById("root"));

var img1 = 'https://picsum.photos/200/300';
var img2 = 'https://picsum.photos/250/300';
var img3 = 'https://picsum.photos/300/300';

// adding images
reactDom.render(<>
<div>
    <h1>My Gallery</h1>
    </div>
    <div>
<img src={img1}/>
<img src={img2}/>
<img src={img3}/>
</div>
</>,document.getElementById('root'));