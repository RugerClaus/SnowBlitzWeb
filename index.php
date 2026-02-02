<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="description" content="Snow Blitz - Official site.">
        <meta name="keywords" content="survival game, arcade, Snow Blitz, gameplay, high scores, power-ups, snowstorms, endless mode, leaderboard, open source, community-driven, free game, indie game, Steam, downloadable game, game developer, open source, GNU GPLv3, game engine, game framework, game customization, modding, free to play">
        <meta name="robots" content="index, follow">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <title>Snow Blitz - Official Website</title>
    </head>

    <style>
        
        #snowflakes {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .snowflake {
            position: absolute;
            font-size: 20px;
            color: white;
            opacity: 0.8;
            user-select: none;
            z-index: 9999;
            animation: fall linear infinite;
        }

        .absorbrock {
            position: absolute;
            font-size: 20px;
            color: blue;
            opacity: 0.8;
            user-select: none;
            font-size: 15px;
            z-index: 9999;
            animation: fall linear infinite;
        }

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
    </style>
    <body>

        <nav class="fixed_navbar_wrapper">
            <ul>
                <li id="home_button"><a href="#home">Home</a></li>
                <li id="about_button"><a href="#about">About</a></li>
                <li id="download_button"><a href="#download">Download</a></li>
                <li id="leaderboard_button"><a href="#leaderboard">Leaderboard</a></li>
                <li id="changelog_button"><a href="#changelog">Changelog</a></li>
            </ul>
        </nav>

         <div id="snowflakes"></div>
        <section class="landing_section_wrapper">
            
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
                            <li><a href="#leaderboard" class="rightbutton">Leaderboard</a></li>
                            <li><a href="#changelog" class="rightbutton">Changelog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

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
                        <p id="left_home_text">Snow Blitz is a casual arcade game, where you play as a snow ball. The temperature is high, so you must catch more snow to survive. Can you avoid the falling rocks, the ever increasing heat as you grow? Use power ups and other falling abilities to conquer the skies in this infinitely replayable, ever growing game!</p>
                    </article>
                    <article class="text_right_wrapper">
                        <p id="right_home_text">Enjoy an original sound track! Full of bouncy, sometimes awkwardly-paced music, that is sure to keep you focused on what matters: Catching snow flakes.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="about_wrapper" id="about">
            <h2>About Snow Blitz</h2>
            <p>Snow Blitz is a casual arcade game where the player needs to catch snowflakes to level up and prevent themselves from melting, avoid obstacles, and compete for high scores. Currently the game supports Endless mode (a procedurally generated leveling system with scaling for size). And a tutorial mode that show you how to play the game. Future updates will bring other game modes, and really anything the players suggest as it grows!</p>
            
            <p>Snow Blitz was ulitimately born as a simple game, and it is meant to be a simple game. I have created a framework that I've redesigned the game on top of to allow for maximum flexibility. This means that player and community contributions are a large goal of this project. I don't own the outcome of this. You do! The source code is licensed under the GNU GPLv3 license to enforce openness.</p>
          
            <p>As seen on this page, the game has a built in leaderboard system. This is fully anonymous and privacy focused and is an opt in only feature. The game client prompts the player at first time start up if they want to opt in. You simply need to provide a username, and you will be automatically added to the database and your highest scores will post to the website every time you break them. The top 10 scores are visible from the leaderboard section of the main menu.</p>

            <p>If you'd like to contribute to the game, you can visit the GitHub project here: https://github.com/rugerclaus/SnowBlitz</p>

            <p>To report bugs, or request features, or submit feedback, please either use the issue tracker on GitHub, or send an email to <b>dev@snowblitz.net</b>.</p>

            <p>The ultimate goal of this project, is to empower the community. Which is why the game and framework itself is designed with as much observability as possible. You'll find in the game files a <b>logs/</b> directory where all state transitions, events and errors are all held. This system provides robust possiblities for the game. So if you want to get your hands dirty, feel free to play around.</p>
            <p>Game Features:</p>
            <ul>
                <li>Endless mode for high score challenges</li>
                <li>An online opt-in leaderboard system to compete with other players for the high score</li>
                <li>Continuously updated content and features at the behest of the community</li>
                <li>Is always going to be free and open source for all users and developers</li>
            </ul>
           
            <p>This games source code and updated binaries can be found in the <a href="#download">Downloads</a> page. You can also optionally purchase the game on Steam if you'd like to support the project!</p>

        </section>

        <section class="download_wrapper" id="download">
            <div class="linux_download_info">
                    <h1>Download for Linux</h1>
            </div>
            <div class="windows_download_info">
                    <h1>Download for Windows</h1>
            </div>
            <h1>Download Snow Blitz</h1>
            <div class="download_link_wrapper">
                <a href="https://snowblitz.net/downloads/SnowBlitz_Latest_Linux.zip" download>
                    <img src="assets/tux.png" alt="Linux Download" class="tux">
                </a>
                <a href="https://snowblitz.net/downloads/SnowBlitz_Latest_Windows.zip" download>
                    <img src="assets/windows.png" alt="Windows Download" class="windows">
                </a>
            </div>
            <div class="download_instructions">
                <h2>Windows Download Instructions: </h2>
                <div class="instructions">
                    <ul>
                        <li>1. Click on the Windows logo to download for Windows</li>
                        <li>2. Extract the zip archive to wherever you please, (Desktop is easiest)</li>
                        <li>3. Open the folder you extracted</li>
                        <li>4. Double click on SnowBlitz_XXXX.exe, which should be the only file along with three other folders</li>
                        <li>5. Have fun!</li>
                    </ul>
                </div>
                <h2>Linux Download Instructions: </h2>
                <div class="instructions">
                    <ul>
                        <li>1. Click on Tux the penguin to download for Linux</li>
                        <li>2. Extract the zip archive to wherever you want (Usually you'll want an easy to reach directory like ~/home/user)</li>
                        <li>3. Open the folder you extract</li>
                        <li>4. You should be able to double click on the single executable file and open the program. If not proceed to step 5.</li>
                        <li>5. If using GNOME, right click on the executable and select "run as program"</li>
                        <li>5.1.  Otherwise open a terminal in the directory of the game, and run ./SnowBlitz_XXXX (X refers to what comes after SnowBlitz in this build, you should just be able to type S and press TAB.)</li>
                        <li>5.2. Have fun!</li>
                    </ul>
                </div>
                <h2>Source Code: </h2>
                <div class="instructions">
                    <ul>
                        <li>1. Click <a href="https://snowblitz.net/downloads/source/SnowBlitz_Beta_Source_Latest.zip" download>Source Code</a> to download the latest version's source code.</li>
                        <li>2. Follow instructions in README file to install dependencies and run or build the program</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="leaderboard_wrapper" id="leaderboard">
            <div class="leaderboard_table_wrapper"></div>
        </section>

        <section class="changelog_wrapper" id="changelog">

            <h3>Development version Beta 0.9.1 - 2026-02-01: </h3>
            <ul>
                <li>- Deployed application for first round of playtesting</li>
                <li>- No currently known issues with this build</li>
                <li>- Optimized Build Script to remove internal assets after build completion</li>
            </ul>

        </section>

        <footer>
            <div class="footer_section">
                <p id="copyright_year"></p>
            </div>
        </footer>

        <script src="scripts/main.js"></script>
        <script>
            const landsect = document.querySelector('.landing_section_wrapper') 
            
            function get_width()
            {
                return landsect.getBoundingClientRect().width
                  
                
            }            
            
            let snowflakes = [];
            let width = get_width()
            function get_snowfall_threshold()
            {
                if (width > 1000)
                {
                    return 71
                }
                else
                {
                    return 40
                }
            }

            function createSnowflake() {
                if (snowflakes.length < get_snowfall_threshold()) {
                    const snowflake = document.createElement('div');
                    snowflake.classList.add('snowflake');
                    snowflake.innerHTML = '&#x25CF;';

                    const randomX = Math.random() * window.innerWidth;
                    snowflake.style.top = '-50px';
                    snowflake.style.left = `${randomX}px`;

                    const randomFontSize = Math.random() * 30 + 10;
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

            setInterval(createSnowflake, 100);

            let bluepowerups = [];
            function createbpu() {
                if (bluepowerups.length < 6) {
                    const pu = document.createElement('div');
                    pu.classList.add('absorbrock');
                    pu.innerHTML = '&#x25CF;';

                    const randomX = Math.random() * window.innerWidth;
                    pu.style.top = '-50px';
                    pu.style.left = `${randomX}px`;

                    const duration = Math.random() * 3 + 3;
                    pu.style.animationDuration = `${duration}s`;

                    const delay = Math.random() * 0.25;
                    pu.style.animationDelay = `${delay}s`;

                    bluepowerups.push(pu);

                    document.getElementById('snowflakes').appendChild(pu);
                    pu.addEventListener('animationend', () => {
                        pu.remove();
                        bluepowerups = pu.filter(s => s !== pu);
                    });
                }
            }
            setInterval(createbpu, 100);
            

            
    </script>
    </body>
</html>
