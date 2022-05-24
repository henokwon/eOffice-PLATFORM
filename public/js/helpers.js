/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
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
/*!*********************************!*\
  !*** ./resources/js/helpers.js ***!
  \*********************************/
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
/******/ })()
;