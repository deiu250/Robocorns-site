<!DOCTYPE html>
<html>

<head>
    <title>ROBOCORNS</title>
    <link rel="icon" type="image/jpeg" href="logo _png.png">
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
            padding: 0;
            margin: 0;
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

        body {
            background-color: #001219;
            margin: 0;
            padding: 0;
        }

        header {
            font-size: 5vw;
            font-weight: 900;
            color: #77BDD9;
            font-family: 'Bahnschrift', sans-serif;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
            text-align: center;
            margin-top: 10px;
        }

        section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }

        .left {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: #77BDD9;
            text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.067);
            text-align: center;
        }

        iframe {
            width: 90%;
            height: 500px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            background-color: #003049;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        form input,
        form textarea,
        form button {
            font-size: 1rem;
            padding: 10px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        form input,
        form textarea {
            background-color: #f1f1f1;
        }

        form button {
            background-color: #77BDD9;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #005f73;
        }

        form textarea {
            resize: none;
            height: 100px;
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
        SPONSOR US
    </header>
    <section>
        <div class="left">
            <h2>PORTOFOLIU</h2>
            <iframe src="inuse/Portofoliu_romana_APROBAT (2).pdf"></iframe>
        </div>
        <div class="right">
            <form action="includes/includeemail.php" method="post">
                <input type="text" name="nume" placeholder="Numele afacerii" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="suma" id="suma" placeholder="Suma" required>
                <textarea name="mesaj" placeholder="Mesaj opțional"></textarea>
                <button type="submit">Trimite</button>
            </form>
        </div>
    </section>
    <footer style="text-align: center; color: #77BDD9; font-family: 'Bahnschrift', sans-serif; font-size: 1.5vw; margin-top: 20px;">
        <p>ROBOCORNS &copy; 2025</p>
    </footer>
</body>

</html>