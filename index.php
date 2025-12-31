<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <title>Snow Blitz - Official Website</title>
    </head>
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

        <div class="socials_sidebar_wrapper">
            <div class="close_socials_button">
                >>
            </div>
            <div class="socials_inner_wrapper">
                <a href="https://twitter.com/YourGameHandle" target="_blank">
                    <img src="https://yourgame.com/assets/socials/twitter.png" alt="Twitter">
                </a>
                <a href="https://www.instagram.com/YourGameHandle" target="_blank">
                    <img src="https://yourgame.com/assets/socials/instagram.png" alt="Instagram">
                </a>
                <a href="https://www.youtube.com/YourGame" target="_blank">
                    <img src="https://yourgame.com/assets/socials/youtube.png" alt="YouTube">
                </a>
            </div>
        </div>

        <!-- Landing Page -->
        <section class="landing_section_wrapper">
            <div class="top">
                <div class="top_inner_wrapper">
                    <img id="game_logo" src="https://yourgame.com/assets/images/logo.png" alt="Snow Blitz Logo">
                </div>
            </div>
            <div class="bottom">
                <div class="bottom_inner_wrapper">
                    <nav class="navbar">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About the Game</a></li>
                            <li><a href="#download">Download</a></li>
                            <li><a href="#changelog">changelog</a></li>
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
    </body>
</html>
