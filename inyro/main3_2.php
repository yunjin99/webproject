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
    <div class="">
      <div id="menuX" align='center'>
    <ul id="menu-list">
        <li> <a id="li1" onclick="change1()">자유</a></li>
        <li> <a>|</a></li>
    	  <li> <a id="li2" onclick="change2()">과제 관련</a></li>
        <li> <a>|</a></li>
    	  <li> <a id="li3" onclick="change3()">Q&A</a></li>
        <li> <a>|</a></li>
    	  <li> <a id="li4" onclick="change4()">갤러리</a></li>
     </ul>
     <div id="menu-line"  align='center'></div>
     <div class="container" align='center'>
      <!-- <img id="img" width="430px" height="430px" src="sangmyung.jpg" /> -->
      <iframe id="frame" src="./yejinframe1.php" width="650px" height="350px" frameborder="0"></iframe>

    </div>
    </div>
    <br>
    <input type='button' id='more' style="font-size:15px;float:right;" value='게시판 더보기' onclick="parent.parent.location.href='yejin12.php'"/>
  </div>
    <!-- <div id="menuX" align='center'>
  <ul id="menu-list">
      <li> <a id="li1" onclick="change1()">자유</a></li>
      <li> <a>|</a></li>
  	  <li> <a id="li2" onclick="change2()">과제 관련</a></li>
      <li> <a>|</a></li>
  	  <li> <a id="li3" onclick="change3()">QnA</a></li>
   </ul>
   <div id="menu-line"  align='center'></div>
   <div class="container" align='center'>
    <img id="img" width="430px" height="430px" src="sangmyung.jpg" />

  </div> -->
  <!-- <input type='button' id='more' style="font-size:15px;" value='게시판 더보기'/> -->
  <script>
    function change1() {
      document.getElementById("frame").src = "./yejinframe1.php";
    }
    function change2() {
      document.getElementById("frame").src = "./yejinframe2.php";
    }
    function change3() {
      document.getElementById("frame").src = "./yejinframe3.php";
    }
    function change4() {
      document.getElementById("frame").src = "./yejinframe4.php";
    }
    //
  </script>
</div>
<!-- <input type='button' id='more' style="font-size:15px;" value='게시판 더보기'/> -->
  </body>
</html>
