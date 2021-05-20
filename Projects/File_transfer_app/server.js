const express = require('express');
const app = express()
const PORT = process.env.PORT || 1000

const connectdb = require('./config/db')
connectdb()


// Routes
app.use('/api/files',require('./routes/files'))
app.listen(PORT,()=>{
    console.log(`Listening on port ${PORT}`)
})

