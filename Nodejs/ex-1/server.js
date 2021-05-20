const express = require('express');
const pug = require('pug');
const app = express();
app.set('view engine','pug');
app.get('/',(req,res)=>{
    res.status(200).render('index.pug');
})

app.listen(1000,()=>{
    console.log("The server started successfully at port 1000");
})