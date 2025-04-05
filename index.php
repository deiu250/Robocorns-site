<!DOCTYPE html>
<html>

<head>
    <title>ROBOCORNS</title>
    <link rel="icon" type="image/png" href="logo _png.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        a {
            color: inherit;
            text-decoration: none;
            text-shadow: rgb(150, 222, 248) 1px 0 7px;
        }

        a:visited {
            color: inherit;
        }

        nav {
            display: flex;
            background-image: url('headerboitor.jpeg');
            flex-direction: row;
            font-size: 1.5vw;
            font-weight: 900;
            color: #77BDD9;
            font-family: 'Bahnschrift', sans-serif;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
        }

        nav {
            position: sticky;
            top: 0;
            /* Sticks to the top of the viewport */
            z-index: 1000;
            /* Ensures it stays above other elements */
            background-color: rgba(0, 0, 0, 0.8);
            /* Optional: Add a background color */
        }


        nav div {
            margin-right: 30px;
        }

        nav img {
            flex-direction: row-reverse;
            align-items: end;
            text-align: end;
            place-items: end;
        }

        .contacte {
            background-color: rgb(0, 0, 0);
            padding-block-end: 4px;
            display: flex;
            flex-direction: row;
            font-size: 20px;
            font-weight: 900;
            align-items: center;
            text-align: center;
            margin: auto;
        }

        body {
            font-weight: 900;
            font-family: 'Prototype';
            background-color: #0e1b2b;
        }

        header {
            width: 100%;
            height: 85vh;
            background-color: black;
            opacity: 1;
            background-image: url('regionala/Regionala/VK1_5625.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(255, 255, 255);
            font-size: 5vw;
            font-weight: bold;
            text-align: center;
            text-shadow: 4px 4px 10px black;
            transition: opacity 0.5s ease;
            /* Smooth fading effect */
        }

        header div {
            text-align: center;
            padding: 1px;
        }

        header p {
            font-size: 2vw;
            margin: 0;
        }

        .contacte {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-size: 20px;
            font-weight: 900;
            color: #77BDD9;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 0;
            padding: 0;
        }

        .textcontainer1,
        .textcontainer2,
        .textcontainer3 {
            flex: 1;
        }

        .Titlu1 {
            font-size: 3vw;
            font-weight: 900;
            color: #b1e4ff;
            text-align: center;
            font-weight: 900;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.5);
        }

        .textcontainer1 p {
            font-size: 1.5vw;
            font-weight: 900;
            color: #77BDD9;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
            margin: 1;
        }

        .imagecontainer1,
        .imagecontainer2,
        .imagecontainer3 {
            flex: 1;
        }

        .powerplay p,
        .intothedeep p,
        .centerstage p {
            display: flex;
            flex-direction: row;
            font-size: 1vw;
            align-items: center;
            text-align: center;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        * {
            margin: 0;
        }

        .wrapper {
            position: relative;
            top: -15px;
            width: 90%;
            max-width: 1536px;
            margin-inline: auto;
            position: relative;
            height: 100px;
            margin-top: 5rem;
            overflow: hidden;
            mask-image: linear-gradient(to right,
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 1) 20%,
                    rgba(0, 0, 0, 1) 80%,
                    rgba(0, 0, 0, 0));
        }

        @keyframes scrollLeft {
            to {
                left: -200px;
            }
        }

        .item {
            width: 200px;
            height: 100px;
            background-color: red;
            border-radius: 6px;
            position: absolute;
            left: max(calc(200px * 8), 100%);
            animation-name: scrollLeft;
            animation-duration: 30s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .item1 {
            animation-delay: calc(30s / 8 * (8 - 1) * -1);
        }

        .item2 {
            animation-delay: calc(30s / 8 * (8 - 2) * -1);
        }

        .item3 {
            animation-delay: calc(30s / 8 * (8 - 3) * -1);
        }

        .item4 {
            animation-delay: calc(30s / 8 * (8 - 4) * -1);
        }

        .item5 {
            animation-delay: calc(30s / 8 * (8 - 5) * -1);
        }

        .item6 {
            animation-delay: calc(30s / 8 * (8 - 6) * -1);
        }

        .item7 {
            animation-delay: calc(30s / 8 * (8 - 7) * -1);
        }

        .item8 {
            animation-delay: calc(30s / 8 * (8 - 8) * -1);
        }

        section h2 {
            font-size: 3vw;
            font-weight: 900;
            color: #b1e4ff;
            
        }
        .award{
            font-size: 1.5vw;
            font-weight: 900;
            color: #77BDD9;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
        }

        .intothedeep,
        .centerstage,
        .powerplay {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            /* Add spacing between headings and awards */
            width: 100%;
        }

        .award-container {
            display: flex;
            flex-wrap: wrap;
            /* Allow wrapping for smaller screens */
            justify-content: space-between;
            /* Space between awards */
            gap: 20px;
            /* Add spacing between awards */
            width: 100%;
            background: radial-gradient(ellipse, rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0.5));
            background-size: cover;
            background-position: center;
            padding: 300px;
            margin: 20px;
        }

        .award {
            display: flex;
            flex-direction: column;
            /* Stack text above the image */
            align-items: center;
            flex: 1 1 45%;
            /* Each award takes 45% of the width */
            box-sizing: border-box;
            text-align: center;
        }

        .award img {
            width: 100%;
            /* Make the image fill the container */
            height: auto;
            max-width: 400px;
            /* Optional: Limit the max width */
            border-radius: 10px;
            /* Optional: Add rounded corners */
        }

        .award p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        h2 {
            font-size: 2rem;
            text-align: center;
            margin: 10px 0;
        }

        .slider {
            width: 700px;
            height: 400px;
            position: relative;
            overflow: hidden;
            margin: auto;
        }

        .slides {
            width: 1000%;
            height: 100%;
            display: flex;
        }

        .slides input {
            display: none;
        }

        .slide {
            width: 10%;
            transition: 2s;
            opacity: 0.7;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .navigation-manual {
            position: absolute;
            width: 100%;
            top: 50%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .manual-btn {
            border: none;
            background: none;
            font-size: 2rem;
            color: #ffffff;
            cursor: pointer;
            transition: 0.3s;
        }

        .manual-btn:hover {
            color: #fff;
        }

        #radio1:checked~.first {
            margin-left: 0;
        }

        #radio2:checked~.first {
            margin-left: -10%;
        }

        #radio3:checked~.first {
            margin-left: -20%;
        }

        #radio4:checked~.first {
            margin-left: -30%;
        }

        #radio5:checked~.first {
            margin-left: -40%;
        }

        #radio6:checked~.first {
            margin-left: -50%;
        }

        #radio7:checked~.first {
            margin-left: -60%;
        }

        #radio8:checked~.first {
            margin-left: -70%;
        }

        #radio9:checked~.first {
            margin-left: -80%;
        }

        #radio10:checked~.first {
            margin-left: -90%;
        }

        .navigation-auto {
            position: absolute;
            display: flex;
            width: 100%;
            justify-content: center;
            margin-top: 370px;
        }

        .navigation-auto div {
            border: 2px solid #fff;
            padding: 5px;
            border-radius: 10px;
            transition: 1s;
        }

        .navigation-auto div:not(:last-child) {
            margin-right: 40px;
        }

        #radio1:checked~.navigation-auto .auto-btn1 {
            background: #40D3DC;
        }

        #radio2:checked~.navigation-auto .auto-btn2 {
            background: #40D3DC;
        }

        #radio3:checked~.navigation-auto .auto-btn3 {
            background: #40D3DC;
        }

        #radio4:checked~.navigation-auto .auto-btn4 {
            background: #40D3DC;
        }

        #radio5:checked~.navigation-auto .auto-btn5 {
            background: #40D3DC;
        }

        #radio6:checked~.navigation-auto .auto-btn6 {
            background: #40D3DC;
        }

        #radio7:checked~.navigation-auto .auto-btn7 {
            background: #40D3DC;
        }

        #radio8:checked~.navigation-auto .auto-btn8 {
            background: #40D3DC;
        }

        #radio9:checked~.navigation-auto .auto-btn9 {
            background: #40D3DC;
        }

        #radio10:checked~.navigation-auto .auto-btn10 {
            background: #40D3DC;
        }
    </style>
