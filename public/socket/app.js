/*
let express = require('express');
let app = express();
let server = require('http').Server(app);
var app = require('express')();
var server = require('http').createServer(app);
let stream = require('./stream');

var io = require('socket.io').listen(server);

/*let io = require('socket.io')(server, {
    cors: {
        origin: "http://localhost:8000",
        credentials: true,
        optionSuccessStatus: 200,
        methods: ["GET", "POST"],
        allowedHeaders: ["my-custom-header"],
    }
}); */

var app = require('express')();
var server = require('http').createServer(app);
var io = require('socket.io')(server);
let stream = require('./stream');

server.listen(3000, () => {
  console.log('listening on *:3000');
});



io.of('/stream').on('connection', stream);
