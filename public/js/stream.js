/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/stream.js":
/*!********************************!*\
  !*** ./resources/js/stream.js ***!
  \********************************/
/***/ ((module) => {

var stream = function stream(socket) {
  socket.on('subscribe', function (data) {
    //subscribe/join a room
    socket.join(data.room);
    socket.join(data.socketId); //Inform other members in the room of new user's arrival

    if (socket.adapter.rooms.has(data.room) === true) {
      socket.to(data.room).emit('new user', {
        socketId: data.socketId
      });
    }
  });
  socket.on('newUserStart', function (data) {
    socket.to(data.to).emit('newUserStart', {
      sender: data.sender
    });
  });
  socket.on('sdp', function (data) {
    socket.to(data.to).emit('sdp', {
      description: data.description,
      sender: data.sender
    });
  });
  socket.on('ice candidates', function (data) {
    socket.to(data.to).emit('ice candidates', {
      candidate: data.candidate,
      sender: data.sender
    });
  });
  socket.on('chat', function (data) {
    socket.to(data.room).emit('chat', {
      sender: data.sender,
      msg: data.msg
    });
  });
};

module.exports = stream;

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/stream.js");
/******/ 	
/******/ })()
;