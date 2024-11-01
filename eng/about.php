<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages aboutPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">About KSY</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php" title="index" itemprop="item">
                  <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Company</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">About KSY</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>
        <section>

          <div class="block block01 wow fadeInUp" data-wow-delay="0s">
            <div class="container">
              <div class="content">
                <div class="infoBox">
                  <div class="top">
                    <div class="editor">King Shang Yuan Machinery Co., Ltd. was founded in 1993, initially focusing on the production of automated specialized machinery. The company aimed to provide customers with highly efficient automation equipment to reduce labor costs (cost reduction) and increase productivity, earning recognition and loyalty from its clientele.</div>
                  </div>
                  <div class="bottom">
                    <div class="editor">Since its inception, King Shang Yuan has continuously dedicated itself to product research and innovation. In 2003, the company successfully developed the High Speed Hydraulic Press Punching Machine, which obtained patents in Taiwan, China, and other countries, and was registered as a trademark under the name “KSY.” This series of machines combines punching and pressing capabilities, suitable for a wide range of applications including electronics, automotive parts, plastics and leather goods, hardware, and tools assembly. The company has been favored by numerous renowned domestic enterprises and has successfully marketed its “KSY” brand in international markets such as the United States, Japan, China, and Southeast Asia, particularly earning recognition from Japanese businesses.</div>
                  </div>
                </div>
                <div class="pic"><img src="../images/in/a1.jpg" alt=""></div>
              </div>
            </div>
          </div>

          <div class="block block02 wow fadeInUp" data-wow-delay="0s">
            <div class="content">
              <div class="pic"><img src="../images/in/a2.jpg" alt=""></div>
              <div class="infoBox">
                <div class="editor">King Shang Yuan Machinery Co., Ltd. was founded in 1993, initially focusing on the production of automated specialized machinery. The company aimed to provide customers with highly efficient automation equipment to reduce labor costs (cost reduction) and increase productivity, earning recognition and loyalty from its clientele.</div>
              </div>
            </div>
          </div>

        </section>

      </div>

    </main>


    <?php include('include_footer.php'); ?>

  </div>

  <?php include('include_body_bottom.php'); ?>

  <script>
    $('.block01 .listBox').magnificPopup({
      delegate: 'a',
      type: 'image'
    });
  </script>
</body>

</html>