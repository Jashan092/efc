const express = require('express');
const path = require('path');
const port = 80;
const hostanme = "127.0.0.1";
var app = express();
app.use(express.static('static'));
app.get("/",(req,res)=>{
    res.static(200).render("index.html");
})
app.listen(port,hostanme,()=>{
    console.log(`The server started successfuly at http://${hostanme}:${port}`);
})