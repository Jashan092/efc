const express = require("express");
const app = express();
const port = process.env.PORT || 3000;
const path = require('path');

app.use(express.static(path.join(__dirname,'/public')));

app.get('/',(req,res)=>{
	res.status(200).render('index.html');
});

app.listen(port,()=>{
	console.log(`The serve started successfully at port ${port} `);
});

