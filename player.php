<html>

<head>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@clappr/hlsjs-playback@1.0.1/dist/hlsjs-playback.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div id="player"></div>
    <script>
        var player = new Clappr.Player({
            source: 'https://ayassport.776740.ir.cdn.ir/hls2/solhtv.m3u8',
            width: '100%',
            height: '100%',
            autoPlay: true,
            plugins: [HlsjsPlayback],
            mimeType: "application/x-mpegURL",
            parentId: "#player",
        });
    </script>
</body>

</html>