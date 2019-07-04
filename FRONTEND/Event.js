const express = require('express')
const app = express()
const morgan = require('morgan')
const mysql = require('mysql')

app.use(morgan('combined'))
app.get('/user/:id', (req, res) => {   console.log("Fetching user with id: " + req.params.id)   

const connection = mysql.createConnection({host: 'localhost', user: 'root', password: 'password', database: 'nationwide'})   
const userId = req.params.id   
const queryString = "SELECT * FROM users WHERE id = ?"   

connection.query(queryString, [userId], (err, rows, fields) => {if (err) {console.log("Failed to query for users: " + err)           

res.sendStatus(500)           

return       }       console.log("I think we fetched users successfully")       

res.json(rows)   })})

app.get("/", (req, res) => {   console.log("Responding to root route")   
res.send("Hello from ROOOT")})
app.get("/users", (req, res) => {  const user1 = {firstName: "Stephen", lastName: "Curry"}  

const user2 = {firstName: "Kevin", lastName: "Durrant"}  

res.json([user1, user2])})

app.listen(3003, () => {   console.log("Server is up and listening on 3003...")})