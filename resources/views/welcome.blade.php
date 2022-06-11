
<x-header/>
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
<!--chatbot section start here -->

<div class="chatbot_box d-none">
  <div id="chatlist">
    <ul>
      <!-- <li class="admin_message"> </li>
      <li class="client_message"> </li> -->
    </ul>
  </div>
  <div class="message-box-wrap">
    <div class="message-box">
      <!-- <input type="text" name="message"> -->



    </div>
    <button id="send">send</button>
  </div>
<div class="admin-client-message-wrap">
<div data-question="we provide so many services like ..." class="servicediv">
  <br>
<button class="mybtn">Chartered Accountant</button>
<button class="mybtn">Cost Accountant</button>
<button class="mybtn">Company Secretary</button>
<button class="mybtn">Layer</button>
<button class="mybtn">Loan</button>


</div>


  <select name="service" id="djj" data-question="which service do u want ?">

<option >please select</option>
<option value="web-design">web design</option>

<option value="web debvs"> web devlopment</option>
<option value="digital marketing">Digital Marketing</option>

  </select>
<input type="text" data-question="what is your name ?">
<input type="text" data-question="what is your email ?">
<input type="text" name="phone" data-question="what is your phone number ?">
<div data-question="confirm ?">
  <button id="confirm">Yes</button>
  <button id="notc">No</button>

</div>
<form action="" id="submit_form" method="post">
  <div class="submit_info">
    <input type="submit" value="send" id="submit" name="submit">

  </div>
</form>

</div>
</div>








<!--chatbot section end here -->


  <main id="main">

<x-about/>




<x-skills/>
<x-ressume/>
<x-service/>
<x-contact/>

  </main>
<x-footer/>