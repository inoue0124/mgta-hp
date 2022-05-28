<?php
session_start();
if (isset($_SESSION['isAuthorized']) && $_SESSION['isAuthorized'] == true) {
  $_SESSION['isAuthorized'] = true;
}
if (isset($_POST['password'])) {
  if ($_POST['password'] === 'GroundedOnData') {
    $_SESSION['isAuthorized'] = true;
  } else {
    $_SESSION['isAuthorized'] = false;
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" content="noindex">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="M-GTA研究会（実践的グランデッド・セオリー・アプローチ研究会）">
  <meta name="keywords" content="M-GTA研究,実践的グランデッド・セオリー・アプローチ研究会">
  <title>会員専用ページ|M-GTA研究会（実践的グランデッド・セオリー・アプローチ研究会）</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="./js/jquery.bxslider.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
  <link href="./css/base.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="./css/colorbox.css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <script src="./js/jquery.colorbox.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="./css/style.css" rel="stylesheet" type="text/css" media="all">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body class="page drawer drawer--right">
  <main>
    <header>
      <div class="fixnav">

        <div class="h1wrap">
          <div class="inner-big">
            <p class="h1"><a href="./">M-GTA研究会<span>（実践的グランデッド・セオリー・アプローチ研究会）</span></a></p>
            <div class="search">
              <form method="get" action="https://www.google.co.jp/search" target="_blank">
                <input type="text" name="q" size="31" maxlength="255" value="">
                <input type="submit" name="btng" value="検索">
                <input type="hidden" name="hl" value="ja">
                <input type="hidden" name="sitesearch" value="https://m-gta.jp/">
              </form>
            </div>
          </div>
        </div>

        <div class="mainnav_wrap">
          <div class="inner-big">
            <nav>
              <ul class="top_nav">
                <li><a href="./">Home<i class="fas fa-chevron-right"></i></a></li>
                <li><a href="./en/" target="_blank">English<i class="fas fa-chevron-right"></i></a></li>
                <li><a href="https://m-gta.shikuminet.jp/login/" target="_blank">マイページ(シクミネット)<i class="fas fa-chevron-right"></i></a></li>
              </ul>
              </ul>
              <ul class="mainmav">
                <li><a href="about.html">研究会概要</a></li>
                <li><a href="mgta.html">M-GTAとは</a></li>
                <li><a href="works.html">研究会の活動</a></li>
                <li><a href="intro.html">会員による研究の紹介</a></li>
                <li><a href="contact.html">入会・お問い合わせ</a></li>
                <li><a href="member.php">会員専用ページ</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <!--ドロワー-->
      <button type="button" class="pc-none drawer-toggle drawer-hamburger">
        <!--<span class="sr-only"><img src="./img/common/menu.png"></span>-->
        <span class="drawer-hamburger-icon"></span>
      </button>
      <nav class="pc-none drawer-nav accordion-container" role="navigation" id="accordion">
        <ul class="drawer-menu">
          <li class="menu-item"><a href="./">HOME</a></li>
          <li class="menu-item"><a href="about.html">研究会概要</a></li>
          <li class="menu-item"><a href="mgta.html">M-GTAとは</a></li>
          <li class="menu-item"><a href="works.html">研究会の活動</a></li>
          <li class="menu-item"><a href="intro.html">会員による研究の紹介</a></li>
          <li class="menu-item"><a href="contact.html">入会・お問い合わせ</a></li>
          <li class="menu-item"><a href="member.php">会員専用ページ</a></li>
          <li class="menu-item"><a href="./en/" target="_blank">English Site</a></li>
          <li><a href="https://m-gta.shikuminet.jp/login/" target="_blank">マイページ(シクミネット)<i class="fas fa-chevron-right"></i></a></li>
        </ul>
      </nav>
      </div>
    </header>
    <article>
      <h1 class="page-h1">会員専用ページ</h1>
      <!--サイドメニューここから-->
      <div class="contens inner">
        <div class="side">
          <nav class="side-nav">
            <h2>CONTENTS MENU</h2>
            <ul>
              <li class="clearfix"><a href="#a">ニューズレター<i class="fas fa-chevron-right"></i></a></li>
              <li class="clearfix"><a href="#b">研究成果登録フォーム<i class="fas fa-chevron-right"></i></a></li>
            </ul>
          </nav>
          <div class="contact">
            <h3>ご入会•お問い合わせ</h3>
            <p>ご入会や研究会へのお問い合わせは<br class="sp-none">こちらへどうぞ</p>
            <p class="mt50 link-b3"><a class="clearfix" href="contact.html">メールでのお問い合わせ<i class="fas fa-chevron-right"></i></a></p>
          </div>
        </div>
        <!--サイドメニューここまで-->

        <!--メインコンテンツここから-->
        <div class="main">
          <!--パンくずリストここから-->
          <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="./">
                <span itemprop="name">home</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="member.php">
                <span itemprop="name">会員専用ページ</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
          <!--パンくずリストここまで-->

          <?php
          if ($_SESSION['isAuthorized']) {
            echo <<< EOM
            <section>
              <h2 class="page-h2">会員へのお知らせ</h2>
              <div class="news-wrap">
                <div class="news" style="width: 100% !important;">
                  <div class="date">2022年1月23日(日)</div>
                  <div class="title">2022年度年次総会ご報告</div>
                  <div class="content">2022年5月7日にM-GTA研究会2022年度年次総会が開催されました。
                  <a href='https://m-gta.jp/pdf/news/2022年度M-GTA研究会総会議案.pdf' class="text-link">議案</a>はすべて承認されました。
                  </div>
                </div>
              </div>
            </section>

            <section id="a">
              <h2 class="page-h2">ニューズレター</h2>
              <div class="contener">
                <table>
                  <tr>
                    <th>発行号</th>
                    <th>発行日</th>
                    <th>発行号</th>
                    <th>発行日</th>
                    <th>発行号</th>
                    <th>発行日</th>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter1.pdf' class="text-link">第01号</a></td>
                    <td>2003-12-03</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter2.pdf' class="text-link">第02号</a></td>
                    <td>2004-02-01</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter3.pdf' class="text-link">第03号</a></td>
                    <td>2004-03-18</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter4.pdf' class="text-link">第04号</a></td>
                    <td>2004-06-06</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter5.pdf' class="text-link">第05号</a></td>
                    <td>2004-08-07</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter6.pdf' class="text-link">第06号</a></td>
                    <td>2004-09-20</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter7.pdf' class="text-link">第07号</a></td>
                    <td>2004-12-22</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter8.pdf' class="text-link">第08号</a></td>
                    <td>2005-03-19</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter9.pdf' class="text-link">第09号</a></td>
                    <td>2005-06-10</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter10.pdf' class="text-link">第10号</a></td>
                    <td>2005-08-07</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter11.pdf' class="text-link">第11号</a></td>
                    <td>2005-11-22</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter12.pdf' class="text-link">第12号</a></td>
                    <td>2006-02-05</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter13.pdf' class="text-link">第13号</a></td>
                    <td>2006-06-07</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter14.pdf' class="text-link">第14号</a></td>
                    <td>2006-08-10</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter15.pdf' class="text-link">第15号</a></td>
                    <td>2006-12-23</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter16.pdf' class="text-link">第16号</a></td>
                    <td>2006-11-08</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter17.pdf' class="text-link">第17号</a></td>
                    <td>2007-03-27</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter18.pdf' class="text-link">第18号</a></td>
                    <td>2007-06-18</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter19.pdf' class="text-link">第19号</a></td>
                    <td>2007-07-31</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter20.pdf' class="text-link">第20号</a></td>
                    <td>2007-08-30</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter21.pdf' class="text-link">第21号</a></td>
                    <td>2007-09-29</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter22.pdf' class="text-link">第22号</a></td>
                    <td>2007-10-31</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter23.pdf' class="text-link">第23号</a></td>
                    <td>2007-11-30</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter24.pdf' class="text-link">第24号</a></td>
                    <td>2007-12-30</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter25.pdf' class="text-link">第25号</a></td>
                    <td>2008-01-31</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter26.pdf' class="text-link">第26号</a></td>
                    <td>2008-03-03</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter27.pdf' class="text-link">第27号</a></td>
                    <td>2008-03-31</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter28.pdf' class="text-link">第28号</a></td>
                    <td>2008-05-08</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter29.pdf' class="text-link">第29号</a></td>
                    <td>2008-06-18</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter30.pdf' class="text-link">第30号</a></td>
                    <td>2008-08-19</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter31.pdf' class="text-link">第31号</a></td>
                    <td>2008-09-30</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter32.pdf' class="text-link">第32号</a></td>
                    <td>2008-11-07</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter33.pdf' class="text-link">第33号</a></td>
                    <td>2008-12-31</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter34.pdf' class="text-link">第34号</a></td>
                    <td>2009-01-31</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter35.pdf' class="text-link">第35号</a></td>
                    <td>2009-02-28</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter36.pdf' class="text-link">第36号</a></td>
                    <td>2009-03-30</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter37.pdf' class="text-link">第37号</a></td>
                    <td>2009-05-01</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter38.pdf' class="text-link">第38号</a></td>
                    <td>2009-06-09</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter39.pdf' class="text-link">第39号</a></td>
                    <td>2009-06-22</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter40.pdf' class="text-link">第40号</a></td>
                    <td>2009-08-10</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter41.pdf' class="text-link">第41号</a></td>
                    <td>2009-09-13</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter42.pdf' class="text-link">第42号</a></td>
                    <td>2009-10-10</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter43.pdf' class="text-link">第43号</a></td>
                    <td>2009-11-30</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter44.pdf' class="text-link">第44号</a></td>
                    <td>2009-12-31</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter45.pdf' class="text-link">第45号</a></td>
                    <td>2010-03-03</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter46.pdf' class="text-link">第46号</a></td>
                    <td>2010-04-25</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter47.pdf' class="text-link">第47号</a></td>
                    <td>2010-06-17</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter48.pdf' class="text-link">第48号</a></td>
                    <td>2010-08-26</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter49.pdf' class="text-link">第49号</a></td>
                    <td>2010-10-05</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter50.pdf' class="text-link">第50号</a></td>
                    <td>2010-11-06</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter51.pdf' class="text-link">第51号</a></td>
                    <td>2011-01-10</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter52.pdf' class="text-link">第52号</a></td>
                    <td>2011-02-13</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter53.pdf' class="text-link">第53号</a></td>
                    <td>2011-04-12</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter54.pdf' class="text-link">第54号</a></td>
                    <td>2011-05-20</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter55.pdf' class="text-link">第55号</a></td>
                    <td>2011-07-24</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter56.pdf' class="text-link">第56号</a></td>
                    <td>2011-10-21</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter57.pdf' class="text-link">第57号</a></td>
                    <td>2011-11-05</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter58.pdf' class="text-link">第58号</a></td>
                    <td>2011-12-03</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter59.pdf' class="text-link">第59号</a></td>
                    <td>2012-01-20</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter60.pdf' class="text-link">第60号</a></td>
                    <td>2012-04-10</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter61.pdf' class="text-link">第61号</a></td>
                    <td>2012-07-02</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter62.pdf' class="text-link">第62号</a></td>
                    <td>2012-08-06</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter63.pdf' class="text-link">第63号</a></td>
                    <td>2012-09-27</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter64.pdf' class="text-link">第64号</a></td>
                    <td>2013-01-06</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter65.pdf' class="text-link">第65号</a></td>
                    <td>2013-03-30</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter66.pdf' class="text-link">第66号</a></td>
                    <td>2013-06-22</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter67.pdf' class="text-link">第67号</a></td>
                    <td>2013-08-10</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter68.pdf' class="text-link">第68号</a></td>
                    <td>2013-11-04</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter69.pdf' class="text-link">第69号</a></td>
                    <td>2014-02-04</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter70.pdf' class="text-link">第70号</a></td>
                    <td>2014-04-06</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter71.pdf' class="text-link">第71号</a></td>
                    <td>2014-06-30</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter72.pdf' class="text-link">第72号</a></td>
                    <td>2014-08-28</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter73.pdf' class="text-link">第73号</a></td>
                    <td>2014-10-10</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter74.pdf' class="text-link">第74号</a></td>
                    <td>2014-12-09</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter75.pdf' class="text-link">第75号</a></td>
                    <td>2015-02-28</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter76.pdf' class="text-link">第76号</a></td>
                    <td>2015-04-08</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter77.pdf' class="text-link">第77号</a></td>
                    <td>2015-06-20</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter78.pdf' class="text-link">第78号</a></td>
                    <td>2015-08-24</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter79.pdf' class="text-link">第79号</a></td>
                    <td>2015-12-11</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter80.pdf' class="text-link">第80号</a></td>
                    <td>2016-02-24</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter81.pdf' class="text-link">第81号</a></td>
                    <td>2016-04-10</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter82.pdf' class="text-link">第82号</a></td>
                    <td>2016-06-30</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter83.pdf' class="text-link">第83号</a></td>
                    <td>2016-08-26</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter84.pdf' class="text-link">第84号</a></td>
                    <td>2016-10-18</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter85.pdf' class="text-link">第85号</a></td>
                    <td>2016-12-10</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter86.pdf' class="text-link">第86号</a></td>
                    <td>2017-02-28</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter87.pdf' class="text-link">第87号</a></td>
                    <td>2017-04-19</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter88.pdf' class="text-link">第88号</a></td>
                    <td>2017-07-07</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter89.pdf' class="text-link">第89号</a></td>
                    <td>2017-09-05</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter90.pdf' class="text-link">第90号</a></td>
                    <td>2017-11-30</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter91.pdf' class="text-link">第91号</a></td>
                    <td>2018-03-22</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter92.pdf' class="text-link">第92号</a></td>
                    <td>2018-06-22</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter93.pdf' class="text-link">第93号</a></td>
                    <td>2018-08-10</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter94.pdf' class="text-link">第94号</a></td>
                    <td>2018-10-11</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter95.pdf' class="text-link">第95号</a></td>
                    <td>2018-11-26</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter96.pdf' class="text-link">第96号</a></td>
                    <td>2019-03-18</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter97.pdf' class="text-link">第97号</a></td>
                    <td>2019-06-20</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter98.pdf' class="text-link">第98号</a></td>
                    <td>2019-09-13</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter99.pdf' class="text-link">第99号</a></td>
                    <td>2019-11-22</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter100.pdf' class="text-link">第100号</a></td>
                    <td>2020-01-27</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter101.pdf' class="text-link">第101号</a></td>
                    <td>2020-03-18</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter102.pdf' class="text-link">第102号</a></td>
                    <td>2020-10-02</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter103.pdf' class="text-link">第103号</a></td>
                    <td>2020-12-16</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter104.pdf' class="text-link">第104号</a></td>
                    <td>2021-03-09</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter105.pdf' class="text-link">第105号</a></td>
                    <td>2021-07-28</td>
                  </tr>
                  <tr>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter106.pdf' class="text-link">第106号</a></td>
                    <td>2021-08-01</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter107.pdf' class="text-link">第107号</a></td>
                    <td>2021-11-12</td>
                    <td><a href='https://m-gta.jp/pdf/nl/M-GTANewsLetter108.pdf' class="text-link">第108号</a></td>
                    <td>2022-03-24</td>
                  </tr>
                </table>
              </div>
            </section>

            <section id="b">
              <h2 class="page-h2">研究成果登録フォーム</h2>
              <div class="contener">
                <p class="page-p">M-GTAを用いた ①著書刊行 および ②学位取得 をされた会員は、下記よりご報告ください。</p>
                <p class="page-p">会員による研究成果として「会員による研究の紹介」に掲載いたします。</p>
                <p class="page-p">以下の項目にご入力の上、画面下部の「確認画面に進む」ボタンをクリックしてください。</p>
                <div class="mail">
                  <form method="post" action="register.php">
                    <select name="申込種別" id="type-selection">
                      <option value="選択してください">選択してください</option>
                      <option value="author">①著書報告</option>
                      <option value="degree">②学位取得報告</option>
                    </select>
                    <div id="form-author" style="display:none;">
                      <table class="formtable">
                        <tr>
                          <th>会員氏名<span>❇︎</span></th>
                          <td><input class="area" type="text" name="会員氏名　" required disabled></td>
                        </tr>
                        <tr>
                          <th>著者名<span>❇︎</span></th>
                          <td><input class="area" type="text" name="著者名" required disabled></td>
                        </tr>
                        <tr>
                          <th>著書名<span>❇︎</span></th>
                          <td><input class="area" type="text" name="著書名" required disabled> </td>
                        </tr>
                        <tr>
                          <th>出版社<span>❇︎</span></th>
                          <td><input class="area" type="text" name="出版社" required disabled></td>
                        </tr>
                        <tr>
                          <th>刊行年<span>❇︎</span></th>
                          <td><input class="area" type="text" name="刊行年" required disabled></td>
                        </tr>
                        <tr>
                          <th>メールアドレス<span>❇︎</span></th>
                          <td><input class="area" type="text" name="Email　" required disabled></td>
                        </tr>
                      </table>
                      <p class="submit">
                        <input type="submit" value="　 確認 　" />　<input type="reset" value="リセット" />
                      </p>
                    </div>

                    <div id="form-degree" style="display:none;">
                      <table class="formtable">
                        <tr>
                          <th>会員氏名 (日本語/英語)<span>❇︎</span></th>
                          <td><input class="area" type="text" name="会員氏名" required disabled></td>
                        </tr>
                        <tr>
                          <th>研究領域<span>❇︎</span></th>
                          <td>
                            <select class="area" name="研究領域" id="type-selection" required disabled>
                              <option value="選択してください">選択してください</option>
                              <option value="看護学">看護学</option>
                              <option value="医学">医学</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <th>学術論文名 (日本語/英語)<span>❇︎</span></th>
                          <td><input class="area" type="text" name="学術論文名" required disabled> </td>
                        </tr>
                        <tr>
                          <th>学位授与大学 (日本語/英語)<span>❇︎</span></th>
                          <td><input class="area" type="text" name="学位授与大学" required disabled></td>
                        </tr>
                        <tr>
                          <th>取得学位 (日本語/英語) 例)博士(看護学)<span>❇︎</span></th>
                          <td><input class="area" type="text" name="取得学位" required disabled></td>
                        </tr>
                        <tr>
                          <th>学位取得年月 例)2022/03<span>❇︎</span></th>
                          <td><input class="area" type="text" name="学位取得年" required disabled></td>
                        </tr>
                        <tr>
                          <th>メールアドレス<span>❇︎</span></th>
                          <td><input class="area" type="text" name="Email" required disabled></td>
                        </tr>
                      </table>
                      <p class="submit">
                        <input type="submit" value="　 確認 　" />　<input type="reset" value="リセット" />
                      </p>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!--メインコンテンツここまで-->
        EOM;
          } else {
            echo <<<EOM
            <div class="mail">
              <form method="post" action="member.php">
                <table class="formtable">
                  <tr>
                    <th>パスワード<span>❇︎</span></th>
                    <td><input class="area" type="text" name="password" required> </td>
                  </tr>
                </table>
          EOM;
            if (isset($_SESSION['isAuthorized']) && $_SESSION['isAuthorized'] == false) {
              echo <<<EOMM
                <p style="font-size:12px; color:red;">パスワードが間違っています。会員の方でパスワードをお忘れの方は事務局までお問い合わせください。</p>
              EOMM;
            }
            echo <<<EOM
              <p class="submit">
                <input type="submit" value="　 送信 　" />
              </p>
            </form>
          </div>
          EOM;
          }
          ?>
    </article>
  </main>
  <footer>
    <div class="inner-mini">
      <nav class="footnav">
        <ul class="mainmav">
          <li><a href="about.html">研究会概要</a></li>
          <li><a href="mgta.html">M-GTAとは</a></li>
          <li><a href="works.html">研究会の活動</a></li>
          <li><a href="intro.html">会員による研究の紹介</a></li>
          <li><a href="contact.html">入会・お問い合わせ</a></li>
          <li><a href="member.php">会員専用ページ</a></li>
        </ul>
      </nav>
      <p class="bottom-name">M-GTA研究会</p>
      <p class="copy">Copyright(C) M-GTA研究会 All rights reserved.</p>
    </div>

    <!-- ページトップへ戻るボタン -->
    <p class="pagetop" style="display: block;">
      <a href="#"><img src="./img/modoru.png"></a>
    </p>
  </footer>

  <script>
    $(function() {
      $('a[href^="#"]').click(function() {
        var speed = 500;
        var headerHight = 130;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - headerHight;
        $("html, body").animate({
          scrollTop: position
        }, speed, "swing");
        return false;
      });
    });
    $(document).ready(function() {
      $('.drawer').drawer({
        class: {
          nav: 'drawer-nav',
            toggle: 'drawer-toggle',
            overlay: 'drawer-overlay',
            open: 'drawer-open',
            close: 'drawer-close',
            dropdown: 'drawer-dropdown'
        },
        iscroll: {
          // Configuring the iScroll
          // https://github.com/cubiq/iscroll#configuring-the-iscroll
          mouseWheel: true,
          preventDefault: false
        },
        showOverlay: true
      });
    });
    $(function() {
      $(window).scroll(function() {
        $('.effect-fade').each(function() {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      });
    });
    $("#type-selection").change(function() {
      if ($("#type-selection").val() === "author") {
        $("#form-degree").hide()
        setRequired("#form-degree", false)
        $("#form-author").show()
        setRequired("#form-author", true)
      } else if ($("#type-selection").val() === "degree") {
        $("#form-degree").show()
        setRequired("#form-degree", true)
        $("#form-author").hide()
        setRequired("#form-author", false)
      } else {
        $("#form-author").hide()
        $("#form-degree").hide()
        setRequired("#form-author", false)
        setRequired("#form-degree", true)
      }
    })

    function setRequired(form_id, val) {
      input = $(`${form_id} input`)
      for (i = 0; i < input.length; i++) {
        input[i].required = val;
        input[i].disabled = !val;
      }
      select = $(`${form_id} select`)
      for (i = 0; i < select.length; i++) {
        select[i].required = val;
        select[i].disabled = !val;
      }
    }
  </script>
</body>

</html>