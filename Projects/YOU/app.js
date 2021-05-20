const express = require('express');
const pug = require('pug');
const app = express();
const bodyParser = require('body-parser');

app.use(express.static('views'));

app.use(bodyParser.urlencoded());

app.get('/',(req,res)=>{
    res.status(200).render('index.html')
})

app.listen(3000,()=>{
    console.log("the serve started successfuly at port 3000");
})