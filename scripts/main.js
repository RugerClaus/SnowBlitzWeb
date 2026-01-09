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
        leaderboard: document.getElementById("leaderboard_button"),
        changelog: document.getElementById("changelog_button"),
    }

    const sections = {
        home: document.querySelector(".home_wrapper"),
        about: document.querySelector(".about_wrapper"),
        download: document.querySelector(".download_wrapper"),
        leaderboard: document.querySelector(".leaderboard_wrapper"),
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


function render_leaderboard(items) {
  const table = document.createElement('table');

  const header = table.createTHead();
  const headerRow = header.insertRow();
  const headers = ['ID', 'Username', 'Score', 'Created At', 'Updated At'];
  
  headers.forEach(headerText => {
    const th = document.createElement('th');
    th.innerText = headerText;
    headerRow.appendChild(th);
  });

  const tbody = table.createTBody();
  items.forEach(item => {
    const row = tbody.insertRow();
    row.insertCell().innerText = item.id;
    row.insertCell().innerText = item.username;
    row.insertCell().innerText = item.score;
    row.insertCell().innerText = item.created_at;
    row.insertCell().innerText = item.updated_at;
  });

  const leaderboardContainer = document.querySelector('.leaderboard_table_wrapper');
  leaderboardContainer.appendChild(table);
}


fetch(`https://snowblitz.net/api/getLeaderboard.php`, {
  method: 'GET',
  headers: {
    'Content-Type': 'application/json'
  }
  },)
  .then(res => {
    if (!res.ok) throw new Error(`Fetch failed: ${res.status}`);
    return res.json();
  })
  .then(data => {
    const leaderboard_data = data;
    if (Array.isArray(leaderboard_data) && leaderboard_data.length) {
      console.log("Loading Leaderboard Data: " + data.status)
      render_leaderboard(leaderboard_data)
    } 
    else 
    {
      console.warn("Empty API response, using defaults.")
    }
  })
  .catch((error) => {
      console.warn("Fetch error, no leaderboard data available", error)
  });
