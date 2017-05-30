<!DOCTYPE html>
<html>

  <head>
    <title>映像 | 友人C&#39;s Blog</title>
    <!-- Favicons -->
    <link rel="icon shortcut" type="image/ico" href="">
    <!-- Meta & Info -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#607D8B">
    <!--iOS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-title" content="Title">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="480">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The Open Graph protocol -->
    <meta property="og:type" content="blog">
    <meta property="og:title" content="映像 | 友人C&#39;s Blog">
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/solarized-white.css">
    <!-- UC Browser Compatible-->
    <script>var agent = navigator.userAgent.toLowerCase();
      if (agent.indexOf('ucbrowser') > 0) {
        document.write('<link rel="stylesheet" href="/css/uc.css">');
        alert('由于 UC 浏览器使用极旧的内核，而本网站使用了一些新的特性。\n为了您能更好的浏览，推荐使用 Chrome 或 Firefox 浏览器。');
      }</script>
    <!-- Custom Head --></head>
  <!-- Single Gallery Page -->
  <link rel="stylesheet" href="assets/css/gallery.min.css">

  <body>
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Header -->
      <header id="header">
        <h1>
          <a href="/">
            <strong>友人C's Blog</strong></a>- 映像</h1>
        <nav>
          <ul>
            <li>
              <a href="#footer" class="icon fa-info-circle">Design by ©&nbsp;Viosey</a></li>
          </ul>
        </nav>
      </header>
      <!-- Main -->
      <div id="main">
        <?php
        $imgOutput = "";
        $json_string = file_get_contents('data.json');
        $imgItems=json_decode($json_string);

        foreach ($imgItems as $imgItem){
            $imgLink = $imgItem->link;
            $imgH2 = $imgItem->h2;
            $imgPTag = $imgItem->pTag;
            $imgOutput .= '<article class="thumb"><a href="'.$imgLink.'" class="image"><img src="'.$imgLink.'" /></a><h2>'.$imgH2.'</h2><p>'.$imgPTag.'</p></article>';
        }

        ?>
          <?php echo $imgOutput; ?>
      </div>
    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.min.js"></script>
    <script src="assets/js/main.min.js"></script>
  </body>

</html>
