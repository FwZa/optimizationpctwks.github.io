<!-- Fawaz Farooq Ahmed - 2045884 -->
<!-- Ibrahim Basher Hamid - 2045910 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>PC Optimization</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="global/css/main.css">
</head>

<body>
  <!-- include navbar -->
  <?php include 'header.php'; ?>

  <!-- Header -->
  <div id="header">
    <span class="logo icon fa-paper-plane"></span>
    <h1>Improve PC performance in Windows</h1>
    <p>
      If your computer is <b>operating slowly</b>, you may be able to speed
      things up with these recommendations. <br>
      Since the advice is presented in order, begin with the first suggestion
      <br>
      Check if it helps, then move on to the next one if not.
      <br>
    </p>
  </div>

  <!-- Main -->
  <div id="main">
    <header class="major container medium">
      <h2>
        PC optimization Tools help monitor
        <br>
        the system’s condition and improve
        <br>
        upon what is bad in the computer
      </h2>
    </header>
    <?php include 'links.php'; ?>
    <div class="box alt container">
      <section class="feature left">
        <a href="https://www.oo-software.com/en/shutup10" class="image icon solid fa-signal"><img src="images/pic01.jpg" alt=""></a>
        <div class="content">
          <h3>O&O ShutUp10++</h3>
          <p>
            Using a very simple interface, you decide how Windows 10 and
            Windows 11 should respect your privacy by deciding which unwanted
            functions should be deactivated.
          </p>
        </div>
      </section>
      <section class="feature right">
        <a href="https://christitus.com/windows-tool/" class="image icon solid fa-code">
          <img src="images/pic02.jpg" alt="">
        </a>
        <div class="content">
          <h3>The Ultimate Windows Utility</h3>
          <p>
            This is a tool that has evolved over several years and achieves
            much more than just debloating a Windows install. You install the
            programs you select, which is a bigger selection than ninite. The
            classic debloat is there, but also includes a tweaks section with
            quality of life features.
          </p>
        </div>
      </section>
      <section class="feature left">
        <a href="https://www.revouninstaller.com/products/revo-uninstaller-free/" class="image icon solid fa-mobile-alt"><img src="images/pic03.jpg" alt=""></a>
        <div class="content">
          <h3>Revo Uninstaller</h3>
          <p>
            The best option for thoroughly removing stubborn programmes,
            temporary files, and other unnecessary programme data that is left
            behind after the standard uninstall process. It does this by first
            running the program's built-in uninstaller and then scanning for
            leftover data. This replaces and enhances Windows' built-in
            functionality.
          </p>
        </div>
      </section>
    </div>

    <footer class="major container medium">
      <h3>Get shady with science</h3>
      <p>
        If you have any interest in this field, you can apply easily and we
        welcome everyone
      </p>
      <ul class="actions special">
        <li>
          <a href="https://forms.gle/SuS5phY7cP2TTUM26" class="button">Join our crew</a>
        </li>
      </ul>
    </footer>
  </div>
  <!-- Footer -->
  <div id="footer">
    <div class="container medium">
      <header class="major last">
        <h2>Questions or comments?</h2>
      </header>

      <form method="post" action="#">
        <div class="row">
          <div class="col-6 col-12-mobilep">
            <input type="text" name="name" placeholder="Name">
          </div>
          <div class="col-6 col-12-mobilep">
            <input type="email" name="email" placeholder="Email">
          </div>
          <div class="col-12">
            <textarea name="message" placeholder="Message" rows="6"></textarea>
          </div>
          <div class="col-12">
            <ul class="actions special">
              <li><input type="submit" value="Send Message"></li>
            </ul>
          </div>
        </div>
      </form>
      <?php include 'footer.php'; ?>
    </div>
  </div>
</body>
</html>