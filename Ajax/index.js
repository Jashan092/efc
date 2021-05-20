console.log("New script initialized");

let fetchbtn = document.getElementById('fetchbtn');
fetchbtn.addEventListener('click',()=>{
    console.log("Button was clicked")
    const xhr = new XMLHttpRequest();
    xhr.open("GET",'Jashan.txt',true);
    xhr.onprogress = function(){
        console.log("This is is progress")
    }
    xhr.onload = function(){
        console.log(this.statusText)
        // var div = document.createElement('div')
        // var node = document.createTextNode("System Breached");
        // div.appendChild(node);
        // var doc = documnet.getElementById('div3');
        // doc.appendChild(div)
       var div = document.createElement('div')
       var node = document.createTextNode("Access Denied")
       div.appendChild(node)
       div.style.backgroundColor = 'red'
       div.style.fontSize = '100px'
       div.style.textAlign = 'center'
       div.style.color = 'green'
       var doc = document.getElementById('div3')
       doc.appendChild(div)

    }
    xhr.send();
})