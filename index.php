<?php
// Array of GIF URLs
$images = array(
	'./scpgif/01_chicken.gif',
	'./scpgif/02_bounce.gif',
	'./scpgif/03_sparta.gif',
	'./scpgif/04_fish.gif',
	'./scpgif/05.gif',
	'./scpgif/05_samuel.gif',
	'./scpgif/06_goths.gif',
	'./scpgif/07_futurama.gif',
	'./scpgif/08_cat.gif',
	'./scpgif/09_pinkie_pie.gif',
	'./scpgif/10_purt_ernie.gif',
	'./scpgif/11_hidinghomer.gif',
	'./scpgif/12_peon.gif',
	'./scpgif/13_pinkpanther.gif',
	'./scpgif/14_fish_sticks.gif',
	'./scpgif/15_owl.gif',
	'./scpgif/16_candle.gif',
	'./scpgif/17_sexy_flanders.gif'

);

//var containing image set to null
$selectedImage = null;

//check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Randomly select image from array
	$selectedImage = $images[array_rand($images)];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--
    <link rel="stylesheet" type="text/css" href="navbar1.css">
    <link rel="stylesheet" type="text/css" href="main.css">
-->
    <link rel="icon" type="image/x-icon" href="./assets/02_ilogin.PNG">
    <script src="script.js" type="text/javascript"></script>
    <script>
        function generateImage() {
            fetch('01_generate_image.php')
                .then(response => response.json())
                .then(data => {
                    const imageContainer = document.getElementById('imageContainer');
                    imageContainer.innerHTML = `<img src="${data.image}" alt="Random Image" style="max-width: 100%; height: auto;">`;
                    const button = document.getElementById('generateButton');
                    button.scrollIntoView({ behavior: "smooth" });
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
<!--    <link rel="stylesheet" type="text/css" href="./css/soo.css">    -->
    <title>ASCII Cache</title>
    <style>
        .code {
            margin: 55px 655px 0px 0px;
            padding: -75px -575px 0px 0px;
        }

        .mobile{

        }

        span {

            color: yellow;
            background-color: blue;
            font-weight: bold;
            padding: 0px 7px;

        }

        // underline
        //.underline {
        //	background-color: rgb(44, 88, 34);
        //}

        // active_ex
        .active_ex {
            color: yellow;
            background-color: blue;
            font-weight: bold;
        }

        .hide {
        display:none;
        }
    </style>
</head>
<body>

    <pre class="title">
      ________  ________  ________  ___  ___          ________  ________  ________  ___  ___  _______     
     |\   __  \|\   ____\|\   ____\|\  \|\  \        |\   ____\|\   __  \|\   ____\|\  \|\  \|\  ___ \     
     \ \  \|\  \ \  \___|\ \  \___|\ \  \ \  \       \ \  \___|\ \  \|\  \ \  \___|\ \  \\\  \ \   __/|     
      \ \   __  \ \_____  \ \  \    \ \  \ \  \       \ \  \    \ \   __  \ \  \    \ \   __  \ \  \_|/__     
       \ \  \ \  \|____|\  \ \  \____\ \  \ \  \       \ \  \____\ \  \ \  \ \  \____\ \  \ \  \ \  \_|\ \     
        \ \__\ \__\____\_\  \ \_______\ \__\ \__\       \ \_______\ \__\ \__\ \_______\ \__\ \__\ \_______\     
         \|__|\|__|\_________\|_______|\|__|\|__|        \|_______|\|__|\|__|\|_______|\|__|\|__|\|_______|     
                   \|_________|     
    </pre> 
    <!-- OR <img class="underline" src="./scpgif/no_nums/starbar.gif" alt="starbar"> -->

    <nav>
        | <a href="compression.php" alt="compression machine" title="compression machine">Compression Machine</a> |
        <a href="programming.php" alt="programming" title="synced programming notes">Coding Notes
        <span title="active update">!</span></a> |
        <a href="bash_scripts.txt" alt="bash scripts.sh" title="bash scripts">Bash Scripts
        <span title="active update"!>!</span></a> |
        <a href="python_scripts.txt" alt="python.txt" title="python scripts">Python Scripts
        <span title="active update">!</span>
        </a> |
        <a href="math.php" alt="latex math pdfs" title="math pdfs compiled in LaTeX">Math
        <span title="active update">!</span>
        </a> |
        <a href="100_percent_art.txt" alt="bbs artscene" title="BBS Art.Scene">BBS Art.Scene</a> |
        <!-- later: treasure-quest,quot,pic,comedy -->
    </nav>


    <div class="container1">
        <h2>Introduction</h2>
        <hr>
        <i>Concept & build</i>
        <p>Made with Vim, SQLite, PHP, and Bash in a Debian Linode, AsciiCache is an experimental fusion of:</p>

        <ul>
            <li>
                <ul>
                    <li>My coding notes</li>
                    <li>Math papers</li>
                    <li>Compression machine</li>
                    <li>Text Adventure Game (Treasure-Quest)</li>
                </ul>
            </li>
            <p>with</p>
            <li>Archiving messages from the Bulletin Board System (BBS) era.</li>
        </ul>

        <p>BBSs were  pre-internet platforms where people shared art, textfiles, and music over phone lines. 
            While I missed their heyday (1985-95), it's amazing to think that some of these are still around 
            if you know where to look, and thanks to archivists like Jason Scott of <a href="http://www.textfiles.com/" 
            target="blank">textfiles.com</a>, I’m able to preserve many of these files here, as well.<br> 

        <ul>
            <li id="item1">More about BBSes (Click me)</li>
            <li id="item2" class="hide"><p>Long before the Internet escaped from the lab, connecting the planet and redefining what it meant to meant to be a computer user... ...there was a brave and pioneering band of hobbyists who spent their time, money and sanity setting up their home computers and phone lines to welcome anyone who called. By using a modem, anyone who knew the phone number of these machines could connect to them, leave messages, play games, send and receive files in a virtual community... and millions did. They called these places Bulletin Board Systems, or BBSes. Their collections of messages, rants, thoughts and dreams became the way that an entire generation learned about being online.</p></li>
        </ul>
    </div>

    <div class= "container1">
        <h2 id="bbsfiles">The BBS Files</h2>
        <hr>
        <i>Archived -- from the days of yore</i>
        <br><br>

        <!--   -->
        <TABLE WIDTH=700>
            <TR><TD>
            <B><A HREF="100">100</A></B><BR>
            <I>No time to browse? Read Jason's favorite 100</I><BR>
            <TD>
            <B><a href="./computers">Computers</a></b><br>
            <i>Computerz -- Knowledge from the Depths!</i><BR>
            <td>

            <TR><TD>
            <B><A HREF="art">Artwork</A></B><BR>
            <I>Various ASCII Artwork/Illustrations</I><BR>
            <TD>
            <B><A HREF="bbs">BBS</A></B><BR>
            <I>Running and Using Bulletin Boards</I><BR>
            <TD>

            <TR><TD>
            <B><a href="./music">Music</a></b><br>
            <i>Information about music ...including guitar tabs</i><br>
            <TD>
            <B><a href="./science">Science Files</a></b><br>
            <i>Science!! --Let none question it's ways!</i><br>
            <td>

            <TR><TD>
            <B><a href="./survival">Survival Files</a></b><br>
            <i>Survival: intense, conspiratorial, and sometimes... true</i><br>
            <td>
            <B><a href="./virus">Viruses</a></b><br>
            <i>Documentation & info on computer viruses</i><br>
            <td>
        </TABLE>
    </div>


    <div class="container1">

    <h2 id="gif">Gifs</h2>
    <hr>
    <i>Click the button to see a random gif</i>
    <br>



    <!-- ------------------------ GENERATE IMG FILE 01_generatefile.php  -->
        <button id="generateButton" onclick="generateImage()">Gen-TestImg</button>
        <div id="imageContainer"></div>
    <br>



    <!--
        <form method="post">
            <button type="submit">Generate Random Image</button>
        </form>
        <?php if ($selectedImage): ?>
            <div>
                <h2>Your Random Image:</h2>
                <img src="<?php echo htmlspecialchars($selectedImage); ?>" alt="Random Image" style="max-width: 100%; height: auto; border: 1px solid black;">
            </div>
        <?php endif; ?>
    </div>   -->
    <hr>


    <div class="container1">
        <h2>From Python Scripts</h2>
        <hr>
        <i>Spam and eggs, anyone?</i>

        <div class="code">
            <pre>
            #Here's some code
            # Creates a unique, 6 digit, alpha numeric code 
            import random

            rnd = random.randint(0, 25)
            letterList = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', \
                        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']

            print(letterList[rnd] + letterList[random.randint(0, 25)] + \
                letterList[random.randint(0, 25)] + '-' + str(random.randint(0, 999)))
            </pre>
            <br>
        </div>
    </div>

    <footer class="footer"> 
    <a href="mailto:johnmckirdy77@gmail.com">Contact Us</a>
    | &copy; John McKirdy 2024-2025 
    | <a href="https://github.com/jmckirdy">My GitHub</a><br>
    <a href="./disclaimer.html">Disclaimer</a>
    <br>
    </footer>

    <script>
    //hide list-item script
    document.getElementById("item1").addEventListener("click", function () {
    const item2 = document.getElementById("item2");
    item2.classList.toggle("hide");

    });
    </script>
</body>

</html>

