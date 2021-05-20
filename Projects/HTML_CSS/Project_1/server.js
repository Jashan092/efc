const express = require('express');
const app = express();
const port = process.env.PORT || 3000;
const hostname = '127.0.0.1';
const bodyParser = require('body-parser');
const pug = require('pug');

app.use(bodyParser.urlencoded())
app.set('view-engine','pug');


app.get('/',(req,res)=>{
    // res.writeHead(200,{'Content-Type': 'text/html'})
    // res.write('<h1>Hello There<h1/>')
    res.render('index.pug')
})

app.listen(port,hostname,()=>[
    console.log(`The server started at http://${hostname}:${port}`)
])