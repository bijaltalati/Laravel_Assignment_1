<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Mini Blog</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />
</head>
<body>
<div id="container">
  <div id="header">
    <h1><a href="#">mini<strong>BLOG</strong> 1.0</a></h1>
    <h2>For all your blogging needs.</h2>
    <ul id="nav">
      <li><a href="#" accesskey="h"><em>H</em>ome</a></li>
      <li><a href="#css" title="CSS and XHTML (a:c)" accesskey="c"><em>c</em>ss &amp; xhtml</a></li>
      <li><a href="#about" title="All about me (a:a)" accesskey="a"><em>A</em>bout the author</a></li>
      <li><a href="#contact" title="Get in Touch (a:o)" accesskey="o">C<em>o</em>ntact</a></li>
    </ul>
  </div>
  <div id="sidebar">
    <h1>The Sidebar</h1>
    <p> This is where you will put anything that uhm, belongs here really. Latest Comments. Submenus. Blogrolls. Affiliates. Anything! </p>
    <h1>Menu Take 2</h1>
    <ul class="submenu">
      <li><a href="#intro">Intro</a></li>
      <li><a href="#css">css &amp; xhtml</a></li>
      <li><a href="#about">About the author</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <h1>Check it out!</h1>
    <ul class="submenu">
      <li><a href="#">Six Shooter Media</a></li>
      <li><a href="#">JamesKoster.co.uk</a></li>
      <li><a href="#">Buy a Button!</a></li>
      <li><a href="#">Open Web Design</a></li>
      <li><a href="#">OSWD</a></li>
    </ul>
    <p class="note"> Here is a special paragraph for any important notes that you might want to display. </p>
  </div>
@yield('content')
  <div id="footer">
    <p> Template design by <a href="http://www.sixshootermedia.com">Six Shooter Media</a>.<br />
&copy; All your copyright information here. </p>
  </div>
</div>
</body>
</html>
