/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/helpers.js":
/*!*********************************!*\
  !*** ./resources/js/helpers.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  generateRandomString: function generateRandomString() {
    var crypto = window.crypto || window.msCrypto;
    var array = new Uint32Array(1);
    return crypto.getRandomValues(array);
  },
  closeVideo: function closeVideo(elemId) {
    if (document.getElementById(elemId)) {
      document.getElementById(elemId).remove();
      this.adjustVideoElemSize();
    }
  },
  pageHasFocus: function pageHasFocus() {
    return !(document.hidden || document.onfocusout || window.onpagehide || window.onblur);
  },
  getQString: function getQString() {
    var url = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
    var keyToReturn = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
    url = url ? url : location.href;
    var queryStrings = decodeURIComponent(url).split('#', 2)[0].split('?', 2)[1];

    if (queryStrings) {
      var splittedQStrings = queryStrings.split('&');

      if (splittedQStrings.length) {
        var queryStringObj = {};
        splittedQStrings.forEach(function (keyValuePair) {
          var keyValue = keyValuePair.split('=', 2);

          if (keyValue.length) {
            queryStringObj[keyValue[0]] = keyValue[1];
          }
        });
        return keyToReturn ? queryStringObj[keyToReturn] ? queryStringObj[keyToReturn] : null : queryStringObj;
      }

      return null;
    }

    return null;
  },
  userMediaAvailable: function userMediaAvailable() {
    return !!(navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia);
  },
  getUserFullMedia: function getUserFullMedia() {
    if (this.userMediaAvailable()) {
      return navigator.mediaDevices.getUserMedia({
        video: true,
        audio: {
          echoCancellation: true,
          noiseSuppression: true
        }
      });
    } else {
      throw new Error('User media not available');
    }
  },
  getUserAudio: function getUserAudio() {
    if (this.userMediaAvailable()) {
      return navigator.mediaDevices.getUserMedia({
        audio: {
          echoCancellation: true,
          noiseSuppression: true
        }
      });
    } else {
      throw new Error('User media not available');
    }
  },
  shareScreen: function shareScreen() {
    if (this.userMediaAvailable()) {
      return navigator.mediaDevices.getDisplayMedia({
        video: {
          cursor: "always"
        },
        audio: {
          echoCancellation: true,
          noiseSuppression: true,
          sampleRate: 44100
        }
      });
    } else {
      throw new Error('User media not available');
    }
  },
  getIceServer: function getIceServer() {
    return {
      iceServers: [{
        urls: ["stun:eu-turn4.xirsys.com"]
      }, {
        username: "ml0jh0qMKZKd9P_9C0UIBY2G0nSQMCFBUXGlk6IXDJf8G2uiCymg9WwbEJTMwVeiAAAAAF2__hNSaW5vbGVl",
        credential: "4dd454a6-feee-11e9-b185-6adcafebbb45",
        urls: ["turn:eu-turn4.xirsys.com:80?transport=udp", "turn:eu-turn4.xirsys.com:3478?transport=tcp"]
      }]
    };
  },
  addChat: function addChat(data, senderType) {
    var chatMsgDiv = document.querySelector('#chat-messages');
    var contentAlign = 'justify-content-end';
    var senderName = 'You';
    var msgBg = 'bg-white';

    if (senderType === 'remote') {
      contentAlign = 'justify-content-start';
      senderName = data.sender;
      msgBg = '';
      this.toggleChatNotificationBadge();
    }

    var infoDiv = document.createElement('div');
    infoDiv.className = 'sender-info';
    infoDiv.innerText = "".concat(senderName, " - ").concat(moment().format('Do MMMM, YYYY h:mm a'));
    var colDiv = document.createElement('div');
    colDiv.className = "col-10 card chat-card msg ".concat(msgBg);
    colDiv.innerHTML = xssFilters.inHTMLData(data.msg).autoLink({
      target: "_blank",
      rel: "nofollow"
    });
    var rowDiv = document.createElement('div');
    rowDiv.className = "row ".concat(contentAlign, " mb-2");
    colDiv.appendChild(infoDiv);
    rowDiv.appendChild(colDiv);
    chatMsgDiv.appendChild(rowDiv);
    /**
     * Move focus to the newly added message but only if:
     * 1. Page has focus
     * 2. User has not moved scrollbar upward. This is to prevent moving the scroll position if user is reading previous messages.
     */

    if (this.pageHasFocus) {
      rowDiv.scrollIntoView();
    }
  },
  toggleChatNotificationBadge: function toggleChatNotificationBadge() {
    if (document.querySelector('#chat-pane').classList.contains('chat-opened')) {
      document.querySelector('#new-chat-notification').setAttribute('hidden', true);
    } else {
      document.querySelector('#new-chat-notification').removeAttribute('hidden');
    }
  },
  replaceTrack: function replaceTrack(stream, recipientPeer) {
    var sender = recipientPeer.getSenders ? recipientPeer.getSenders().find(function (s) {
      return s.track && s.track.kind === stream.kind;
    }) : false;
    sender ? sender.replaceTrack(stream) : '';
  },
  toggleShareIcons: function toggleShareIcons(share) {
    var shareIconElem = document.querySelector('#share-screen');

    if (share) {
      shareIconElem.setAttribute('title', 'Stop sharing screen');
      shareIconElem.children[0].classList.add('text-primary');
      shareIconElem.children[0].classList.remove('text-white');
    } else {
      shareIconElem.setAttribute('title', 'Share screen');
      shareIconElem.children[0].classList.add('text-white');
      shareIconElem.children[0].classList.remove('text-primary');
    }
  },
  toggleVideoBtnDisabled: function toggleVideoBtnDisabled(disabled) {
    document.getElementById('toggle-video').disabled = disabled;
  },
  maximiseStream: function maximiseStream(e) {
    var elem = e.target.parentElement.previousElementSibling;
    elem.requestFullscreen() || elem.mozRequestFullScreen() || elem.webkitRequestFullscreen() || elem.msRequestFullscreen();
  },
  singleStreamToggleMute: function singleStreamToggleMute(e) {
    if (e.target.classList.contains('fa-microphone')) {
      e.target.parentElement.previousElementSibling.muted = true;
      e.target.classList.add('fa-microphone-slash');
      e.target.classList.remove('fa-microphone');
    } else {
      e.target.parentElement.previousElementSibling.muted = false;
      e.target.classList.add('fa-microphone');
      e.target.classList.remove('fa-microphone-slash');
    }
  },
  saveRecordedStream: function saveRecordedStream(stream, user) {
    var blob = new Blob(stream, {
      type: 'video/webm'
    });
    var file = new File([blob], "".concat(user, "-").concat(moment().unix(), "-record.webm"));
    saveAs(file);
  },
  toggleModal: function toggleModal(id, show) {
    var el = document.getElementById(id);

    if (show) {
      el.style.display = 'block';
      el.removeAttribute('aria-hidden');
    } else {
      el.style.display = 'none';
      el.setAttribute('aria-hidden', true);
    }
  },
  setLocalStream: function setLocalStream(stream) {
    var mirrorMode = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
    var localVidElem = document.getElementById('local');
    localVidElem.srcObject = stream;
    mirrorMode ? localVidElem.classList.add('mirror-mode') : localVidElem.classList.remove('mirror-mode');
  },
  adjustVideoElemSize: function adjustVideoElemSize() {
    var elem = document.getElementsByClassName('card');
    var totalRemoteVideosDesktop = elem.length;
    var newWidth = totalRemoteVideosDesktop <= 2 ? '50%' : totalRemoteVideosDesktop == 3 ? '33.33%' : totalRemoteVideosDesktop <= 8 ? '25%' : totalRemoteVideosDesktop <= 15 ? '20%' : totalRemoteVideosDesktop <= 18 ? '16%' : totalRemoteVideosDesktop <= 23 ? '15%' : totalRemoteVideosDesktop <= 32 ? '12%' : '10%';

    for (var i = 0; i < totalRemoteVideosDesktop; i++) {
      elem[i].style.width = newWidth;
    }
  },
  createDemoRemotes: function createDemoRemotes(str) {
    var _this = this;

    var total = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 6;
    var i = 0;
    var testInterval = setInterval(function () {
      var newVid = document.createElement('video');
      newVid.id = "demo-".concat(i, "-video");
      newVid.srcObject = str;
      newVid.autoplay = true;
      newVid.className = 'remote-video'; //video controls elements

      var controlDiv = document.createElement('div');
      controlDiv.className = 'remote-video-controls';
      controlDiv.innerHTML = "<i class=\"fa fa-microphone text-white pr-3 mute-remote-mic\" title=\"Mute\"></i>\n                <i class=\"fa fa-expand text-white expand-remote-video\" title=\"Expand\"></i>"; //create a new div for card

      var cardDiv = document.createElement('div');
      cardDiv.className = 'card card-sm';
      cardDiv.id = "demo-".concat(i);
      cardDiv.appendChild(newVid);
      cardDiv.appendChild(controlDiv); //put div in main-section elem

      document.getElementById('videos').appendChild(cardDiv);

      _this.adjustVideoElemSize();

      i++;

      if (i == total) {
        clearInterval(testInterval);
      }
    }, 2000);
  }
});

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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!********************************!*\
  !*** ./resources/js/events.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _helpers_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers.js */ "./resources/js/helpers.js");

