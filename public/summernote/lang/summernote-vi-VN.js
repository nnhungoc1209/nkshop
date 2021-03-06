/*!
 * 
 * Super simple wysiwyg editor v0.8.18
 * https://summernote.org
 * 
 * 
 * Copyright 2013- Alan Hong. and other contributors
 * summernote may be freely distributed under the MIT license.
 * 
 * Date: 2020-05-20T18:09Z
 * 
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 48);
/******/ })
/************************************************************************/
/******/ ({

/***/ 48:
/***/ (function(module, exports) {

(function ($) {
  $.extend($.summernote.lang, {
    'vi-VN': {
      font: {
        bold: 'In ?????m',
        italic: 'In Nghi??ng',
        underline: 'G???ch d?????i',
        clear: 'B??? ?????nh d???ng',
        height: 'Chi???u cao d??ng',
        name: 'Ph??ng ch???',
        strikethrough: 'G???ch ngang',
        subscript: 'Subscript',
        superscript: 'Superscript',
        size: 'C??? ch???'
      },
      image: {
        image: 'H??nh ???nh',
        insert: 'Ch??n',
        resizeFull: '100%',
        resizeHalf: '50%',
        resizeQuarter: '25%',
        floatLeft: 'Tr??i v??? tr??i',
        floatRight: 'Tr??i v??? ph???i',
        floatNone: 'Kh??ng tr??i',
        shapeRounded: 'Shape: Rounded',
        shapeCircle: 'Shape: Circle',
        shapeThumbnail: 'Shape: Thumbnail',
        shapeNone: 'Shape: None',
        dragImageHere: 'Th??? ???nh ??? v??ng n??y',
        dropImage: 'Drop image or Text',
        selectFromFiles: 'Ch???n t??? File',
        maximumFileSize: 'K??ch th?????c file t???i ??a',
        maximumFileSizeError: '???? v?????t qu?? k??ch th?????c file t???i ??a.',
        url: 'URL',
        remove: 'X??a',
        original: 'Nguy??n g???c'
      },
      video: {
        video: 'Video',
        videoLink: 'Link ?????n Video',
        insert: 'Ch??n Video',
        url: 'URL',
        providers: '(YouTube, Vimeo, Vine, Instagram, DailyMotion v?? Youku)'
      },
      link: {
        link: 'Li??n k???t',
        insert: 'Ch??n Li??n k???t',
        unlink: 'G??? Li??n k???t',
        edit: 'S???a',
        textToDisplay: 'V??n b???n hi???n th???',
        url: 'URL',
        openInNewWindow: 'M??? ??? C???a s??? m???i'
      },
      table: {
        table: 'B???ng',
        addRowAbove: 'Th??m d??ng ph??a d?????i',
        addRowBelow: 'Th??m d??ng ph??a tr??n',
        addColLeft: 'Th??m c???t b??n tr??i',
        addColRight: 'Th??m c???t b??n ph???i',
        delRow: 'X??a d??ng',
        delCol: 'X??a c???t',
        delTable: 'X??a b???ng'
      },
      hr: {
        insert: 'Ch??n'
      },
      style: {
        style: 'Ki???u ch???',
        p: 'Ch??? th?????ng',
        blockquote: '??o???n tr??ch',
        pre: 'M?? Code',
        h1: 'H1',
        h2: 'H2',
        h3: 'H3',
        h4: 'H4',
        h5: 'H5',
        h6: 'H6'
      },
      lists: {
        unordered: 'D???u ?????u d??ng',
        ordered: '????nh s???'
      },
      options: {
        help: 'Tr??? gi??p',
        fullscreen: 'To??n M??n h??nh',
        codeview: 'Xem Code'
      },
      paragraph: {
        paragraph: 'Canh l???',
        outdent: 'D???ch sang tr??i',
        indent: 'D???ch sang ph???i',
        left: 'Canh tr??i',
        center: 'Canh gi???a',
        right: 'Canh ph???i',
        justify: 'Canh ?????u'
      },
      color: {
        recent: 'M??u ch???',
        more: 'M??? r???ng',
        background: 'M??u n???n',
        foreground: 'M??u ch???',
        transparent: 'trong su???t',
        setTransparent: 'N???n trong su???t',
        reset: 'Thi???t l???p l???i',
        resetToDefault: 'Tr??? l???i ban ?????u'
      },
      shortcut: {
        shortcuts: 'Ph??m t???t',
        close: '????ng',
        textFormatting: '?????nh d???ng V??n b???n',
        action: 'H??nh ?????ng',
        paragraphFormatting: '?????nh d???ng',
        documentStyle: 'Ki???u v??n b???n',
        extraKeys: 'Extra keys'
      },
      help: {
        'insertParagraph': 'Ch??n ??o???n v??n',
        'undo': 'Ho??n t??c l???nh cu???i c??ng',
        'redo': 'L??m l???i l???nh cu???i c??ng',
        'tab': 'Tab',
        'untab': 'Untab',
        'bold': 'In ?????m',
        'italic': 'In nghi??n',
        'underline': 'G???ch ch??n',
        'strikethrough': 'G???ch ngang',
        'removeFormat': 'X??a ?????nh d???ng',
        'justifyLeft': 'C??n tr??i',
        'justifyCenter': 'C??n gi???a',
        'justifyRight': 'C??n ph???i',
        'justifyFull': 'C??n ?????u',
        'insertUnorderedList': 'Th??m danh s??ch kh??ng c?? th??? t???',
        'insertOrderedList': 'Th??m danh s??ch c?? th??? t???',
        'outdent': 'Gi???m th???t l???',
        'indent': 'T??ng th???t l???',
        'formatPara': 'Chuy???n ?????i sang ?????nh d???ng ??o???n v??n',
        'formatH1': 'Chuy???n ?????i sang ?????nh d???ng H1',
        'formatH2': 'Chuy???n ?????i sang ?????nh d???ng H2',
        'formatH3': 'Chuy???n ?????i sang ?????nh d???ng H3',
        'formatH4': 'Chuy???n ?????i sang ?????nh d???ng H4',
        'formatH5': 'Chuy???n ?????i sang ?????nh d???ng H5',
        'formatH6': 'Chuy???n ?????i sang ?????nh d???ng H6',
        'insertHorizontalRule': 'Insert horizontal rule',
        'linkDialog.show': 'Show Link Dialog'
      },
      history: {
        undo: 'L??i l???i',
        redo: 'L??m l???i'
      },
      specialChar: {
        specialChar: 'K?? T??? ????C BI???T',
        select: 'Ch???n k?? t??? ?????c bi???t'
      }
    }
  });
})(jQuery);

/***/ })

/******/ });
});