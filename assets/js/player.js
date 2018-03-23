$(document).ready(function() {
    stream = new Howl({
        src: ['https://streamer.radio.co/s986435880/listen'],
        format: 'mp3',
        html5: true
    });

});

function togglePlayback(isPlaying) {
    if(isPlaying) {
        stream.pause();
        changePlaybackStatus(false);
    } else {
        stream.play();
        changePlaybackStatus(true);
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