window.addEventListener('load', function () {
  //When the chat icon is clicked
  document.querySelector('#toggle-chat-pane').addEventListener('click', function (e) {
    var chatElem = document.querySelector('#chat-pane');
    var mainSecElem = document.querySelector('#main-section');

    if (chatElem.classList.contains('chat-opened')) {
      chatElem.setAttribute('hidden', true);
      mainSecElem.classList.remove('col-md-9');
      mainSecElem.classList.add('col-md-12');
      chatElem.classList.remove('chat-opened');
    } else {
      chatElem.attributes.removeNamedItem('hidden');
      mainSecElem.classList.remove('col-md-12');
      mainSecElem.classList.add('col-md-9');
      chatElem.classList.add('chat-opened');
    } //remove the 'New' badge on chat icon (if any) once chat is opened.


    setTimeout(function () {
      if (document.querySelector('#chat-pane').classList.contains('chat-opened')) {
        _helpers_js__WEBPACK_IMPORTED_MODULE_0__["default"].toggleChatNotificationBadge();
      }
    }, 300);
  }); //When the video frame is clicked. This will enable picture-in-picture

  document.getElementById('local').addEventListener('click', function () {
    if (!document.pictureInPictureElement) {
      document.getElementById('local').requestPictureInPicture()["catch"](function (error) {
        // Video failed to enter Picture-in-Picture mode.
        console.error(error);
      });
    } else {
      document.exitPictureInPicture()["catch"](function (error) {
        // Video failed to leave Picture-in-Picture mode.
        console.error(error);
      });
    }
  }); //When the 'Create room" is button is clicked

  document.getElementById('create-room').addEventListener('click', function (e) {
    e.preventDefault();
    var roomName = document.querySelector('#room-name').value;
    var yourName = document.querySelector('#your-name').value;

    if (roomName && yourName) {
      //remove error message, if any
      document.querySelector('#err-msg').innerText = ""; //save the user's name in sessionStorage

      sessionStorage.setItem('username', yourName); //create room link

      var roomLink = "http://localhost:8000/video?room=".concat(roomName.trim().replace(' ', '_'), "_").concat(_helpers_js__WEBPACK_IMPORTED_MODULE_0__["default"].generateRandomString());
      console.log(roomLink); //show message with link to room

      document.querySelector('#room-created').innerHTML = " Click <a href='".concat(roomLink, "'>here</a> to enter room. \n                Share the room link with your partners."); //empty the values

      document.querySelector('#room-name').value = '';
      document.querySelector('#your-name').value = '';
    } else {
      document.querySelector('#err-msg').innerText = "All fields are required";
    }
  }); //When the 'Enter room' button is clicked.

  document.getElementById('enter-room').addEventListener('click', function (e) {
    e.preventDefault();
    var name = document.querySelector('#username').value;

    if (name) {
      //remove error message, if any
      document.querySelector('#err-msg-username').innerText = ""; //save the user's name in sessionStorage

      sessionStorage.setItem('username', name); //reload room

      location.reload();
    } else {
      document.querySelector('#err-msg-username').innerText = "Please input your name";
    }
  });
  document.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('expand-remote-video')) {
      _helpers_js__WEBPACK_IMPORTED_MODULE_0__["default"].maximiseStream(e);
    } else if (e.target && e.target.classList.contains('mute-remote-mic')) {
      _helpers_js__WEBPACK_IMPORTED_MODULE_0__["default"].singleStreamToggleMute(e);
    }
  });
  document.getElementById('closeModal').addEventListener('click', function () {
    _helpers_js__WEBPACK_IMPORTED_MODULE_0__["default"].toggleModal('recording-options-modal', false);
  });
});
})();

/******/ })()
;