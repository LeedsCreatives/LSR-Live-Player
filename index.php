<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LSR Player</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#7E112D">
    <meta name="msapplication-TileImage" content="./assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#7E112D">

    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/lsrplayer.css?cachebust=2">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/jplayer-theme/css/jplayer-theme.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-responsive" style="max-width: 1200px; margin-left: auto; margin-right: auto;">
    <div style="background-color:#f1c40f; width:100%; padding: 1em;"><a style="color:#2c3e50" href="http://www.thisislsr.com/play/2.php">Click here to listen to our LeadLUU coverage</a></div>
      <div class="lsrplayer-section-header">
        <div class="row">
          <div class="col-xs-12">
            <a href="http://thisislsr.com"><img src="http://thisislsr.com/logo.png" class="lsrplayer-logo" /></a>
          </div>
        </div>
      </div>
      <!--<div style="width:100%;padding:2%;background-color:#e74c3c;color:#1a1a1a;text-align:center;font-weight:bold;font-size:1.5em;">Our main site is currently undergoing routine maintenance. We'll be right back.</div>-->
      <div class="lsrplayer-section-player" id="ondemand-player" style="display: none;">
          <div id="ondemand-widget"></div>
          <div class="lsrplayer-returnlive"><a href="#" onClick="returnLive()">Click here to listen live</a></div>
      </div>
      <div class="lsrplayer-section-player" id="live-player">
      <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
          <div class="jp-type-single">
            <div class="jp-gui jp-interface">
              <div class="row" id="control-row">
                <div class="col-xs-2">
                  <div class="jp-controls-holder">
                    <div class="jp-controls">
                      <button class="jp-play" id="button-play" onClick="setButton('button-play', 'button-stop')" role="button" tabindex="0" style="display:none;"><img src="./assets/css/jplayer-theme/img/play.png" id="lsr-play-img" class="lsrplayer-jp-controls" /></button>
                      <button class="jp-stop" id="button-stop" onClick="setButton('button-stop', 'button-play')" role="button" tabindex="0"><img src="./assets/css/jplayer-theme/img/stop.png" id="lsr-stop-img" class="lsrplayer-jp-controls" /></button>
                    </div>
                  </div>
                </div>
                <div class="col-xs-10">
                  <div class="jp-volume-controls">
                    <div class="row">
                      <div class="col-xs-3">
                        <button class="jp-mute" role="button" tabindex="0"><img src="./assets/css/jplayer-theme/img/vol-mute.png" id="lsr-mute-img" class="lsrplayer-jp-controls" /></button>
                      </div>
                      <div class="col-xs-6">
                        <div class="lsrplayer-volumecontrolscontainer">
                          <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <button class="jp-volume-max" role="button" tabindex="0"><img src="./assets/css/jplayer-theme/img/vol-max.png" id="lsr-volmax-img" class="lsrplayer-jp-controls" /></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="lsrplayer-section-sponsor"><a href="http://spencer-properties.co.uk/" target="_blank"><img src="./assets/img/sponsor.png" /></a></div>
  <div class="lsrplayer-section-ondemandheader" id="ondemandheader">
    On Demand
  </div>
  <div class="lsrplayer-section-ondemand">
    <div id="ondemand"></div>
    <div class="row">
      <div class="col-xs-6">
        <button type="button" id="nextbutton" onClick="changePage(prevurl, 'next')" class="btn btn-lsr btn-lsr-varsity-purple btn-block"><i class="fa fa-arrow-left" aria-hidden="true"></i> Newer</button>
      </div>
      <div class="col-xs-6">
        <button type="button" id="prevbutton" onClick="changePage(nexturl, 'prev')" class="btn btn-lsr btn-lsr-varsity-purple btn-block">Older <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.jplayer.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

    	var stream = {
    		title: "Leeds Student Radio Live",
    	  mp3: "https://streamer.radio.co/s986435880/listen"
    	},
    	ready = false;

    	$("#jquery_jplayer_1").jPlayer({
    		ready: function (event) {
    			ready = true;
    			$(this).jPlayer("setMedia", stream).jPlayer("play");
    		},
    		pause: function() {
    			$(this).jPlayer("clearMedia");
    		},
    		error: function(event) {
    			if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
    				// Setup the media stream again and play it.
    				$(this).jPlayer("setMedia", stream).jPlayer("play");
    			}
    		},
    		swfPath: "js",
    		supplied: "mp3",
    		preload: "none",
    		wmode: "window",
    		keyEnabled: true,
        autoplay: true,
    	});

    });

    function setButton(frombutton, setbutton) {
      document.getElementById(frombutton).style.display = "none";
      document.getElementById(setbutton).style.display = "block";

    }
  </script>
  <script src="./assets/js/jquery.fittext.js"></script>
  <script>jQuery("#ondemandheader").fitText(1.2, { minFontSize: '8px', maxFontSize: '48px' });</script>

  <script>
    var nexturl = "";
    var prevurl = "";
    var page = 0;

    changePage('init', 'init');

  function changePage(way, rawway) {


    if (way == 'init') {
      url = 'https://api.mixcloud.com/thisislsr/cloudcasts/?limit=8';
    } else {
      url = way;
    }

    $.getJSON( url, function( data ) {
      console.log(data);

      document.getElementById("ondemand").innerHTML = '';
      for (i = 0; i < data.data.length; i++) {
        nexturl = data['paging']['next'];
        prevurl = data['paging']['previous'];

        console.log(nexturl + ' || ' + prevurl);
        document.getElementById("ondemand").innerHTML += '<div class="row lsrplayer-ondemand-row"><div class="col-xs-2 lsrplayer-ondemand-thumbcol"><a href="#" onClick="playOnDemand(\'https://mixcloud.com' + data['data'][i]['key'] + '\')"><img class="lsrplayer-ondemand-thumbnail" src="' + data['data'][i]['pictures']['large'] + '" /></a></div><div class="col-xs-10"><a href="#" onClick="playOnDemand(\'https://mixcloud.com' + data['data'][i]['key'] + '\')">' + data['data'][i]['name'] + '</div></a></div>';
      }

      if(rawway == 'prev') {
        page = page + 1;
      } else if(rawway == 'init') {
        page = page + 1;
      }
      else {
        page = page - 1;
      }

      console.log(page);

      var reinit = false;

      if (nexturl === undefined || data['data'].length == 0) {
        console.log("REINIT");
        reinit = true;
        changePage('init', 'init');
        page = 1;
      }

      if (page == 1) {
        document.getElementById("nextbutton").disabled = true;
      } else {
        document.getElementById("nextbutton").disabled = false;
      }

      if (reinit) {
        document.getElementById("nextbutton").disabled = true;
        page = 1;
      }
    });
  }

  function playOnDemand(show) {
    $("#jquery_jplayer_1").jPlayer("stop");
    $("#jquery_jplayer_1").jPlayer("mute");
    setButton('button-stop', 'button-play');

    document.getElementById('live-player').style.display = "none";
    document.getElementById("ondemand-widget").innerHTML = '<iframe id="ondemandplayer" width="100%" height="60" src="https://www.mixcloud.com/widget/iframe/?feed=' + show + '&hide_cover=1&mini=1&stylecolor=#22222" frameborder="0"></iframe>';
    document.getElementById('ondemand-player').style.display = "block";

  }

  function returnLive() {
    $("#jquery_jplayer_1").jPlayer("play");
    $("#jquery_jplayer_1").jPlayer("unmute");
    setButton('button-play', 'button-stop');

    document.getElementById('ondemand-player').style.display = "none";
    document.getElementById("ondemand-widget").innerHTML = '';
    document.getElementById('live-player').style.display = "block";
  }

  </script>
  <script>
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    document.getElementById("control-row").innerHTML = '<div class="col-xs-12"><div class="jp-controls-holder"><div class="jp-controls"><button class="jp-play" id="button-play" onClick="setButton(\'button-play\', \'button-stop\')" role="button" tabindex="0"><img src="http://thisislsr.com/play/assets/css/jplayer-theme/img/play.png" class="lsrplayer-jp-controls" /></button><button class="jp-stop" id="button-stop" style="display:none;" onClick="setButton(\'button-stop\', \'button-play\')" role="button" tabindex="0"><img src="http://thisislsr.com/play/assets/css/jplayer-theme/img/stop.png" class="lsrplayer-jp-controls" /></button></div></div></div>';
  }
</script>
  </body>
</html>
