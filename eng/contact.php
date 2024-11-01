<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">CONTACT</h1>
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
                <span itemprop="name">Contact</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">
            <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
              <div class="item">
                <div class="titleF">Request a Quote</div>
                <a href="products_detail.php">
                  <div class="pic"><img src="../images/index/p1.png" alt=""></div>
                  <div class="infoBox">
                    <div class="subTitle">Hydraulic Press</div>
                    <div class="title">KSY-015H Hydraulic Pressing Machine</div>
                  </div>
                  <div class="del"></div>
                </a>
              </div>
            </div>

            <div class="bottomBox">
              <div class="infoBox wow fadeInLeft" data-wow-delay="0s">
                <div class="title">Company Information</div>
                <div class="info">
                  <div class="subTitle"><span>Headquarters</span>Taiwan</div>
                  <ul>
                    <li class="address">No.132, Cishan Rd., Dali Dist., Taichung City 41279, Taiwan</li>
                    <li class="tel"><span>TEL :</span><a href="tel:+886424967376">+886-4-2496-7376</a></li>
                    <li class="fax"><span>FAX :</span>+886-4-2496-7732</li>
                    <li class="mail"><span>E-Mail :</span><a href="mailto:king@ksy-machine.com">king@ksy-machine.com</a></li>
                  </ul>
                </div>
                <div class="info">
                  <div class="subTitle">Japanese Distributor</div>
                  <a class="link" href="https://www.kotobuki-tokyo.co.jp/index.html" target="_blank">https://www.kotobuki-tokyo.co.jp/index.html</a>
                </div>
                <div class="info">
                  <div class="subTitle">Indonesian Agent</div>
                  <a class="link" href="https://jayametal.co.id/" target="_blank">https://jayametal.co.id/</a>
                </div>
              </div>

              <div class="contentBox">
                <div class="map wow fadeInRight" data-wow-delay="0.2s"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.2306298293433!2d120.69171927700145!3d24.093383678438066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693ca8fc12b81d%3A0xdfaf22a9ad47e96f!2z6YeR5LiK5rqQ5qmf5qKw5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1725695791959!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <div class="title">Contact Us</div>
                <div class="notice">To provide you the best service, Please fill out the form below. Thanks !!</div>
                <form class="formBox wow fadeInLeft" data-wow-delay="0.2s">
                  <ul>
                    <li class="inputItem full wow fadeInUp">
                      <label for="company">Name</label>
                      <input type="text" class="inputControl" id="name">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="name">Last name</label>
                      <input type="text" class="inputControl" id="lname">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="email">E-Mail</label>
                      <input type="text" class="inputControl" id="email">
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <div class="label">ePaper</div>
                      <ul class="box">
                        <li>
                          <input class="check" type="checkbox" name="Checkbox" id="item1" value="item1"><label for="item1">Please mail me detail information of products, services and news of events.</label>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <ul>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="type">Company</label>
                      <input type="text" class="inputControl" id="company">
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <label for="type">Address</label>
                      <input type="text" class="inputControl" id="address">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="email">Country</label>
                      <input type="text" class="inputControl" id="country">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="tel">Telephone</label>
                      <input type="text" class="inputControl" id="tel" placeholder="Please enter full telephone number, including Country code, Area code.">
                    </li>
                  </ul>
                  <ul>
                    <li class="inputItem full wow fadeInUp">
                      <div class="label">Request of detail information</div>
                      <ul class="box">
                        <li>
                          <input class="check" type="checkbox" name="Checkbox" id="item2" value="item2"><label for="item2">Please mail me detail information of products, services and news of events.</label>
                        </li>
                        <li>
                          <input class="check" type="checkbox" name="Checkbox" id="item3" value="item3"><label for="item3">Send me the latest catalogue with your full line.</label>
                        </li>
                        <li>
                          <input class="check" type="checkbox" name="Checkbox" id="item4" value="item4"><label for="item4">Quote me the most competitive price on each of your products.</label>
                        </li>
                        <li>
                          <input class="check" type="checkbox" name="Checkbox" id="item5" value="item5"><label for="item5">Others </label>
                        </li>
                      </ul>
                      <input type="text" class="inputControl" id="other">
                    </li>
                    <li class="textareaItem full wow fadeInUp">
                      <label for="message">Special Comment</label>
                      <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                    </li>

                    <li class="inputItem wow fadeInUp required">
                      <label for="password">Verification code</label>
                      <input type="password" class="inputControl" id="password">
                      <span class="checkImg"><img src="../images/check_img.jpg"></span>
                      <button class="reBtn"></button>
                    </li>
                    <li class="inputItem lastCheck full wow fadeInUp">
                      <input class="check" type="checkbox" name="Checkbox" id="item6" value="item6"><label for="item6">By submitting your contact information, you acknowledge that you consent to our processing data in accordance with the Privacy and Cookie Policy.</label>
                    </li>
                  </ul>
                  <div class="pageBtnBox wow fadeInUp">
                    <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
                  </div>
                </form>

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