<!-- Copyright© by Fin & from https://codepen.io/igloude/pen/qNNWKr -->

<!DOCTYPE html>
<html lang="de" id="html-index">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error 502</title>
</head>
<style>
/********** GENERAL SETTINGS **********/
html, body {
  margin: 0;
  padding: 0;
}

@import 'https://fonts.googleapis.com/css?family=VT323';

body, h1, p, a {
  color: #e0e2f4;
}

body {
  background: blue;
}

body, p {
  font-size: 20px;
  font-family: "VT323", monospace;
}

h1 {
  font-size: 2.75rem/1.05rem;
  font-family: "VT323", monospace;
}

h2 {
  font: normal 2.25rem/1.25em;
  font-family: "VT323", monospace;
}

h3 {
  font: lighter 1.5rem/1.25em;
  font-family: "VT323", monospace;
}

h4 {
  font: lighter 1.125rem/1.2222222em;
  font-family: "VT323", monospace;
}

.container {
  width: 90%;
  margin: auto;
  max-width: 640px;
}

.bsod {
  padding-top: 10%;
}

.neg {
  text-align: right;
  color: blue;
}

.bg {
  background: gray;
  padding: 0 15px 2px 13px;
}

.title {
  margin-bottom: 50px;
}

.error-nav {
  margin-top: 35px;
  text-align: right;
}

.link {
  text-decoration: none;
  padding: 0 9px 2px 8px;
}

.link:hover, .link:focus {
  background: gray;
  color: blue;
}

/********** iPhone 6/7/8 **********/
@media (max-width: 375px) {
  body, p {
    font-size: 13px;
  }

  h1 {
    font-size: 2.3rem/1.05rem;
  }
}
</style>
<body>
<main class="bsod container">
<h1 class="neg title"><span class="bg">Error - 408</span></h1>
<p>Request time out. To continue:</p>
<p>* Refresh/Reload the page.<br />
  * Double check the URL.<br />
  * Check your internet connection.<br />
  * Rollback recent upgrades.<br />
  * Check your web server's timeout settings.</br />
  * Check the logs.</p>
  <nav class="error-nav">
    <a href="/" class="link">Index</a>&nbsp;|&nbsp;<a href="mailto:postmaster@localhost"
    class="link">Webmaster</a>
  </nav>
  </main>
</body>
</html>
