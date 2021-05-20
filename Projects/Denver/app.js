const express = require('express');
const bodyParser = require('body-parser');
const http = require('http')
const app = express();  
const server = http.createServer(app);
const port = process.env.process || 3000;


app.use(express.static('views'));

app.use(bodyParser.urlencoded());
app.get('/',(req,res)=>{
    res.status(200).render('index.html')
})

server.listen(port,()=>{
    console.log(`The server started successfully at port ${port}`)
})
