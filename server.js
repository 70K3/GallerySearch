var express = require('express');
var app = express();
var router = express.Router(); 

var bodyParser = require('body-parser')

var mysql = require('mysql')
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'Gallery'
});

connection.connect(function(error){
	if(!error){
		console.log('Error database');
	}
	else{
		console.log('connected database');
	}
});

app.use(express.static('public'))

app.use('/api', bodyParser.json(), router);

app.listen(8074, function() {
	console.log("Server is running")
});