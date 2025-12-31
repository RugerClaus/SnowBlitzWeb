window.onload = function(){
    window.scrollTo(0,0)
}

const body = document.querySelector('body');
const carousel_script_tag = document.createElement("script");
carousel_script_tag.src = 'scripts/carousel.js';
body.appendChild(carousel_script_tag);

// Main site logic
const handle_scroll_buttons = () => {
    const buttons = {
        home: document.getElementById("home_button"),
        about: document.getElementById("about_button"),
        download: document.getElementById("download_button"),
        changelog: document.getElementById("changelog_button"),
    }

    const sections = {
        home: document.querySelector(".home_wrapper"),
        about: document.querySelector(".about_wrapper"),
        download: document.querySelector(".download_wrapper"),
        changelog: document.querySelector(".changelog_wrapper"),
        
    }

    let current_section = null;

    // Loop through each section and check if it's in the viewport
    for (let key in sections) {
        const rect = sections[key].getBoundingClientRect();

        if (rect.top <= window.innerHeight * 0.5 && rect.bottom >= window.innerHeight * 0.5) {
            current_section = key;
            break;
        }
    }

    // Update button styles based on the section in view
    for (let key in buttons) {
        if (key === current_section) {
            buttons[key].classList.add("active_page_section_button");
            buttons[key].children.item(0).style.color = "black";
        } else {
            buttons[key].classList.remove("active_page_section_button");
            buttons[key].children.item(0).style.color = "white";
        }
    }
};


window.addEventListener("scroll", () => {
    const navbar = document.querySelector('.navbar');
    const top_nav_bar = document.querySelector('.fixed_navbar_wrapper');
    let navbar_distance_from_top = navbar.getBoundingClientRect().top;

    if (navbar_distance_from_top <= 0) {
        top_nav_bar.style.display = "block";
    } else {
        top_nav_bar.style.display = "none";
    }

    handle_scroll_buttons();
});

// Copyright display
const copyright = document.getElementById("copyright_year");
const date = new Date().getFullYear();
copyright.innerHTML = `&copy; ${date} Snow Blitz. All rights reserved.`;
