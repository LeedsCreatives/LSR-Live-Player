/* Set variables */
firstLoad = true;
firstPlay = true;
pausedMins = 0;
pausedSecs = 0;

isReloading = false;

playButton = document.getElementById("play-button");
goLiveButton = document.getElementById("go-live");

pauseTimerUpdate = setInterval(updatePausedTimer, 1000);

adFile = "";

/* Preroll ad - need to move to load from pool at some point */
/* Ads are only played if one hasn't been heard in the last 15 mins */
if (localStorage.getItem("adHeardAt") === null) { // If ad has been heard before, force ad play
    playAd = true;
} else { // If not, lets see if we're due an ad
    var now = new Date();
    var lastAdHeardAt = localStorage.getItem("adHeardAt");

    var difference = now - lastAdHeardAt;
    var fifteenMinutes = 60 * 15 * 1000; // 1000 = milliseconds

    if (difference > fifteenMinutes) { // If ad was heard over 15 mins ago, play ad
        playAd = true;
    } else { // otherwise, just play a dry tag to make stuff still works
        playAd = false
    }
}

/* Now get the right file */
if(playAd) {
    adFile = "./assets/audio/preroll.mp3";
} else {
    adFile = "./assets/audio/drytag.mp3";
}

/* Now time to actually play it */
var preroll = new Howl({
    src: [adFile],
    format: 'mp3',
    onload: function() {
        playButton.disabled = false;
        playButton.innerHTML = '<i class="fas fa-fw fa-play"></i>';
    },
    onend: function() {
        togglePlayback(false);
    }
});

/* The stream itself */
var stream = new Howl({
    src: ['https://streamer.radio.co/sc673fa5ec/listen'],
    format: 'mp3',
    html5: true
});

/* Add animation over player */
var wave = new SiriWave({
    container: document.getElementById('wave'),
    cover: true,
    height: 150,
    speed: 0.02,
    color: '#650014',
    frequency: 5,
    amplitude: 1
});

waveDiv = document.getElementById("wave");


/* Ran when play/pause button clicked */
function togglePlayback(isPlaying) {
    if(isPlaying) {
		// TODO: Reimplement preroll
        stream.pause();
        wave.stop();
        waveDiv.style.visibility = "hidden";
        changePlaybackStatus(false);
        togglePausedTimer(true);
    } else {
        if(isReloading) {
            playButton.innerHTML = '<i class="fas fa-fw fa-spin fa-spinner"></i>';
        }
        isReloading = false;
        stream.play();
        wave.start();
        waveDiv.style.visibility = "visible";
        changePlaybackStatus(true);
        togglePausedTimer(false);
    }

    playButton.disabled = true;
    goLiveButton.disabled = true;

    setTimeout(function() { // Not ideal - this is here to stop people spamming play/pause and breaking it
        playButton.disabled = false;
        goLiveButton.disabled = false;
    }, 1000)
}

function changePlaybackStatus(newStatus) {
    var onClickFunction = "javascript: togglePlayback(" + newStatus + ");";

    playButton.setAttribute("onclick", onClickFunction);

    if(newStatus) {
        playButton.innerHTML = '<i class="fas fa-fw fa-pause"></i>';
    } else {
        playButton.innerHTML = '<i class="fas fa-fw fa-play"></i>';
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
    isReloading = true;
    togglePlayback(false);
}