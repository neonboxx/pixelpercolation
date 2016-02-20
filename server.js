var express = require('express');
var serveStatic = require('serve-static')

var app = express();

var oneDay = 86400000;

app.use(express.compress());

app.use(serveStatic( '/dist', { maxAge: oneDay }));

app.listen(8080);
