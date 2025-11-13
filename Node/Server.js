const express = require('express')
const cors = require('cors')
const axios = require('axios')

const app = express()

app.use(express.json())
app.use(cors())

app.get("/",(req,res)=>{
    res.end("From backend side ")
})

app.get('/product',async(req,res)=>{
//     try{
//    const response = await axios.get('https://fakestoreapi.com/products')
//        res.json(response.data)
//     }
//     catch(err){
//         console.log(err)
//     }
 await axios.get('https://fakestoreapi.com/products')
.then(response=>res.json(response.data))
.catch((err)=> console.log(err))
})





app.listen(8080,()=>{
    console.log("app listen 8080")
})