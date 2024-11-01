<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">Products</h1>
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
                <span itemprop="name">Products</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="contentBox">
            <div class="listBox">
              <div class="item wow fadeInRight" data-wow-delay="0s">
                <a href="products_2.php">
                  <h3 class="title">Hydraulic Press</h3>
                  <div class="pic"><img src="../images/index/p1.png" alt=""></div>
                </a>
              </div>
              <div class="item wow fadeInRight" data-wow-delay="0.2s">
                <a href="products_2.php">
                  <h3 class="title">Rotatory-Type Hydraulic Press</h3>
                  <div class="pic"><img src="../images/index/p2.png" alt=""></div>
                </a>
              </div>
              <div class="item wow fadeInRight" data-wow-delay="0.4s">
                <a href="products_2.php">
                  <h3 class="title">Hydraulic Press for Lock Nut Notches and Assembly</h3>
                  <div class="pic"><img src="../images/index/p3.png" alt=""></div>
                </a>
              </div>
              <div class="item wow fadeInRight" data-wow-delay="0.6s">
                <a href="products_2.php">
                  <h3 class="title">Automatic Hydraulic Press</h3>
                  <div class="pic"><img src="../images/index/p4.png" alt=""></div>
                </a>
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