<?php include('check_login.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>

        body {
            background-image: url('background.png'); /* Replace  with your actual image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 815px;
            backdrop-filter: blur(10px);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            
        }   
        .header{
        top:50%;
        text-align: center; /* Align the text in the center */
        font-weight: bold; /* Make the text bold */
        display:flexbox;
        }

        .main {
        display: flex;
        background-color: orange;
        top: 120px;
        padding: 20px;
        margin: 10px;
        height: 50px;
        width: 680px;
        position: absolute;
        justify-content: center;
        left: 400px;
        align-items: center;
        border: 2px solid black;
        border-radius: 10px;
        font-weight: bolder;
        }

        .keypad {
            width: 700px;
            border: 2px solid black;
            top: 200px;
            border-radius: 30px;
            background-color: rgba(187, 187, 187, 0.5);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 400px;
            z-index: 3; /* Ensure keypad is above the blur layer */
            backdrop-filter: blur(10px); 
        }

        .game{
            display: inline-block;
        }

        .button {
            display: flex;
            background-color:  #007bff; 
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button:hover {
            background-color: #00a86b;
            transform: scale(1.1);
        }
        .restart-button {
            position: fixed;
            top: 240px;
            /* right: 500px; */
            width: 60px;
            height: 60px;
            background-color: #fff;
            border: 2px solid #333;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-left: 55%;
        }

        .restart-icon {
            width: 30px;
            height: 30px;
            fill: #333;
        }

        .restart-button:hover {
            background-color: #eee;
        }

        .parent1 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 30px;
        
        }
        
        .flex {
            display: flex;
            flex-direction: row;

        }


        .btn {
        position: relative;
        top: 460px;
        left: 440px;
        display: inline-block;
        width: 150px;
        height: 70px;
        text-align: center;
        line-height: 60px;
        color: #fff;
        font-size: 24px;
        text-transform: uppercase;
        text-decoration: none;
        font-family: sans-serif;
        box-sizing: border-box;
        background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
        background-size: 400%;
        border-radius: 30px;
        z-index: 1;
    }
    


    .btn:hover {
        animation: animate 8s linear infinite;
    }

    @keyframes animate {
        0% {
            background-position: 0%;
        }

        100% {
            background-position: 400%;
        }
    }

    .btn:before {
        content: "";
        position: absolute;
        top: -5px;
        right: -5px;
        bottom: -5px;
        left: -5px;
        z-index: -1;
        background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
        background-size: 400%;
        border-radius: 40px;
        opacity: 0;
        transition: .5s;
    }

    .btn:hover:before {
        filter: blur(20px);
        opacity: 1;
        animation: animate 8s linear infinite;
    }

    .level-buttons {
    display: flex;
    flex-direction: column;
    position: absolute;
    margin: 10px;
    top: 30%;
    left: 5px;
    transform: translateY(-50%);
}

.level-button {
    position: relative;
    margin:15px;
    top: 100px;
    left: 200px;
    display: inline-block;
    width: 150px;
    height: 70px;
    text-align: center;
    line-height: 60px;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    text-decoration: none;
    font-family: sans-serif;
    box-sizing: border-box;
    background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
    background-size: 400%;
    border-radius: 30px;
    z-index: 1;
}

.level-button:hover {
        animation: animate 8s linear infinite;
    }

    @keyframes animate {
        0% {
            background-position: 0%;
        }

        100% {
            background-position: 400%;
        }
    }

    .level-button:before {
        content: "";
        position: absolute;
        top: -5px;
        right: -5px;
        bottom: -5px;
        left: -5px;
        z-index: -1;
        background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
        background-size: 400%;
        border-radius: 40px;
        opacity: 0;
        transition: .5s;
    }

    .level-button:hover:before {
        filter: blur(20px);
        opacity: 1;
        animation: animate 8s linear infinite;
    }

    #result, #score, #difficulty {
            position: fixed;
            top: 10px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 10px;
            border-radius: 5px;
            font-size: 13px;
            font-family: 'Press Start 2P', cursive;
        }

        #score {
            top: 60px; /* Adjust the spacing between result and score */
        }

        #difficulty{
            top: 110px;
        }

        .arcade-score {
        position: fixed;
        top: 20px;
        left: 20px;
        padding: 10px 20px;
        font-size: 24px;
        font-family: 'Press Start 2P', cursive;
        background-color: black;
        color: black;
        border-radius: 10px;
        z-index: 9999; /* Ensure it's on top of other elements */
    }

    @media (max-width: 768px) {
            .level-buttons {
                top: 50%;
                right: 0;
                transform: translate(50%, -50%);
            }
        }

        @keyframes animate {
            0% {
                background-position: 0%;
            }

            100% {
                background-position: 400%;
            }
        }

        .close-button {
            position: fixed;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .stop-button {
            position: fixed;
            top: 160px;
            left: 5px;
            width: 40px;
            height: 40px;
            background-color: #fff;
            border: 2px solid #333;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .stop-button svg {
            width: 35px;
            height: 35px;
            fill: #333; /* Change the color as needed */
        }

        .stop-button:hover {
            background-color: #eee;
        }

    </style>
</head>
<body>
    <section>
        <h1 class="header">Spell & Repeat</h1>
        <div class="game">
            
            <div id="main" class="main"></div>
    
        <div class="keypad">
            <div>
                <button onclick="sound1.play(); show('a');" id="a" class="button" style="top: 50px; left: 55px;">A</button>
                <button onclick="sound2.play(); show('b');" id="b" class="button" style="top: 50px; left: 110px;">B</button>
                <button onclick="sound3.play(); show('c');" id="c" class="button" style="top: 50px; left: 165px;">C</button>
                <button onclick="sound4.play(); show('d');" id="d" class="button" style="top: 50px; left: 220px;">D</button>
                <button onclick="sound5.play(); show('e');" id="e" class="button" style="top: 50px; left: 275px;">E</button>
                <button onclick="sound6.play(); show('f');" id="f" class="button" style="top: 50px; left: 330px;">F</button>
                <button onclick="sound7.play(); show('g');" id="g" class="button" style="top: 50px; left: 385px;">G</button>
                <button onclick="sound8.play(); show('h');" id="h" class="button" style="top: 50px; left: 440px;">H</button>
            </div>
            <div>
                <button onclick="sound9.play(); show('i');" id="i" class="button" style="top: 50px; left: 495px;">I</button>
                <button onclick="sound10.play(); show('j');" id="j" class="button"
                    style="top: 50px; left: 550px;">J</button>
                <button onclick="sound11.play(); show('k');" id="k" class="button"
                    style="top: 50px; left: 605px;">K</button>
                <button onclick="sound12.play(); show('l');" id="l" class="button"
                    style="top: 50px; left: 660px;">L</button>
                <button onclick="sound13.play(); show('m');" id="m" class="button"
                    style="top: 50px; left: 715px;">M</button>
                <button onclick="sound14.play(); show('n');" id="n" class="button"
                    style="top: 110px; left: 165px;">N</button>
                <button onclick="sound15.play(); show('o');" id="o" class="button"
                    style="top: 110px; left: 220px;">O</button>
            </div>
            <div>
                <button onclick="sound16.play(); show('p');" id="p" class="button"
                    style="top: 110px; left: 275px;">P</button>
                <button onclick="sound17.play(); show('q');" id="q" class="button"
                    style="top: 110px; left: 330px;">Q</button>
                <button onclick="sound18.play(); show('r');" id="r" class="button"
                    style="top: 110px; left: 385px;">R</button>
                <button onclick="sound19.play(); show('s');" id="s" class="button"
                    style="top: 110px; left: 440px;">S</button>
                <button onclick="sound20.play(); show('t');" id="t" class="button"
                    style="top: 110px; left: 495px;">T</button>
                <button onclick="sound21.play(); show('u');" id="u" class="button"
                    style="top: 110px; left: 550px;">U</button>
                </div>
                <div>
                <button onclick="sound22.play(); show('v');" id="v" class="button"
                    style="top: 110px; left: 605px;">V</button>
            
                <button onclick="sound23.play(); show('w');" id="w" class="button"
                    style="top: 170px; left: 330px;">W</button>
                <button onclick="sound24.play(); show('x');" id="x" class="button"
                    style="top: 170px; left: 385px;">X</button>
    
                <button onclick="sound25.play(); show('y');" id="y" class="button"
                    style="top: 170px; left: 440px;">Y</button>
                <button onclick="sound26.play(); show('z');" id="z" class="button"
                    style="top: 230px; left: 385px;">Z</button>
              
            </div>
            <div class="restart-button" onclick="restartGame()">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                    <path fill="#7cb342" d="M24 3A21 21 0 1 0 24 45A21 21 0 1 0 24 3Z"></path><path fill="#dcedc8" d="M24,36.1c-6.6,0-12-5.4-12-12c0-3.6,1.6-7,4.4-9.3l2.5,3.1c-1.8,1.5-2.9,3.8-2.9,6.2c0,4.4,3.6,8,8,8 s8-3.6,8-8c0-2.1-0.8-4-2.2-5.5l2.9-2.7C34.8,18,36,21,36,24.1C36,30.7,30.6,36.1,24,36.1z"></path><path fill="#dcedc8" d="M12 13L21 13 21 22z"></path>
                </svg>
            </div>
            
        </div>
        <div class="flex">
        <div class="level-buttons flex">
            <button class="level-button">Easy</button>
            <button class="level-button">Medium</button>
            <button class="level-button">Hard</button>
        </div>
    </div>
    
        
    
        <div class="flex">
            <div class="parent1">
                <a onclick="startSpeaking()" class="btn" id="Start">Start</a>
            </div>
            <div class="parent1">
                <a onclick="handleSubmit()" class="btn" id="Submit">Submit</a>
            </div>
    
            <div class="parent1">
                <a onclick="backspace()" class="btn" id="Back">Back</a>
            </div>
            
        </div>
    </div>

    <div class="alert alert-danger" id="result" >
        <strong></strong> 
      </div>
    <div id="score" class="arcade-score"></div>
    <div id="difficulty"></div>

    <div class="stop-button" onclick="stopSpeaking()">
        <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 492 512.324"><circle fill="#39BF46" cx="231.181" cy="231.181" r="231.181"/><path fill="#44944D" d="M437.687 127.171C471.6 167.894 492 220.259 492 277.396c0 129.746-105.183 234.928-234.928 234.928-103.431 0-191.249-66.843-222.619-159.684 40.74 65.851 113.605 109.722 196.728 109.722 127.682 0 231.181-103.499 231.181-231.181 0-37.412-8.899-72.749-24.675-104.01z"/><path fill="#fff" fill-rule="nonzero" d="M129.413 177.369h53.807l44.505-44.839c3.299-3.299 8.634-3.325 11.932-.026 1.677 1.624 2.502 3.789 2.502 5.98h.026v185.359c0 4.665-3.789 8.48-8.482 8.48a8.465 8.465 0 01-6.055-2.552l-43.989-35.741h-54.246c-7.422 0-14.175-3.04-19.047-7.913-4.897-4.87-7.937-11.623-7.937-19.045v-62.719c0-7.422 3.04-14.175 7.913-19.045 4.896-4.899 11.649-7.939 19.071-7.939z"/><path fill="#fff" d="M338.502 188.811c5.23-5.306 13.731-5.332 18.982-.049 5.258 5.279 5.279 13.859.054 19.165l-22.934 23.262 22.956 23.288c5.187 5.268 5.112 13.795-.151 19.052-5.273 5.256-13.746 5.24-18.923-.027l-22.81-23.122-22.843 23.17a13.323 13.323 0 01-18.982.048c-5.251-5.278-5.273-13.859-.048-19.164l22.934-23.262-22.961-23.288c-5.182-5.263-5.112-13.795.156-19.052 5.267-5.257 13.741-5.241 18.923.027l22.805 23.122 22.842-23.17z"/>
        </svg>
    </div>

    <div class="close-button" onclick="goToIndex()">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 64 64">
            <ellipse cx="32" cy="61" opacity=".3" rx="20" ry="3"></ellipse><path fill="#fd3c4f" d="M42.963,30l8.136-8.135c1.562-1.562,1.562-4.095,0-5.657l-5.306-5.306	c-1.562-1.562-4.095-1.562-5.657,0L32,19.038l-8.136-8.136c-1.562-1.562-4.095-1.562-5.657,0l-5.306,5.306	c-1.562,1.562-1.562,4.095,0,5.657L21.037,30l-8.135,8.135c-1.562,1.562-1.562,4.095,0,5.657l5.305,5.306	c1.562,1.562,4.095,1.562,5.657,0L32,40.963l8.136,8.135c1.562,1.562,4.095,1.562,5.657,0l5.305-5.306	c1.562-1.562,1.562-4.095,0-5.657L42.963,30z"></path><path d="M40.135,49.098c1.562,1.562,4.095,1.562,5.657,0l5.306-5.306	c1.562-1.562,1.562-4.095,0-5.657l-8.136-8.135l3.535-3.535l0,0C45.521,25.488,44.242,25,42.962,25c-1.224,0-2.448,0.447-3.406,1.34	c-2.084,1.943-1.973,5.352,0.042,7.366l7.257,7.256l-3.892,3.892l-7.275-7.274c-1.847-1.847-4.846-2.146-6.86-0.484	c-2.31,1.907-2.432,5.334-0.365,7.402l3.536-3.536L40.135,49.098z" opacity=".15"></path><path fill="#fff" d="M23.864,10.902c-1.562-1.562-4.095-1.562-5.657,0	l-5.306,5.306c-1.562,1.562-1.562,4.095,0,5.657L21.037,30l-3.535,3.535l0,0C18.478,34.512,19.757,35,21.037,35	c1.224,0,2.448-0.447,3.406-1.34c2.084-1.943,1.973-5.352-0.042-7.366l-7.257-7.256l3.892-3.892l7.275,7.274	c1.847,1.846,4.846,2.146,6.86,0.484c2.31-1.907,2.432-5.334,0.365-7.402L32,19.038L23.864,10.902z" opacity=".3"></path><polyline fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" points="18.5,15.5 21,13 23.5,15.5"></polyline>
            </svg>
    </div>
    
    
    </section>
    <script>
        var sound1 = new Audio();
        sound1.src = "phonics/A.wav";
        var sound2 = new Audio();
        sound2.src = "phonics/B.wav";
        var sound3 = new Audio();
        sound3.src = "phonics/C.wav";
        var sound4 = new Audio();
        sound4.src = "phonics/D.wav";
        var sound5 = new Audio();
        sound5.src = "phonics/E.wav";
        var sound6 = new Audio();
        sound6.src = "phonics/F.wav";
        var sound7 = new Audio();
        sound7.src = "phonics/G.wav";
        var sound8 = new Audio();
        sound8.src = "phonics/H.wav";
        var sound9 = new Audio();
        sound9.src = "phonics/I.wav";
        var sound10 = new Audio();
        sound10.src = "phonics/J.wav";
        var sound11 = new Audio();
        sound11.src = "phonics/K.wav";
        var sound12 = new Audio();
        sound12.src = "phonics/L.wav";
        var sound13 = new Audio();
        sound13.src = "phonics/M.wav";
        var sound14 = new Audio();
        sound14.src = "phonics/N.wav";
        var sound15 = new Audio();
        sound15.src = "phonics/O.wav";
        var sound16 = new Audio();
        sound16.src = "phonics/P.wav";
        var sound17 = new Audio();
        sound17.src = "phonics/Q.wav";
        var sound18 = new Audio();
        sound18.src = "phonics/R.wav";
        var sound19 = new Audio();
        sound19.src = "phonics/S.wav";
        var sound20 = new Audio();
        sound20.src = "phonics/T.wav";
        var sound21 = new Audio();
        sound21.src = "phonics/U.wav";
        var sound22 = new Audio();
        sound22.src = "phonics/V.wav";
        var sound23 = new Audio();
        sound23.src = "phonics/W.wav";
        var sound24 = new Audio();
        sound24.src = "phonics/X.wav";
        var sound25 = new Audio();
        sound25.src = "phonics/Y.wav";
        var sound26 = new Audio();
        sound26.src = "phonics/Z.wav";

        function goToIndex() {
            window.location.href = 'index1.php';
        }

        function updateDifficultyLevel(level) {
                 document.getElementById('difficulty').innerText = `Difficulty Level: ${level}`;
         }

    // Function to hide the level buttons
        function hideLevelButtons() {
            const levelButtons = document.querySelectorAll('.level-button');
            levelButtons.forEach(button => {
                button.style.display = 'none';
            });
        }

        // itha aapn toh word store krtoy main div madhla
        let currentWord = '';

        // itha aapn toh word show pn krtoy ani tya current word madhe update krtoy
        function show(id){
            let letter = document.getElementById(id).innerText;
            currentWord += letter;
            document.getElementById("main").innerText = currentWord;
        }

        // Array ghetla words ch joh ki Global array of random words
        const wordsArray = ["apple", "banana", "orange", "grape", "melon"];
        let index = 0;
        let score = 0;

        // words bolat ahe hya function madhe
        function speakWord() {
            if (index < wordsArray.length) {
                const word = new SpeechSynthesisUtterance(wordsArray[index]);
                window.speechSynthesis.speak(word);
            }
        }

        // hya function madhe word check krtoy tya current word sobat jyat store kela ahe 
        function checkWord() {
            if (currentWord.toLowerCase() === wordsArray[index]) {
                score++;
                index++;
                currentWord = ''; 
                speakWord(); 
            } else {
                document.getElementById("result").innerText = `Word is Incorrect. Your score is: ${score}`;
                
            }
    document.getElementById("main").innerText = ''; 
}
           



        // hya function madhe prt words bolayla start krel
        function startSpeaking() {
            speakWord();
            setInterval(speakWord, 50000);
        }

        // Function to handle word submission
        function handleSubmit() {
            window.speechSynthesis.cancel(); 
            checkWord(); 
            document.getElementById("score").innerText = "Score: " + score; 
            handleArrayCompletion();
        }

        function backspace() {
            currentWord = currentWord.slice(0, -1); 
            document.getElementById("main").innerText = currentWord; 
        }

        function restartGame() {
            window.location.reload();
        }
        function handleArrayCompletion() {
            if (index === wordsArray.length) {
                alert("You have successfully cleared the level!");
                // You can add additional logic here if needed
            }
        }

        


        // hya function madhe aapn easy level sathi words accept krtoy
        document.querySelector('.level-button:nth-child(1)').addEventListener('click', function() {
            updateDifficultyLevel('Easy');
            hideLevelButtons();
            const easyWords = ["cat", "dog", "rat","hat","mat","hen"]; 
            wordsArray.splice(0); 
            wordsArray.push(...easyWords); 
            resetGame(); 
        });

       // hya function madhe aapn medium level sathi words accept krtoy
        document.querySelector('.level-button:nth-child(2)').addEventListener('click', function() {
            updateDifficultyLevel('Medium');
            hideLevelButtons();
            const mediumWords = ["elephant", "tiger", "lion"]; 
            wordsArray.splice(0); 
            wordsArray.push(...mediumWords); 
            resetGame(); 
        });

        // hya function madhe aapn difficult level sathi words accept krtoy
        document.querySelector('.level-button:nth-child(3)').addEventListener('click', function() {
            updateDifficultyLevel('Hard');
            hideLevelButtons();
            const hardWords = ["hippopotamus", "rhinoceros", "crocodile"]; 
            wordsArray.splice(0); 
            wordsArray.push(...hardWords); 
            resetGame();
        });

        // itha aapn game reset krtoy like scores ani result jewa jewa easy medium hard button click hotil
        function resetGame() {
            index = 0; 
            score = 0; 
            currentWord = ''; 
            document.getElementById("main").innerText = ''; 
            document.getElementById("score").innerText = ''; 
            document.getElementById("result").innerText = ''; 
            
            
        }

        function promptForName() {
        var playerName = prompt("Please enter your name:");
        if (playerName != null && playerName != "") {
            alert("Welcome, " + playerName + "! Let's start the game.");
            // You can store the playerName for later use if needed
        } else {
            // Handle case when user cancels or leaves the name field empty
            alert("You must enter a valid name to start the game.");
            promptForName(); // Prompt again until a valid name is entered
        }
    }

    // Call promptForName function when the page loads to ask for the user's name
    window.onload = promptForName;

    function stopSpeaking() {
    window.speechSynthesis.cancel();
}

    </script>
</body>

</html>
