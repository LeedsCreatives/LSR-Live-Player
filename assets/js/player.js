/* Set variables */
var stream = new Howl({
    src: ['https://streamer.radio.co/s986435880/listen'],
    format: 'mp3',
    html5: true
});

pausedMins = 0;
pausedSecs = 0;

pauseTimerUpdate = setInterval(updatePausedTimer, 1000);

/* Ran when play/pause button clicked */
function togglePlayback(isPlaying) {
    if(isPlaying) {
        stream.pause();
        changePlaybackStatus(false);
        togglePausedTimer(true);
    } else {
        stream.play();
        changePlaybackStatus(true);
        togglePausedTimer(false);
    }
}

function changePlaybackStatus(newStatus) {
    var onClickFunction = "javascript: togglePlayback(" + newStatus + ");";

    document.getElementById("play-button").setAttribute("onclick", onClickFunction);

    if(newStatus) {
        document.getElementById("play-button").innerHTML = '<i class="fas fa-pause"></i>';
    } else {
        document.getElementById("play-button").innerHTML = '<i class="fas fa-play"></i>';
    }
}

/* Handles timer that shows up when paused */
function togglePausedTimer(isPaused) {
    if(isPaused) {
        pausedMins = 0;
        pausedSecs = 0;
        document.getElementById("paused-timer").innerHTML = "0:00";
        document.getElementById("paused-data-container").style.display = "block";
    } else {
        document.getElementById("paused-data-container").style.display = "none";
    }
}

function updatePausedTimer() {
    pausedSecs++;

    if(pausedSecs == 60) {
        pausedSecs = 0;
        pausedMins++;
    }

    if(pausedSecs < 10) { // Always show seconds as 2 digits - there's probably a better way to do this
        displayPausedSecs = "0" + pausedSecs;
    } else {
        displayPausedSecs = pausedSecs;
    }

    document.getElementById("paused-timer").innerHTML = pausedMins + ":" + displayPausedSecs;
}

/* Return live functionality */
function goLive() {
    stream.unload();
    togglePlayback(false);
}