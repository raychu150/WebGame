<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | CoWorker</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
  </head>
  <body class="template">
    <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="1280px" width="720px"></canvas>
      <br>
      <div class="logo"></div>
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <div class="title">CoWorker</div>
    </div>
    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    backgroundColor: "#222C36",
    splashStyle: "Light",
    dataUrl: "Release/CoWorkerRelease.data",
    codeUrl: "Release/CoWorkerRelease.js",
    asmUrl: "Release/CoWorkerRelease.asm.js",
    memUrl: "Release/CoWorkerRelease.mem",
  };
</script>
<script src="Release/UnityLoader.js"></script>

  </body>
</html>
