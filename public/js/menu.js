/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/sample.js":
/*!********************************!*\
  !*** ./resources/js/sample.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var setOrderIdButton = document.querySelector(".set-order-id");

if (setOrderIdButton != null) {
  setOrderIdButton.addEventListener("click", function () {
    var orderId = "dummy" + new Date().getTime().toString();
    var id = this.dataset.bind;
    document.getElementById(id).value = orderId;
  });
}
/*
$(document).ready(function(){
    if (setOrderIdButton != null) {
        var orderId = "dummy" + new Date().getTime().toString();
        var id = this.dataset.bind;
        document.getElementById(id).value = orderId;
    }
}
*/

var proceedPaymentButton = document.getElementById("proceed_payment");

if (proceedPaymentButton != null) {
  proceedPaymentButton.addEventListener("click", function () {
    var data = {};
    data.token_api_key = document.getElementById('token_api_key').value;

    if (document.getElementById('card_number')) {
      data.card_number = document.getElementById('card_number').value;
    }

    if (document.getElementById('cc_exp')) {
      data.card_expire = document.getElementById('cc_exp').value;
    }

    if (document.getElementById('cc_csc')) {
      data.security_code = document.getElementById('cc_csc').value;
    }

    if (document.getElementById('cardholderName')) {
      data.cardholder_name = document.getElementById('cardholderName').value;
    }

    data.lang = "ja";
    var url = "https://api.veritrans.co.jp/4gtoken";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Accept', 'application/json');
    xhr.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
    xhr.addEventListener('loadend', function () {
      if (xhr.status === 0) {
        alert("トークンサーバーとの接続に失敗しました");
        return;
      }

      var response = JSON.parse(xhr.response);

      if (xhr.status === 200) {
        document.getElementById('card_number').value = "";
        document.getElementById('cc_exp').value = "";
        document.getElementById('cc_csc').value = "";

        if (document.getElementById('cardholderName')) {
          document.getElementById('cardholderName').value = "";
        }

        document.getElementById('token').value = response.token;
        document.forms[0].submit();
      } else {
        alert(response.message);
      }
    });
    xhr.send(JSON.stringify(data));
  });
}

/***/ }),

/***/ 1:
/*!**************************************!*\
  !*** multi ./resources/js/sample.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\svnwork\3G-Sample_PHP\branches\veritrans-mdk-sample\laravel_sample\resources\js\sample.js */"./resources/js/sample.js");


/***/ })

/******/ });
