var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io').listen(server);
users = [];
connections = [];

server.listen(process.env.PORT || 3000);
console.log('server running...');
app.get('/chatroom', function(req, res){
	res.sendFile(__dirname + '/index.html');
});