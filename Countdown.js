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

function Game(wordlength) {
    if (PlayGame && wordlength == 5) {
        words = new Array ("Curve","Price","Horse","Pizza","Daily","Quick","Crazy","Anger","Audio","Basic","Boost","Alarm","Dream","Arena","Apple","Bacon","Baker","Beach","Beast","Clock");
    }
    else if (PlayGame && wordlength == 7) {
        words = new Array ("Balance","Academy","Battery","Airport","Alcohol","Brother","Classic","College","Diamond","Digital","Display","Company","Fashion","Gallery","Fishing","Freedom");
    }
    else if (PlayGame && wordlength == 9) {
        words = new Array ("Apologise","Appetiser","Bookshelf","Bumblebee","Champagne","Checklist","Chopstick","Clownfish","Explosive","Injection","Jailbreak","Factorise");
    }
    else if (PlayGame && wordlength == 'Any') {
        words = new Array ("Apologise","Appetiser","Bookshelf","Bumblebee","Champagne","Checklist","Chopstick","Clownfish","Explosive","Injection","Jailbreak","Factorise",
        "Balance","Academy","Battery","Airport","Alcohol","Brother","Classic","College","Diamond","Digital","Display","Company","Fashion","Gallery","Fishing","Freedom",
        "Horse","Pizza","Daily","Quick","Crazy","Audio","Alarm","Dream","Arena","Apple","Baker","Beach","Beast","Clock");
    }
    else {}
        DisableButtons();
        CountdownAudioPlay()
        Timer();
        StartTimer();
        TimerStarted = true;
        Randomiser();
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
	console.log(PlayGame)
    YouWin = document.getElementById("Word");
    YouWin.innerHTML = "YOU WIN! You Took "+ minutes +" mins and "+ seconds +" secs";
    EnableButtons();
  }  

function StopTimer() {
    clearInterval(TimerInterval);
}

function Timer() {
    TimerDisplay = document.getElementById("Timer");
    seconds = 0;
    minutes = 0;
    hours = 0;
}

function StartTimer() {
    TimerInterval = setInterval(function() {
        seconds++;
        if (seconds === 60) {
            minutes++;
            seconds = 0;
        }
        else if (minutes === 60) {
            hours++;
            minutes = 0;
        }
        StringHour = hours < 10 ? "0" + hours : hours;
        StringMins = minutes < 10 ? "0" + minutes : minutes;
        StringSecs = seconds < 10 ? "0" + seconds : seconds;
        TimerDisplay.textContent = StringHour + ":" + StringMins + ":" + StringSecs;
    }, 1000);
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
            Count = 0; //not sure why counter is not reseting
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
  