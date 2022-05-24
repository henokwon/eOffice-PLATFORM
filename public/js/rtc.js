/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! regenerator-runtime */ "./node_modules/regenerator-runtime/runtime.js");


/***/ }),

/***/ "./resources/js/helpers.js":
/*!*********************************!*\
  !*** ./resources/js/helpers.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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

/***/ }),

/***/ "./node_modules/regenerator-runtime/runtime.js":
/*!*****************************************************!*\
  !*** ./node_modules/regenerator-runtime/runtime.js ***!
  \*****************************************************/
/***/ ((module) => {

/**
 * Copyright (c) 2014-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

var runtime = (function (exports) {
  "use strict";

  var Op = Object.prototype;
  var hasOwn = Op.hasOwnProperty;
  var undefined; // More compressible than void 0.
  var $Symbol = typeof Symbol === "function" ? Symbol : {};
  var iteratorSymbol = $Symbol.iterator || "@@iterator";
  var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
  var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

  function define(obj, key, value) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
    return obj[key];
  }
  try {
    // IE 8 has a broken Object.defineProperty that only works on DOM objects.
    define({}, "");
  } catch (err) {
    define = function(obj, key, value) {
      return obj[key] = value;
    };
  }

  function wrap(innerFn, outerFn, self, tryLocsList) {
    // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
    var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
    var generator = Object.create(protoGenerator.prototype);
    var context = new Context(tryLocsList || []);

    // The ._invoke method unifies the implementations of the .next,
    // .throw, and .return methods.
    generator._invoke = makeInvokeMethod(innerFn, self, context);

    return generator;
  }
  exports.wrap = wrap;

  // Try/catch helper to minimize deoptimizations. Returns a completion
  // record like context.tryEntries[i].completion. This interface could
  // have been (and was previously) designed to take a closure to be
  // invoked without arguments, but in all the cases we care about we
  // already have an existing method we want to call, so there's no need
  // to create a new function object. We can even get away with assuming
  // the method takes exactly one argument, since that happens to be true
  // in every case, so we don't have to touch the arguments object. The
  // only additional allocation required is the completion record, which
  // has a stable shape and so hopefully should be cheap to allocate.
  function tryCatch(fn, obj, arg) {
    try {
      return { type: "normal", arg: fn.call(obj, arg) };
    } catch (err) {
      return { type: "throw", arg: err };
    }
  }

  var GenStateSuspendedStart = "suspendedStart";
  var GenStateSuspendedYield = "suspendedYield";
  var GenStateExecuting = "executing";
  var GenStateCompleted = "completed";

  // Returning this object from the innerFn has the same effect as
  // breaking out of the dispatch switch statement.
  var ContinueSentinel = {};

  // Dummy constructor functions that we use as the .constructor and
  // .constructor.prototype properties for functions that return Generator
  // objects. For full spec compliance, you may wish to configure your
  // minifier not to mangle the names of these two functions.
  function Generator() {}
  function GeneratorFunction() {}
  function GeneratorFunctionPrototype() {}

  // This is a polyfill for %IteratorPrototype% for environments that
  // don't natively support it.
  var IteratorPrototype = {};
  define(IteratorPrototype, iteratorSymbol, function () {
    return this;
  });

  var getProto = Object.getPrototypeOf;
  var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
  if (NativeIteratorPrototype &&
      NativeIteratorPrototype !== Op &&
      hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
    // This environment has a native %IteratorPrototype%; use it instead
    // of the polyfill.
    IteratorPrototype = NativeIteratorPrototype;
  }

  var Gp = GeneratorFunctionPrototype.prototype =
    Generator.prototype = Object.create(IteratorPrototype);
  GeneratorFunction.prototype = GeneratorFunctionPrototype;
  define(Gp, "constructor", GeneratorFunctionPrototype);
  define(GeneratorFunctionPrototype, "constructor", GeneratorFunction);
  GeneratorFunction.displayName = define(
    GeneratorFunctionPrototype,
    toStringTagSymbol,
    "GeneratorFunction"
  );

  // Helper for defining the .next, .throw, and .return methods of the
  // Iterator interface in terms of a single ._invoke method.
  function defineIteratorMethods(prototype) {
    ["next", "throw", "return"].forEach(function(method) {
      define(prototype, method, function(arg) {
        return this._invoke(method, arg);
      });
    });
  }

  exports.isGeneratorFunction = function(genFun) {
    var ctor = typeof genFun === "function" && genFun.constructor;
    return ctor
      ? ctor === GeneratorFunction ||
        // For the native GeneratorFunction constructor, the best we can
        // do is to check its .name property.
        (ctor.displayName || ctor.name) === "GeneratorFunction"
      : false;
  };

  exports.mark = function(genFun) {
    if (Object.setPrototypeOf) {
      Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
    } else {
      genFun.__proto__ = GeneratorFunctionPrototype;
      define(genFun, toStringTagSymbol, "GeneratorFunction");
    }
    genFun.prototype = Object.create(Gp);
    return genFun;
  };

  // Within the body of any async function, `await x` is transformed to
  // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
  // `hasOwn.call(value, "__await")` to determine if the yielded value is
  // meant to be awaited.
  exports.awrap = function(arg) {
    return { __await: arg };
  };

  function AsyncIterator(generator, PromiseImpl) {
    function invoke(method, arg, resolve, reject) {
      var record = tryCatch(generator[method], generator, arg);
      if (record.type === "throw") {
        reject(record.arg);
      } else {
        var result = record.arg;
        var value = result.value;
        if (value &&
            typeof value === "object" &&
            hasOwn.call(value, "__await")) {
          return PromiseImpl.resolve(value.__await).then(function(value) {
            invoke("next", value, resolve, reject);
          }, function(err) {
            invoke("throw", err, resolve, reject);
          });
        }

        return PromiseImpl.resolve(value).then(function(unwrapped) {
          // When a yielded Promise is resolved, its final value becomes
          // the .value of the Promise<{value,done}> result for the
          // current iteration.
          result.value = unwrapped;
          resolve(result);
        }, function(error) {
          // If a rejected Promise was yielded, throw the rejection back
          // into the async generator function so it can be handled there.
          return invoke("throw", error, resolve, reject);
        });
      }
    }

    var previousPromise;

    function enqueue(method, arg) {
      function callInvokeWithMethodAndArg() {
        return new PromiseImpl(function(resolve, reject) {
          invoke(method, arg, resolve, reject);
        });
      }

      return previousPromise =
        // If enqueue has been called before, then we want to wait until
        // all previous Promises have been resolved before calling invoke,
        // so that results are always delivered in the correct order. If
        // enqueue has not been called before, then it is important to
        // call invoke immediately, without waiting on a callback to fire,
        // so that the async generator function has the opportunity to do
        // any necessary setup in a predictable way. This predictability
        // is why the Promise constructor synchronously invokes its
        // executor callback, and why async functions synchronously
        // execute code before the first await. Since we implement simple
        // async functions in terms of async generators, it is especially
        // important to get this right, even though it requires care.
        previousPromise ? previousPromise.then(
          callInvokeWithMethodAndArg,
          // Avoid propagating failures to Promises returned by later
          // invocations of the iterator.
          callInvokeWithMethodAndArg
        ) : callInvokeWithMethodAndArg();
    }

    // Define the unified helper method that is used to implement .next,
    // .throw, and .return (see defineIteratorMethods).
    this._invoke = enqueue;
  }

  defineIteratorMethods(AsyncIterator.prototype);
  define(AsyncIterator.prototype, asyncIteratorSymbol, function () {
    return this;
  });
  exports.AsyncIterator = AsyncIterator;

  // Note that simple async functions are implemented on top of
  // AsyncIterator objects; they just return a Promise for the value of
  // the final result produced by the iterator.
  exports.async = function(innerFn, outerFn, self, tryLocsList, PromiseImpl) {
    if (PromiseImpl === void 0) PromiseImpl = Promise;

    var iter = new AsyncIterator(
      wrap(innerFn, outerFn, self, tryLocsList),
      PromiseImpl
    );

    return exports.isGeneratorFunction(outerFn)
      ? iter // If outerFn is a generator, return the full iterator.
      : iter.next().then(function(result) {
          return result.done ? result.value : iter.next();
        });
  };

  function makeInvokeMethod(innerFn, self, context) {
    var state = GenStateSuspendedStart;

    return function invoke(method, arg) {
      if (state === GenStateExecuting) {
        throw new Error("Generator is already running");
      }

      if (state === GenStateCompleted) {
        if (method === "throw") {
          throw arg;
        }

        // Be forgiving, per 25.3.3.3.3 of the spec:
        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
        return doneResult();
      }

      context.method = method;
      context.arg = arg;

      while (true) {
        var delegate = context.delegate;
        if (delegate) {
          var delegateResult = maybeInvokeDelegate(delegate, context);
          if (delegateResult) {
            if (delegateResult === ContinueSentinel) continue;
            return delegateResult;
          }
        }

        if (context.method === "next") {
          // Setting context._sent for legacy support of Babel's
          // function.sent implementation.
          context.sent = context._sent = context.arg;

        } else if (context.method === "throw") {
          if (state === GenStateSuspendedStart) {
            state = GenStateCompleted;
            throw context.arg;
          }

          context.dispatchException(context.arg);

        } else if (context.method === "return") {
          context.abrupt("return", context.arg);
        }

        state = GenStateExecuting;

        var record = tryCatch(innerFn, self, context);
        if (record.type === "normal") {
          // If an exception is thrown from innerFn, we leave state ===
          // GenStateExecuting and loop back for another invocation.
          state = context.done
            ? GenStateCompleted
            : GenStateSuspendedYield;

          if (record.arg === ContinueSentinel) {
            continue;
          }

          return {
            value: record.arg,
            done: context.done
          };

        } else if (record.type === "throw") {
          state = GenStateCompleted;
          // Dispatch the exception by looping back around to the
          // context.dispatchException(context.arg) call above.
          context.method = "throw";
          context.arg = record.arg;
        }
      }
    };
  }

  // Call delegate.iterator[context.method](context.arg) and handle the
  // result, either by returning a { value, done } result from the
  // delegate iterator, or by modifying context.method and context.arg,
  // setting context.delegate to null, and returning the ContinueSentinel.
  function maybeInvokeDelegate(delegate, context) {
    var method = delegate.iterator[context.method];
    if (method === undefined) {
      // A .throw or .return when the delegate iterator has no .throw
      // method always terminates the yield* loop.
      context.delegate = null;

      if (context.method === "throw") {
        // Note: ["return"] must be used for ES3 parsing compatibility.
        if (delegate.iterator["return"]) {
          // If the delegate iterator has a return method, give it a
          // chance to clean up.
          context.method = "return";
          context.arg = undefined;
          maybeInvokeDelegate(delegate, context);

          if (context.method === "throw") {
            // If maybeInvokeDelegate(context) changed context.method from
            // "return" to "throw", let that override the TypeError below.
            return ContinueSentinel;
          }
        }

        context.method = "throw";
        context.arg = new TypeError(
          "The iterator does not provide a 'throw' method");
      }

      return ContinueSentinel;
    }

    var record = tryCatch(method, delegate.iterator, context.arg);

    if (record.type === "throw") {
      context.method = "throw";
      context.arg = record.arg;
      context.delegate = null;
      return ContinueSentinel;
    }

    var info = record.arg;

    if (! info) {
      context.method = "throw";
      context.arg = new TypeError("iterator result is not an object");
      context.delegate = null;
      return ContinueSentinel;
    }

    if (info.done) {
      // Assign the result of the finished delegate to the temporary
      // variable specified by delegate.resultName (see delegateYield).
      context[delegate.resultName] = info.value;

      // Resume execution at the desired location (see delegateYield).
      context.next = delegate.nextLoc;

      // If context.method was "throw" but the delegate handled the
      // exception, let the outer generator proceed normally. If
      // context.method was "next", forget context.arg since it has been
      // "consumed" by the delegate iterator. If context.method was
      // "return", allow the original .return call to continue in the
      // outer generator.
      if (context.method !== "return") {
        context.method = "next";
        context.arg = undefined;
      }

    } else {
      // Re-yield the result returned by the delegate method.
      return info;
    }

    // The delegate iterator is finished, so forget it and continue with
    // the outer generator.
    context.delegate = null;
    return ContinueSentinel;
  }

  // Define Generator.prototype.{next,throw,return} in terms of the
  // unified ._invoke helper method.
  defineIteratorMethods(Gp);

  define(Gp, toStringTagSymbol, "Generator");

  // A Generator should always return itself as the iterator object when the
  // @@iterator function is called on it. Some browsers' implementations of the
  // iterator prototype chain incorrectly implement this, causing the Generator
  // object to not be returned from this call. This ensures that doesn't happen.
  // See https://github.com/facebook/regenerator/issues/274 for more details.
  define(Gp, iteratorSymbol, function() {
    return this;
  });

  define(Gp, "toString", function() {
    return "[object Generator]";
  });

  function pushTryEntry(locs) {
    var entry = { tryLoc: locs[0] };

    if (1 in locs) {
      entry.catchLoc = locs[1];
    }

    if (2 in locs) {
      entry.finallyLoc = locs[2];
      entry.afterLoc = locs[3];
    }

    this.tryEntries.push(entry);
  }

  function resetTryEntry(entry) {
    var record = entry.completion || {};
    record.type = "normal";
    delete record.arg;
    entry.completion = record;
  }

  function Context(tryLocsList) {
    // The root entry object (effectively a try statement without a catch
    // or a finally block) gives us a place to store values thrown from
    // locations where there is no enclosing try statement.
    this.tryEntries = [{ tryLoc: "root" }];
    tryLocsList.forEach(pushTryEntry, this);
    this.reset(true);
  }

  exports.keys = function(object) {
    var keys = [];
    for (var key in object) {
      keys.push(key);
    }
    keys.reverse();

    // Rather than returning an object with a next method, we keep
    // things simple and return the next function itself.
    return function next() {
      while (keys.length) {
        var key = keys.pop();
        if (key in object) {
          next.value = key;
          next.done = false;
          return next;
        }
      }

      // To avoid creating an additional object, we just hang the .value
      // and .done properties off the next function object itself. This
      // also ensures that the minifier will not anonymize the function.
      next.done = true;
      return next;
    };
  };

  function values(iterable) {
    if (iterable) {
      var iteratorMethod = iterable[iteratorSymbol];
      if (iteratorMethod) {
        return iteratorMethod.call(iterable);
      }

      if (typeof iterable.next === "function") {
        return iterable;
      }

      if (!isNaN(iterable.length)) {
        var i = -1, next = function next() {
          while (++i < iterable.length) {
            if (hasOwn.call(iterable, i)) {
              next.value = iterable[i];
              next.done = false;
              return next;
            }
          }

          next.value = undefined;
          next.done = true;

          return next;
        };

        return next.next = next;
      }
    }

    // Return an iterator with no values.
    return { next: doneResult };
  }
  exports.values = values;

  function doneResult() {
    return { value: undefined, done: true };
  }

  Context.prototype = {
    constructor: Context,

    reset: function(skipTempReset) {
      this.prev = 0;
      this.next = 0;
      // Resetting context._sent for legacy support of Babel's
      // function.sent implementation.
      this.sent = this._sent = undefined;
      this.done = false;
      this.delegate = null;

      this.method = "next";
      this.arg = undefined;

      this.tryEntries.forEach(resetTryEntry);

      if (!skipTempReset) {
        for (var name in this) {
          // Not sure about the optimal order of these conditions:
          if (name.charAt(0) === "t" &&
              hasOwn.call(this, name) &&
              !isNaN(+name.slice(1))) {
            this[name] = undefined;
          }
        }
      }
    },

    stop: function() {
      this.done = true;

      var rootEntry = this.tryEntries[0];
      var rootRecord = rootEntry.completion;
      if (rootRecord.type === "throw") {
        throw rootRecord.arg;
      }

      return this.rval;
    },

    dispatchException: function(exception) {
      if (this.done) {
        throw exception;
      }

      var context = this;
      function handle(loc, caught) {
        record.type = "throw";
        record.arg = exception;
        context.next = loc;

        if (caught) {
          // If the dispatched exception was caught by a catch block,
          // then let that catch block handle the exception normally.
          context.method = "next";
          context.arg = undefined;
        }

        return !! caught;
      }

      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        var record = entry.completion;

        if (entry.tryLoc === "root") {
          // Exception thrown outside of any try block that could handle
          // it, so set the completion value of the entire function to
          // throw the exception.
          return handle("end");
        }

        if (entry.tryLoc <= this.prev) {
          var hasCatch = hasOwn.call(entry, "catchLoc");
          var hasFinally = hasOwn.call(entry, "finallyLoc");

          if (hasCatch && hasFinally) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            } else if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else if (hasCatch) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            }

          } else if (hasFinally) {
            if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else {
            throw new Error("try statement without catch or finally");
          }
        }
      }
    },

    abrupt: function(type, arg) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc <= this.prev &&
            hasOwn.call(entry, "finallyLoc") &&
            this.prev < entry.finallyLoc) {
          var finallyEntry = entry;
          break;
        }
      }

      if (finallyEntry &&
          (type === "break" ||
           type === "continue") &&
          finallyEntry.tryLoc <= arg &&
          arg <= finallyEntry.finallyLoc) {
        // Ignore the finally entry if control is not jumping to a
        // location outside the try/catch block.
        finallyEntry = null;
      }

      var record = finallyEntry ? finallyEntry.completion : {};
      record.type = type;
      record.arg = arg;

      if (finallyEntry) {
        this.method = "next";
        this.next = finallyEntry.finallyLoc;
        return ContinueSentinel;
      }

      return this.complete(record);
    },

    complete: function(record, afterLoc) {
      if (record.type === "throw") {
        throw record.arg;
      }

      if (record.type === "break" ||
          record.type === "continue") {
        this.next = record.arg;
      } else if (record.type === "return") {
        this.rval = this.arg = record.arg;
        this.method = "return";
        this.next = "end";
      } else if (record.type === "normal" && afterLoc) {
        this.next = afterLoc;
      }

      return ContinueSentinel;
    },

    finish: function(finallyLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.finallyLoc === finallyLoc) {
          this.complete(entry.completion, entry.afterLoc);
          resetTryEntry(entry);
          return ContinueSentinel;
        }
      }
    },

    "catch": function(tryLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc === tryLoc) {
          var record = entry.completion;
          if (record.type === "throw") {
            var thrown = record.arg;
            resetTryEntry(entry);
          }
          return thrown;
        }
      }

      // The context.catch method must only be called with a location
      // argument that corresponds to a known catch block.
      throw new Error("illegal catch attempt");
    },

    delegateYield: function(iterable, resultName, nextLoc) {
      this.delegate = {
        iterator: values(iterable),
        resultName: resultName,
        nextLoc: nextLoc
      };

      if (this.method === "next") {
        // Deliberately forget the last sent value so that we don't
        // accidentally pass it on to the delegate.
        this.arg = undefined;
      }

      return ContinueSentinel;
    }
  };

  // Regardless of whether this script is executing as a CommonJS module
  // or not, return the runtime object so that we can declare the variable
  // regeneratorRuntime in the outer scope, which allows this module to be
  // injected easily by `bin/regenerator --include-runtime script.js`.
  return exports;

}(
  // If this script is executing as a CommonJS module, use module.exports
  // as the regeneratorRuntime namespace. Otherwise create a new empty
  // object. Either way, the resulting object will be used to initialize
  // the regeneratorRuntime variable at the top of this file.
   true ? module.exports : 0
));

try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  // This module should not be running in strict mode, so the above
  // assignment should always work unless something is misconfigured. Just
  // in case runtime.js accidentally runs in strict mode, in modern engines
  // we can explicitly access globalThis. In older engines we can escape
  // strict mode using a global Function call. This could conceivably fail
  // if a Content Security Policy forbids using Function, but in that case
  // the proper solution is to fix the accidental strict mode problem. If
  // you've misconfigured your bundler to force strict mode and applied a
  // CSP to forbid Function, and you're not willing to fix either of those
  // problems, please detail your unique predicament in a GitHub issue.
  if (typeof globalThis === "object") {
    globalThis.regeneratorRuntime = runtime;
  } else {
    Function("r", "regeneratorRuntime = r")(runtime);
  }
}


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
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
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
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!*****************************!*\
  !*** ./resources/js/rtc.js ***!
  \*****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _helpers_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./helpers.js */ "./resources/js/helpers.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }



function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

/**
 * @author Amir Sanni <amirsanni@gmail.com>
 * @date 6th January, 2020
 */

window.addEventListener('load', function () {
  var room = _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].getQString(location.href, 'room');
  var username = sessionStorage.getItem('username');

  if (!room) {
    document.querySelector('#room-create').attributes.removeNamedItem('hidden');
  } else if (!username) {
    document.querySelector('#username-set').attributes.removeNamedItem('hidden');
  } else {
    var getAndSetUserStream = function getAndSetUserStream() {
      _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].getUserFullMedia().then(function (stream) {
        //save my stream
        myStream = stream;
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].setLocalStream(stream);
      })["catch"](function (e) {
        console.error("stream error: ".concat(e));
      });
    };

    var sendMsg = function sendMsg(msg) {
      var data = {
        room: room,
        msg: msg,
        sender: "".concat(username, " (").concat(randomNumber, ")")
      }; //emit chat message

      socket.emit('chat', data); //add localchat

      _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].addChat(data, 'local');
    };

    var init = function init(createOffer, partnerName) {
      pc[partnerName] = new RTCPeerConnection(_helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].getIceServer());

      if (screen && screen.getTracks().length) {
        screen.getTracks().forEach(function (track) {
          pc[partnerName].addTrack(track, screen); //should trigger negotiationneeded event
        });
      } else if (myStream) {
        myStream.getTracks().forEach(function (track) {
          pc[partnerName].addTrack(track, myStream); //should trigger negotiationneeded event
        });
      } else {
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].getUserFullMedia().then(function (stream) {
          //save my stream
          myStream = stream;
          stream.getTracks().forEach(function (track) {
            pc[partnerName].addTrack(track, stream); //should trigger negotiationneeded event
          });
          _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].setLocalStream(stream);
        })["catch"](function (e) {
          console.error("stream error: ".concat(e));
        });
      } //create offer


      if (createOffer) {
        pc[partnerName].onnegotiationneeded = /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee4() {
          var offer;
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee4$(_context4) {
            while (1) {
              switch (_context4.prev = _context4.next) {
                case 0:
                  _context4.next = 2;
                  return pc[partnerName].createOffer();

                case 2:
                  offer = _context4.sent;
                  _context4.next = 5;
                  return pc[partnerName].setLocalDescription(offer);

                case 5:
                  socket.emit('sdp', {
                    description: pc[partnerName].localDescription,
                    to: partnerName,
                    sender: socketId
                  });

                case 6:
                case "end":
                  return _context4.stop();
              }
            }
          }, _callee4);
        }));
      } //send ice candidate to partnerNames


      pc[partnerName].onicecandidate = function (_ref5) {
        var candidate = _ref5.candidate;
        socket.emit('ice candidates', {
          candidate: candidate,
          to: partnerName,
          sender: socketId
        });
      }; //add


      pc[partnerName].ontrack = function (e) {
        var str = e.streams[0];

        if (document.getElementById("".concat(partnerName, "-video"))) {
          document.getElementById("".concat(partnerName, "-video")).srcObject = str;
        } else {
          //video elem
          var newVid = document.createElement('video');
          newVid.id = "".concat(partnerName, "-video");
          newVid.srcObject = str;
          newVid.autoplay = true;
          newVid.className = 'remote-video'; //video controls elements

          var controlDiv = document.createElement('div');
          controlDiv.className = 'remote-video-controls';
          controlDiv.innerHTML = "<i class=\"fa fa-microphone text-white pr-3 mute-remote-mic\" title=\"Mute\"></i>\n                        <i class=\"fa fa-expand text-white expand-remote-video\" title=\"Expand\"></i>"; //create a new div for card

          var cardDiv = document.createElement('div');
          cardDiv.className = 'card card-sm';
          cardDiv.id = partnerName;
          cardDiv.appendChild(newVid);
          cardDiv.appendChild(controlDiv); //put div in main-section elem

          document.getElementById('videos').appendChild(cardDiv);
          _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].adjustVideoElemSize();
        }
      };

      pc[partnerName].onconnectionstatechange = function (d) {
        switch (pc[partnerName].iceConnectionState) {
          case 'disconnected':
          case 'failed':
            _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].closeVideo(partnerName);
            break;

          case 'closed':
            _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].closeVideo(partnerName);
            break;
        }
      };

      pc[partnerName].onsignalingstatechange = function (d) {
        switch (pc[partnerName].signalingState) {
          case 'closed':
            console.log("Signalling state is 'closed'");
            _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].closeVideo(partnerName);
            break;
        }
      };
    };

    var shareScreen = function shareScreen() {
      _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].shareScreen().then(function (stream) {
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].toggleShareIcons(true); //disable the video toggle btns while sharing screen. This is to ensure clicking on the btn does not interfere with the screen sharing
        //It will be enabled was user stopped sharing screen

        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].toggleVideoBtnDisabled(true); //save my screen stream

        screen = stream; //share the new stream with all partners

        broadcastNewTracks(stream, 'video', false); //When the stop sharing button shown by the browser is clicked

        screen.getVideoTracks()[0].addEventListener('ended', function () {
          stopSharingScreen();
        });
      })["catch"](function (e) {
        console.error(e);
      });
    };

    var stopSharingScreen = function stopSharingScreen() {
      //enable video toggle btn
      _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].toggleVideoBtnDisabled(false);
      return new Promise(function (res, rej) {
        screen.getTracks().length ? screen.getTracks().forEach(function (track) {
          return track.stop();
        }) : '';
        res();
      }).then(function () {
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].toggleShareIcons(false);
        broadcastNewTracks(myStream, 'video');
      })["catch"](function (e) {
        console.error(e);
      });
    };

    var broadcastNewTracks = function broadcastNewTracks(stream, type) {
      var mirrorMode = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
      _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].setLocalStream(stream, mirrorMode);
      var track = type == 'audio' ? stream.getAudioTracks()[0] : stream.getVideoTracks()[0];

      for (var p in pc) {
        var pName = pc[p];

        if (_typeof(pc[pName]) == 'object') {
          _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].replaceTrack(track, pc[pName]);
        }
      }
    };

    var toggleRecordingIcons = function toggleRecordingIcons(isRecording) {
      var e = document.getElementById('record');

      if (isRecording) {
        e.setAttribute('title', 'Stop recording');
        e.children[0].classList.add('text-danger');
        e.children[0].classList.remove('text-white');
      } else {
        e.setAttribute('title', 'Record');
        e.children[0].classList.add('text-white');
        e.children[0].classList.remove('text-danger');
      }
    };

    var startRecording = function startRecording(stream) {
      mediaRecorder = new MediaRecorder(stream, {
        mimeType: 'video/webm;codecs=vp9'
      });
      mediaRecorder.start(1000);
      toggleRecordingIcons(true);

      mediaRecorder.ondataavailable = function (e) {
        recordedStream.push(e.data);
      };

      mediaRecorder.onstop = function () {
        toggleRecordingIcons(false);
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].saveRecordedStream(recordedStream, username);
        setTimeout(function () {
          recordedStream = [];
        }, 3000);
      };

      mediaRecorder.onerror = function (e) {
        console.error(e);
      };
    };

    var commElem = document.getElementsByClassName('room-comm');

    for (var i = 0; i < commElem.length; i++) {
      commElem[i].attributes.removeNamedItem('hidden');
    }

    var pc = [];
    var socket = io("/stream");
    console.log('Connected to server bro ~');
    console.log(socket.connected);
    var socketId = '';
    var randomNumber = "__".concat(_helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].generateRandomString(), "__").concat(_helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].generateRandomString(), "__");
    var myStream = '';
    var screen = '';
    var recordedStream = [];
    var mediaRecorder = ''; //Get user video by default

    getAndSetUserStream();
    socket.on('connect', function () {
      //set socketId
      socketId = socket.io.engine.id;
      document.getElementById('randomNumber').innerText = randomNumber;
      socket.emit('subscribe', {
        room: room,
        socketId: socketId
      });
      socket.on('new user', function (data) {
        socket.emit('newUserStart', {
          to: data.socketId,
          sender: socketId
        });
        pc.push(data.socketId);
        init(true, data.socketId);
      });
      socket.on('newUserStart', function (data) {
        pc.push(data.sender);
        init(false, data.sender);
      });
      socket.on('ice candidates', /*#__PURE__*/function () {
        var _ref = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee(data) {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
            while (1) {
              switch (_context.prev = _context.next) {
                case 0:
                  if (!data.candidate) {
                    _context.next = 5;
                    break;
                  }

                  _context.next = 3;
                  return pc[data.sender].addIceCandidate(new RTCIceCandidate(data.candidate));

                case 3:
                  _context.next = 6;
                  break;

                case 5:
                  '';

                case 6:
                case "end":
                  return _context.stop();
              }
            }
          }, _callee);
        }));

        return function (_x) {
          return _ref.apply(this, arguments);
        };
      }());
      socket.on('sdp', /*#__PURE__*/function () {
        var _ref2 = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee3(data) {
          return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee3$(_context3) {
            while (1) {
              switch (_context3.prev = _context3.next) {
                case 0:
                  if (!(data.description.type === 'offer')) {
                    _context3.next = 10;
                    break;
                  }

                  if (!data.description) {
                    _context3.next = 6;
                    break;
                  }

                  _context3.next = 4;
                  return pc[data.sender].setRemoteDescription(new RTCSessionDescription(data.description));

                case 4:
                  _context3.next = 7;
                  break;

                case 6:
                  '';

                case 7:
                  _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].getUserFullMedia().then( /*#__PURE__*/function () {
                    var _ref3 = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2(stream) {
                      var answer;
                      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
                        while (1) {
                          switch (_context2.prev = _context2.next) {
                            case 0:
                              if (!document.getElementById('local').srcObject) {
                                _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].setLocalStream(stream);
                              } //save my stream


                              myStream = stream;
                              stream.getTracks().forEach(function (track) {
                                pc[data.sender].addTrack(track, stream);
                              });
                              _context2.next = 5;
                              return pc[data.sender].createAnswer();

                            case 5:
                              answer = _context2.sent;
                              _context2.next = 8;
                              return pc[data.sender].setLocalDescription(answer);

                            case 8:
                              socket.emit('sdp', {
                                description: pc[data.sender].localDescription,
                                to: data.sender,
                                sender: socketId
                              });

                            case 9:
                            case "end":
                              return _context2.stop();
                          }
                        }
                      }, _callee2);
                    }));

                    return function (_x3) {
                      return _ref3.apply(this, arguments);
                    };
                  }())["catch"](function (e) {
                    console.error(e);
                  });
                  _context3.next = 13;
                  break;

                case 10:
                  if (!(data.description.type === 'answer')) {
                    _context3.next = 13;
                    break;
                  }

                  _context3.next = 13;
                  return pc[data.sender].setRemoteDescription(new RTCSessionDescription(data.description));

                case 13:
                case "end":
                  return _context3.stop();
              }
            }
          }, _callee3);
        }));

        return function (_x2) {
          return _ref2.apply(this, arguments);
        };
      }());
      socket.on('chat', function (data) {
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].addChat(data, 'remote');
      });
    });
    document.getElementById('chat-input-btn').addEventListener('click', function (e) {
      console.log("here: ", document.getElementById('chat-input').value);

      if (document.getElementById('chat-input').value.trim()) {
        sendMsg(document.getElementById('chat-input').value);
        setTimeout(function () {
          document.getElementById('chat-input').value = '';
        }, 50);
      }
    }); //Chat textarea

    document.getElementById('chat-input').addEventListener('keypress', function (e) {
      if (e.which === 13 && e.target.value.trim()) {
        e.preventDefault();
        sendMsg(e.target.value);
        setTimeout(function () {
          e.target.value = '';
        }, 50);
      }
    }); //When the video icon is clicked

    document.getElementById('toggle-video').addEventListener('click', function (e) {
      e.preventDefault();
      var elem = document.getElementById('toggle-video');

      if (myStream.getVideoTracks()[0].enabled) {
        e.target.classList.remove('fa-video');
        e.target.classList.add('fa-video-slash');
        elem.setAttribute('title', 'Show Video');
        myStream.getVideoTracks()[0].enabled = false;
      } else {
        e.target.classList.remove('fa-video-slash');
        e.target.classList.add('fa-video');
        elem.setAttribute('title', 'Hide Video');
        myStream.getVideoTracks()[0].enabled = true;
      }

      broadcastNewTracks(myStream, 'video');
    }); //When the mute icon is clicked

    document.getElementById('toggle-mute').addEventListener('click', function (e) {
      e.preventDefault();
      var elem = document.getElementById('toggle-mute');

      if (myStream.getAudioTracks()[0].enabled) {
        e.target.classList.remove('fa-microphone-alt');
        e.target.classList.add('fa-microphone-alt-slash');
        elem.setAttribute('title', 'Unmute');
        myStream.getAudioTracks()[0].enabled = false;
      } else {
        e.target.classList.remove('fa-microphone-alt-slash');
        e.target.classList.add('fa-microphone-alt');
        elem.setAttribute('title', 'Mute');
        myStream.getAudioTracks()[0].enabled = true;
      }

      broadcastNewTracks(myStream, 'audio');
    }); //When user clicks the 'Share screen' button

    document.getElementById('share-screen').addEventListener('click', function (e) {
      e.preventDefault();

      if (screen && screen.getVideoTracks().length && screen.getVideoTracks()[0].readyState != 'ended') {
        stopSharingScreen();
      } else {
        shareScreen();
      }
    }); //When record button is clicked

    document.getElementById('record').addEventListener('click', function (e) {
      /**
       * Ask user what they want to record.
       * Get the stream based on selection and start recording
       */
      if (!mediaRecorder || mediaRecorder.state == 'inactive') {
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].toggleModal('recording-options-modal', true);
      } else if (mediaRecorder.state == 'paused') {
        mediaRecorder.resume();
      } else if (mediaRecorder.state == 'recording') {
        mediaRecorder.stop();
      }
    }); //When user choose to record screen

    document.getElementById('record-screen').addEventListener('click', function () {
      _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].toggleModal('recording-options-modal', false);

      if (screen && screen.getVideoTracks().length) {
        startRecording(screen);
      } else {
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].shareScreen().then(function (screenStream) {
          startRecording(screenStream);
        })["catch"](function () {});
      }
    }); //When user choose to record own video

    document.getElementById('record-video').addEventListener('click', function () {
      _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].toggleModal('recording-options-modal', false);

      if (myStream && myStream.getTracks().length) {
        startRecording(myStream);
      } else {
        _helpers_js__WEBPACK_IMPORTED_MODULE_1__["default"].getUserFullMedia().then(function (videoStream) {
          startRecording(videoStream);
        })["catch"](function () {});
      }
    });
  }
});
})();

/******/ })()
;