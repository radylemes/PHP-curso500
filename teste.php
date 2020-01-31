<!DOCTYPE html>
<html>
  <head>
    <title>Device Properties Example</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PhononJs/1.5.1/js/phonon-core.min.js" integrity="sha256-J+T4SvD3EBaKnTayt49frwGoxL5TJIDcpp4ITFtspUI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf-8">

    // Wait for Cordova to load
    //
    document.addEventListener("deviceready", onDeviceReady, false);

    // Cordova is ready
    //
    function onDeviceReady() {
        var element = document.getElementById('deviceProperties');

        element.innerHTML = 'Device Name: '     + device.name     + '<br />' + 
                            'Device Cordova: '  + device.cordova  + '<br />' + 
                            'Device Platform: ' + device.platform + '<br />' + 
                            'Device UUID: '     + device.uuid     + '<br />' + 
                            'Device Version: '  + device.version  + '<br />';
    }

    </script>
  </head>
  <body>
    <p id="deviceProperties">Loading device properties...</p>
  </body>
</html>