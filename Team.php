<!DOCTYPE html>
<html>

<head>
    <title>ROBOCORNS</title>
    <link rel="icon" type="image/jpeg" href="logo _png.png">
    <style>
        a {
            color: red;
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
            background-color: rgba(0, 0, 0, 1);
            padding-block-end: 4px;
            display: flex;
            flex-direction: row;
            font-size: 20px;
            font-weight: 900;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
            align-items: start;
        }

        body {
            color: rgb(7, 169, 191);
            font-weight: 900;
            margin: 0;
            background-image: url(Artboard\ 1@3x.png);
            background-size: cover;
            background-blend-mode: color;
        }

        footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: black
        }

        header {
            padding: 3vh;
            text-align: center;
            justify-content: center;
            color: aliceblue;
            background-color: rgba(0, 0, 0, 0);
            font-size: 5vw;
            font-weight: 900;
        }

        .containerCAD {
            display: flex;
            margin-right: auto;
            justify-content: center;
            align-self: baseline;
            /* Center the images horizontally */
            gap: 20px;
            /* Add space between the images */
            flex-wrap: wrap;
            /* Allow wrapping if there are too many images */
            padding: 20px;

            /* Optional padding around the container */
        }

        .containerCAD img {
            border-radius: 20vh;
            width: 20vh;
            height: auto;
            margin: 0;
            /* Remove margin to avoid extra spacing issues */
        }

        .containerPR {
            display: flex;
            justify-content: space-between;
            /* Center the images horizontally */
            gap: 20px;
            /* Add space between the images */
            flex-wrap: wrap;
            /* Allow wrapping if there are too many images */
            padding: 20px;
            /* Optional padding around the container */
        }

        .containerPR img {
            border-radius: 300vh;
            width: 20vh;
            height: auto;
            margin: 0;
            /* Remove margin to avoid extra spacing issues */
        }

        .containerprogramare {
            display: flex;
            justify-content: center;
            /* Center the images horizontally */
            gap: 20px;
            /* Add space between the images */
            flex-wrap: wrap;
            /* Allow wrapping if there are too many images */
            padding: 20px;
            /* Optional padding around the container */
        }

        .containerprogramare img {
            border-radius: 300vh;
            width: 20vh;
            height: auto;
            margin: 0;
            /* Remove margin to avoid extra spacing issues */
        }

        .containerscouting {
            display: flex;
            justify-content: center;
            /* Center the images horizontally */
            gap: 20px;
            /* Add space between the images */
            flex-wrap: wrap;
            /* Allow wrapping if there are too many images */
            padding: 20px;
            /* Optional padding around the container */
        }

        .containerscouting img {
            border-radius: 300vh;
            width: 20vh;
            height: auto;
            margin: 0;
            /* Remove margin to avoid extra spacing issues */
        }

        .containerPR {
            display: flex;
            justify-content: center;
            /* Center the images horizontally */
            gap: 20px;
            /* Add space between the images */
            flex-wrap: wrap;
            /* Allow wrapping if there are too many images */
            padding: 20px;
            /* Optional padding around the container */
        }

        .containerPR img {
            border-radius: 300vh;
            width: 20vh;
            height: auto;
            margin: 0;
            /* Remove margin to avoid extra spacing issues */
        }

        p {
            font-size: 2vw;
            font-weight: 900;
            text-align: center;
            color: #77BDD9;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
        }

        .containermentor {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .containermentor img {
            border-radius: 300vh;
            width: 20vh;
            height: auto;
        }

        .mentor-content {
            display: flex;
            flex-direction: column;
            /* Stack the image and heading vertically */
            align-items: center;
            /* Center align the content */
            text-align: center;
            /* Center align the text */
        }

        .mentor-content h1 {
            margin-top: 10px;
            /* Add some space between the image and the heading */
            font-size: 2vw;
            color: #77BDD9;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
            margin: 30px;
        }
        .member-content {
        display: flex;
        flex-direction: column; /* Stack the image and heading vertically */
        align-items: center; /* Center align the content */
        text-align: center; /* Center align the text */
    }

    .member-content h1 {
        margin-top: 10px; /* Add some space between the image and the heading */
        font-size: 1.5vw;
        color: #77BDD9;
        text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
    }
    
    .member-content img,
    .mentor-content img {
        border-radius: 50%; /* Makes the images circular */
        width: 35vh; /* Adjust the size of the images */
        height: 35vh; /* Ensure the height matches the width for a perfect circle */
        object-fit: cover; /* Ensures the image fits within the circle */
        margin: 0; /* Remove any extra margin */
        justify-content: space-evenly;
        position: relative;
        z-index: 1; /* Ensure the image is above the pseudo-element */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .member-content,
    .mentor-content {
        position: relative;
        display: flex;
        flex-direction: column; /* Stack the image and heading vertically */
        align-items: center; /* Center align the content */
        text-align: center; /* Center align the text */
    }

    @property --angle {
        syntax: '<angle>';
        inherits: false;
        initial-value: 0deg;
    }
    .mentor-content::before {
        content: '';
        position: absolute;
        top: 39%; /* Center vertically */
        left: 50%; /* Center horizontally */
        transform: translate(-50%, -50%); /* Adjust position to align with the center */
        width: 38vh; /* Slightly larger than the image */
        height: 38vh; /* Match the width for a circular shape */
        border-radius: 50%; /* Makes the pseudo-element circular */
        z-index: 0; /* Place it behind the image */
        background: conic-gradient(from var(--angle), #023d54,#00b3ff); /* Gradient background */
        filter: blur(10px); 
        animation: 5s spin linear infinite ;
    }
    @keyframes spin {
        0% {
            --angle: 0deg;
        }
        100% {
            --angle: 360deg;
        }
    }
    .member-content::before{
        content: '';
        position: absolute;
        top: 41%; /* Center vertically */
        left: 50%; /* Center horizontally */
        transform: translate(-50%, -50%); /* Adjust position to align with the center */
        width: 38vh; /* Slightly larger than the image */
        height: 38vh; /* Match the width for a circular shape */
        background: linear-gradient(45deg, #77BDD9, #001219); /* Gradient background */
        border-radius: 50%; /* Makes the pseudo-element circular */
        z-index: 0; /* Place it behind the image */
        background: conic-gradient(from var(--angle), #00b3ff,#023d54); /* Gradient background */
        filter: blur(10px); 
        animation: 5s spin linear infinite ;
    }
    

    .member-content h1,
    .mentor-content h1 {
        margin-top: 10px; /* Add some space between the image and the heading */
        font-size: 1.5vw;
        color: #77BDD9;
        text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
    }
</style>


<body>
    <nav style="padding: 40px;">
        <div><a href="index.php" color: rgb(1 1 1)>Home</a></div>
        <div><a href="sponsori.php">Sponsor Us</a></div>
        <div><a href="Evenimente.php">Evenimente</a></div>
        <div><a href="Team.php">Team</a></div>
        <img src="logo _png.png" alt="" style="position: absolute; top:2vh; right: 0; width:7rem; height: auto;">
    </nav>
    <header>
        Echipa
    </header>
    <area>
    <p>Mentor</p>
    <div class="containermentor">
        <div class="mentor-content">
            <img src="poze membri/tesileanulaura.jpeg" alt="">
            <h1>Teșileanu Laura</h1>
        </div>
    </div>
    <p>CAD</p>
    <area><div class="containerCAD" style="justify-content: space-evenly;">
        <div class="member-content">
            <img src="ardeleantudortest.jpeg" alt="">
            <h1>Ardelean</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/szaboilinca.jpeg" alt="">
            <h1>Ilinca</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/ciobidavid.jpeg" alt="">
            <h1>Ciobi</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/robemanuel.jpeg" alt="">
            <h1>Elu</h1>
        </div>
    </div>

    <p>Programare</p>
    <div class="containerprogramare" style="justify-content: space-evenly;">
        <div class="member-content">
            <img src="poze membri/ilbangeorge.jpeg" alt="">
            <h1>George</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/tanasematei.jpeg" alt="">
            <h1>Matei</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/vancamario.jpeg" alt="">
            <h1>Mario</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/danibudea.jpeg" alt="">
            <h1>Dani</h1>
        </div>
    </div></area>

    <area><p>Scouting</p>
    <div class="containerscouting" style="justify-content: space-evenly;">
        <div class="member-content">
            <img src="poze membri/popdragos.jpeg" alt="">
            <h1>Dragoș</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/poprares.jpeg" alt="">
            <h1>Rareș</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/puietudor.jpeg" alt="">
            <h1>Puie</h1>
        </div>
    </div>

    <p>Public-Relations</p>
    <div class="containerPR" style="justify-content: space-evenly;">
        <div class="member-content">
            <img src="poze membri/dineaandrei.jpeg" alt="">
            <h1>Andrei</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/chesarobert.jpeg" alt="">
            <h1>Robert</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/mirceamaris.jpeg" alt="">
            <h1>Maris</h1>
        </div>
        <div class="member-content">
            <img src="poze membri/ptiforodeschiandreea.jpeg" alt="">
            <h1>Andreea</h1>
        </div>
    </div>
    </area>
</body>

</html>