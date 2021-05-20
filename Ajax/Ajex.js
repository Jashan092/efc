console.log("Script added successfully");

let fetchbtn = document.getElementById('fetchbtn');
fetchbtn.addEventListener('click',()=>{
    console.log("You have clicked the button fetchbtn")
    // Instantiate
    const xhr = new XMLHttpRequest();
    xhr.open('GET','Jashan.txt',true)
    // xhr.open('METHOD','FILE',ASYNCHRONOUS:TRUE OR FALSE)
    // Get means we will give url and data in url 
    // Post means we will give url and data also in encrypted way
    xhr.onprogress = function(){
        console.log('On progress');
    }
    // What to do when response ready
    xhr.onload = function (){
        if (this.status === 200){
        console.log(this.responseText)
        }
        else{
            console.log("Some error Accured")
        }
        div = document.createElement('div')
        var node = document.createTextNode("System Breached");
        div.appendChild(node);
        div.style.backgroundColor = 'black';
        div.style.color = 'green'
        var doc = document.getElementById('div3')
        doc.appendChild(div)
    }
    // Send the request
    xhr.send();

    // if you want to understand it you must undestand the readystate codes in xhr 
                // [Value | State | Description]           
                // [  0     UNSET   CLIENT() HAS BEEN CREATED CLIENT() HAS NOT BEEN CALLED YET ]
                // [  1     OPENED  OPEN() HAS BEEN CALLED ]
                // [  2     HEADERS_RECEIVED  SEND() HAS BEEN CALLED AND HEADERS AND STATUS THERE ]
                // [  3     LOADING  DOWNLOADING RESPONSETEXT HOLDS PARTIAL DATA ]
                // [  4     DONE   THE OPERATION IS COMPLETED ]
    
})
