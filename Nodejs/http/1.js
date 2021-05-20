const http = require("http");

http.createServer('/',(req,res)=>{
    res.writeHead(200,{'Content-Type': 'text/html'});
    res.write("heelp");
}).listen(1000);

// it will make a simple server 
console.log("the server started")
console.log  