
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <!-- Open Graph Meta-->
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Loaction" content="0;url=/homeadmin">
        
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <title>ICTSTORE</title>

        <style>
            .layoutaccout-admin {
                padding: -10px;
                
            }

            .user-size {
                width: 100px;
                margin-top:-6px;

            }

            .content{
                margin-top: 8px;
           }

           .search-left{
                margin-left: 50px;
           }

           .top {
                margin-top: 5px;
           }

           .btn-login {
                height: 43px;
                margin-left: -20px;
                background-color: white;
                border-radius: 5px;
           }

           .name-scle{
                font-size: 16px;
                color: #FFFFFF;
                -ms-flex-item-align: center;
                    align-self: center;
                margin-top: -30px;
                margin-left: 63px;
           }

           .span-i-user {
                font-size: 33px; 
                color: none; 
                margin-left: -85px;
                margin-top:100px;
                margin-right: -7px;
           }
           
           .text-mage {
               font-size:17px;
               margin-left: 40px;
               padding:3px;
               margin-top:-35px;
           }

           .img-user-size {
               width: 100%;
           }

        </style>
    </head>
    <body class="app sidebar-mini">

         <!-- login pupup -->
        @if(isset($_SESSION['successloginadmin'])){
                <script>
                    swal({
                        title: "ยินดีต้อนรับเข้าสู่ระบบ",
                        icon: "success",
                        button: "ตกลง",
                    });
                </script>
                <?php unset($_SESSION['successloginadmin']); ?> 
            }
        @endif

        <div class="app sidebar-mini " >
        <header class="app-header">
            <!-- font Athiti -->
            <a href="homeBD" class="app-header__logo" >ICTSTORE</a> 
            <!-- main.css-->
            <ul class="app-nav">
                <li class="app-search search-left">
                    <input class="app-search__input" type="search" placeholder="ค้นหาวิจัย โครงงาน วิทยานิพน">
                    <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>
                <div class="app-navbar__overlay" data-toggle="sidebar" aria-label="Hide Sidebar"></div>
                <nav class="app-navmenu" >    
                    <li class="active1 menulink fontlink" ><a href="homeBD">หน้าเเรก</a></li>
                    <li class="active2 menulink fontlink"><a href="SearchAdvance" >ค้นหาเเบบละเอียด</a></li>
                    <li class="active3 menulink fontlink"><a href="#">เกี่ยวกับ</a></li>
                    <li class="active4 menulink fontlink"><a href="#">ติดต่อ</a></li>
                </nav>
                <div class="navbar-dark layoutaccout ">
                    <ul class="navbar-nav ml-auto ml-md-0">
            
                <?php if(!isset($_SESSION['adminauser'])) { ?>
                        <div class="front nav-item" style="margin-top: px;font-family: 'Athiti', sans-serif;font-size: 16px;">
                                <a class="text-item"  id="userDropdown" href="login" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button class="btn-login btn btn-outline-primaryy"><i class="fas fa-user-circle span-i-user"></i><div class="text-mage">เข้าสู่ระบบ</div></button></a>
                                    <div class="dropdown-menu dropdown-menu-right" style="margin-top: 13px;" aria-labelledby="userDropdown">
                                        <ul class="navbar-nav ml-auto">
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                
                                                    <h3><div class="card-header">{{ __('เข้าสู่ระบบ') }}</div></h3>
                                                    <div class="" style="font-family: 'Athiti', sans-serif;font-size: 16px;">
                                                        <form method="POST" action="loginBD">
                                                            @csrf

                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <input id="username" type="username" class="form-control @error('email') is-invalid @enderror" style="width: 210px;height: 40px;margin-left:31px;" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="ชื่อผู้ใช้ของคุณ">

                                                                    @error('username')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="width: 210px; height: 40px;margin-left:31px;" name="password" required autocomplete="current-password" placeholder="รหัสผ่านของคุณ">

                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <div class="form-check" style="margin-left:-71px;">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                        <label class="form-check-label" style="color: black;" for="remember">
                                                                            {{ __('จดจำฉันไว้') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row mb-0">
                                                
                                                                
                                                                <div class="col-md-8 offset-md-4">
                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link btn-re" style="margin-top:-10px; margin-left: 5px; " href="{{ route('password.request') }}">
                                                                            {{ __('ลืมรหัสผ่านใช่หรือไม่?') }}
                                                                        </a>
                                                                    @endif
                                                                    <button type="submit" class="btn btn-primaryyy" style="width: 210px; margin-left:-70px; " >
                                                                        ล็อกอิน
                                                                    </button>

                                                                    <div style="margin-left:-30px; margin-top: 10px;">คุณยังไม่มีบัญชี?</div> 
                                                                    <a type="submit"  id="button" class="btn btn-link btn-layouts" style="margin-left:70px;margin-top:-49px;"  href="#" data-toggle="modal" data-target="#exampleModalCenter">สร้างบัญชี</a>    
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                             <?php }
                            
                            else if(isset($_SESSION['adminauser'])){
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @foreach($imgaccount as $img)
                                        <img class=" col-sm-5  rounded-circle user-size" src="img_admin/<?php echo $img->pathimg; ?>" alt="User Avatar">
                                        @endforeach
                                        <div class="name-scle dropdown-toggle"><?php echo $_SESSION['adminname'];?></div> 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <ul class="navbar-nav ml-auto">
                                            <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <center><div class="image">
                                                    <a href="profileadmin">
                                                    @foreach($imgaccount as $img)
                                                        <img src="img_admin/<?php echo $img->pathimg; ?>" alt="" class="img-user-size user-avatar rounded-circle"/>
                                                    @endforeach
                                                    </a>
                                                </div></center>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <span class="caret"><?php echo $_SESSION['adminname'];?></span>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['adminemail'];?></span>
                                                </div>
                                            </div>
                                            
                                            <a href="profileadmin" class="top dropdown-item"><i class="zmdi zmdi-account"></i>โปรไฟล์</a>
                                            <a class="dropdown-item" href="logout"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('ออกจากระบบ') }}
                                            </a>
                                            <form id="logout-form" action="logout" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                                
                                            
                                        </ul>
                                    </div>
                                </li>
                            <?php } ?>
        </header>
           
            <div class="app-sidebar__overlay" data-toggle="sidebar" aria-label="Hide Sidebar"></div>
                <aside class="app-sidebar mage ">
                    <ul class="app-menu">

                    <li>
                        <div id="layoutSidenav">
                            <div id="layoutSidenav_nav">
                                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                    <div class="sb-sidenav-menu">
                                        <div class="nav">
                                            <div class="layoutlogre">
                                                <a href="homeBD"><button type="button" class="btn-control btn-default btn-outline-primaryy "  style="font-size:18px;font-family: 'Athiti', sans-serif;">ปริญญาตรี</button></a> 
                                                <a href="homeMDD"><button type="button" class="btn-control btn-default btn-outline-primaryy " style="font-size:18px;font-family: 'Athiti', sans-serif;">ปริญญาเอก โท </button></a>
                                                <div class="links front font-Athiti">
                                                <?php if(isset($_SESSION['adminauser'])) { ?>
                                                    <a href="{{ url('dataview') }}" class="view ">ข้อมูลรายละเอียดผู้ใช้</a><br>
                                                    <a href="{{ url('viewadmin') }}" class="view">ข้อมูลรายละเอียดผู้ดูเเลระบบ</a><br>
                                                    <a href="{{ url('viewproject') }}" class="view">ข้อมูลรายละเอียดผลงาน</a><br>
                                                    <a href="{{ url('dataview') }}" class="view">คำขอสร้างผลงาน</a><br>
                                                    <a href="addproject1" class="view">สร้างผลงาน</a><br>
                                                
                                                </div>
                                                <?php } ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </li>
                    <style>
                        hr {
                            display: block;
                            unicode-bidi: isolate;
                            margin-inline-start: auto;
                            margin-inline-end: auto;
                            overflow: hidden;
                            border-style: inset;
                            border-width: 2px;
                            }
                    </style>
                    <p><hr></p>
                    
                    </ul>
                    </li>
                </aside>
            </div>

        <div>@yield('content')</div>

                
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        <script type="text/javascript" src="js/plugins/chart.js"></script>
        
    </body>
</html>