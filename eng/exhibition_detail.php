<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_news2.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="title">Exhibitions</div>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php">
                  <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">News</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="exhibition.php">
                  <span itemprop="name">Exhibitions</span>
                </a>
                <meta itemprop="position" content="3">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">2023 TIMTOS Exhibition: Highlights from the Event</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <?php include('include_news.php'); ?>

        <section>
          <div class="container">

            <div class="contentBox">
              <div class="topBox">
                <div class="infoBox">
                  <h1 class="title wow fadeInUp" data-wow-delay="0s">Understanding the Key Components of a Hydraulic Press</h1>
                  <div class="dateBox wow fadeInUp" data-wow-delay="0.2s">
                    <time>2024-07-02</time>
                  </div>
                  <div class="changePage wow fadeInUp" data-wow-delay="0.4s">
                    <a class="prev arrows" href="blog_detail.php">Previous</a>
                    <a class="next arrows" href="blog_detail.php">Next</a>
                  </div>
                </div>
                <div class="pic wow fadeInUp" data-wow-delay="0.2s"><img src="../images/in/n.jpg" alt=""></div>
              </div>
              <div class="bottomBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="editor">
                  <div class="title">Speed sensor adjustment</div>
                  <ul class="list">
                    <li>Device is located in the front of the machine for easy adjustment.</li>
                    <li>Slow speed sensor is easily adjustable; no other tools are required.</li>
                  </ul>
                  <br /><br />
                  <div class="title">Upper die holder</div>
                  <ul class="list">
                    <li>The location to screw in mold.</li>
                  </ul>
                  <br /><br />
                  <div class="title">Two-hand button to switch on</div>
                  <ul class="list">
                    <li>Use both hands to start the punch descent to ensure that the operator’s hands are not within the high-risk range of the punch operation and avoid work safety accidents</li>
                  </ul>
                  <br /><br />
                  <div class="title">Lower dead point locating device</div>
                  <ul class="list">
                    <li>Locate the lower dead point precisely, adjust manually, mechanically.</li>
                    <li>Control the location of lower dead point precisely, keep the location accurately, maintain the depth of the pressing neck exactly.</li>
                    <li>No need to use this device when the die head moving down as a pressure control. The machine has outside cover protection.</li>
                  </ul>
                  <br /><br />
                  <div class="title">Limit sensor location adjustment</div>
                  <ul class="list">
                    <li>Device is located in the front of the machine for easy adjustment.</li>
                    <li>Upper limit sensor and lower limit sensor are easily adjustable; no other tools are required.</li>
                  </ul>
                  <br /><br />
                  <div class="title">Pressure Keeping: adjustable within 1 second</div>
                  <ul class="list">
                    <li>This function is the time required when pressing down the punch to form continuously. Freely adjustable settings</li>
                  </ul>
                  <br /><br />
                  <div class="title">Safety Light Curtain</div>
                  <ul class="list">
                    <li>Adopting safety light curtain. Application: Specified according to the protection height and machine model.</li>
                    <li>If light safety curtain touches anything during operating the machine, die head will stop immediately.</li>
                  </ul>
                  <br /><br />
                  <div class="title">Table with Industrial toolbox</div>
                  <ul class="list">
                    <li>Applicable machines: KSY-015H (1.5 tons) to KSY-200H (20 tons).</li>
                    <li>Utilize the hydraulic machine to install a tool cabinet beneath the machine. This allows the machine to store various items, including reports, tools, molds, and parts required for work.</li>
                  </ul>
                  <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.2s">
                    <a href="exhibition.php" class="back">BACK TO LIST</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>

      </div>

    </main>

    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

</body>

</html>