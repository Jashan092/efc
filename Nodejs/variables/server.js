var express = require('express'); 
var http = require('http');
var app = express();
var fs = require('fs')
var server = http.createServer(app)

app.get('/',(req,res)=>{
    res.send("This is the best");
})
app.get('/tasks',(req,res)=>[
    fs.readFile('./db.json',function(err,data){
        var tasks = JSON.parse(data.toString()).tasks;
        res.json(tasks);
    })
])


server.listen(1200,function(){
    console.log("The server is listening to port 3000   ")
})