(()=>{var e=document.querySelector(".not-list"),t=document.querySelector(".not-icon"),n=document.querySelector(".alert-success");window.addEventListener("click",(function(n){t.contains(n.target)?(e.classList.remove("d-none"),setTimeout((function(){e.classList.remove("hide")}),20)):(e.classList.add("hide"),e.addEventListener("transitionend",(function(){e.classList.add("d-none")}),{capture:!1,once:!0,passive:!1}))}),!1),setTimeout((function(){n.classList.add("d-none")}),1e4)})();
//# sourceMappingURL=script.js.map