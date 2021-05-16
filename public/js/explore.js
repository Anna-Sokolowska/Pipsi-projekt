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

/***/ "./resources/js/explore.js":
/*!*********************************!*\
  !*** ./resources/js/explore.js ***!
  \*********************************/
/***/ (() => {

eval("const movieSearch = document.getElementById('movie-search')\n" +
    "const moviesResults = document.getElementById('movies-results')\n" +
    "\n" +
    "movieSearch.value = ''\n" +
    "var typingTimer\n" +
    "\n" +
    "const API_KEY = 'c0728c2a52fcc4c251aba15a5fc1a153'\n" +
    "const HOSTNAME = 'https://api.themoviedb.org/3/search/movie?'\n" +
    "\n" +
    "movieSearch.addEventListener('input', () => {\n" +
    "\n" +
    "    searchValue = movieSearch.value\n" +
    "    clearTimeout(typingTimer)\n" +
    "    typingTimer = setTimeout(() => {\n" +
    "\n" +
    "        moviesResults.innerHTML = ''\n" +
    "        fetch(`${HOSTNAME}api_key=${API_KEY}&query=${searchValue}`)\n" +
    "            .then(response => response.json())\n" +
    "            .then(data => {\n" +
    "                if(data === undefined && searchValue !== '') {\n" +
    "                    moviesResults.innerHTML =\n" +
    "                        `\n" +
    "                        <h2 class=\"mx-auto\">Movies not found :(</h2>\n" +
    "                    `\n" +
    "                } else {\n" +
    "\n" +
    "                    let iterations = Math.floor(data.results.length)\n" +
    "                    mergePages(iterations, searchValue)\n" +
    "\n" +
    "                }\n" +
    "            })\n" +
    "            .catch(err => console.log(err))\n" +
    "\n" +
    "        if(searchValue === '') {\n" +
    "            moviesResults.innerHTML =\n" +
    "                `\n" +
    "                <h2 class=\"mx-auto\">Type something to search for movies :)</h2>\n" +
    "            `\n" +
    "        }\n" +
    "    }, 1000)\n" +
    "})\n" +
    "\n" +
    "const mergePages = (iterations, search) => {\n" +
    "    var url = \"{{ route ('movie', $movie['id']}}\"\n" +
    "    for(let i = 1; i <= iterations; i++) {\n" +
    "        fetch(`${HOSTNAME}&query=${search}&page=${i}&api_key=${API_KEY}`)\n" +
    "            .then(response => response.json())\n" +
    "            .then(data => {\n" +
    "\n" +
    "                for(let j = 0; j < data.results.length; j++)\n" +
    "                {\n" +
    "                    if(moviesResults.childElementCount >= 40) break\n" +
    "                    movie = data.results[j]\n" +
    "\n" +
    "                    moviesResults.innerHTML +=\n" +
    "                        `\n" +
    "                <div class=\"card border-0 bg-transparent movie-card\" style=\"width: 12rem; float: left;\">\n" +
    "                    <div class=\"card-body p-0\" >\n" +
    "                        <img onClick=\"window.location.href=\'/movie/${movie.id}\'\" src=\"${(movie.poster_path === 'N/A') ? 'images/no_image.png' : 'https://image.tmdb.org/t/p/w185' + movie.poster_path }\" alt=\"...\">\n" +
    "                        <h6 class=\"card-title text-center mt-1\">${movie.title}</h6>\n" +
    "                        <form action=\"alert(${movie.id})\" method=\"post\">\n" +
    "                                <input name=\"movie_api_id\" value=\"${movie.id}\" type=\"hidden\">\n" +
    "                                <button type=\"submit\" name=\"add\" class=\"btn btn-primary\" >Add</button>\n" +
    "                            </form>\n" +
    "                    </div>\n" +
    "                </div>`\n" +
    "                }\n" +
    "            })\n" +
    "            .catch(err => console.log(err))\n" +
    "    }\n" +
    "}\n" +
    "\n" +
";//# sourceURL=[module]\\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZXhwbG9yZS5qcz82NTcyIl0sIm5hbWVzIjpbIm1vdmllU2VhcmNoIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIm1vdmllc1Jlc3VsdHMiLCJ2YWx1ZSIsInR5cGluZ1RpbWVyIiwiQVBJX0tFWSIsIkhPU1ROQU1FIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNlYXJjaFZhbHVlIiwiY2xlYXJUaW1lb3V0Iiwic2V0VGltZW91dCIsImlubmVySFRNTCIsImZldGNoIiwidGhlbiIsInJlc3BvbnNlIiwianNvbiIsImRhdGEiLCJjb25zb2xlIiwibG9nIiwicmVzdWx0cyIsInVuZGVmaW5lZCIsIml0ZXJhdGlvbnMiLCJNYXRoIiwiZmxvb3IiLCJsZW5ndGgiLCJtZXJnZVBhZ2VzIiwiZXJyIiwic2VhcmNoIiwidXJsIiwiaSIsImoiLCJjaGlsZEVsZW1lbnRDb3VudCIsIm1vdmllIiwiaWQiLCJwb3N0ZXJfcGF0aCIsInRpdGxlIiwibW92aWVTZWxlY3RlZCIsImxvY2F0aW9uIiwiaHJlZiJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBTUEsV0FBVyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsY0FBeEIsQ0FBcEI7QUFDQSxJQUFNQyxhQUFhLEdBQUdGLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixnQkFBeEIsQ0FBdEI7QUFFQUYsV0FBVyxDQUFDSSxLQUFaLEdBQW9CLEVBQXBCO0FBQ0EsSUFBSUMsV0FBSjtBQUVBLElBQU1DLE9BQU8sR0FBRyxrQ0FBaEI7QUFDQSxJQUFNQyxRQUFRLEdBQUcsNENBQWpCO0FBRUFQLFdBQVcsQ0FBQ1EsZ0JBQVosQ0FBNkIsT0FBN0IsRUFBc0MsWUFBTTtBQUV4Q0MsRUFBQUEsV0FBVyxHQUFHVCxXQUFXLENBQUNJLEtBQTFCO0FBQ0FNLEVBQUFBLFlBQVksQ0FBQ0wsV0FBRCxDQUFaO0FBQ0FBLEVBQUFBLFdBQVcsR0FBR00sVUFBVSxDQUFDLFlBQU07QUFFM0JSLElBQUFBLGFBQWEsQ0FBQ1MsU0FBZCxHQUEwQixFQUExQjtBQUNBQyxJQUFBQSxLQUFLLFdBQUlOLFFBQUoscUJBQXVCRCxPQUF2QixvQkFBd0NHLFdBQXhDLEVBQUwsQ0FDS0ssSUFETCxDQUNVLFVBQUFDLFFBQVE7QUFBQSxhQUFJQSxRQUFRLENBQUNDLElBQVQsRUFBSjtBQUFBLEtBRGxCLEVBRUtGLElBRkwsQ0FFVSxVQUFBRyxJQUFJLEVBQUk7QUFDVkMsTUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVlGLElBQUksQ0FBQ0csT0FBakI7O0FBQ0EsVUFBR0gsSUFBSSxLQUFLSSxTQUFULElBQXNCWixXQUFXLEtBQUssRUFBekMsRUFBNkM7QUFDekNOLFFBQUFBLGFBQWEsQ0FBQ1MsU0FBZDtBQUlILE9BTEQsTUFLTztBQUVILFlBQUlVLFVBQVUsR0FBR0MsSUFBSSxDQUFDQyxLQUFMLENBQVdQLElBQUksQ0FBQ0csT0FBTCxDQUFhSyxNQUF4QixDQUFqQjtBQUNBQyxRQUFBQSxVQUFVLENBQUNKLFVBQUQsRUFBYWIsV0FBYixDQUFWO0FBRUg7QUFDSixLQWZMLFdBZ0JXLFVBQUFrQixHQUFHO0FBQUEsYUFBSVQsT0FBTyxDQUFDQyxHQUFSLENBQVlRLEdBQVosQ0FBSjtBQUFBLEtBaEJkOztBQWtCQSxRQUFHbEIsV0FBVyxLQUFLLEVBQW5CLEVBQXVCO0FBQ25CTixNQUFBQSxhQUFhLENBQUNTLFNBQWQ7QUFJSDtBQUNKLEdBM0J1QixFQTJCckIsSUEzQnFCLENBQXhCO0FBNEJILENBaENEOztBQWtDQSxJQUFNYyxVQUFVLEdBQUcsU0FBYkEsVUFBYSxDQUFDSixVQUFELEVBQWFNLE1BQWIsRUFBd0I7QUFDdkMsTUFBSUMsR0FBRyxHQUFHLG1DQUFWOztBQUNBLE9BQUksSUFBSUMsQ0FBQyxHQUFHLENBQVosRUFBZUEsQ0FBQyxJQUFJUixVQUFwQixFQUFnQ1EsQ0FBQyxFQUFqQyxFQUFxQztBQUNqQ2pCLElBQUFBLEtBQUssV0FBSU4sUUFBSixvQkFBc0JxQixNQUF0QixtQkFBcUNFLENBQXJDLHNCQUFrRHhCLE9BQWxELEVBQUwsQ0FDS1EsSUFETCxDQUNVLFVBQUFDLFFBQVE7QUFBQSxhQUFJQSxRQUFRLENBQUNDLElBQVQsRUFBSjtBQUFBLEtBRGxCLEVBRUtGLElBRkwsQ0FFVSxVQUFBRyxJQUFJLEVBQUk7QUFFVixXQUFJLElBQUljLENBQUMsR0FBRyxDQUFaLEVBQWVBLENBQUMsR0FBR2QsSUFBSSxDQUFDRyxPQUFMLENBQWFLLE1BQWhDLEVBQXdDTSxDQUFDLEVBQXpDLEVBQ0E7QUFDSSxZQUFHNUIsYUFBYSxDQUFDNkIsaUJBQWQsSUFBbUMsRUFBdEMsRUFBMEM7QUFDMUNDLFFBQUFBLEtBQUssR0FBR2hCLElBQUksQ0FBQ0csT0FBTCxDQUFhVyxDQUFiLENBQVI7QUFFQTVCLFFBQUFBLGFBQWEsQ0FBQ1MsU0FBZCx3T0FJbUNxQixLQUFLLENBQUNDLEVBSnpDLHdCQUl3REQsS0FBSyxDQUFDRSxXQUFOLEtBQXNCLEtBQXZCLEdBQWdDLHFCQUFoQyxHQUF3RCxvQ0FBb0NGLEtBQUssQ0FBQ0UsV0FKekosZ0dBSzhDRixLQUFLLENBQUNHLEtBTHBELG1QQVFnREgsS0FBSyxDQUFDQyxFQVJ0RDtBQWFIO0FBQ0osS0F2QkwsV0F3QlcsVUFBQVAsR0FBRztBQUFBLGFBQUlULE9BQU8sQ0FBQ0MsR0FBUixDQUFZUSxHQUFaLENBQUo7QUFBQSxLQXhCZDtBQXlCSDtBQUNKLENBN0JEOztBQStCQSxJQUFNVSxhQUFhLEdBQUcsU0FBaEJBLGFBQWdCLENBQUFILEVBQUUsRUFBSTtBQUN4QmpDLEVBQUFBLFFBQVEsQ0FBQ3FDLFFBQVQsQ0FBa0JDLElBQWxCLEdBQXVCLGtDQUF2QjtBQUVILENBSEQiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBtb3ZpZVNlYXJjaCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtb3ZpZS1zZWFyY2gnKVxyXG5jb25zdCBtb3ZpZXNSZXN1bHRzID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21vdmllcy1yZXN1bHRzJylcclxuXHJcbm1vdmllU2VhcmNoLnZhbHVlID0gJydcclxudmFyIHR5cGluZ1RpbWVyXHJcblxyXG5jb25zdCBBUElfS0VZID0gJ2MwNzI4YzJhNTJmY2M0YzI1MWFiYTE1YTVmYzFhMTUzJ1xyXG5jb25zdCBIT1NUTkFNRSA9ICdodHRwczovL2FwaS50aGVtb3ZpZWRiLm9yZy8zL3NlYXJjaC9tb3ZpZT8nXHJcblxyXG5tb3ZpZVNlYXJjaC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsICgpID0+IHtcclxuXHJcbiAgICBzZWFyY2hWYWx1ZSA9IG1vdmllU2VhcmNoLnZhbHVlXHJcbiAgICBjbGVhclRpbWVvdXQodHlwaW5nVGltZXIpXHJcbiAgICB0eXBpbmdUaW1lciA9IHNldFRpbWVvdXQoKCkgPT4ge1xyXG5cclxuICAgICAgICBtb3ZpZXNSZXN1bHRzLmlubmVySFRNTCA9ICcnXHJcbiAgICAgICAgZmV0Y2goYCR7SE9TVE5BTUV9YXBpX2tleT0ke0FQSV9LRVl9JnF1ZXJ5PSR7c2VhcmNoVmFsdWV9YClcclxuICAgICAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgICAgICAudGhlbihkYXRhID0+IHtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGRhdGEucmVzdWx0cylcclxuICAgICAgICAgICAgICAgIGlmKGRhdGEgPT09IHVuZGVmaW5lZCAmJiBzZWFyY2hWYWx1ZSAhPT0gJycpIHtcclxuICAgICAgICAgICAgICAgICAgICBtb3ZpZXNSZXN1bHRzLmlubmVySFRNTCA9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGBcclxuICAgICAgICAgICAgICAgICAgICAgICAgPGgyIGNsYXNzPVwibXgtYXV0b1wiPk1vdmllcyBub3QgZm91bmQgOig8L2gyPlxyXG4gICAgICAgICAgICAgICAgICAgIGBcclxuICAgICAgICAgICAgICAgIH0gZWxzZSB7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgIGxldCBpdGVyYXRpb25zID0gTWF0aC5mbG9vcihkYXRhLnJlc3VsdHMubGVuZ3RoKVxyXG4gICAgICAgICAgICAgICAgICAgIG1lcmdlUGFnZXMoaXRlcmF0aW9ucywgc2VhcmNoVmFsdWUpXHJcblxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAuY2F0Y2goZXJyID0+IGNvbnNvbGUubG9nKGVycikpXHJcblxyXG4gICAgICAgIGlmKHNlYXJjaFZhbHVlID09PSAnJykge1xyXG4gICAgICAgICAgICBtb3ZpZXNSZXN1bHRzLmlubmVySFRNTCA9XHJcbiAgICAgICAgICAgICAgICBgXHJcbiAgICAgICAgICAgICAgICA8aDIgY2xhc3M9XCJteC1hdXRvXCI+VHlwZSBzb21ldGhpbmcgdG8gc2VhcmNoIGZvciBtb3ZpZXMgOik8L2gyPlxyXG4gICAgICAgICAgICBgXHJcbiAgICAgICAgfVxyXG4gICAgfSwgMTAwMClcclxufSlcclxuXHJcbmNvbnN0IG1lcmdlUGFnZXMgPSAoaXRlcmF0aW9ucywgc2VhcmNoKSA9PiB7XHJcbiAgICB2YXIgdXJsID0gXCJ7eyByb3V0ZSAoJ21vdmllJywgJG1vdmllWydpZCddfX1cIlxyXG4gICAgZm9yKGxldCBpID0gMTsgaSA8PSBpdGVyYXRpb25zOyBpKyspIHtcclxuICAgICAgICBmZXRjaChgJHtIT1NUTkFNRX0mcXVlcnk9JHtzZWFyY2h9JnBhZ2U9JHtpfSZhcGlfa2V5PSR7QVBJX0tFWX1gKVxyXG4gICAgICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpXHJcbiAgICAgICAgICAgIC50aGVuKGRhdGEgPT4ge1xyXG5cclxuICAgICAgICAgICAgICAgIGZvcihsZXQgaiA9IDA7IGogPCBkYXRhLnJlc3VsdHMubGVuZ3RoOyBqKyspXHJcbiAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYobW92aWVzUmVzdWx0cy5jaGlsZEVsZW1lbnRDb3VudCA+PSA0MCkgYnJlYWtcclxuICAgICAgICAgICAgICAgICAgICBtb3ZpZSA9IGRhdGEucmVzdWx0c1tqXVxyXG5cclxuICAgICAgICAgICAgICAgICAgICBtb3ZpZXNSZXN1bHRzLmlubmVySFRNTCArPVxyXG4gICAgICAgICAgICAgICAgICAgICAgICBgXHJcbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwiY2FyZCBib3JkZXItMCBiZy10cmFuc3BhcmVudCBtb3ZpZS1jYXJkXCIgc3R5bGU9XCJ3aWR0aDogMTJyZW07IGZsb2F0OiBsZWZ0O1wiPlxyXG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJjYXJkLWJvZHkgcC0wXCIgPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8aW1nIG9uY2xpY2s9XCJtb3ZpZVNlbGVjdGVkKCcke21vdmllLmlkfScpXCIgc3JjPVwiJHsobW92aWUucG9zdGVyX3BhdGggPT09ICdOL0EnKSA/ICdpbWFnZXMvbm9faW1hZ2UucG5nJyA6ICdodHRwczovL2ltYWdlLnRtZGIub3JnL3QvcC93MTg1JyArIG1vdmllLnBvc3Rlcl9wYXRoIH1cIiBhbHQ9XCIuLi5cIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPGg2IGNsYXNzPVwiY2FyZC10aXRsZSB0ZXh0LWNlbnRlciBtdC0xXCI+JHttb3ZpZS50aXRsZX08L2g2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8Zm9ybSBhY3Rpb249XCJhZGRNb3ZpZVwiIG1ldGhvZD1cInBvc3RcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cImhpZGRlblwiIG5hbWU9XCJ1c2VyX2lkXCIgdmFsdWU9XCIxXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IG5hbWU9XCJtb3ZpZV9hcGlfaWRcIiB2YWx1ZT1cIiR7bW92aWUuaWR9XCIgdHlwZT1cImhpZGRlblwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxidXR0b24gdHlwZT1cInN1Ym1pdFwiIG5hbWU9XCJhZGRcIiBpZD1cImFkZFwiIGNsYXNzPVwiYnRuIGJ0bi1wcmltYXJ5XCIgPkFkZDwvYnV0dG9uPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9mb3JtPlxyXG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgPC9kaXY+YFxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAuY2F0Y2goZXJyID0+IGNvbnNvbGUubG9nKGVycikpXHJcbiAgICB9XHJcbn1cclxuXHJcbmNvbnN0IG1vdmllU2VsZWN0ZWQgPSBpZCA9PiB7XHJcbiAgICBkb2N1bWVudC5sb2NhdGlvbi5ocmVmPVwieyEhIHJvdXRlKCdtb3ZpZS5zaG93JywgaWQpOyAhIX1cIjtcclxuXHJcbn1cclxuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9leHBsb3JlLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\\n//# sourceURL=webpack-internal:///./resources/js/explore.js\\n\");")
/***/ })

/******/ 	});
/************************************************************************/
/******/
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/explore.js"]();
/******/
/******/ })()
;