</head>

<body>
    <nav style="padding: 40px;">
        <div><a href="index.php" color: rgb(1 1 1)>Home</a></div>
        <div><a href="sponsori.php">Sponsor Us</a></div>
        <div><a href="Evenimente.php">Evenimente</a></div>
        <div><a href="Team.php">Team</a></div>
        <img src="logo _png.png" alt="" style="position: absolute; top:2vh; right: 0; width:7rem; height: auto;">
    </nav>
    <header>
        <div>
            Robocorns RO-004
            <p>-break your limits-</p>
        </div>
        <div class="wrapper">
            <div class="item item1"></div>
            <div class="item item2"></div>
            <div class="item item3"></div>
            <div class="item item4"></div>
            <div class="item item5"></div>
            <div class="item item6"></div>
            <div class="item item7"></div>
            <div class="item item8"></div>
        </div>
    </header>
    <area>    <div class="about-us">
        <div class="container">
            <div class="textcontainer1">
                <div class="Titlu1">Despre noi</div>
                <p>Echipa de robotică Robocorns s-a format în anul 2016, atunci când Nație Prin Educație a adus pentru
                    prima dată concursul în România. De atunci, elevii Colegiului Național “Vasile Lucaciu” Baia Mare au
                    participat la fiecare sezon al competiției First Tech Challange și au depus eforturi imense pentru a
                    obține rezultate impresionante în cadrul competiției. Obiectivul nostru principal este de a
                    introduce
                    robotica la cât mai multe persoane și de a ne dezvolta abilitățile tehnice, cât și cele nontehnice.
                </p>
            </div>
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <input type="radio" name="radio-btn" id="radio6">
                    <input type="radio" name="radio-btn" id="radio7">
                    <input type="radio" name="radio-btn" id="radio8">
                    <input type="radio" name="radio-btn" id="radio9">
                    <input type="radio" name="radio-btn" id="radio10">

                    <div class="slide first">
                        <img src="inuse/12.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="inuse/14.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="inuse/17.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="regionala/Regionala/VK1_5367.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="regionala/Regionala/VK1_5434.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="regionala/Regionala/VK1_5470.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="regionala/Regionala/VK1_5484.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="regionala/Regionala/VK1_5373.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="regionala/Regionala/VK1_5668.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="regionala/Regionala/VK1_5343.jpg" alt="">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                        <div class="auto-btn6"></div>
                        <div class="auto-btn7"></div>
                        <div class="auto-btn8"></div>
                        <div class="auto-btn9"></div>
                        <div class="auto-btn10"></div>
                    </div>
                </div>

                <div class="navigation-manual">
                    <button class="manual-btn prev" onclick="prevSlide()">&#10094;</button>
                    <button class="manual-btn next" onclick="nextSlide()">&#10095;</button>
                </div>
            </div>
        </div>
    </div>
