var express = require('express');
var app = express();

//Specify a port
var port = process.env.port || 8080;

//Serve up files in public folder
app.use('/', express.static(__dirname + '/dist'));

//Start up the website
app.listen(port);
console.log('Listening on port: ', port);