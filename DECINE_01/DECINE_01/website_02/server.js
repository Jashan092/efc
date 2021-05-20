const express = require('express');
const port = process.env.PORT || 80;
const hostname = '127.0.0.1';
const app = express();
app.use(express.static('static'));

app.get('/',(req,res)=>{
    res.status(200).render('index.html');
});
app.listen(port,hostname,()=>{
    console.log(`The server started successfuly at http://${hostname}:${port}`);
})