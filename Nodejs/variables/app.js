var http = require('http');
// There are two types of events there 
// 1. on 
// 2. emit

var events = require('events');
var eventsemitter = new events.EventEmitter();

// eventsemitter.on(); // Event Listener


 var server = http.createServer(function(req,res){
     eventsemitter.emit('Anyone Requested')
     res.end("Server works.")
 });
 eventsemitter.on("Anyone Requested",()=>{
     console.log("The request has been done by the server")
 }); // Event Listner
 server.listen(1000,'localhost',()=>{
     console.log("The server started on *:1000");
 });