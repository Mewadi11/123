@extends('template')
@section('content')
  <!-- header section end-->
  <!-- login section start-->
  <form method="POST" action="{{ route('login') }}">
    @csrf
  <div class="services_section">
    <div class="container">
      <h1 class="services_text">แผนพัฒนาการศึกษาเทศบาลเมืองสิงหนคร</h1>
    </div>
  </div>
  <div class="login_section">
     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">เข้าสู่ระบบ</h5>
            <form class="form-signin">
              <div class="form-label-group">

                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="inputUsername">ชื่อผู้ใช้</label>
              </div>
              <div class="form-label-group">

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="inputPassword">รหัสผ่าน</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">จดจำรหัสผ่าน</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">ล็อคอิน</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- login section end-->

  <!-- footer section start-->
  <div class="footer_section layout_padding">
    <div class="container">
      <h1 class="subscribr_text">ลืมรหัสผ่าน</h1>
      <p class="lorem_text">สามารถกรอกอีเมล์เพื่อขอรีเซ็ตรหัสผ่าน </p>
      <div class="box_main_2">
          <textarea type="" class="email_bt_2" placeholder="กรุณากรอกอีเมล์" name=""></textarea>
        </div>
        <button class="subscribe_bt_2"><a href="#">ยืนยัน</a></button>
    </div>
  </div>
</form>
  <!-- footer section end-->
  @endsection
