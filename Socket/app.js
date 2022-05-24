/*
let express = require('express');
let app = express();
let server = require('http').Server(app);
var app = require('express')();
var server = require('http').createServer(app);
let stream = require('./stream');

var io = require('socket.io').listen(server);
*/


var app = require('express')();
var server = require('http').createServer(app);
let stream = require('./stream');

//var io = require('socket.io');
//var io = require('socket.io')(server);

let io = require('socket.io')(server, {
    cors: {
        origin: "http://localhost:3000/",
        credentials: true,
        optionSuccessStatus: 200,
        methods: ["GET", "POST"],
        allowedHeaders: ["my-custom-header"],
    }
});

io.of('/stream').on('connection', stream);


server.listen(3000, () => {
    console.log(`Server listening on  3000`);
});

