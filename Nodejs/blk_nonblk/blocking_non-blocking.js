const fs = require("fs");
// fs module mean filesystem
// it is used for reading the file and readFile only will take callback

let data = fs.readFileSync('text.txt','utf-8');
console.log(data);