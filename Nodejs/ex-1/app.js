const express = require('express')
const http = require('http');
const nano = require('nano')('http://localhost:5984');
const app = express();
const pug = require('pug');
const path = require('path');
const bodyParser = require('body-parser');
var db = nano.use('loginc');


app.set('port',process.env.PORT || 3000);
app.set('view engine','pug');
app.set('views',path.join(__dirname,'/views'))
app.use(bodyParser.urlencoded());


app.get('/',(req,res)=>{
    res.status(200).render('index.pug')
})

app.post('/select_database',(req,res)=>{
    nano.db.create(req.body.dbname,(err)=>{
        if(err){
            res.send("Failed to Create Database "+req.body.dbname+err)
            return;
        }
        res.send(`The Database ${req.body.dbname} Created Successfully`)

    })
})

app.post('/add_name_num',(req,res)=>{
    var name = req.body.name;
    var number = req.body.number;
    db.insert({
        name:name,
        number: number
    })
    res.send("The User added successfully");
})

app.post('/search_user',(req,res)=>{
    var matched = "The Following are ";
    db.get(req.body.name,{revs_info: true},function(err,body){
        if (err){
            res.send("error accured");
        }
        if (body){
            matched += "<br>name: "+ body.name+"<br/>Phone Number " + body.number; 
        }
        else{
            matched = "No records found";
        }
        res.send(matched);
    })    
})
app.post('/delete_contact',(req,res)=>{
    db.get(req.body.name,function (err,body) {
        if(!err){
            db.destroy(req.body.number,function(err,body){
                if (err){
                    res.send("Trouble in deleting")
                }
            });
            res.send('Contact deleted successfully');
        }        
    });
})

http.createServer(app).listen(app.get('port'),()=>{
    console.log(`The server started successfully at port 3000`);
})