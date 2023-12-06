<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ url('/assets/font/font/css/all.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/khampha.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/khampha2.css') }}">


    <link rel="stylesheet" href="{{ url('/assets/css/ca_nhan.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/the_loai.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/top100.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/login_form.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/zingchart.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/grid.css') }}">
    <link rel="icon" type="image/png" href="/assets/img/tunesource.png">
    <title>TuneSource</title>
</head>

<body style="user-select: none;">

    <!-- Begin: Open login form -->
    <div class="form-login js-login">
        <div class="login-container js-login-container">
            <div class="login-close-btn js-login-close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <header class="login-header">
                Login Form
            </header>

            <div class="login-body">
                <label for="username" class="login-label">
                    Username
                </label>
                <input id="username" type="text" class="login-input login-input-username"
                    placeholder="Enter username" required>

                <label for="login-password" class="login-label">
                    Password
                </label>
                <input id="login-password" type="password" class="login-input login-input-password"
                    placeholder="Enter password" required>
                <a href="" class = "a_login">
                    <button type="submit" id="login">

                        Login <i class="fa-solid fa-check"></i>

                    </button>
                </a>
            </div>

            <footer class="login-footer">
                <p class="login-help">Forgot <a href="">password?</a></p>
            </footer>
        </div>
    </div>
    <!-- End: Open login form -->

    <!-- Begin: Open signup form -->
    <div class="form-sign-up js-signUp">
        <div class="login-container js-signUp-container">
            <div class="login-close-btn js-signUp-close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <header class="login-header">
                Sign up Form
            </header>

            <div class="login-body">
               <label for="username" class="login-label">
                  Username
              </label>
              <input id="username" type="text" class="login-input login-input-username"
                  placeholder="Enter username" required>
                <label for="password" class="login-label">
                    Password
                </label>
                <input id="password" type="password" class="login-input" placeholder="Enter password" required>

                <label for="repeat-password" class="login-label">
                    Repeat Password
                </label>
                <input id="repeat-password" type="password" class="login-input" placeholder="Repeat password" required>
                <a href="" class = "a_signup">
                <button type="submit" id="login">
                    Sign Up <i class="fa-solid fa-check"></i>
                </button>
                </a>
            </div>

            <footer class="login-footer">
                <p class="login-help">By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
            </footer>
        </div>
    </div>
    <!-- End: Open signup form -->

    <!-- Grid 1: Start chứa menu sidebar bên trái -->
    <div class="grid-1">
        <div class="sidebar">
            <div class="logo-brand pl-35">
                <img onclick="changeTo_tabKhamPha()" src="{{ url('assets/img/tunesource.png') }}" width="100"
                    height="100%" alt="logo brand">
                <h1 style="color: white"><i>Tune Source</i> </h1>
            </div>
            <!-- menu 1 -->
            <div class="nav-menu-1">
                <a class="ca-nhan" href="#" onclick="changeTo_tabCaNhan()">
                    <div class="nav-icon"><i class="fa-solid fa-person"></i></div>
                    <span>Personal</span>
                </a>
                <a class="kham-pha" href="#" onclick="changeTo_tabKhamPha()">
                    <div class="nav-icon"><i class="fa-solid fa-music"></i></div>
                    <span>Discover</span>
                </a>
                <a class="chart" href="#" onclick="changeTo_tabChart()">
                    <div class="nav-icon"><i class="fa-solid fa-chart-simple"></i></div>
                    <span>#Chart</span>
                </a>
                <!-- <a class="theo-doi" href="#">
                  <div class="nav-icon"><i class="fa-sharp fa-solid fa-lines-leaning"></i></div>
                  <span>Theo dõi</span>
               </a> -->

            </div>
            <div class="divider"></div>
            <!-- menu 2 -->
            <div class="nav-menu-2">
                <a class="nhac-moi" href="#" onclick="changeTo_tabNhacMoi()">
                    <div class="nav-icon"><i class="fa-solid fa-record-vinyl"></i></div>
                    <span>New Song</span>
                </a>
                <a class="the-loai" href="#" onclick="changeTo_tabTheLoai()">
                    <div class="nav-icon"><i class="fa-solid fa-radio"></i></div>
                    <span>Category</span>
                </a>
                <a class="top-100" href="#" onclick="changeTo_tabTop100()">
                    <div class="nav-icon"><i class="fa-solid fa-award"></i></div>
                    <span>Top 100</span>
                </a>
            </div>
        </div>

        <!-- Begin: Button Login and Sign Up -->
        <div>

            <button style="display:block; margin:0 auto, 10px ; text-align:center"
                class="btn-login js-action-login s-full-width">Login</button>
        </div>

        <div>

            <button style="display:block; margin:0 auto, 10px; text-align:center"
                class="btn-login js-action-signUp s-full-width">Register</button>
        </div>
        <!-- End: Button Login and Sign Up -->
    </div>
    <!-- Grid 1: End chứa menu sidebar bên trái -->

    <!-- Start grid 2: -->
    <div class="grid-2">

        <!-- Start header chứa thanh tìm kiếm -->
        <div class="header-top">
            <div class="search-bar">
                <input type="text" alt="Search" placeholder="Search for song, singer,....">
                <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                </input>
            </div>
            <div class="user-function">
                <a href="#" class="button1 func"><i class="fa-solid fa-seedling"></i></a>

                <div class="header__nav-btn func">
                    <input type="file" name="upload song" id="header__nav-input">
                    <label for="header__nav-input">
                        <i class="fa-solid fa-upload"></i>
                    </label>
                </div>
                </li>

                <a href="#" class="button3 func"><i class="fa-solid fa-gear"></i></a>
                <a href="#" class="button5 user">
                    <i class="fa-solid fa-user"></i>
                    <span>Client </span>
                </a>
            </div>
        </div>
        <!-- End header chứa thanh tìm kiếm -->


        <!-- Start trang cá nhân -->
        <div id="tabCaNhan">
         <h1 style="color: white">Welcome you to Tune Source Music</h1>
         {{-- <div class="player-container" style="display: none">
                <div class="player-right">
                    <div class="play-list">
                      
                        <!-- <div class="song">
                     <div class="thumb"
                           style="background-image: url('/img/music-avatar.jpg')">
                     </div>
                     <div class="body">
                           <h3 class="title">Music name</h3>
                           <p class="author">Singer</p>
                     </div>
                     <div class="option">
                           <i class="fas fa-ellipsis-h"></i>
                     </div>
                  </div>    -->
                    </div>
                </div>

            </div> --}}

        </div>
        <!-- End trang cá nhân -->

        <!-- Start trang khám phá -->
        <div id="tabKhamPha">
            <!-- section 1: slide -->
            <div class="playlist-slide">
                <div class="slides flex" id="scroll-slide">
                    <img class="slide-component" src="./assets/img/assets-khampha/slide1.jpg" alt="">
                    <img class="slide-component" src="./assets/img/assets-khampha/slide2.jpg" alt="">
                    <img class="slide-component" src="./assets/img/assets-khampha/slide3.jpg" alt="">
                </div>
            </div>

            <!-- section 02: Hot hit -->
            <div class="playlist--hot-hit white">
                <div class="playlist--title">
                    <h2>Hot Hit Today</h2>
                </div>
                <div class="playlist--carousel">
                    <div class="pl-element">
                        <div class="element--head absolute">
                            <i class="fas fa-play absolute z98 cover-play-btn"></i>
                            <img src="./assets/img/assets-khampha/hothit1.webp" alt="">
                            <div class="overlay"></div>

                        </div>
                        <div class="element--title">
                            <h3>Music 1</h3>
                            <p>Content 1</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head absolute">
                            <i class="fas fa-play absolute z98 cover-play-btn"></i>
                            <img src="./assets/img/assets-khampha/hothit1.webp" alt="">
                            <div class="overlay"></div>

                        </div>
                        <div class="element--title">
                            <h3>Music 1</h3>
                            <p>Content 1</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head absolute">
                            <i class="fas fa-play absolute z98 cover-play-btn"></i>
                            <img src="./assets/img/assets-khampha/hothit1.webp" alt="">
                            <div class="overlay"></div>

                        </div>
                        <div class="element--title">
                            <h3>Music 1</h3>
                            <p>Content 1</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head absolute">
                            <i class="fas fa-play absolute z98 cover-play-btn"></i>
                            <img src="./assets/img/assets-khampha/hothit1.webp" alt="">
                            <div class="overlay"></div>

                        </div>
                        <div class="element--title">
                            <h3>Music 1</h3>
                            <p>Content 1</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head absolute">
                            <i class="fas fa-play absolute z98 cover-play-btn"></i>
                            <img src="./assets/img/assets-khampha/hothit1.webp" alt="">
                            <div class="overlay"></div>

                        </div>
                        <div class="element--title">
                            <h3>Music 1</h3>
                            <p>Content 1</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 03: The best of 2023 -->
            <div class="playlist--hot-2022 white">
                <div class="playlist--title">
                    <h2>The best of 2023</h2>
                </div>
                <div class="playlist--carousel">
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/hot1.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <p>The best songs of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/hot2.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <p>Outstanding artists of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/hot3.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <p>The most outstanding VPOP songs of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/hot4.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <p>The most outstanding KPOP songs of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/hot5.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <p>The most outstanding USUK songs of 2022</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- section 04: playlist giang sinh -->
            <div class="playlist--hot-2022 white">
                <div class="playlist--title">
                    <h2>Christmas is coming soon !!!</h2>
                </div>
                <div class="playlist--carousel">
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/xmas1.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <h3>Immortal Christmas songs</h3>
                            <p>The best Christmas songs of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/xmas2.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <h3>A bustling Christmas with the whole family</h3>
                            <p>The best Christmas songs of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/xmas3.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <h3>US-UK Christmas POP Music</h3>
                            <p>The best Christmas songs of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/xmas4.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <h3>Heartwarming winter love song</h3>
                            <p>The best Christmas songs of 2023</p>
                        </div>
                    </div>
                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/xmas5.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title">
                            <h3>Christmas of love is not for lonely people</h3>
                            <p>The best Christmas songs of 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="music--new white">
                <div class="playlist--title">
                    <h2>New musics</h2>
                </div>
                <div class="music--carousel">

                    <div class="pl-element">
                        <div class="element--head">
                            <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                            <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                        </div>
                        <div class="element--title flex">
                            <div class="title">
                                <h3>Song 1</h3>
                                <p>Actor 1</p>
                            </div>
                            <div class="func">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </div>
                    </div>

                    <div class="pl-element">
                     <div class="element--head">
                         <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                         <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                     </div>
                     <div class="element--title flex">
                         <div class="title">
                             <h3>Song 1</h3>
                             <p>Actor 1</p>
                         </div>
                         <div class="func">
                             <i class="fa-regular fa-circle-play"></i>
                         </div>
                     </div>
                 </div>

                 <div class="pl-element">
                  <div class="element--head">
                      <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                      <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

                  </div>
                  <div class="element--title flex">
                      <div class="title">
                          <h3>Song 1</h3>
                          <p>Actor 1</p>
                      </div>
                      <div class="func">
                          <i class="fa-regular fa-circle-play"></i>
                      </div>
                  </div>
              </div>

              <div class="pl-element">
               <div class="element--head">
                   <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                   <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

               </div>
               <div class="element--title flex">
                   <div class="title">
                       <h3>Song 1</h3>
                       <p>Actor 1</p>
                   </div>
                   <div class="func">
                       <i class="fa-regular fa-circle-play"></i>
                   </div>
               </div>
           </div>

           <div class="pl-element">
            <div class="element--head">
                <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

            </div>
            <div class="element--title flex">
                <div class="title">
                    <h3>Song 1</h3>
                    <p>Actor 1</p>
                </div>
                <div class="func">
                    <i class="fa-regular fa-circle-play"></i>
                </div>
            </div>
        </div>


        <div class="pl-element">
         <div class="element--head">
             <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
             <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>

         </div>
         <div class="element--title flex">
             <div class="title">
                 <h3>Song 1</h3>
                 <p>Actor 1</p>
             </div>
             <div class="func">
                 <i class="fa-regular fa-circle-play"></i>
             </div>
         </div>
     </div>




                </div>
            </div>
        </div>
        <!-- End trang khám phá -->


        <!-- Start trang zing chart -->
      <div id="tabChart">
         <div class="charts__container">

            <div class="grid">

               <div class="chart__container-header mb-40">
                  <h3 class="chart__header-name">#Music chart</h3>
                  <div class="chart__header-btn">
                     <i class="fa-solid fa-play chart__header-icon"></i>
                  </div>
               </div>
               <div class="row no-gutters chart--container mt-10 mb-20 expand-song">
                  <div class=" col l-12 m-12 c-12">
                     <div class="container__playlist">
                        <div class="playlist__list-charts overflow-visible">
                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          is-outline--blue
                                                                          
                                                                          
                                                                          
                                                                      ">
                                       1
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chưa Bao Giờ Em
                                       Quên</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Hương Ly</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:11</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="31">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          is-outline--green
                                                                          
                                                                          
                                                                      ">
                                       2
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Yêu Là Cưới</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phát Hồ</a>,

                                       <a href="#" class="is-ghost">X2X</a>,

                                       <a href="#" class="is-ghost"></a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">02:59</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="2">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          is-outline--red
                                                                          
                                                                          
                                                                      ">
                                       3
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/emlaconthuyen.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em là con thuyền cô đơn</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Tery Trần</a>,

                                       <a href="#" class="is-ghost">X2X</a>,

                                       <a href="#" class="is-ghost"></a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:59</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="3">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       4
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Khuê Mộc Lang</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Hương Ly</a>,

                                       <a href="#" class="is-ghost">Jombie</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:26</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="4">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       5
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Yêu Là Cưới
                                       (Remix)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phát Hồ</a>,

                                       <a href="#" class="is-ghost">DinhLong</a>,

                                       <a href="#" class="is-ghost">X2X</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:50</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="5">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       6
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Thay Lòng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">DIMZ</a>,

                                       <a href="#" class="is-ghost">TVk</a>,

                                       <a href="#" class="is-ghost">NH4T</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:36</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="6">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       7
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Rồi Tới Luôn</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:07</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="7">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       8
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Có Một Tình Yêu Gọi Là
                                       Chia
                                       Tay</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Tăng Phúc</a>,

                                       <a href="#" class="is-ghost">Trương Thảo Nhi</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:18</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="8">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       9
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Cưới Luôn Được
                                       Không?</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">YuniBoo</a>,

                                       <a href="#" class="is-ghost">Goctoi Mixer</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:02</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="9">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       10
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song10.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Bao Lâu Ta Lại Yêu Một
                                       Người</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Doãn Hiếu</a>,

                                       <a href="#" class="is-ghost">B.</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="10">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       11
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Thương Nhau Tới
                                       Bến</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:55</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="11">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       12
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Đông Phai Mờ Dáng
                                       Ai</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">DatKaa</a>,

                                       <a href="#" class="is-ghost">QT Beatz</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:40</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="12">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       13
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song13.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nhắn Rằng Anh Nhớ
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Đình Dũng</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:12</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="13">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       14
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song14.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Dịu Dàng Em Đến</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">ERIK</a>,

                                       <a href="#" class="is-ghost">NinjaZ</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:05</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="14">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       15
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song15.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em Hát Ai Nghe</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Orange</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="15">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       16
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song16.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Vậy Là Ta Mất Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Khải Đăng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:15</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="16">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       17
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song17.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">vâng anh đi đi (liu riu
                                       version)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bích Phương</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="17">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       18
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song18.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nếu Lúc Trước Em Đừng
                                       Tới</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phạm Đình Thái Ngân</a>,

                                       <a href="#" class="is-ghost">Hino</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:35</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="18">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       19
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song19.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Cô Đơn Dành Cho Ai</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lee Ken</a>,

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="19">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       20
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song20.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">MONEY</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">02:48</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="20">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       21
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song21.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Yêu Mà Chưa Dám
                                       Nói</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thanh Hưng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="21">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       22
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song22.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Độ Tộc 2</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Độ Mixi</a>,

                                       <a href="#" class="is-ghost">Pháo</a>,

                                       <a href="#" class="is-ghost">Phúc Du</a>,

                                       <a href="#" class="is-ghost">Masew</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="22">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       23
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song23.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chiều Đồng Quê</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">H2K</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:20</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="23">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       24
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song24.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Túp Lều Vàng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nguyễn Đình Vũ</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:31</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="24">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       25
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song25.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">LALISA</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="25">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       26
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song26.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Sai Cách Yêu</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lê Bảo Bình</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:42</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="26">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       27
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song27.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">có hẹn với thanh
                                       xuân</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">MONSTAR</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:38</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="27">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       28
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song28.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em Nào Có Tội</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thương Võ</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="28">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       29
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song29.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nhắn Tới Khoảng Trời
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Quân A.P</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:55</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="29">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       30
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song30.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em Hứa Thế Nào</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Như Việt</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="30">
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="charts__expand">
                  <button class="button charts__expand-btn">Xem top 100</button>
               </div>
            </div>
         </div>
      </div>
      <!-- End trang zing chart -->



      <!-- Start trang nhạc mới -->
      <div id="tabNhacMoi">
         <div class="charts__container">
            <div class="grid">
               <div class="chart__container-header mb-40">
                  <h3 class="chart__header-name">NEW SONGS</h3>
                  <div class="chart__header-btn">
                     <i class="fa-solid fa-play chart__header-icon"></i>
                  </div>
               </div>
               <div class="row no-gutters chart--container mt-10 mb-20 expand-song">
                  <div class=" col l-12 m-12 c-12">
                     <div class="container__playlist">
                        <div class="playlist__list-charts overflow-visible">

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  is-outline--blue
                                                                  
                                                                  
                                                                  
                                                               ">
                                       1
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Đừng Lo Nhé! Có Anh Đây</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thiên Tú</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:41</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="31">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  is-outline--green
                                                                  
                                                                  
                                                               ">
                                       2
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Hơn Em Chỗ Nào</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thuỳ Chi</a>

                                       
                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:56</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="32">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  is-outline--red
                                                                  
                                                               ">
                                       3
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/emlaconthuyen.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/emlaconthuyen.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Rồi Em Sẽ Ổn Thôi
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bảo Uyên</a>,

                                       <a href="#" class="is-ghost">RIN9</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:10</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="33">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       4
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chung Đường Ngược Hướng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thiên Ân</a>,

                                       <a href="#" class="is-ghost">LQ Media</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:26</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="34">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       5
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Phận Khách Sang Sông
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lâm Chấn Hải</a>,

                                       

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="35">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       6
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Đâu Biết Trước Chuyện Xa Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bozitt</a>,

                                       <a href="#" class="is-ghost">Reddy</a>,

                                       <a href="#" class="is-ghost">NH4T</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:40</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="36">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       7
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Anh Bước Ra Từ Manga</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Mr.Siro</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:26</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="37">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       8
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Mất Bao Lâu Để Quên Một Người
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Quang Trung</a>,

                                       <a href="#" class="is-ghost">Ái Phương</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:15</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="38">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       9
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/yuniboo.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/yuniboo.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Càng Biết Càng Đau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Liz Kim Cương</a>

                                       

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:36</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="39">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       10
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/baolau.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/baolau.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Một Ngày Mãi Mãi</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Trang</a>,

                                       <a href="#" class="is-ghost">Tùng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:10</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="40">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       11
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/thuongnhau.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/thuongnhau.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Luyến Lưu</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phát Hồ</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:07</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="41">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       12
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/dongphai.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/nhacmoi/dongphai.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chưa Đủ Để Giữ Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Vương Anh Tú</a>

                                       

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:36</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="42">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       13
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/nhanrang.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/nhacmoi/nhanrang.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nhắn Rằng Anh Nhớ
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Đình Dũng</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:12</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="43">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       14
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/diudang.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Dịu Dàng Em Đến</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">ERIK</a>,

                                       <a href="#" class="is-ghost">NinjaZ</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:05</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="44">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       15
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/emhat.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em Hát Ai Nghe</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Orange</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="45">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       16
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/vayla.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Vậy Là Ta Mất Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Khải Đăng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:15</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="46">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       17
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/vanganh.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Vâng anh đi đi (liu riu
                                       version)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bích Phương</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="47">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       18
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/neuluctruoc.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nếu Lúc Trước Em Đừng
                                       Tới</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phạm Đình Thái Ngân</a>,

                                       <a href="#" class="is-ghost">Hino</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:35</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="48">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       19
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/codon.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Cô Đơn Dành Cho Ai</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lee Ken</a>,

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="49">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       20
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/money.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">MONEY</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">02:48</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="50">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       21
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/yeuma.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Yêu Mà Chưa Dám
                                       Nói</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thanh Hưng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="51">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       22
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/dotoc.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Độ Tộc 2</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Độ Mixi</a>,

                                       <a href="#" class="is-ghost">Pháo</a>,

                                       <a href="#" class="is-ghost">Phúc Du</a>,

                                       <a href="#" class="is-ghost">Masew</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="52">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       23
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/chieudongque.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chiều Đồng Quê</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">H2K</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:20</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="53">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       24
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/tupleuvang.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Túp Lều Vàng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nguyễn Đình Vũ</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:31</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="54">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       25
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/lalisa.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">LALISA</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="55">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       26
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/saicachyeu.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Sai Cách Yêu</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lê Bảo Bình</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:42</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="56">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       27
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/cohen.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Có hẹn với thanh
                                       xuân</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">MONSTAR</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:38</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="57">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       28
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/emnaocotoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em Nào Có Tội</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thương Võ</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="58">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       29
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/nhacmoi/nhantoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nhắn Tới Khoảng Trời
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Quân A.P</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:55</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="59">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       30
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song30.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em Hứa Thế Nào</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Như Việt</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn" value="60">>
                                    <button class="btn btn-warning chart__btn-edit">Edit</button>
                                 </div>
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="charts__expand">
                  <button class="button charts__expand-btn">Xem top 100</button>
               </div>
            </div>
         </div>      
      </div>
      <!-- End trang nhạc mới -->

      <!-- Start trang thể loại -->
      
      <!-- End trang thể loại -->

      <!-- Start trang top 100 -->
      
      <!-- End trang top 100 -->

    </div>
    <!-- End grid 2: -->







    <!-- Start thanh phát nhạc bên dưới -->
    <div class="app-player">
        <div class="player-left">
            <div class="player-left-top">
                <div class="cd">
                    <div class="cd-thumb">

                    </div>
                </div>
                <footer>
                    <!-- <h4>Now playing:</h4> -->
                    <h2 class="song-name">String 57th & 9th</h2>
                    <h2 class="singer">String 57th & 9th</h2>
                </footer>
                <!-- <img src="{{ url('/img/music-avatar.jpg') }}" alt="" class="album-art"> -->
            </div>

            <div class="player-left-bottom">
                <div class="time-container">
                    <input id="progress" class="progress" type="range" value="0" step="1"
                        min="0" max="100">
                    <audio id="audio" src=""></audio>
                    <div class="timer">
                        <div class="current-time">01:00</div>
                        <div class="duration-time">03:20</div>

                    </div>
                </div>

                <div class="control-container">
                    <div class="btn btn-repeat">
                        <i class="fas fa-redo"></i>
                    </div>
                    <div class="btn btn-prev">
                        <i class="fas fa-step-backward"></i>
                    </div>
                    <div class="btn btn-toggle-play">
                        <i class="fas fa-pause icon-pause"></i>
                        <i class="fas fa-play icon-play"></i>
                    </div>
                    <div class="btn btn-next">
                        <i class="fas fa-step-forward"></i>
                    </div>
                    <div class="btn btn-random">
                        <i class="fas fa-random"></i>
                    </div>
                </div>

            </div>
            <div class="right-side" style="height: 100%; width:100%"></div>
        </div>
    </div>
    <!-- End thanh phát nhạc bên dưới -->

    <script src="{{ url('/assets/js/ca_nhan.js') }}"></script>
    <script src="{{ url('/assets/js/change_tab.js') }}"></script>
    <script src="{{ url('assets/js/openFormLoginAndSignUp.js') }}"></script>

</body>

</html>
