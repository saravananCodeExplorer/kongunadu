const express = require('express')
const cors = require('cors')
// const axios = require('axios')

const app = express()

app.use(express.json())
app.use(cors())

app.get("/",(req,res)=>{
    res.json("from backend side")
})

const students = [
  { id: 1,  name: "Student 1", age: 20 },
  { id: 2,  name: "Student 2", age: 21 },
  { id: 3,  name: "Student 3", age: 22 },
  { id: 4,  name: "Student 4", age: 23 },
  { id: 5,  name: "Student 5", age: 20 },
  { id: 6,  name: "Student 6", age: 21 },
  { id: 7,  name: "Student 7", age: 22 },
  { id: 8,  name: "Student 8", age: 23 },
  { id: 9,  name: "Student 9", age: 20 },
  { id: 10, name: "Student 10", age: 21 },
  { id: 11, name: "Student 11", age: 22 },
  { id: 12, name: "Student 12", age: 23 },
  { id: 13, name: "Student 13", age: 20 },
  { id: 14, name: "Student 14", age: 21 },
  { id: 15, name: "Student 15", age: 22 },
  { id: 16, name: "Student 16", age: 23 },
  { id: 17, name: "Student 17", age: 20 },
  { id: 18, name: "Student 18", age: 21 },
  { id: 19, name: "Student 19", age: 22 },
  { id: 20, name: "Student 20", age: 23 },

  { id: 21, name: "Student 21", age: 20 },
  { id: 22, name: "Student 22", age: 21 },
  { id: 23, name: "Student 23", age: 22 },
  { id: 24, name: "Student 24", age: 23 },
  { id: 25, name: "Student 25", age: 24 }
];

app.get('/user',(req,res)=>{
    res.json(students)
})

app.listen(5000,()=>{
    console.log("server listening port is 5000")
})