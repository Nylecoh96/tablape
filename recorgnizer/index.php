<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Periodic Table Game</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">

     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        


    <div class="navbar top-bar" id="games-nav">
      <div class="navbar__wrapper container">
        <div class="navbar__wrapper--left">
          <div class="navbar__logo-container">
            <a href="https://tablape.com/" class="navbar__logo">
              <span class="first-text">Tabla</span>
              <span class="second-text">Pe</span>
            </a>
          </div>
        </div>
        <div class="burger-menu mobile">
          <div class="burger-icon" id="burger-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          <ul class="navbar__link-container menu-items" id="menu-items">
            <li class="navbar__li">
              <a class="navbar__a" href="https://tablape.com"> Home </a>
            </li>
            <li class="navbar__li">
              <a class="navbar__a" href="https://tablape.com/videos"> Videos </a>
            </li>
            <li class="navbar__li">
              <a class="navbar__a" href="https://tablape.com/podcasts"> Podcasts </a>
            </li>
            <li class="navbar__li">
              <a class="navbar__a" href="https://tablape.com/history"> History </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </head>
  <body>
    <div id="unity-container" class="unity-desktop">
      <canvas id="unity-canvas" width=1024 height=768></canvas>
      <div id="unity-loading-bar">
        <div id="unity-logo"></div>
        <div id="unity-progress-bar-empty">
          <div id="unity-progress-bar-full"></div>
        </div>
      </div>
      <div id="unity-warning"> </div>
      <div id="unity-footer">
        <div id="unity-webgl-logo"></div>
        <div id="unity-fullscreen-button"></div>
        <div id="unity-build-title">Periodic Table Game</div>
      </div>
    </div>

    <?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );


get_footer();
?>
<style>
 *, body, span, a{
    font-family: 'Poppins', sans-serif;
}

h1, h2, h3, h4, h5, h6, li {
    font-family: 'Poppins', sans-serif;
}
div#unity-webgl-logo {
    display: none;
}
div#unity-container {
    margin-top: 10%;
    margin-bottom: 10%;
}
body .navbar {
    z-index: 99999999999999999999999;
}
.navbar__a {
    font-size: 14px;
    position: relative;
    padding: 20px 15px;
    color: #171940;
    background-color: transparent;
    transition: 0.2s ease-out;
}
.navbar {
    background-color: var(--theme_white);
    box-shadow: 0 3px 3px #562c0a30;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1001;
}
div#unity-container {
    margin-top: 10%;
}
.footer__a {
    font-size: 12px;
    color: #747d82;
    font-weight: 600;
}
#games-nav{
    background-color: var(--theme_white);
    box-shadow: 0 3px 3px #562c0a30;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1001;
}
body #games-nav .navbar__wrapper.container, body .footer__wrapper.container {
    width: 100%;
    max-width: 1100px;
    padding: 0;
}
#games-nav .first-text {
    color: #8ed1fc;
    font-size: 46px;
    font-style: normal;
    font-weight: bolder;
    letter-spacing: 1px;
}
.navbar .navbar__logo {
    font-family: poppins-bold !important;
    font-size: 22px;
    color: #171940;
}
#games-nav .second-text {
    color: black;
    font-size: 46px;
    font-style: normal;
    font-weight: bolder;
    letter-spacing: 1px;
}
.navbar .navbar__logo {
    font-family: poppins-bold;
    font-size: 22px;
    color: #171940;
}
#games-nav .navbar__link-container {
    padding: 0;
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    justify-content: center;
}
#games-nav .menu-items {
    list-style: none;
    display: flex;
    gap: 20px;
}
#games-nav ul li {
    list-style-type: none;
}
#games-nav a.navbar__a {
    padding: 5px 15px;
}
#games-nav .navbar__a {
    font-size: 14px;
    position: relative;
    padding: 20px 15px;
    color: #171940;
    background-color: transparent;
    transition: 0.2s ease-out;
}
#games-nav a {
    display: inline-block;
    text-decoration: none;
}
#games-nav .navbar__wrapper.container, body .footer__wrapper.container {
    width: 100%;
    max-width: 1100px;
    padding: 0;
}
#games-nav .container {
    width: 1100px;
    padding: 0 40px;
}
#games-nav .navbar__wrapper {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    margin: 0 auto;
}
.footer {
    background-color: #f0f0f2;
}
.footer__li {
    margin-bottom: 10px;
}
.footer  ul li {
    list-style-type: none;
}
.footer  .footer__top-container {
    margin-bottom: 20px;
}
.footer  .footer__social-icon {
    margin-left: 15px;
}
.footer  svg, .footer  span {
    vertical-align: middle;
}
.footer  a {
    display: inline-block;
    text-decoration: none;
}
.footer {
    width: 100%;
    background-color: #f0f0f2;
}
#footer-sidebar1 {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    margin: 0 auto;
}
.footer {
    background-color: #f0f0f2;
}
.footer {
    width: 100%;
    background-color: #f0f0f2;
    position: absolute;
    bottom: -195px;
}
body .footer__wrapper.container {
    width: 100%;
    max-width: 1100px;
    padding: 10px;
}
.footer__wrapper.container {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    margin: 0 auto;
    background-color: #f0f0f2;
    padding: 20px 40px;
}
.footer__left {
    flex: 0 0 30%;
}
.footer  a {
    display: inline-block;
    text-decoration: none;
}
.footer__right {
    flex: 1 0 5%;
    padding-left: 40px;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
}
.footer__bottom {
    flex: 0 0 100%;
    text-align: center;
    margin-top: 5px;
    font-size: 12px;
    color: #000;
}


