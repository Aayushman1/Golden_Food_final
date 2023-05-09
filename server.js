const express=require('express')
const app=express()

app.get('/', (req, res)=>{
    res.render('loginScreen.php')
})

app.listen(3000)