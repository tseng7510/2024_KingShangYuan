<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList3">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="topBox">
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
                  <a href="products.php">
                    <span itemprop="name">Products</span>
                  </a>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="products_2.php">
                    <span itemprop="name">Hydraulic Press</span>
                  </a>
                  <meta itemprop="position" content="3">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">KSY-015H Hydraulic Pressing Machine</span>
                  <meta itemprop="position" content="4">
                </li>
              </ul>
            </div>
          </div>


          <section>
            <div class="contentBox">
              <div class="container ">
                <div class="titleBox">
                  <h1 class="title wow fadeInUp" data-wow-delay="0s">Hydraulic Press</h1>
                </div>
                <div class="content">
                  <div class="infoBox wow fadeInUp" data-wow-delay="0s">
                    <div class="subTitle">Description</div>
                    <div class="editor">Our hydraulic machines have several features that make your production process more efficient and convenient.<br />
                      Firstly, our hydraulic machines are energy-saving, consume less material, and produce low noise. This means that you can reduce energy costs and material waste during the production process while providing a more comfortable working environment.<br />
                      Secondly, our hydraulic machines are fast, have high output, and achieve high productivity efficiency. This ensures that you can complete more work in a shorter amount of time, thus increasing production efficiency.<br />
                      Adjusting hydraulic pressure, punch head position, and bottom dead center precision position is also very simple and easy. You can easily adjust them as needed to ensure product quality.<br />
                      Regarding control methods, we provide automatic PLC control and dual-button operation, both of which are highly secure. The feature of the punch head returning to its original position when hands are removed prevents accidents and ensures operator safety.<br />
                      Dual-button operation is a standard feature of our machine models, ensuring that operators must simultaneously press two buttons to activate the punch press, thus avoiding accidental punching incidents.<br />
                      Finally, our hydraulic punching machines are equipped with an oil temperature cooling device, which uses fan cooling to ensure that the oil temperature does not exceed 48°C. This reduces losses caused by temperature rise and allows for stable operation over a long period of time.</div>
                  </div>
                  <div class="videoBox">
                    <div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/IGdQF3yXvWU?si=vi2msvxv5ujW8Eqi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="bottomBox">
          <div class="listBox">
            <? for ($i = 0; $i < 8; $i++) { ?>
              <div class="item wow fadeInUp" data-wow-delay="0s">
                <a href="products_3.php">
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

    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

</body>

</html>