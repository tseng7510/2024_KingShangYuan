<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="banner">
          <div id="item"><img src="../images/index/banner.jpg" /></div>
        </div>

        <section class="productBox">
          <h2 class="blockTitle wow fadeInLeft" data-wow-delay="0s">KSY HYDRAULIC PRESSES</h2>

          <div class="products">
            <div class="listBox wow fadeInRight" data-wow-delay="0.2s">
              <div class="item">
                <a href="products_2.php">
                  <h3 class="title">Hydraulic Press</h3>
                  <div class="pic"><img src="../images/index/p1.png" alt=""></div>
                </a>
              </div>
              <div class="item">
                <a href="products_2.php">
                  <h3 class="title">Rotatory-Type Hydraulic Press</h3>
                  <div class="pic"><img src="../images/index/p2.png" alt=""></div>
                </a>
              </div>
              <div class="item">
                <a href="products_2.php">
                  <h3 class="title">Hydraulic Press for Lock Nut Notches and Assembly</h3>
                  <div class="pic"><img src="../images/index/p3.png" alt=""></div>
                </a>
              </div>
              <div class="item">
                <a href="products_2.php">
                  <h3 class="title">Automatic Hydraulic Press</h3>
                  <div class="pic"><img src="../images/index/p4.png" alt=""></div>
                </a>
              </div>
            </div>
          </div>
        </section>

        <section class="technologiesBox">
          <div class="container">
            <h2 class="title">OUR CORE<br />
              TECHNOLOGIES</h2>
            <div class="picBox">
              <div class="itemBox">
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t1.jpg" alt=""></a></div>
                    <div class="description">Lower dead point locating device</div>
                  </div>
                </div>
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t2.jpg" alt=""></a></div>
                    <div class="description">Speed sensor adjustment</div>
                  </div>
                </div>
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t3.jpg" alt=""></a></div>
                    <div class="description">Limit sensor location adjustment</div>
                  </div>
                </div>
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t4.jpg" alt=""></a></div>
                    <div class="description">Pressure Keeping: adjustable within 1second</div>
                  </div>
                </div>
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t5.jpg" alt=""></a></div>
                    <div class="description">Upper die holder</div>
                  </div>
                </div>
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t6.jpg" alt=""></a></div>
                    <div class="description">Safety Light Curtain</div>
                  </div>
                </div>
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t7.jpg" alt=""></a></div>
                    <div class="description">Two-hand button to switch on</div>
                  </div>
                </div>
                <div class="item">
                  <button></button>
                  <div class="info">
                    <div class="pic"><a href="blog_detail.php"><img src="../images/index/t8.jpg" alt=""></a></div>
                    <div class="description">Table with Industrial tool box</div>
                  </div>
                </div>
              </div>
              <div class="pic"><img src="../images/index/technology.png" alt=""></div>
            </div>
          </div>
        </section>

        <section class="applicationBox">
          <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">APPLICATIONS</h2>
          <div class="listBox">
            <? for ($i = 0; $i < 4; $i++) { ?>
              <div class="item">
                <a href="application_detail.php">
                  <div class="pic"><img src="../images/index/application1.jpg" alt=""></div>
                  <div class="title">Thin plate shearing, shear through and/or half</div>
                </a>
              </div>
            <? } ?>
          </div>
          <div class="arrowsBox"></div>
        </section>


        <section class="newsBox">
          <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">NEWS</h2>
          <div class="container">
            <div class="listBox">
              <? for ($i = 0; $i < 3; $i++) { ?>
                <div class="item wow fadeInRight" data-wow-delay="0.2s">
                  <a href="exhibition_detail.php">
                    <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                    <div class="infoBox">
                      <h3 class="title">2023 TIMTOS Exhibition: Highlights from the Event</h3>
                      <div class="more">READ MORE</div>
                    </div>
                  </a>
                </div>
              <? } ?>
            </div>
          </div>
        </section>

        <section class="aboutBox">
          <div class="container">
            <div class="infoBox">
              <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">About KSY</h2>
              <div class="description">Widely acclaimed, their machines cater to various industries, from electronics to automotive parts and so on. With a commitment to quality and service, KSY aims to be the preferred partner by minimizing equipment failures and enhancing client productivity through a range of offerings including hydraulic presses, rotary assembly machines, and more.</div>
              <a class="more" href="about.php">READ MORE</a>
            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript" src="../plugins/gsap.min.js"></script>

  <script>
    $(function() {
      $('.applicationBox .listBox').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        arrows: true,
        dots: false,
        speed: 900,
        infinite: true,
        appendArrows: $('.applicationBox .arrowsBox'),
        responsive: [{
            breakpoint: 1250,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });

      $('.technologiesBox .item button').off().on('click', function(e) {

        $(this).parent().toggleClass('active').siblings().removeClass('active');
        $('.technologiesBox').addClass('active');

        if (!$(this).parent().hasClass('active')) {
          $('.technologiesBox').removeClass('active');
        }
        if ($(this).siblings()[0].getBoundingClientRect().right > window.innerWidth) {
          $(this).parent().removeClass('right').toggleClass('left');
        }
        if ($(this).siblings()[0].getBoundingClientRect().left < 0) {
          $(this).parent().removeClass('left').toggleClass('right');
        }
      })

      $(window).on('resize', function() {
        $('.technologiesBox').removeClass('active');
        $('.technologiesBox .item button').each(function() {
          $(this).parent().removeClass('active').removeClass('left').removeClass('right');
        })
      })
    });
  </script>
</body>

</html>