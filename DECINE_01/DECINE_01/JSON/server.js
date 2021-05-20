const express = require("express");
const app = express();
const port = 80;
app.use(express.static('static'));
app.get('/',(req,res)=>{
    res.status(200).render("index.php")
});
app.listen(port,'127.0.0.1',(req,res)=>{
    console.log("The server started successfuly at port 80");
});