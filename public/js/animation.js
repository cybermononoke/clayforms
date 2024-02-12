/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./public/css/scss/animation.scss":
/*!****************************************!*\
  !*** ./public/css/scss/animation.scss ***!
  \****************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nError [ERR_REQUIRE_ESM]: require() of ES Module /Users/emaline/clayforms-loginV2/postcss.config.js from /Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/loaders.js not supported.\nInstead change the require of postcss.config.js in /Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/loaders.js to a dynamic import() which is available in all CommonJS modules.\n    at module.exports (/Users/emaline/clayforms-loginV2/node_modules/import-fresh/index.js:32:59)\n    at loadJs (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/loaders.js:16:18)\n    at Explorer.loadFileContent (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/Explorer.js:84:32)\n    at Explorer.createCosmiconfigResult (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/Explorer.js:89:36)\n    at Explorer.loadSearchPlace (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/Explorer.js:70:31)\n    at async Explorer.searchDirectory (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/Explorer.js:55:27)\n    at async run (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/Explorer.js:35:22)\n    at async cacheWrapper (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/cacheWrapper.js:16:18)\n    at async cacheWrapper (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/cacheWrapper.js:16:18)\n    at async cacheWrapper (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/cacheWrapper.js:16:18)\n    at async cacheWrapper (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/cacheWrapper.js:16:18)\n    at async Explorer.search (/Users/emaline/clayforms-loginV2/node_modules/cosmiconfig/dist/Explorer.js:27:20)\n    at async loadConfig (/Users/emaline/clayforms-loginV2/node_modules/postcss-loader/dist/utils.js:68:16)\n    at async Object.loader (/Users/emaline/clayforms-loginV2/node_modules/postcss-loader/dist/index.js:54:22)\n    at processResult (/Users/emaline/clayforms-loginV2/node_modules/webpack/lib/NormalModule.js:764:19)\n    at /Users/emaline/clayforms-loginV2/node_modules/webpack/lib/NormalModule.js:866:5\n    at /Users/emaline/clayforms-loginV2/node_modules/loader-runner/lib/LoaderRunner.js:400:11\n    at /Users/emaline/clayforms-loginV2/node_modules/loader-runner/lib/LoaderRunner.js:252:18\n    at context.callback (/Users/emaline/clayforms-loginV2/node_modules/loader-runner/lib/LoaderRunner.js:124:13)\n    at Object.loader (/Users/emaline/clayforms-loginV2/node_modules/postcss-loader/dist/index.js:56:7)");

/***/ }),

/***/ "./animation.js":
/*!**********************!*\
  !*** ./animation.js ***!
  \**********************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* ------------------------------------------------------------------------ *  
4 states per letter: Transparent | Line | Block | Visible.
These states are shuffled for a unique "decode" effect each time.
* ------------------------------------------------------------------------ */

function decodeText() {
  var text = document.getElementsByClassName('decode-text')[0];
  // debug with
  // console.log(text, text.children.length);

  // assign the placeholder array its places
  var state = [];
  for (var i = 0, j = text.children.length; i < j; i++) {
    text.children[i].classList.remove('state-1', 'state-2', 'state-3');
    state[i] = i;
  }

  // shuffle the array to get new sequences each time
  var shuffled = shuffle(state);
  for (var i = 0, j = shuffled.length; i < j; i++) {
    var child = text.children[shuffled[i]];
    classes = child.classList;

    // fire the first one at random times
    var state1Time = Math.round(Math.random() * (2000 - 300)) + 50;
    if (classes.contains('text-animation')) {
      setTimeout(firstStages.bind(null, child), state1Time);
    }
  }
}

// send the node for later .state changes
function firstStages(child) {
  if (child.classList.contains('state-2')) {
    child.classList.add('state-3');
  } else if (child.classList.contains('state-1')) {
    child.classList.add('state-2');
  } else if (!child.classList.contains('state-1')) {
    child.classList.add('state-1');
    setTimeout(secondStages.bind(null, child), 100);
  }
}
function secondStages(child) {
  if (child.classList.contains('state-1')) {
    child.classList.add('state-2');
    setTimeout(thirdStages.bind(null, child), 100);
  } else if (!child.classList.contains('state-1')) {
    child.classList.add('state-1');
  }
}
function thirdStages(child) {
  if (child.classList.contains('state-2')) {
    child.classList.add('state-3');
  }
}
function shuffle(array) {
  var currentIndex = array.length,
    temporaryValue,
    randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
}

// Demo only stuff
decodeText();

// beware: refresh button can overlap this timer and cause state mixups
setInterval(function () {
  decodeText();
}, 10000);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./animation.js"](0, {}, __webpack_require__);
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./public/css/scss/animation.scss"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;