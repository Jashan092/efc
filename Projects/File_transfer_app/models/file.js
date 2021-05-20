const mongoose = require('mongoose');
const Schema = mongoose.Schema;


const fileSchema = new Schema({
    filename: {tyoe:String},
    path: {type: String},
    size: {tyoe: Number},
    uuid:  {type: Number},
    sender: {type: String},
    receiver:  {type: Number},
},{timestamps: true});



module.exports = mongoose.model('File',fileSchema)




