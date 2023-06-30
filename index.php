<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome, firefox, safari, opera">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0">

    <title>Localhost</title>

    <style>
        :root {
            --color-primary: #57707A;
            --color-secundary: #C5BAC4;
            --color-font: #191D23;
            --color-background-1: #DEDCDC;
            --color-background-2: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            position: relative;
        }

        body {
            background: linear-gradient(to bottom, var(--color-background-1), var(--color-background-2));
        }

        header {
            display: flex;
            justify-content: center;
            align-items: stretch;
            width: 100%;
            height: 5vh;
            background-color: var(--color-primary);
            color: var(--color-font);
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        header *:hover {
            cursor: default;
        }

        header span {
            color: var(--color-secundary);
        }

        #container {
            margin: 0 auto;
            width: 80vw;
        }

        main {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: row;
        }

        section {
            margin-left: 20px;
            margin-right: 20px;
        }

        #directory {
            display: flex;
            justify-content: end;
            align-items: stretch;
            flex-wrap: wrap;
            flex-direction: column;
            text-align: center;
            text-decoration: none;
            color: var(--color-font);
        }

        #directory:hover {
            transition: 0.5s;
            transform: scale(1.1);
            color: var(--color-primary);
        }

        #directory:is(:not(:hover)) {
            transition: 0.3s;
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 5vh;
            width: 100%;
            background-color: var(--color-primary);
            color: var(--color-font);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        footer *:hover {
            cursor: default;
        }

        footer h4 {
            opacity: 80%;
        }

        #page {
            height: 10vh;
        }

        #page-header {
            height: 1vh;
            width: 4vw;
            background-color: var(--color-primary);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            z-index: 1;
        }

        #page-back {
            height: 8vh;
            width: 6vw;
            background-color: var(--color-primary);
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            z-index: 1;
        }

        #page-front {
            height: 8vh;
            width: 6vw;
            background-color: var(--color-secundary);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            transform: translateY(-8vh);
            z-index: 3;
        }

        #page-front:hover {
            transition: 0.5s;
            height: 6vh;
            transform: translateY(-6vh);
        }

        #page-front:is(:not(:hover)) {
            transition: 0.3s;
        }
    </style>

</head>

<body>

    <div id="container">

        <header>
            <h1>Local<span>host</span></h1>
        </header>

        <main>

            <?php
            $path = "./";
            $directory = dir($path);

            while ($file = $directory->read()) {
                if (strpbrk($file, ".")) {
                    continue;
                } else {
                    echo "<section><a id='directory' href='" . $path . $file . "'>" . "<div id='page'><div id='page-header'></div><div id='page-back'></div><div id='page-front'></div></div>" . "<h3>" . $file . "</h3>" . "</a></section>";
                }
            }
            ?>

        </main>

        <footer>
            <h4>&copy; AGPL-v3.0.</h4>
        </footer>

    </div>

</body>

</html>
