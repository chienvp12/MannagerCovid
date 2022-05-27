<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="main.css">

    <title>PTIT COVIDD</title>
</head>

<body>
    <div class="wrapper-box">
    <!-- main header -->
    <header class="main-header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="">
                    <img src="img/footer-logo.png" alt=""></a>
                <div class="navbar navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Thông tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#symptoms">Triệu chứng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#prevention">Phòng ngừa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form.html">Đăng ký tiêm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#khaibao">Khai báo y tế</a>
                        </li>
                    </ul>
                    <div class="btn-box">
                        <!-- <button type="button" class="btn btn-outline-secondary">Đăng nhập</button> -->
                        <a href="login.php" class="btn therme-btn">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--end main header -->
    <!-- banner-section -->
    <section class="banner-section">
        <div class="anim-icon">
            <div class="icon icon-1 rotate-me" style="background-image: url(img/anim-icon-1.png);"></div>
            <div class="icon icon-2 rotate-me" style="background-image: url(img/anim-icon-2.png);"></div>
            <div class="icon icon-3 rotate-me" style="background-image: url(img/anim-icon-3.png);"></div>
        </div>
        <div class="shape-layer" style="background-image: url(img/banner-bg.png);"></div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="slide">
                <div class="carousel-item active slide-item">
                    <div class="container">
                        <div class="row align-items-center ">
                            <div class="col-lg-6 ">
                                <div class="content-box">
                                    <h6>Stay Home</h6>
                                    <h6>Stay Safe</h6>
                                    <h1>Ở nhà để bảo vệ cho bản thân và gia đình của bạn.</h1>
                                    <div class="btn-box">
                                        <a href="index.html" class="btn therme-btn">Đăng ký tiêm</a>
                                        <a href="index.html" class="btn therme-btn2 "><i class="fas fa-phone"></i>Liên hệ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="img/banner.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slide-item">
                    <div class="container">
                        <div class="row align-items-center ">
                            <div class="col-lg-6 ">
                                <div class="content-box">
                                    <h6>Stay Home</h6>
                                    <h6>Stay Safe</h6>
                                    <h1>Ở nhà để bảo vệ cho bản thân và gia đình của bạn.</h1>
                                    <div class="btn-box">
                                        <a href="index.html" class="btn therme-btn">Đăng ký tiêm</a>
                                        <a href="index.html" class="btn therme-btn2 "><i class="fas fa-phone"></i>Liên hệ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="img/banner-img-1.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- end banner-section -->
    <!-- about -->
    <section class="about-area bg-color-1" id="about">
        <div class="anim-icon">
            <div class="icon icon-1 rotate-me" style="background-image: url(img/anim-icon-4.png);"></div>
        </div>
        <!-- container -->
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6 align-content-center">
                    <figure class="image-box"><img src="img/about.png" alt=""></figure>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-box">
                        <h6>Thông tin về COVID-19</h6>
                        <h2>Virus corona là gì?</h2>
                        <h4>Tổ chức Y tế Thế giới (WHO) cho biết tên gọi chính thức của bệnh viêm đường hô hấp cấp do
                            chủng mới của vi-rút corona (nCoV) là Covid 19. Tên gọi mới này gọi tắt của coronavirus
                            disease 2019, theo các từ khóa “corona”, “virus”, “disease” (dịch bệnh) và 2019 là năm mà
                            loại virus gây đại dịch này xuất hiện.
                        </h4>
                        <div class="btn-box">
                            <a href="#funfact" class="btn therme-btn">Triệu chứng</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- end about -->
    <!-- funfact-section -->
    <section class="funfact-section" id="funfact">
        <div class="container">
            <div class="inner-container">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <figure class="icon-box rotate-me"><img src="http://azim.commonsupport.com/Covid-19/assets/images/icons/icon-1.png" alt=""></figure>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="1531188">1.076.005</span>
                                </div>
                                <p>Số ca nhiễm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <figure class="icon-box rotate-me"><img src="http://azim.commonsupport.com/Covid-19/assets/images/icons/icon-2.png" alt=""></figure>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="337276">876.500</span>
                                </div>
                                <p>Hồi phục</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <figure class="icon-box rotate-me"><img src="http://azim.commonsupport.com/Covid-19/assets/images/icons/icon-3.png" alt=""></figure>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="89575">23.476</span>
                                </div>
                                <p>Tử vong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end funfact-section -->
    <section class="symptoms-area pt-200 pb-100 bg-gray-100" id="symptoms">
        <div class="anim-icon">
            <div class="icon icon-1 rotate-me" style="background-image: url(img/anim-icon-1.png);"></div>
            <div class="icon icon-3 rotate-me" style="background-image: url(img/anim-icon-3.png);"></div>
        </div>
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="title">
                        <h6 class="title-top">Triệu chứng Covid-19</h6>
                        <h2>Những biểu hiện của COVID-19</h2>
                        <div class="row pt-30">
                            <div class="col-md-4">
                                <div class="points">
                                    <ul>
                                        <li><i class="fas fa-check"></i> Viêm họng</li>
                                        <li><i class="fas fa-check"></i> Sốt</li>
                                        <li><i class="fas fa-check"></i> Chảy nước mũi</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="points">
                                    <ul>
                                        <li><i class="fas fa-check"></i> Đau đầu</li>
                                        <li><i class="fas fa-check"></i> Mệt mỏi</li>
                                        <li><i class="fas fa-check"></i> Ho khan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pt-70">
                            <div class="btn-box">
                                <button type="button" class="btn btn-outline-secondary">Phòng ngừa</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        <img src="img/symptoms.png" alt="" class="symptom__bg">
    </section>
    <!-- /Symptoms -->
    <!-- Preventions -->
    <section class="protect-section centred" id="prevention">
        <div class="shape-layer" style="background-image: url(img/shape-1.png);"></div>
        <div class="container ">
            <h6>Cách bảo vệ</h6>
            <div class="sec-title">
                <h2>Thực hiện để bảo vệ các bước<br />chính bạn</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="img/protect-1.png" alt=""></figure>
                            <h3>Đeo khẩu Trang</h3>
                            <p>COVID-19 là một bệnh truyền nhiễm có thể lây qua không khí.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="img/protect-2.png" alt=""></figure>
                            <h3>Rửa tay</h3>
                            <p>Rửa tay thường xuyên để tránh các vi khuẩn có hại cho cơ thể.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="img/protect-3.png" alt=""></figure>
                            <h3>Giữ khoảng cách</h3>
                            <p>Hãy giữ khoảng cách tối thiểu là 2m với người bệnh.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="#index.html" class="btn therme-b tn">Hãy tự bảo vệ</a>
            </div>
        </div>
    </section>
    <!-- protect end -->
  
<!-- main-footer -->
<footer class="main-footer bg-aqua-100">
    <div class="footer-top">
        <div class="container">
            <div class="content-top">
                <p>HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG</p>
            </div>
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <div class="text">
                                <p>Chúng tôi luôn đảm bảo tính chính xác tuyệt đối của thông tin cung cấp cũng như bảo mật thông tin người dùng một cách trọn vẹn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget service footer-widget">
                            <div class="widget-content">

                                <p>122 Hoàng Quốc Việt, Q.Cầu Giấy, Hà Nội.</p>
                                <p>Cơ sở đào tạo tại Hà Nội:
                                    Km10, Đường Nguyễn Trãi, Q.Hà Đông, Hà Nội</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget service footer-widget">
                            <div class="widget-content">

                                <p>Học viện cơ sở tại TP. Hồ Chí Minh:
                                    11 Nguyễn Đình Chiểu, P. Đa Kao, Q.1 TP Hồ Chí Minh</p>
                                <p>Cơ sở đào tạo tại Hà Nội: Km10, Đường Nguyễn Trãi, Q.Hà Đông, Hà Nội</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.302424110903!2d105.78573631540188!3d20.980510994798493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1sen!2s!4v1637330864274!5m2!1sen!2s" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- main-footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>

</html>