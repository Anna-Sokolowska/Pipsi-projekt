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
    "                console.log(data.results)\n" +
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
    "                        <img onclick=\"movieSelected('${movie.id}')\" src=\"${(movie.poster_path === 'N/A') ? 'images/no_image.png' : 'https://image.tmdb.org/t/p/w185' + movie.poster_path }\" alt=\"...\">\n" +
    "                        <h6 class=\"card-title text-center mt-1\">${movie.title}</h6>\n" +
    "                        <form action=\"addMovie\" method=\"post\">\n" +
    "                                <input type=\"hidden\" name=\"user_id\" value=\"1\">\n" +
    "                                <input name=\"movie_api_id\" value=\"${movie.id}\" type=\"hidden\">\n" +
    "                                <button type=\"submit\" name=\"add\" id=\"add\" class=\"btn btn-primary\" >Add</button>\n" +
    "                            </form>\n" +
    "                    </div>\n" +
    "                </div>`\n" +
    "                }\n" +
    "            })\n" +
    "            .catch(err => console.log(err))\n" +
    "    }\n" +
    "}\n" +
    "\n" +
    "const movieSelected = id => {\n" +
    "    document.location.href=\"{!! route('movie.show', id); !!}\";\n" +
    "\n" +
    "}\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZXhwbG9yZS5qcz82NTcyIl0sIm5hbWVzIjpbIm1vdmllU2VhcmNoIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIm1vdmllc1Jlc3VsdHMiLCJ2YWx1ZSIsInR5cGluZ1RpbWVyIiwiQVBJX0tFWSIsIkhPU1ROQU1FIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNlYXJjaFZhbHVlIiwiY2xlYXJUaW1lb3V0Iiwic2V0VGltZW91dCIsImlubmVySFRNTCIsImZldGNoIiwidGhlbiIsInJlc3BvbnNlIiwianNvbiIsImRhdGEiLCJTZWFyY2giLCJ1bmRlZmluZWQiLCJpdGVyYXRpb25zIiwiTWF0aCIsImZsb29yIiwidG90YWxSZXN1bHRzIiwibWVyZ2VQYWdlcyIsImVyciIsImNvbnNvbGUiLCJsb2ciLCJzZWFyY2giLCJpIiwiaiIsImxlbmd0aCIsImNoaWxkRWxlbWVudENvdW50IiwibW92aWUiLCJpbWRiSUQiLCJQb3N0ZXIiLCJUaXRsZSIsIm1vdmllU2VsZWN0ZWQiLCJpZCIsInNlc3Npb25TdG9yYWdlIiwic2V0SXRlbSIsIndpbmRvdyIsImxvY2F0aW9uIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxXQUFXLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixjQUF4QixDQUFwQjtBQUNBLElBQU1DLGFBQWEsR0FBR0YsUUFBUSxDQUFDQyxjQUFULENBQXdCLGdCQUF4QixDQUF0QjtBQUVBRixXQUFXLENBQUNJLEtBQVosR0FBb0IsRUFBcEI7QUFDQSxJQUFJQyxXQUFKLEMsQ0FFQTs7QUFDQSxJQUFNQyxPQUFPLEdBQUcsVUFBaEI7QUFDQSxJQUFNQyxRQUFRLEdBQUcsMEJBQWpCO0FBRUFQLFdBQVcsQ0FBQ1EsZ0JBQVosQ0FBNkIsT0FBN0IsRUFBc0MsWUFBTTtBQUV4Q0MsRUFBQUEsV0FBVyxHQUFHVCxXQUFXLENBQUNJLEtBQTFCO0FBQ0FNLEVBQUFBLFlBQVksQ0FBQ0wsV0FBRCxDQUFaO0FBQ0FBLEVBQUFBLFdBQVcsR0FBR00sVUFBVSxDQUFDLFlBQU07QUFFM0JSLElBQUFBLGFBQWEsQ0FBQ1MsU0FBZCxHQUEwQixFQUExQjtBQUNBQyxJQUFBQSxLQUFLLFdBQUlOLFFBQUosZUFBaUJFLFdBQWpCLHFCQUF1Q0gsT0FBdkMsRUFBTCxDQUNLUSxJQURMLENBQ1UsVUFBQUMsUUFBUTtBQUFBLGFBQUlBLFFBQVEsQ0FBQ0MsSUFBVCxFQUFKO0FBQUEsS0FEbEIsRUFFS0YsSUFGTCxDQUVVLFVBQUFHLElBQUksRUFBSTtBQUVWLFVBQUdBLElBQUksQ0FBQ0MsTUFBTCxLQUFnQkMsU0FBaEIsSUFBNkJWLFdBQVcsS0FBSyxFQUFoRCxFQUFvRDtBQUNoRE4sUUFBQUEsYUFBYSxDQUFDUyxTQUFkO0FBSUgsT0FMRCxNQUtPO0FBRUgsWUFBSVEsVUFBVSxHQUFHQyxJQUFJLENBQUNDLEtBQUwsQ0FBV0wsSUFBSSxDQUFDTSxZQUFMLEdBQW9CLEVBQXBCLEdBQXlCLENBQXBDLENBQWpCO0FBQ0FDLFFBQUFBLFVBQVUsQ0FBQ0osVUFBRCxFQUFhWCxXQUFiLENBQVY7QUFFSDtBQUNKLEtBZkwsV0FnQlcsVUFBQWdCLEdBQUc7QUFBQSxhQUFJQyxPQUFPLENBQUNDLEdBQVIsQ0FBWUYsR0FBWixDQUFKO0FBQUEsS0FoQmQ7O0FBa0JBLFFBQUdoQixXQUFXLEtBQUssRUFBbkIsRUFBdUI7QUFDbkJOLE1BQUFBLGFBQWEsQ0FBQ1MsU0FBZDtBQUlIO0FBQ0osR0EzQnVCLEVBMkJyQixJQTNCcUIsQ0FBeEI7QUE0QkgsQ0FoQ0Q7O0FBa0NBLElBQU1ZLFVBQVUsR0FBRyxTQUFiQSxVQUFhLENBQUNKLFVBQUQsRUFBYVEsTUFBYixFQUF3QjtBQUN2QztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUEsT0FBSSxJQUFJQyxDQUFDLEdBQUcsQ0FBWixFQUFlQSxDQUFDLElBQUlULFVBQXBCLEVBQWdDUyxDQUFDLEVBQWpDLEVBQXFDO0FBQ2pDaEIsSUFBQUEsS0FBSyxXQUFJTixRQUFKLGVBQWlCcUIsTUFBakIsbUJBQWdDQyxDQUFoQyxxQkFBNEN2QixPQUE1QyxFQUFMLENBQ0NRLElBREQsQ0FDTSxVQUFBQyxRQUFRO0FBQUEsYUFBSUEsUUFBUSxDQUFDQyxJQUFULEVBQUo7QUFBQSxLQURkLEVBRUNGLElBRkQsQ0FFTSxVQUFBRyxJQUFJLEVBQUk7QUFFVixXQUFJLElBQUlhLENBQUMsR0FBRyxDQUFaLEVBQWVBLENBQUMsR0FBR2IsSUFBSSxDQUFDQyxNQUFMLENBQVlhLE1BQS9CLEVBQXVDRCxDQUFDLEVBQXhDLEVBQ0E7QUFDSSxZQUFHM0IsYUFBYSxDQUFDNkIsaUJBQWQsSUFBbUMsRUFBdEMsRUFBMEM7QUFDMUNDLFFBQUFBLEtBQUssR0FBR2hCLElBQUksQ0FBQ0MsTUFBTCxDQUFZWSxDQUFaLENBQVI7QUFFQTNCLFFBQUFBLGFBQWEsQ0FBQ1MsU0FBZCx3TUFHeURxQixLQUFLLENBQUNDLE1BSC9ELHVEQUlxQkQsS0FBSyxDQUFDRSxNQUFOLEtBQWlCLEtBQWxCLEdBQTJCLHFCQUEzQixHQUFtREYsS0FBSyxDQUFDRSxNQUo3RSxvSkFLa0RGLEtBQUssQ0FBQ0csS0FMeEQ7QUFZSDtBQUNKLEtBdEJELFdBdUJPLFVBQUFYLEdBQUc7QUFBQSxhQUFJQyxPQUFPLENBQUNDLEdBQVIsQ0FBWUYsR0FBWixDQUFKO0FBQUEsS0F2QlY7QUF3Qkg7QUFDSixDQWpDRDs7QUFtQ0EsSUFBTVksYUFBYSxHQUFHLFNBQWhCQSxhQUFnQixDQUFBQyxFQUFFLEVBQUk7QUFDeEJDLEVBQUFBLGNBQWMsQ0FBQ0MsT0FBZixDQUF1QixTQUF2QixFQUFrQ0YsRUFBbEM7QUFDQUcsRUFBQUEsTUFBTSxDQUFDQyxRQUFQLEdBQWtCLFlBQWxCO0FBQ0gsQ0FIRCIsInNvdXJjZXNDb250ZW50IjpbImNvbnN0IG1vdmllU2VhcmNoID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21vdmllLXNlYXJjaCcpXHJcbmNvbnN0IG1vdmllc1Jlc3VsdHMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbW92aWVzLXJlc3VsdHMnKVxyXG5cclxubW92aWVTZWFyY2gudmFsdWUgPSAnJ1xyXG52YXIgdHlwaW5nVGltZXJcclxuXHJcbi8vIExpbmsgZG8gQVBJOiBodHRwOi8vd3d3Lm9tZGJhcGkuY29tL2FwaWtleS5hc3B4P19fRVZFTlRUQVJHRVQ9ZnJlZUFjY3QmX19FVkVOVEFSR1VNRU5UPSZfX0xBU1RGT0NVUz0mX19WSUVXU1RBVEU9JTJGd0VQRHdVS0xUSXdORFk0TVRJek5ROWtGZ1lDQVE5a0ZnSUNCdzhXQWg0SFZtbHphV0pzWldoa0FnSVBGZ0lmQUdoa0FnTVBGZ0lmQUdoa0dBRUZIbDlmUTI5dWRISnZiSE5TWlhGMWFYSmxVRzl6ZEVKaFkydExaWGxmWHhZREJRdHdZWFJ5Wlc5dVFXTmpkQVVJWm5KbFpVRmpZM1FGQ0daeVpXVkJZMk4wb0N4S1lHN3hhWnd5Mmt0SXJWbVdHZFd6eGolMkZEaEhRYUFxcUZZVGlSVERFJTNEJl9fVklFV1NUQVRFR0VORVJBVE9SPTVFNTUwRjU4Jl9fRVZFTlRWQUxJREFUSU9OPSUyRndFZEFBVSUyQk84NkpqVHFkZzB5aHVHUjJ0QnVrbVN6aFhmbmxXV1ZkV0lhbVZvdVZUemZaSnVRRHBMVlM2SFpGV3E1ZllwaW9pRGp4RmpTZENRZmJHMFNXZHVYRmQ4QmNXR0gxb3QwazBTTzdDZnV1bEhMTDRqJTJCM3FDY1czUmVYaGZiNEtLc1NzM3psUSUyQjQ4S1k2UXptN3d6WmJSJmF0PWZyZWVBY2N0JkVtYWlsPVxyXG5jb25zdCBBUElfS0VZID0gJ2E0MDJlZmU4J1xyXG5jb25zdCBIT1NUTkFNRSA9ICdodHRwOi8vd3d3Lm9tZGJhcGkuY29tLz8nXHJcblxyXG5tb3ZpZVNlYXJjaC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsICgpID0+IHtcclxuXHJcbiAgICBzZWFyY2hWYWx1ZSA9IG1vdmllU2VhcmNoLnZhbHVlXHJcbiAgICBjbGVhclRpbWVvdXQodHlwaW5nVGltZXIpXHJcbiAgICB0eXBpbmdUaW1lciA9IHNldFRpbWVvdXQoKCkgPT4ge1xyXG5cclxuICAgICAgICBtb3ZpZXNSZXN1bHRzLmlubmVySFRNTCA9ICcnXHJcbiAgICAgICAgZmV0Y2goYCR7SE9TVE5BTUV9cz0ke3NlYXJjaFZhbHVlfSZhcGlrZXk9JHtBUElfS0VZfWApXHJcbiAgICAgICAgICAgIC50aGVuKHJlc3BvbnNlID0+IHJlc3BvbnNlLmpzb24oKSlcclxuICAgICAgICAgICAgLnRoZW4oZGF0YSA9PiB7XHJcblxyXG4gICAgICAgICAgICAgICAgaWYoZGF0YS5TZWFyY2ggPT09IHVuZGVmaW5lZCAmJiBzZWFyY2hWYWx1ZSAhPT0gJycpIHtcclxuICAgICAgICAgICAgICAgICAgICBtb3ZpZXNSZXN1bHRzLmlubmVySFRNTCA9IFxyXG4gICAgICAgICAgICAgICAgICAgIGBcclxuICAgICAgICAgICAgICAgICAgICAgICAgPGgyIGNsYXNzPVwibXgtYXV0b1wiPk1vdmllcyBub3QgZm91bmQgOig8L2gyPlxyXG4gICAgICAgICAgICAgICAgICAgIGBcclxuICAgICAgICAgICAgICAgIH0gZWxzZSB7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgIGxldCBpdGVyYXRpb25zID0gTWF0aC5mbG9vcihkYXRhLnRvdGFsUmVzdWx0cyAvIDEwICsgMSlcclxuICAgICAgICAgICAgICAgICAgICBtZXJnZVBhZ2VzKGl0ZXJhdGlvbnMsIHNlYXJjaFZhbHVlKVxyXG4gICAgICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgfSBcclxuICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgLmNhdGNoKGVyciA9PiBjb25zb2xlLmxvZyhlcnIpKVxyXG5cclxuICAgICAgICBpZihzZWFyY2hWYWx1ZSA9PT0gJycpIHtcclxuICAgICAgICAgICAgbW92aWVzUmVzdWx0cy5pbm5lckhUTUwgPSBcclxuICAgICAgICAgICAgYFxyXG4gICAgICAgICAgICAgICAgPGgyIGNsYXNzPVwibXgtYXV0b1wiPlR5cGUgc29tZXRoaW5nIHRvIHNlYXJjaCBmb3IgbW92aWVzIDopPC9oMj5cclxuICAgICAgICAgICAgYFxyXG4gICAgICAgIH1cclxuICAgIH0sIDEwMDApXHJcbn0pXHJcblxyXG5jb25zdCBtZXJnZVBhZ2VzID0gKGl0ZXJhdGlvbnMsIHNlYXJjaCkgPT4ge1xyXG4gICAgLy8gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJzaGFyZVwiKS5pbm5lckhUTUwgKz1cclxuICAgIC8vIGBcclxuICAgIC8vIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIGNsYXNzPVwiYnRuIGJ0bi1wcmltYXJ5IG10LTNcIiBkYXRhLWJzLXRvZ2dsZT1cIm1vZGFsXCIgZGF0YS1icy10YXJnZXQ9XCIjZXhhbXBsZU1vZGFsXCI+XHJcbiAgICAvLyAgICAgU2hhcmVcclxuICAgIC8vIDwvYnV0dG9uPmBcclxuXHJcbiAgICBmb3IobGV0IGkgPSAxOyBpIDw9IGl0ZXJhdGlvbnM7IGkrKykge1xyXG4gICAgICAgIGZldGNoKGAke0hPU1ROQU1FfXM9JHtzZWFyY2h9JnBhZ2U9JHtpfSZhcGlrZXk9JHtBUElfS0VZfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKGRhdGEgPT4ge1xyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgZm9yKGxldCBqID0gMDsgaiA8IGRhdGEuU2VhcmNoLmxlbmd0aDsgaisrKSBcclxuICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgaWYobW92aWVzUmVzdWx0cy5jaGlsZEVsZW1lbnRDb3VudCA+PSA0MCkgYnJlYWtcclxuICAgICAgICAgICAgICAgIG1vdmllID0gZGF0YS5TZWFyY2hbal1cclxuXHJcbiAgICAgICAgICAgICAgICBtb3ZpZXNSZXN1bHRzLmlubmVySFRNTCArPVxyXG4gICAgICAgICAgICAgICAgYFxyXG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImNhcmQgYm9yZGVyLTAgYmctdHJhbnNwYXJlbnQgbW92aWUtY2FyZFwiIHN0eWxlPVwid2lkdGg6IDEycmVtOyBmbG9hdDogbGVmdDtcIj5cclxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwiY2FyZC1ib2R5IHAtMFwiIG9uY2xpY2s9XCJtb3ZpZVNlbGVjdGVkKCcke21vdmllLmltZGJJRH0nKVwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz1cIiR7KG1vdmllLlBvc3RlciA9PT0gJ04vQScpID8gJ2ltYWdlcy9ub19pbWFnZS5wbmcnIDogbW92aWUuUG9zdGVyIH1cIiB3aWR0aD1cIjEwMFwiIGhlaWdodD1cIjMwMFwiIGNsYXNzPVwiY2FyZC1pbWctdG9wXCIgYWx0PVwiLi4uXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxoNiBjbGFzcz1cImNhcmQtdGl0bGUgdGV4dC1jZW50ZXIgbXQtMVwiPiR7bW92aWUuVGl0bGV9PC9oNj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImNhcmQtdGl0bGVcIj5cclxuICAgICAgICAgICAgICAgICAgICA8YnV0dG9uIGNsYXNzPVwiYnRuIGJ0bi1zZWNvbmRhcnlcIj5BZGQ8L2J1dHRvbj4gPCEtLSBvbkNsaWNrID4+IEluc2VydCBJTlRPIFNRTCAtLS0+XHJcbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICA8L2Rpdj5gXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KVxyXG4gICAgICAgIC5jYXRjaChlcnIgPT4gY29uc29sZS5sb2coZXJyKSlcclxuICAgIH1cclxufVxyXG5cclxuY29uc3QgbW92aWVTZWxlY3RlZCA9IGlkID0+IHtcclxuICAgIHNlc3Npb25TdG9yYWdlLnNldEl0ZW0oJ21vdmllSWQnLCBpZClcclxuICAgIHdpbmRvdy5sb2NhdGlvbiA9ICdtb3ZpZS5odG1sJ1xyXG59Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9leHBsb3JlLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/explore.js\n");

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
