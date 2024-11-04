<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Products Filter</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="topBox">
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
                  <span itemprop="name">Products Filter</span>
                  <meta itemprop="position" content="2">
                </li>
              </ul>
            </div>
          </div>


          <section>
            <div class="contentBox">
              <div class="container">
                <div class="topResults">
                  <div class="results">Search Results : <span>OOOO</span></div>
                  <div class="item">6 items</div>
                </div>

                <div class="listBox">
                  <? for ($i = 0; $i < 8; $i++) { ?>
                    <div class="item wow fadeInUp" data-wow-delay="0s">
                      <a href="products_detail.php">
                        <div class="picBox">
                          <div class="pic"><img src="../images/index/p1.png" alt=""></div>
                          <div class="infoBox">
                            <div class="more">more</div>
                            <div class="description">
                              Hydraulic Pressing Machine with low energy consumption, less consumable parts and low noise level. Hydraulic Pressing Machine with low energy consumption, less consumable parts and low noise level.
                            </div>
                          </div>
                        </div>
                        <h2 class="title">KSY-015H Hydraulic Pressing Machine</h2>
                      </a>
                    </div>
                  <? } ?>
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