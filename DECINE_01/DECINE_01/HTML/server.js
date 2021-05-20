const { urlencoded } = require('body-parser');
const express = require('express');
const path = require('path');
const pug = require("pug");
const bodyparser = require('body-parser');
const fs = require('fs');
const port = 3000;
const hostname = '127.0.0.1';
const mongoose = require('mongoose');
const app = express()
// var = file = fs.readFileSync('jama.txt','utf-8');
mongoose.connect('mongodb://localhost/ContactDamce',{useNewUrlParser: true, useUnifiedTopology: true});
var contactSchema = new mongoose.Schema({
    name:String,
    num: String,
    email: String,
    Gender: String,
    cond: String
});
var Contact = mongoose.model('Contact',contactSchema);
app.set('views','views');
// app.set('view engine','pug');
app.use(express.static('static'));
app.use(express.urlencoded());
app.get('/',(req,res)=>{
    res.status(200).render('index.html');
})
app.post('/form-post',(req,res)=>{
    var myData = new Contact(req.body);
    myData.save().then(()=>{
        res.status(200).send("The item has been saved to the database")

    }).catch(()=>{
        res.status(400).send("The item was not stored to the database")
    })
})
// app.post('/form-post',(req,res)=>{
//     res.send("THe done");
// })
app.listen(port,hostname,(req,res)=>{
    console.log(`The server started successfuly at http://${hostname}:${port};`)
})