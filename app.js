const app = require('express')();
const server = require('http').createServer(app);
const stream = require('./stream');
const cors = require('cors');


//const io = require('socket.io').listen(server);
let io = require('socket.io')(server, {
  cors: {
    origin: "*",
    credentials: true,
    optionSuccessStatus: 200,
    methods: ["GET", "POST"],
    allowedHeaders: ["my-custom-header"],
  }
});


io.of('/stream').on('connection', stream);


server.listen(3000, () => {
  console.log(` Server listening on PORT: 3000`);
});