</area>
    <!--
            <div class="container">
                
                <div class="imagecontainer2">
                    <img src="regionala/Regionala/VK1_5347.jpg" alt="" style="width: 45rem; margin: 10px;">
                </div>
                <div class="textcontainer2">
                    yappayappa
                </div>
            </div>
            <div class="container">
                
                <div class="textcontainer3">
                    yappayappa
                </div>
                <div class="imagecontainer3">
                    <img src="regionala/Regionala/VK1_5347.jpg" alt="" style="width: 45rem; margin: 10px;">
                </div>  
                
            </div>
            -->
    <section>
        <div class="intothedeep">
            <h2>Into the deep</h2>
            <div class="award-container">
                <div class="award">
                    <p>Inspire Award 2-Etapa Regionala</p>
                    <img src="path/to/inspire-award.jpg" alt="Inspire Award">
                </div>
                <div class="award">
                    <p>Judges Award-Etapa Nationala</p>
                    <img src="path/to/judges-award.jpg" alt="Judges Award">
                </div>
            </div>
        </div>
        <div class="centerstage">
            <h2>Center stage</h2>
            <div class="award-container">
                <div class="award">
                    <p>Design Award 2-Etapa Regionala</p>
                    <img src="path/to/design-award.jpg" alt="Design Award">
                </div>
            </div>
        </div>
        <div class="powerplay">
            <h2>Power play</h2>
            <div class="award-container">
                <div class="award">
                    <p>Innovate Award 3-Etapa Regionala</p>
                    <img src="path/to/innovate-award.jpg" alt="Innovate Award">
                </div>
                <div class="award">
                    <p>Control Award 3-Etapa Nationala</p>
                    <img src="path/to/control-award.jpg" alt="Control Award">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script>
    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        const scrollPosition = window.scrollY;
        const fadePoint = 300; // Adjust this value to control when the fade starts

        // Calculate opacity based on scroll position
        const opacity = Math.max(1 - scrollPosition / 350, 0);
        header.style.opacity = opacity;
    });
    let counter = 1;
    const totalSlides = 10;

    function showSlide(index) {
        document.getElementById('radio' + index).checked = true;
    }

    function nextSlide() {
        counter++;
        if (counter > totalSlides) {
            counter = 1;
        }
        showSlide(counter);
    }

    function prevSlide() {
        counter--;
        if (counter < 1) {
            counter = totalSlides;
        }
        showSlide(counter);
    }

    setInterval(function () {
        nextSlide();
    }, 7000);

</script>