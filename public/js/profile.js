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

/***/ "./resources/js/profile.js":
/*!*********************************!*\
  !*** ./resources/js/profile.js ***!
  \*********************************/
/***/ (() => {

eval("var profileData = document.getElementById('profile-data');\nvar displayProfileData = document.getElementById('display-profile-data');\nvar displayProfileDataButton = document.getElementById('display-profile-data-button');\nvar editProfileData = document.getElementById('edit-profile-data');\nvar editProfileDataButton = document.getElementById('edit-profile-data-button');\ndisplayProfileDataButton.addEventListener('click', function () {\n  displayProfileData.classList.remove('visually-hidden');\n  editProfileData.classList.add('visually-hidden');\n  displayProfileDataButton.classList.replace('btn-secondary', 'btn-primary');\n  editProfileDataButton.classList.replace('btn-primary', 'btn-secondary');\n});\neditProfileDataButton.addEventListener('click', function () {\n  editProfileData.classList.remove('visually-hidden');\n  displayProfileData.classList.add('visually-hidden');\n  displayProfileDataButton.classList.replace('btn-primary', 'btn-secondary');\n  editProfileDataButton.classList.replace('btn-secondary', 'btn-primary');\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcHJvZmlsZS5qcz8wZDI0Il0sIm5hbWVzIjpbInByb2ZpbGVEYXRhIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImRpc3BsYXlQcm9maWxlRGF0YSIsImRpc3BsYXlQcm9maWxlRGF0YUJ1dHRvbiIsImVkaXRQcm9maWxlRGF0YSIsImVkaXRQcm9maWxlRGF0YUJ1dHRvbiIsImFkZEV2ZW50TGlzdGVuZXIiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiLCJyZXBsYWNlIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxXQUFXLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixjQUF4QixDQUFwQjtBQUNBLElBQU1DLGtCQUFrQixHQUFHRixRQUFRLENBQUNDLGNBQVQsQ0FBd0Isc0JBQXhCLENBQTNCO0FBQ0EsSUFBTUUsd0JBQXdCLEdBQUdILFFBQVEsQ0FBQ0MsY0FBVCxDQUF3Qiw2QkFBeEIsQ0FBakM7QUFDQSxJQUFNRyxlQUFlLEdBQUdKLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixtQkFBeEIsQ0FBeEI7QUFDQSxJQUFNSSxxQkFBcUIsR0FBR0wsUUFBUSxDQUFDQyxjQUFULENBQXdCLDBCQUF4QixDQUE5QjtBQUVBRSx3QkFBd0IsQ0FBQ0csZ0JBQXpCLENBQTBDLE9BQTFDLEVBQW1ELFlBQU07QUFFckRKLEVBQUFBLGtCQUFrQixDQUFDSyxTQUFuQixDQUE2QkMsTUFBN0IsQ0FBb0MsaUJBQXBDO0FBQ0FKLEVBQUFBLGVBQWUsQ0FBQ0csU0FBaEIsQ0FBMEJFLEdBQTFCLENBQThCLGlCQUE5QjtBQUVBTixFQUFBQSx3QkFBd0IsQ0FBQ0ksU0FBekIsQ0FBbUNHLE9BQW5DLENBQTJDLGVBQTNDLEVBQTRELGFBQTVEO0FBQ0FMLEVBQUFBLHFCQUFxQixDQUFDRSxTQUF0QixDQUFnQ0csT0FBaEMsQ0FBd0MsYUFBeEMsRUFBdUQsZUFBdkQ7QUFDSCxDQVBEO0FBU0FMLHFCQUFxQixDQUFDQyxnQkFBdEIsQ0FBdUMsT0FBdkMsRUFBZ0QsWUFBTTtBQUVsREYsRUFBQUEsZUFBZSxDQUFDRyxTQUFoQixDQUEwQkMsTUFBMUIsQ0FBaUMsaUJBQWpDO0FBQ0FOLEVBQUFBLGtCQUFrQixDQUFDSyxTQUFuQixDQUE2QkUsR0FBN0IsQ0FBaUMsaUJBQWpDO0FBRUFOLEVBQUFBLHdCQUF3QixDQUFDSSxTQUF6QixDQUFtQ0csT0FBbkMsQ0FBMkMsYUFBM0MsRUFBMEQsZUFBMUQ7QUFDQUwsRUFBQUEscUJBQXFCLENBQUNFLFNBQXRCLENBQWdDRyxPQUFoQyxDQUF3QyxlQUF4QyxFQUF5RCxhQUF6RDtBQUNILENBUEQiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBwcm9maWxlRGF0YSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcm9maWxlLWRhdGEnKVxyXG5jb25zdCBkaXNwbGF5UHJvZmlsZURhdGEgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGlzcGxheS1wcm9maWxlLWRhdGEnKVxyXG5jb25zdCBkaXNwbGF5UHJvZmlsZURhdGFCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGlzcGxheS1wcm9maWxlLWRhdGEtYnV0dG9uJylcclxuY29uc3QgZWRpdFByb2ZpbGVEYXRhID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2VkaXQtcHJvZmlsZS1kYXRhJylcclxuY29uc3QgZWRpdFByb2ZpbGVEYXRhQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2VkaXQtcHJvZmlsZS1kYXRhLWJ1dHRvbicpXHJcblxyXG5kaXNwbGF5UHJvZmlsZURhdGFCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcblxyXG4gICAgZGlzcGxheVByb2ZpbGVEYXRhLmNsYXNzTGlzdC5yZW1vdmUoJ3Zpc3VhbGx5LWhpZGRlbicpXHJcbiAgICBlZGl0UHJvZmlsZURhdGEuY2xhc3NMaXN0LmFkZCgndmlzdWFsbHktaGlkZGVuJylcclxuXHJcbiAgICBkaXNwbGF5UHJvZmlsZURhdGFCdXR0b24uY2xhc3NMaXN0LnJlcGxhY2UoJ2J0bi1zZWNvbmRhcnknLCAnYnRuLXByaW1hcnknKVxyXG4gICAgZWRpdFByb2ZpbGVEYXRhQnV0dG9uLmNsYXNzTGlzdC5yZXBsYWNlKCdidG4tcHJpbWFyeScsICdidG4tc2Vjb25kYXJ5JylcclxufSlcclxuXHJcbmVkaXRQcm9maWxlRGF0YUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcclxuXHJcbiAgICBlZGl0UHJvZmlsZURhdGEuY2xhc3NMaXN0LnJlbW92ZSgndmlzdWFsbHktaGlkZGVuJylcclxuICAgIGRpc3BsYXlQcm9maWxlRGF0YS5jbGFzc0xpc3QuYWRkKCd2aXN1YWxseS1oaWRkZW4nKVxyXG4gICAgXHJcbiAgICBkaXNwbGF5UHJvZmlsZURhdGFCdXR0b24uY2xhc3NMaXN0LnJlcGxhY2UoJ2J0bi1wcmltYXJ5JywgJ2J0bi1zZWNvbmRhcnknKVxyXG4gICAgZWRpdFByb2ZpbGVEYXRhQnV0dG9uLmNsYXNzTGlzdC5yZXBsYWNlKCdidG4tc2Vjb25kYXJ5JywgJ2J0bi1wcmltYXJ5JylcclxufSkiXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3Byb2ZpbGUuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/profile.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/profile.js"]();
/******/ 	
/******/ })()
;