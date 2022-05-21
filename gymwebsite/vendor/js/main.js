/*
  Template Name: Gym
  Description:  Gym Protien HTML Template
  Author: Sarvesh/Yuraj
  Author URI: 
  file:main.js
  Version: 1.0
  Company:
  Created: 12-May-2022
*/
function toggleClass(){
    let toggleNav = document.getElementById('dropdownMenus');
    toggleNav.classList.toggle('show');
}

var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});

// ################# SLIDER ####################