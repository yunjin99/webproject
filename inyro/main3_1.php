<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
      @import url(yunjinbar.css);
    </style>

    <title>main3</title>

  </head>
  <body>
    <div id="menuX" align='center'>
  <ul id="menu-list">
      <li> <a id="li1" onclick="change1()">교내</a></li>
      <li> <a>|</a></li>
  	  <li> <a id="li2" onclick="change2()">교외</a></li>
      <li> <a>|</a></li>
  	  <li> <a id="li3" onclick="change3()">친목</a></li>
   </ul>
   <div id="menu-line"></div>
   <div class="container" align='center'>
    <img id="img" width="710px" height="400px" align='top' src="inside.png" margin='0'/>
    <!-- <input type='button' id='more' style="font-size:15px;" value='더보기' onclick="parent.location.href='activityintro1.html'"/> -->

  </div>
  <script>
    function change1() {
      document.getElementById("img").src = "inside.png";
    }
    function change2() {
      document.getElementById("img").src = "outside.png";
    }
    function change3() {
      document.getElementById("img").src = "friendship.png";
    }
  </script>
</div>
  </body>
</html>
