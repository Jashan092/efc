const express = require('express');
const routes = require('./routes');
const http = require('http');
const path =  require('path');
const url = require('url');
const bodyParser = require('body-parser');
const json = require('json');
const logger = require("logger");
const methodOverrite = require('method-override');
const { error } = require('console');

const nano = require('nano')('http://localhost:5984');

var db = nano.use('address');

const app = express();

app.set('port',process.env.PORT || 3000);
app.set('views',path.join(__dirname,'/views'));

app.set('view engine','pug');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded());
app.use(methodOverrite());
app.use(express.static(path.join(__dirname,'/static')));

app.get('/',routes.index);
app.post('/createdb',function(req,res){
    nano.db.create(req.body.dbname , function(err){
        if(err){
            res.send('Error creating database '+ req.body.dbname);
            return;
        }
        res.send("Database"+ req.body.dbname + "created successfully");
    });
});

app.post('/new_contact',function(req,res){
    var name = req.body.name;
    var phone = req.body.phone;

    db.insert({
        name: name,
        phone: phone,
        crazy: true 
    },phone,function (err,body,header) {
        if(err){
            req.send("error creatin contact")
            return;
        }
        res.send("Contact created successfully");
    });
});

app.post('/view_contact',function (req,res) {
    var alldog = "Following are the contacts";
    db.get(req.body.phone, {revs_info : true},function (err,body) {
        if (err) {
            console.log(body);
            console.log(err)
            console.error(error)
        }
        if(body){
            alldog += "<br>name: "+ body.name+"<br/>Phone Number " + body.phone; 
        }
        else{
            alldog = "No Record Found "
        }
        res.send(alldog);
    });
});


app.post("/delete_contact",function (req,res) {
    db.get(req.body.phone, {revs_info: true},function (err,body) {
        if(!err){
            db.destroy(req.body.phone, body._rev,function(err,body){
                if (err){
                    res.send("Trouble in deleting")
                }
            });
            res.send('Contact deleted successfully');
        }        
    });
});

http.createServer(app).listen(app.get('port'),function(){
    console.log("The express server started and listening at "+ app.get('port'));
})











