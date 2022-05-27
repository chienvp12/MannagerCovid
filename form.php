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
                            <a class="nav-link" aria-current="page" href="index.html">Trang chủ</a>
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
                            <a class="nav-link" href="#form.html">Đăng ký tiêm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#khaibao">Khai báo y tế</a>
                        </li>
                    </ul>
                    <div class="btn-box">
                        <button type="button" class="btn btn-outline-secondary">Đăng nhập</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--end main header -->
    
    <!-- form -->
    <div class="sect3-form bg-s" id="Khaibao">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-3">
              <div class="sect3-form-title">
                <h5>Thông tin người đăng ký</h5>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-3">
              <div class="mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="name">
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label for="birthday" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" id="birthday">
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label for="gender" class="form-label">Giới tính</label>
                <select id="gender" class="form-select">
                  <option>Khác</option>
                  <option>Nam</option>
                  <option>Nữ</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="phoneNumber">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-3">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="identityCode" class="form-label">Số CMND/CCCD/Mã định danh công dân/HC</label>
                <input type="text" class="form-control" id="identityCode">
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label for="medicalCode" class="form-label">Số thẻ BHYT</label>
                <input type="text" class="form-control" id="medicalCode">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-3">
              <div class="mb-3">
                <label for="major" class="form-label">Khoa sinh viên</label>
                <input type="text" class="form-control" id="major">
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label for="baseAddress" class="form-label">Cơ sở</label>
                <select id="baseAddress" class="form-select">
                  <option>HVCNBCVT cơ sở Hà Nội</option>
                  <option>HVCNBCVT cơ sở Hồ Chí Minh</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ hiện tại</label>
                <input type="text" class="form-control" id="address">
              </div>
            </div>
          </div>
          <div class="row justify-content-start">
            <div class="col-3">
              <div class="sect3-form-title">
                <h5>Thông tin đăng ký tiêm chủng</h5>
              </div>
            </div>
          </div>
          <div class="row mb-3 justify-content-start">
            <div class="col-3">
              <div class="mb-3">
                <label for="injectionDate" class="form-label">Ngày muốn được tiêm (dự kiến)</label>
                <input type="date" class="form-control" id="injectionDate">
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label for="gender" class="form-label">Buổi tiêm mong muốn</label>
                <select id="gender" class="form-select">
                  <option>Sáng</option>
                  <option>Chiều</option>
                  <option>Cả ngày</option>
                </select>
              </div>
            </div>
          </div>
          <div class="sect3-note-title">
            <h5>Lưu ý:</h5>
          </div>
          <div>
            <ul class="sect3-note-list">
              <li>
                <p>Việc đăng ký thông tin hoàn toàn bảo mật và phục vụ cho chiến dịch tiêm chủng Vắc xin Covid-19</p>
              </li>
              <li>
                <p>Xin vui lòng kiểm tra các thông tin bắt buộc (VD: Họ tên, Ngày sinh, Số điện thoại, Mã sinh viên)</p>
              </li>
              <li>
                <p>Bằng việc nhấn nút "Đăng ký", bạn hoàn toàn hiểu và đồng ý chịu trách nhiệm với các thông tin đã cung
                  cấp</p>
              </li>
            </ul>
          </div>
          <div class="sect3-button-list">
                <div class="btn-box">
                    <a href="index.html" class="btn therme-btn">Đăng ký tiêm</a>
                    <a href="index.html" class="btn therme-btn2 "><i class="fas fa-phone"></i>Liên hệ</a>
                </div>
          </div>
        </div>
      </div>
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