</style>
   
    <script>
      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var fullscreenButton = document.querySelector("#unity-fullscreen-button");
      var warningBanner = document.querySelector("#unity-warning");

      // Shows a temporary message banner/ribbon for a few seconds, or
      // a permanent error message on top of the canvas if type=='error'.
      // If type=='warning', a yellow highlight color is used.
      // Modify or remove this function to customize the visually presented
      // way that non-critical warnings and error messages are presented to the
      // user.
      function unityShowBanner(msg, type) {
        function updateBannerVisibility() {
          warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
        }
        var div = document.createElement('div');
        div.innerHTML = msg;
        warningBanner.appendChild(div);
        if (type == 'error') div.style = 'background: red; padding: 10px;';
        else {
          if (type == 'warning') div.style = 'background: yellow; padding: 10px;';
          setTimeout(function() {
            warningBanner.removeChild(div);
            updateBannerVisibility();
          }, 5000);
        }
        updateBannerVisibility();
      }

      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/Periodic table build.loader.js";
      var config = {
        dataUrl: buildUrl + "/Periodic table build.data",
        frameworkUrl: buildUrl + "/Periodic table build.framework.js",
        codeUrl: buildUrl + "/Periodic table build.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "DefaultCompany",
        productName: "Periodic Table Game",
        productVersion: "1.0",
        showBanner: unityShowBanner,
      };

      // By default Unity keeps WebGL canvas render target size matched with
      // the DOM size of the canvas element (scaled by window.devicePixelRatio)
      // Set this to false if you want to decouple this synchronization from
      // happening inside the engine, and you would instead like to size up
      // the canvas DOM size and WebGL render target sizes yourself.
      // config.matchWebGLToCanvasSize = false;

      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        container.className = "unity-mobile";
        // Avoid draining fillrate performance on mobile devices,
        // and default/override low DPI mode on mobile browsers.
        config.devicePixelRatio = 1;
        unityShowBanner('WebGL builds are not supported on mobile devices.');
      } else {
        canvas.style.width = "1024px";
        canvas.style.height = "768px";
      }
      loadingBar.style.display = "block";

      var script = document.createElement("script");
      script.src = loaderUrl;
      script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
          progressBarFull.style.width = 100 * progress + "%";
        }).then((unityInstance) => {
          loadingBar.style.display = "none";
          fullscreenButton.onclick = () => {
            unityInstance.SetFullscreen(1);
          };
        }).catch((message) => {
          alert(message);
        });
      };
      document.body.appendChild(script);
    </script>
  </body>
</html>
