/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/***/ (() => {

eval("var notList = document.querySelector('.not-list');\nvar notIcon = document.querySelector('.not-icon');\nwindow.addEventListener('click', function (e) {\n  if (notIcon.contains(e.target)) {\n    notList.classList.remove('d-none');\n    setTimeout(function () {\n      notList.classList.remove('hide');\n    }, 20);\n  } else {\n    notList.classList.add('hide');\n    notList.addEventListener('transitionend', function () {\n      notList.classList.add('d-none');\n    }, {\n      capture: false,\n      once: true,\n      passive: false\n    });\n  }\n}, false);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0LmpzPzg3MzMiXSwibmFtZXMiOlsibm90TGlzdCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsIm5vdEljb24iLCJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsImNvbnRhaW5zIiwidGFyZ2V0IiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwic2V0VGltZW91dCIsImFkZCIsImNhcHR1cmUiLCJvbmNlIiwicGFzc2l2ZSJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBTUEsT0FBTyxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsV0FBdkIsQ0FBaEI7QUFDQSxJQUFNQyxPQUFPLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixXQUF2QixDQUFoQjtBQUVBRSxNQUFNLENBQUNDLGdCQUFQLENBQXdCLE9BQXhCLEVBQWlDLFVBQUNDLENBQUQsRUFBTztBQUNwQyxNQUFHSCxPQUFPLENBQUNJLFFBQVIsQ0FBaUJELENBQUMsQ0FBQ0UsTUFBbkIsQ0FBSCxFQUErQjtBQUMzQlIsSUFBQUEsT0FBTyxDQUFDUyxTQUFSLENBQWtCQyxNQUFsQixDQUF5QixRQUF6QjtBQUNBQyxJQUFBQSxVQUFVLENBQUMsWUFBTTtBQUNiWCxNQUFBQSxPQUFPLENBQUNTLFNBQVIsQ0FBa0JDLE1BQWxCLENBQXlCLE1BQXpCO0FBQ0gsS0FGUyxFQUVQLEVBRk8sQ0FBVjtBQUdILEdBTEQsTUFLTztBQUNIVixJQUFBQSxPQUFPLENBQUNTLFNBQVIsQ0FBa0JHLEdBQWxCLENBQXNCLE1BQXRCO0FBQ0FaLElBQUFBLE9BQU8sQ0FBQ0ssZ0JBQVIsQ0FBeUIsZUFBekIsRUFBMEMsWUFBTTtBQUM1Q0wsTUFBQUEsT0FBTyxDQUFDUyxTQUFSLENBQWtCRyxHQUFsQixDQUFzQixRQUF0QjtBQUNILEtBRkQsRUFFRztBQUNDQyxNQUFBQSxPQUFPLEVBQUUsS0FEVjtBQUVDQyxNQUFBQSxJQUFJLEVBQUUsSUFGUDtBQUdDQyxNQUFBQSxPQUFPLEVBQUU7QUFIVixLQUZIO0FBT0g7QUFDSixDQWhCRCxFQWdCRyxLQWhCSCIsInNvdXJjZXNDb250ZW50IjpbImNvbnN0IG5vdExpc3QgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubm90LWxpc3QnKVxyXG5jb25zdCBub3RJY29uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5vdC1pY29uJylcclxuXHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChlKSA9PiB7XHJcbiAgICBpZihub3RJY29uLmNvbnRhaW5zKGUudGFyZ2V0KSkge1xyXG4gICAgICAgIG5vdExpc3QuY2xhc3NMaXN0LnJlbW92ZSgnZC1ub25lJylcclxuICAgICAgICBzZXRUaW1lb3V0KCgpID0+IHtcclxuICAgICAgICAgICAgbm90TGlzdC5jbGFzc0xpc3QucmVtb3ZlKCdoaWRlJylcclxuICAgICAgICB9LCAyMCkgIFxyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBub3RMaXN0LmNsYXNzTGlzdC5hZGQoJ2hpZGUnKVxyXG4gICAgICAgIG5vdExpc3QuYWRkRXZlbnRMaXN0ZW5lcigndHJhbnNpdGlvbmVuZCcsICgpID0+IHtcclxuICAgICAgICAgICAgbm90TGlzdC5jbGFzc0xpc3QuYWRkKCdkLW5vbmUnKVxyXG4gICAgICAgIH0sIHtcclxuICAgICAgICAgICAgY2FwdHVyZTogZmFsc2UsXHJcbiAgICAgICAgICAgIG9uY2U6IHRydWUsXHJcbiAgICAgICAgICAgIHBhc3NpdmU6IGZhbHNlXHJcbiAgICAgICAgfSkgXHJcbiAgICB9XHJcbn0sIGZhbHNlKSJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2NyaXB0LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/script.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/script.js"]();
/******/ 	
/******/ })()
;