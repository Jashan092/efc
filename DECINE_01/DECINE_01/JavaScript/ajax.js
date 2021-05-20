console.log("Ajex,I should leanred this after sometime :)");
let fetchbtn = document.getElementById('fetchbtn');
fetchbtn.addEventListener('click',buttonClickHandler)
function buttonClickHandler(){
    console.log("You have clicked the fetchbtn")
    // Instantiate an shr object
    const shr = new XMLHttpRequest();   
    // Open the object
    // GET mean only url
    // POST mean url and some data and give response acording to data   
    // shr.open('GET','Jashan.txt',true);
    shr.open("GET",'https://jsonplaceholder.typicode.com/todos/1',true);
    // What to do on progess (PROGRESS)
    shr.onprogress = function (){
        console.log("On progress!");
    }
    // There are some states of request in this
    // 0 = open() = Client has been created
    // 1 = open() = Called 
    // 2 = send() = send() has been called headers and status are avaliable
    // 3 LOADING = Downloading responseText holds partitial data
    // 4 DONE = The Operation Is Complete   
    shr.onreadystatechange = function (){
        console.log(`Stage ${shr.readyState} passed`);
    }
    // What to do when respnose ready
    // When things ready
    shr.onload = function (){
        if (this.status === 200) {
            console.log(this.responseText);
        }
        else{
            console.error("Fatel: System halted");
        }
    }
    //You also have to send the request
    shr.send();
}