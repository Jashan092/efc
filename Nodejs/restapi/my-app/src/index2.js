// var React = require('react');
// const reactDom = require('react-dom');
// var ReactDOM = require('react-dom');
// WE ALSO CAN USE MODERAN JAVASCRIPT 
import React from 'react'
import reactDom from 'react-dom';
import ReactDOM from 'react-dom';

// bebel compile our moderan javascript to old like es6 es5 es6 es8 es9 
// IT comes pre-installed with reactJS

// ReactDOM.render('what to show','where to show','callback');
ReactDOM.render(<h1>HI,Jashan I am ReactJS</h1>,document.getElementById('root'));

// THIS IS JSX
// jsx = JavaScript Extension ||
// jsx = JavaScript XML
// Anything that in ReactDom.render(jsx) is jsx
// We import React for jsx
// so, what exactly happening in ReactDOM.render ?
// ReactDom.render( /*#__PURE__*/
// React.createElement("h1", null, "HI,Jashan I am ReactJS"), 
// document.getElementById('root'));

// It is creating element x.render(element name,attribute,innertext,innerhtml)
// You can also do with your own
// Syntax :-
// var h1 = document.createElement('h1');
// h1.innerHTML = "HI,Jashan I am ReactJS";
// document.getElementById('root').appendChild(h1);
// // without any bebel or react 

// And now we will see how to add one or more elemets or semantic tags in this
// There are 4 ways that I know 
// 1. ~ By adding any semantic tag or div 
ReactDOM.render(<div>
    <h1>Head</h1>
    <p>This is paragraph tag and in this we can write paragraph</p>
  </div>,document.getElementById("root") );
// 2 ~ By array
ReactDOM.render([<a>Click me</a>,<li>I am list</li>],document.getElementById('root'))

// 3 ~ By Fragment
ReactDOM.render(<React.Fragment>
  <h1>Head</h1>
  <p>This is paragraph tag and in this we can write paragraph</p>
</React.Fragment>,document.getElementById("root") );
// // 4 ~ Anoymous
// ReactDOM.render(<>
// <h1>Market is stucked</h1>
// </>)

ReactDOM.render(<>
<div>
  <h1>Thapa Technical Netflix Pick</h1>
  <p>Top 5 Best Series</p>
    <ul>
      <p>1. Dark</p>
      <p>2. Extra curricular</p>
      <p>3. My Holo Love</p>
      <p>4. My first-2 love </p>
      <p>5. Mr.Robot</p>
    </ul>
</div>
</>,document.getElementById('root'))


