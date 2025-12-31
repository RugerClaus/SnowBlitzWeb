<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <title>Snow Blitz - Official Website</title>
    </head>

    <style>
        /* Snowflakes container */
        #snowflakes {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none; /* Snowflakes won’t block clicks */
        }

        /* Snowflake style */
        .snowflake {
            position: absolute;
            font-size: 20px; /* Size of the snowflakes */
            color: white;
            opacity: 0.8;
            user-select: none;
            z-index: 9999; /* Make sure snowflakes are on top */
            animation: fall linear infinite;
        }

        /* Snowflake animation */
        @keyframes fall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.8;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
        @media(max-width: 640px){
            @keyframes fall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.8;
            }
            100% {
                transform: translateY(200vh) rotate(360deg);
                opacity: 0;
            }
        }
        }
    </style>
    <body>

        <!-- Fixed Elements - game download, social media links -->
        <nav class="fixed_navbar_wrapper">
            <ul>
                <li id="home_button"><a href="#home">Home</a></li>
                <li id="about_button"><a href="#about">About</a></li>
                <li id="download_button"><a href="#download">Download</a></li>
                <li id="changelog_button"><a href="#changelog">Changelog</a></li>
            </ul>
        </nav>

        <!-- Landing Page -->
        <section class="landing_section_wrapper">
            <div id="snowflakes"></div>
            <div class="top">
                <div class="top_inner_wrapper">
                    <img id="game_logo" src="assets/logo.png" alt="Snow Blitz Logo">
                </div>
            </div>
            <div class="bottom">
                <div class="bottom_inner_wrapper">
                    <nav class="navbar">
                        <ul>
                            <li><a href="#home" class="leftbutton">Home</a></li>
                            <li><a href="#about" class="leftbutton">About the Game</a></li>
                            <li><a href="#download" class="rightbutton">Download</a></li>
                            <li><a href="#changelog" class="rightbutton">Changelog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Home Page section -->
        <section class="home_wrapper" id="home">
            <div class="main_content_wrapper">
                <div class="announcements_wrapper">
                    <div class="header">
                        <h1>Latest Announcements</h1>
                    </div>
                    <div class="slider_wrapper">
                        <div class="carousel"></div>
                        <div class="carousel_indicator_wrapper"></div>
                        <div class="blurb_container"></div>
                    </div>
                </div>
                <div class="article_section_wrapper">
                    <article class="text_left_wrapper">
                        <p id="left_home_text">Snow Blitz is an action-packed, fast-paced game where you control a character trying to survive endless snowstorms! Stay tuned for upcoming features and changelog!</p>
                    </article>
                    <article class="text_right_wrapper">
                        <p id="right_home_text">Join the community, download the game, and experience the challenge. Stay active on social media to get the latest news and changelog!</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- About Page section -->
        <section class="about_wrapper" id="about">
            <h2>About Snow Blitz</h2>
            <p>Snow Blitz is a thrilling survival game where players must navigate through extreme snowstorms, avoid obstacles, and compete for high scores. The game features customizable characters, power-ups, and various modes.</p>
            <p>Game Features:</p>
            <ul>
                <li>Endless mode for high score challenges</li>
                <li>Character customization</li>
                <li>Unique power-ups and challenges</li>
            </ul>
        </section>

        <!-- Download Section -->
        <section class="download_wrapper" id="download">
            <h2>Download Snow Blitz</h2>
            <p>Get the game today and start your survival journey! Available for Windows and Mac.</p>
            <a href="https://download-link.com" class="download_button">Download Now</a>
        </section>

        <footer>
            <div class="footer_section">
                <p>© 2025 Snow Blitz. All rights reserved.</p>
            </div>
        </footer>

        <script src="scripts/main.js"></script>
        <script>
            let snowflakes = [];
            function createSnowflake() {
                if (snowflakes.length < 71) {
                    const snowflake = document.createElement('div');
                    snowflake.classList.add('snowflake');
                    snowflake.innerText = '*';

                    const randomX = Math.random() * window.innerWidth;
                    snowflake.style.top = '-50px';
                    snowflake.style.left = `${randomX}px`;

                    const randomFontSize = Math.random() * 50 + 10;
                    snowflake.style.fontSize = `${randomFontSize}px`;

                    const duration = Math.random() * 3 + 3;
                    snowflake.style.animationDuration = `${duration}s`;

                    const delay = Math.random() * 0.25;
                    snowflake.style.animationDelay = `${delay}s`;

                    snowflakes.push(snowflake);

                    document.getElementById('snowflakes').appendChild(snowflake);
                    snowflake.addEventListener('animationend', () => {
                        snowflake.remove();
                        snowflakes = snowflakes.filter(s => s !== snowflake);
                    });
                }
            }

            // Call the function to create snowflakes every 100ms
            setInterval(createSnowflake, 100);
            

            
    </script>
    </body>
</html>
