
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fathur Portfolio</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>

<style>
    /* Container utama untuk gambar */
    .image-holder {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 200px;
    }

    /* Gaya default untuk gambar */
    .image-holder img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    }

    /* Efek hover: gambar mengecil (zoom-out) dan menjadi sangat samar */
    .image-holder:hover img {
        transform: scale(0.95); /* Zoom-out */
        opacity: 0.3; /* Gambar tetap terlihat tetapi sangat samar */
    }

    /* Overlay untuk teks "View Details" */
    .image-holder a.view-details {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 15px 25px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }

    /* Menampilkan teks saat hover */
    .image-holder:hover a.view-details {
        opacity: 1;
    }

    /* Menghilangkan efek pointer dari gambar agar hanya overlay yang bisa diklik */
    .image-holder a img {
        pointer-events: none;
    }
</style>

<body class="bg-body homepage post-template" data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0"

  <a class="menu-btn"><span></span></a>

  <div class="container-fluid overflow-hidden">

    <header id="header-nav" class="col-lg-2 position-fixed px-5 bg-white h-100">
      <div class="header-wrap d-flex flex-column justify-content-between h-100">
        <div class="navigation">
          <div class="site-logo mt-5">
            <a href="#home">
              <!-- <img src="images/main-logo.png" alt="logo" class="img-fluid"> -->
            </a>
          </div>

          <nav id="one-page-menu" class="vertical-menu my-5">
            <ul class="menu-list list-unstyled">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#experience" class="nav-link">Portfolio</a></li>
                <li><a href="#portfolio" class="nav-link">Contact</a></li>
                <li>
                    <a href="files/cv-fathur-terbaru.pdf" target="_blank" download="FathurRachman_CV.pdf"
                    class="nav-link fw-semibold text-dark text-decoration-none"
                    style="font-size: 1.2em; letter-spacing: 0.5px; transition: color 0.3s ease;">
                        Download CV
                    </a>
                </li>
            </ul>
          </nav>
        </div>
        <div class="mt-5">
            <div class="social-links d-flex flex-column">
                <!-- Instagram -->
                <a href="https://www.instagram.com/rachmanf__/" target="_blank" class="py-2 d-flex align-items-center">
                    <img src="images/instagram.png" alt="Instagram" width="20" height="20" class="me-2">
                    <span>rachmanf__</span>
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/rachman-fathur/" target="_blank" class="py-2 d-flex align-items-center">
                    <img src="images/linkedin.png" alt="LinkedIn" width="20" height="20" class="me-2">
                    <span>FathurRachman</span>
                </a>
                <!-- Email -->
                <a href="mailto:rachmanfathur313@gmail.com" class="py-2 d-flex align-items-center">
                    <img src="images/mail.png" alt="Email" width="20" height="20" class="me-2">
                    <span>rachmanffathur313@gmail.com</span>
                </a>
            </div>
        </div>
      </div>
    </header>

    <main class="col-lg-10 offset-lg-2">
      <div class="container">

        <!-- content wrapper -->
        <div class="justify-content-center px-1 mx-1 px-xl-5 mx-xl-5">

          <section id="home" class="py-5 bg-text" data-text="01">
            <div class="row">
              <div class="col-lg-6">
                <div class="banner-image text-center" data-aos="fade-right">
                  <img src="images/fathur-image (3).png" alt="banner" class="img-fluid" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="banner-content my-1 pt-1 my-lg-5 pt-lg-5" data-aos="fade-in">
                  <!-- <span class="text-muted text-uppercase">Designer / Developer</span> -->
                  <h1 class="banner-title display-xl lh-1 txt-fx slide-up" style="font-size: 6.2rem;">Fathur<br> Rachman</h1>
                </div>
              </div>
            </div><br><br>

            <div class="row">
                <div class="col-lg-3">
                    <div class="icon-box" data-aos="fade-up">
                    <span>01</span>
                    <h3 class="sub-heading">System Development</h3>
                    <p>Developed and optimized IT systems to enhance operational efficiency at Gobel Group.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <span>02</span>
                    <h3 class="sub-heading">Metaverse & Innovation</h3>
                    <p>Designed 3D virtual environments and managed digital innovation projects at Corporate Innovation Asia.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <span>03</span>
                    <h3 class="sub-heading">Graphic <br>Design</h3>
                    <p>Created engaging visual content and graphics for various digital platforms and marketing campaigns.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <br><a href="#experience" class="btn btn-dark text-uppercase py-4 px-5" data-aos="fade-up" data-aos-delay="300">View All Work</a>
                </div>
            </div>
          </section>

          <section id="about" class="my-5 py-5 bg-text" data-text="02">
            <div class="row d-flex flex-wrap" data-aos="fade-up">
              <div class="col-lg-6 pb-5">
                <span class="text-muted text-uppercase">BIODATA</span>
                <h2 class="display-4 txt-fx slide-up" style="font-size: 34.5px;">Education</h2>
                    <div class="data-info py-3" data-aos="fade-up">
                        <h3 class="info-title">Muhammadiyah University of Purwokerto</h3>
                        <p>- English Proficiency Certificate  (2022)</p>
                        <p>- Bachelor's Degree in Computer Science  (2020 - 2024)</p>
                    </div>
                    <div class="data-info" data-aos="fade-up" data-aos-delay="200">
                        <span class="meta-date">2022</span>
                        <h3 class="info-title">edX – HarvardX</h3>
                        <p>- Exercising Leadership: Foundational Principles Certified by Ronald Heifetz, M.D.(Founder of the Center for Public Leadership, Kennedy School of Government, Harvard University) (2022)</p>
                    </div>
              </div>
              <div class="col-lg-6 pb-5"><br>
              <h2 class="display-4 txt-fx slide-up" style="font-size: 34.5px;">Professional Experience</h2><br>

                <div class="data-info" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="info-title">PT Gobel International</h3>
                    <p>- IT System Development (Oct 2024 – Present)</p>
                    <p>- Digital Transformation Intern (Feb 2024 – Sept 2024)</p>
                </div><br>
                <div class="data-info" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="info-title">Kampus Merdeka</h3>
                    <p>- Awardee MSIB Batch 6 (Feb 2024 – Jun 2024)</p>
                    <p>- Awardee MSIB Batch 3 (ul 2022 – Aug 2022)</p>
                </div><br>
                <div class="data-info py-3" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="info-title"> BKKBN</h3>
                    <p>- Stunting Rate Reduction Program (Jul 2023 – Aug 2023)</p>
                </div><br>
                <div class="data-info" data-aos="fade-up" data-aos-delay="600">
                 <h3 class="info-title">PT Cipta Konsultan International (CIAS)</h3>
                    <p>- Metaverse Creation & Commercialization (Aug 2022 – Dec 2022)</p>
                </div>
              </div>
            </div>
            <div class="row d-flex flex-wrap" data-aos="fade-up">
              <div class="col-lg-6 pb-5">
              <!-- <h2 class="display-4 txt-fx slide-up">Organizational Experience</h2>
                <div class="data-info py-3" data-aos="fade-up">
                    <h3 class="info-title">Ikatan Mahasiswa Muhammadiyah</h3>
                    <p>- Research and Development Division (Sep 2021 - Sep 2022)</p>
                </div>
                <div class="data-info" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="info-title">Inspiration Factory Foundation</h3>
                    <p>- Learning Facilitator (Jul 2024 – Present)</p>
                </div> -->
              </div>
              <div class="col-lg-6 pb-5">
                <h2 class="display-4 txt-fx slide-up" style="font-size: 32.2px;">Organizational Experience</h2><br>
                <div class="data-info py-3" data-aos="fade-up">
                    <h3 class="info-title">Ikatan Mahasiswa Muhammadiyah</h3>
                    <p>- Research and Development Division (Sep 2021 - Sep 2022)</p>
                </div>
                <div class="data-info" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="info-title">Inspiration Factory Foundation</h3>
                    <p>- Learning Facilitator (Jul 2024 – Present)</p>
                </div>
              </div>
            </div>
          </section>

          <section id="experience" class="my-5 py-5 bg-text" data-text="03">
            <div class="section-header my-5" data-aos="fade-up">
                <div class="row justify-content-center g-5">
                <div class="col-lg-4">
                    <span class="text-muted text-uppercase">some of my recent works</span>
                    <h2 class="txt-fx slide-up" style="font-size: 3.6rem;">Portfolio</h2>
                </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="image-holder">
                            <a href="metaquestion.php">
                                <img src="images/metaquestion.png" alt="Metaquestion" class="img-fluid">
                            </a>
                            <a href="metaquestion.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">Roblox - Metaquestion</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="image-holder">
                            <a href="alumni.php">
                                <img src="images/alumni.png" alt="Alumni Kampus Merdeka Gobel Group" class="img-fluid">
                            </a>
                            <a href="alumni.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">Website - Alumni Kampus Merdeka Gobel Group</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="image-holder">
                            <a href="giportal.php">
                                <img src="images/portal2.png" alt="GI Portal" class="img-fluid">
                            </a>
                            <a href="giportal.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">Website - GI Portal</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="image-holder">
                            <a href="office.php">
                                <img src="images/365.png" alt="GI Portal" class="img-fluid">
                            </a>
                            <a href="office.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">GI Portal - Office 365</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="image-holder">
                            <a href="gotrans.php">
                                <img src="images/gotrans.png" alt="GI Portal" class="img-fluid">
                            </a>
                            <a href="gotrans.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">GoTrans Logistics International Company Website Profile</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="image-holder">
                            <a href="blk.php">
                                <img src="images/blk.png" alt="GI Portal" class="img-fluid">
                            </a>
                            <a href="blk.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">Website - Balai Latihan Kerja Gobel Group</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="image-holder">
                            <a href="kkn.php">
                                <img src="images/kkn2.png" alt="GI Portal" class="img-fluid">
                            </a>
                            <a href="kkn.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">KKN 102 SAMUDRA Universitas Muhammadiyah - Instagram profile</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="image-holder">
                            <a href="seratusjuta.php">
                                <img src="images/seratusjuta1.png" alt="GI Portal" class="img-fluid">
                            </a>
                            <a href="seratusjuta.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">Projectseratusjuta - Content and Design</div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="image-holder">
                            <a href="warungfathur.php">
                                <img src="images/warungfathur1.jpg" alt="GI Portal" class="img-fluid">
                            </a>
                            <a href="warungfathur.php" class="view-details">View Details</a>
                        </div>
                        <div class="caption text-center">
                            <div class="title">Website - ECommerce Warung Fathur</div>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <section id="portfolio" class="my-5 py-5 bg-text" data-text="04">
            <div class="container">
                <div class="row justify-content-center mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <span class="text-muted text-uppercase">Personal Info</span>
                    <h2 class="display-1 txt-fx slide-up" style="font-size: 4.3rem;">Contact Me</h2>
                </div>
                </div>

                <div class="row d-flex g-5">
                <div class="col-lg-7" data-aos="fade-up">
                    <h3>Thank You!</h3>
                    <p>
                        I truly appreciate your time and interest in my work. Your support and engagement mean a lot to me.
                        If you have any inquiries or collaborations in mind, feel free to reach out!
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="right-content" data-aos="fade-up">
                    <div class="element-header align-right">
                        <h3>Feel free to reach out through any of these platforms.</h3>
                    </div>
                    <div class="social-links py-4">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/rachmanf__/" target="_blank" class="py-2 d-flex align-items-center">
                            <img src="images/instagram.png" alt="Instagram" width="20" height="20" class="me-2">
                            <span>rachmanf__</span>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/rachman-fathur/" target="_blank" class="py-2 d-flex align-items-center">
                            <img src="images/linkedin.png" alt="LinkedIn" width="20" height="20" class="me-2">
                            <span>FathurRachman</span>
                        </a>
                        <!-- Email -->
                        <a href="mailto:rachmanfathur313@gmail.com" class="py-2 d-flex align-items-center">
                            <img src="images/mail.png" alt="Email" width="20" height="20" class="me-2">
                            <span>rachmanfathur313@gmail.com</span>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>
        <!-- / content wrapper -->
      </div>
    </main>

  </div>

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>

</html>