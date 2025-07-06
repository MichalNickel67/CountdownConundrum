var RandomNumberGenerator;
var RandomWord;
var Correctcounter = 0;
var TotalAttempts = 0;
var CorrectAttempts = 0;
var PlayerGuess;

var TimerStarted = false;
var TimerInterval;
var PlayGame = true;

var CountdownStarted = false;
var CountdownAudio = new Audio('Audio/CountdownExtended.mp3');
var CountdownEnding = new Audio('Audio/CountdownEnd.mp3');
// Countdown Timer Audio from https://youtu.be/3pqGwaUEjI8

var CorrectSound = new Audio('Audio/CorrectSound.mp3');
// Correct Sound Audio from https://youtu.be/wzslstOGtOk

var IncorrectSound = new Audio('Audio/IncorrectSound.mp3');
// Incorrect Sound Audio from https://youtu.be/4GSXyo3euR4

// Timer variables for milliseconds tracking
var startTime;
var elapsedTime = 0;

function Game(wordlength) {
    if (!PlayGame) return;

    let lengthParam = wordlength;

    fetch('connection.php?length=${lengthParam}')
        .then(response => response.json())
        .then(data => {
            if (data.length === 0) {
                alert("No words found for this length.");
                return;
            }
            words = data.map(word => word.toUpperCase());

            ResetGameState();
            CountdownAudioPlay();
            DisableButtons();
            Timer();
            StartTimer();
            TimerStarted = true;
            Randomiser();
        })
        .catch(error => {
            console.error("Error fetching words:", error);
        });
}

function ResetGameState() {
    // Reset all counters and game state
    Correctcounter = 0;
    TotalAttempts = 0;
    CorrectAttempts = 0;
    elapsedTime = 0;
    PlayGame = true;
    
    // Reset counter display
    document.getElementById("Counter").innerHTML = "0";
    
    // Reset input field
    document.getElementById("Guess").value = "";
    document.getElementById("Guess").placeholder = "Enter your guess...";
    
    // Stop any existing timer
    if (TimerInterval) {
        clearInterval(TimerInterval);
    }
    
    console.log("Game state reset - Counter: " + Correctcounter);
}

function DisableButtons() {
    document.getElementById("5-Letter").disabled = true;
    document.getElementById("7-Letter").disabled = true;
    document.getElementById("9-Letter").disabled = true;
    document.getElementById("Mixed-Letter").disabled = true;
}

function EnableButtons() {
    document.getElementById("5-Letter").disabled = false;
    document.getElementById("7-Letter").disabled = false;
    document.getElementById("9-Letter").disabled = false;
    document.getElementById("Mixed-Letter").disabled = false;
}

function CountdownAudioPlay() {
    CountdownStarted = true;
    CountdownAudio.play();
}

function CountdownAudioStop() {
    CountdownStarted = false;
    CountdownAudio.pause();
    CountdownAudio.currentTime = 0;
}

function CountdownAudioEnd() {
    CountdownEnding.play();
}

function CorrectAudio() {
    CorrectSound.play();
}

function IncorrectAudio() {
    IncorrectSound.play();
}

function shuffleWord() {
    wordElement = document.getElementById("Word");
    word = wordElement.innerHTML;
    letters = word.split("");
    for (let i = letters.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [letters[i], letters[j]] = [letters[j], letters[i]];
    }
    WordShuffled = letters.join("");
    wordElement.innerHTML = WordShuffled;
}

function Randomiser() {
    RandomNumberGenerator = Math.floor(Math.random() * words.length);
    RandomWord = words[RandomNumberGenerator].toUpperCase();
    console.log(RandomNumberGenerator, RandomWord);
    MainWord = document.getElementById("Word");
    MainWord.innerHTML = RandomWord;
    shuffleWord();
}

function EndGame() {
    StopTimer();
    CountdownAudioEnd();
    PlayGame = false;
    
    // Calculate final time
    var finalTime = GetFormattedTime();
    var accuracy = TotalAttempts > 0 ? Math.round((CorrectAttempts / TotalAttempts) * 100) : 0;
    
    // Create celebration message
    var celebrationMessage = GetCelebrationMessage(finalTime, accuracy);
    
    console.log(PlayGame);
    YouWin = document.getElementById("Word");
    YouWin.innerHTML = celebrationMessage;
    EnableButtons();
}

function GetCelebrationMessage(timeStr, accuracy) {
    var emoji = "";
    var message = "";
    
    // Time-based messages
    if (elapsedTime < 30000) { // Less than 30 seconds
        emoji = "🚀";
        message = "LIGHTNING FAST!";
    } else if (elapsedTime < 60000) { // Less than 1 minute
        emoji = "⚡";
        message = "INCREDIBLE SPEED!";
    } else if (elapsedTime < 120000) { // Less than 2 minutes
        emoji = "🔥";
        message = "GREAT TIMING!";
    } else {
        emoji = "💪";
        message = "WELL DONE!";
    }
    
    var finalMessage = `${emoji} ${message}<br>` +
                      `Time: ${timeStr}<br>` +
                      `Accuracy: ${accuracy}%<br>` +
                      `Score: ${CorrectAttempts}/${TotalAttempts}`;
    
    return finalMessage;
}

function StopTimer() {
    if (TimerInterval) {
        clearInterval(TimerInterval);
        TimerInterval = null;
    }
}

function Timer() {
    TimerDisplay = document.getElementById("Timer");
    startTime = Date.now();
    elapsedTime = 0;
}

function StartTimer() {
    TimerInterval = setInterval(function() {
        elapsedTime = Date.now() - startTime;
        TimerDisplay.textContent = GetFormattedTime();
    }, 10); // Update every 10ms for smooth millisecond display
}

function GetFormattedTime() {
    var totalMs = elapsedTime;
    var minutes = Math.floor(totalMs / 60000);
    var seconds = Math.floor((totalMs % 60000) / 1000);
    var milliseconds = Math.floor((totalMs % 1000) / 10); // Display centiseconds (2 digits)
    
    var StringMins = minutes < 10 ? "0" + minutes : minutes;
    var StringSecs = seconds < 10 ? "0" + seconds : seconds;
    var StringMs = milliseconds < 10 ? "0" + milliseconds : milliseconds;
    
    return StringMins + ":" + StringSecs + ":" + StringMs;
}

function CorrectCounter() {
    Count = document.getElementById("Counter");
    Correctcounter++;
    console.log("Correct Counter = " + Correctcounter);
    Count.innerHTML = Correctcounter;
}

function Validation() {
    if (PlayerGuess == RandomWord) {
        CorrectCounter();
        document.getElementById("Guess").value = "";
        console.log(words);
        TotalAttempts++;
        CorrectAttempts++;
        CorrectAudio();

        if (Correctcounter == 5) {
            CountdownAudioStop();
            EndGame();
        }
        else {
            Randomiser(); 
        }
    }
    else {
        document.getElementById("Guess").placeholder = "Keep Going...";
        document.getElementById("Guess").value = "";
        TotalAttempts++;
        IncorrectAudio();
    }
}

function Check() {
    PlayerGuess = document.getElementById("Guess").value;
    console.log(PlayerGuess);
    PlayerGuess = PlayerGuess.toUpperCase();
    Validation();
}