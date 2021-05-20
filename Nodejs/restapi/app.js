const express = require("express");
const bodyParser = require('body-parser');

const app = express();
let people = {people:[{name:"Jashan"}]};
app.use(bodyParser.urlencoded({
    extended: false
}))
app.get('/people',(req,res)=>{
    // res.send('Hello World')
    // don't commecnt out above it will give error because we are sending json file
    res.json(people)
    res.end()
});
app.post('/people',(req,res)=>{
    res.json(people);
    if (req.body && req.body.name){
        people.people.push({name: req.body.name})
    }
    res.json(people);
    res.end();
})
app.post('/people/person',(req,res)=>{
        res.send("stage- 2")
        res.json({name: req.params.name});
        res.end();
})
app.listen(3000,()=>{
    console.log("The server started")
})