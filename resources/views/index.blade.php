<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
        
        <title>{{ config('app.name', 'Sadamaru Portfolio') }}</title>
        
        <link rel="shortcut icon" type="image/x-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/virtual.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/minibar.virtual.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/nice-select/css/nice-select.css">
        <link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/css/jquery.fancybox.min.css">
    </head>
<body class="theme-red">
    <!-- Back to top button -->
    <div class="btn-back_to_top">
        <span class="ti-arrow-up"></span>
    </div>
  
    <!-- Setting button -->
    <div class="config">
        <div class="template-config">
        <!-- Settings -->
        <div class="d-block">
            <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
        </div>
        </div>
        <div class="set-menu">
        <p>Select Color</p>
        <div class="color-bar" data-toggle="selected">
            <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
            <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
            <span class="color-item bg-theme-green" data-class="theme-green"></span>
            <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
            <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
        </div>
        {{-- <select class="custom-select d-block my-2" id="change-page">
            <option value="">Choose Page</option>
            <option value="index">Topbar</option>
            <option value="blog-topbar">Blog (Topbar)</option>
            <option value="index-2">Minibar</option>
            <option value="blog-minibar">Blog (Minibar)</option>
        </select> --}}
        </div>
    </div>
  
    <div class="topbar-nav fixed-top">
        <div class="brand">
        <img src="favicon.ico" alt="" width="50" height="50">
        </div>
        <h3 class="ml-1">Sadamaru</h3>
        <button class="btn-fab toggle-menu mr-3"><span class="ti-menu"></span></button>
    </div>
    <!-- Minibar -->
    <div class="minibar">
        <div class="header">
        <div class="brand">
            
        </div>
        </div>
        <div class="content">
        <ul class="main-menu">
            <li class="menu-item active">
            <a href="#home" class="menu-link">
                <span class="icon ti-home"></span>
                <span class="caption">Home</span>
            </a>
            </li>
            <li class="menu-item">
            <a href="#about" class="menu-link">
                <span class="icon ti-user"></span>
                <span class="caption">About</span>
            </a>
            </li>
            <li class="menu-item">
            <a href="#services" class="menu-link">
                <span class="icon ti-file"></span>
                <span class="caption">Service</span>
            </a>
            </li>
            <li class="menu-item">
            <a href="#portfolio" class="menu-link">
                <span class="icon ti-briefcase"></span>
                <span class="caption">Portfolio</span>
            </a>
            </li>
            {{-- <li class="menu-item">
            <a href="#blog" class="menu-link">
                <span class="icon ti-book"></span>
                <span class="caption">Blog</span>
            </a>
            </li> --}}
            <li class="menu-item">
            <a href="#contact" class="menu-link">
                <span class="icon ti-email"></span>
                <span class="caption">Contact</span>
            </a>
            </li>
        </ul>
        </div>
    </div>
  
    <div class="vg-main-wrapper">
        <div class="vg-page page-home" id="home" style="background-image: url(../assets/img/bg_image_2.jpg);">
            <div class="caption wow zoomInUp">
                <h1 class="fw-normal">Welcome</h1>
                <h2 class="fw-medium fg-theme">I'm Sadamaru</h2>
                <p class="tagline">Web Developer & WinForms Developer</p>
            </div>
        </div>
    
        <!-- Page About -->
        <div class="vg-page page-about" id="about">
            <!-- Profile -->
            <div class="container py-3">
                <div class="row">
                <div class="col-md-6">
                    <div class="img-place wow zoomIn">
                    <img src="../assets/img/person.png" alt="Photo Profile">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="caption wow fadeInRight">
                    <h2 class="fg-dark">Sadamaru</h2>
                    <p class="fg-theme fw-medium">WinForms Developer & Web Developer</p>
                    <p>ここはエンジニアSadamaruのポートフォリオサイトです。
                        これまでに手がけた制作物、身につけたスキルをまとめています。
                        あなたに、私のことをもっと深く知ってほしいと思って作りました。
                        どうぞごゆるりとサイト内を散策してください。</p>
                    <ul class="theme-list">
                        <li class="fg-dark"><b>From:</b> VietNam</li>
                        <li class="fg-dark"><b>Lives In:</b> Osaka, Japan</li>
                        <li class="fg-dark"><b>Age:</b> <?php echo date('Y') - 1988?></li>
                        <li class="fg-dark"><b>Gender:</b> Male</li>
                    </ul>
                    {{-- TODO: <button class="btn btn-theme btn-rounded">Download CV</button> --}}
                    </div>
                </div>
                </div>
            </div> <!-- End profile -->
            <!-- Skills -->
            <div class="container mt-5">
                <h1 class="text-center fg-dark wow fadeInUp">My Skills</h1>
                <p class="wow fadeInUp">修練のすえ身につけたスキルをプログレスでまとめました。広く浅くではありますがフロントからバックエンドまで幅広くスキルアップに取り組んできました。オールラウンドに対応できる点が強みですが、全体的に理解が浅く、専門性の低さを認識しています。今後も実業務に携わり、少しずつ専門性を高めていきたいと考えています。</p>
                <p class="wow fadeInUp">プログレスの見方としては「20%: 軽く使用した程度」、「40%: 実務で数ヶ月以上使用しているがもう少し習熟が必要」、「60%: 実務レベルで自由に駆使できる」という感じです。</p>
                <p class="wow fadeInUp">※業務で実際に使用した技術のみ掲載しております。</p>
                <div class="progress fadeInUp">
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%:Trainee</div>
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">40%:Junior</div>
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">60%:Middle</div>
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">80%:Senior</div>
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">100%:Lead</div>
                </div>
                <div class="row py-3">
                <div class="col-md-6">
                    <h4 class="wow fadeInUp">Front-end</h4>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">JavaScript</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">HTML + CSS</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Wordpress</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="wow fadeInUp">Back-end</h4>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">C#</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">SQL Server</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">PHP</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">MySQL</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-6">
                    <h4 class="wow fadeInUp">DevOps</h4>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Aws</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">20%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Git</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Jenkins</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">20%</div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="wow fadeInUp">Languages</h4>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">Vietnamese</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div>
                        </div>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">Japanese</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                        </div>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">English</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">20%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End skills -->
            <!-- Resume -->
            <div class="container pt-5">
                <div class="row">
                <div class="col-md-6 wow fadeInRight">
                    <h2 class="fg-dark">学歴</h2>
                    <ul class="timeline mt-4 pr-md-5">
                    <li>
                        <div class="title">2011〜2015</div>
                        <div class="details">
                        <h5>IT専攻コース</h5>
                        <small class="fg-theme">専門学校</small>
                        <p>4年間ITに関して日本の専門学校でプログラミング・IT基本知識などを勉強しました。</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2009〜2011</div>
                        <div class="details">
                        <h5>日本語コース</h5>
                        <small class="fg-theme">日本語学校</small>
                        <p>日本にある日本語学校で2年間日本語を勉強しました。</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2008〜2009</div>
                        <div class="details">
                        <h5>日本語コース</h5>
                        <small class="fg-theme">日本語学校</small>
                        <p>ベトナムにある日本語学校で2年間日本語を勉強しました。</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2005〜2008</div>
                        <div class="details">
                        <h5>高校生</h5>
                        <small class="fg-theme">高校学校</small>
                        <p>ベトナムにある高校学校で3年間勉強しました。</p>
                        </div>
                    </li>
                    </ul>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <h2 class="fg-dark">職歴</h2>
                    <ul class="timeline mt-4 pr-md-5">
                    <li>
                        <div class="title">2021 - 2023</div>
                        <div class="details">
                        <h5>BrSE</h5>
                        <small class="fg-theme">ベトナムの大手企業</small>
                        <p>プロジェクト管理、マネジメント、上流工程担当、顧客とのコミュニケーション</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2020〜2021</div>
                        <div class="details">
                        <h5>Web Developer</h5>
                        <small class="fg-theme">ベンチャー企業</small>
                        <p>Wordpress、ECサイトなど開発。新入社員の育成</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2019〜2020</div>
                        <div class="details">
                        <h5>BrSE</h5>
                        <small class="fg-theme">ベンチャー企業</small>
                        <p>プロジェクト管理、マネジメント、上流工程担当、顧客とのコミュニケーション</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">2015〜2019</div>
                        <div class="details">
                        <h5>WinForms Developer</h5>
                        <small class="fg-theme">日本の大手企業</small>
                        <p>業務系のシステム開発</p>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div> <!-- End resume -->
        </div> <!-- End page about -->
    
        <!-- Page Service -->
        <div class="vg-page page-service" id="services">
            <h1 class="text-center wow fadeInUp">Services</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="card card-body">
                            <div class="iconic">
                                <span class="ti-layout"></span>
                            </div>
                            <h4 class="fg-theme">Web Development</h4>
                            <p>・フロントエンドとバックエンドの両方を扱う開発を目指しております。</p>
                            <p>・システム全体の設計と実装を担当し、クライアント側からサーバー側までの開発に携わります。</p>
                            {{-- <a href="#" class="btn btn-theme btn-rounded">Read More</a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="card card-body">
                            <div class="iconic">
                            <span class="ti-desktop"></span>
                            </div>
                            <h4 class="fg-theme">Winforms Development</h4>
                            <p>・シンプルかつ効率的なWindowsデスクトップアプリケーション開発を目指しております。</p>
                            <p>・業務系のシステムの開発を数年間担当します。</p>
                            {{-- <a href="#" class="btn btn-theme btn-rounded">Read More</a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="card card-body">
                        <div class="iconic">
                            <span class="ti-support"></span>
                        </div>
                        <h4 class="fg-theme">IT Support</h4>
                        <p>・IT人材育成、人材紹介、システム導入、オフショア開発などの相談を受けております。</p>
                        <p>・IT関連以外のことも分かり範囲を全力でサポートいたします。</p>
                        {{-- <a href="#" class="btn btn-theme btn-rounded">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End page services -->
    
        <!-- Portfolio page -->
        <div class="vg-page page-portfolio" id="portfolio">
        <div class="container">
            <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Portfolio</div>
            </div>
            <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
            <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
            <button class="btn btn-theme-outline selected" data-filter="*">All</button>
            <button class="btn btn-theme-outline" data-filter=".web">Web</button>
            <button class="btn btn-theme-outline" data-filter=".wordpress">Wordpress</button>
            <button class="btn btn-theme-outline" data-filter=".winforms">WinForms</button>
            {{-- TODO:<button class="btn btn-theme-outline" data-filter=".ui-ux">UI/UX</button>
            <button class="btn btn-theme-outline" data-filter=".graphic">Graphic</button>
            <button class="btn btn-theme-outline" data-filter=".wireframes">Wireframes</button> --}}
            </div>

            <div class="gridder my-3">
            <div class="grid-item web wow zoomIn">
                <div class="img-place" data-src="../assets/img/work/work-1.jpg" data-fancybox 
                data-caption="<h5 class='fg-theme'>Sadamaru's Portfolio</h5> <p>Source Code: <a href='https://gitlab.com/dinh_ld/my-portfolio'>GitLab</a></p> <p>Demo: <a href='http://localhost:8070/'>Sadamaru's Portfolio</a></p>">
                <img src="../assets/img/work/work-1.jpg" alt="">
                <div class="img-caption">
                    <h5 class="fg-theme">Sadamaru's Portfolio</h5>
                    {{-- <p>Profile, portfolio</p> --}}
                </div>
                </div>
            </div>
            <div class="grid-item web wordpress wow zoomIn">
                <div class="img-place" data-src="../assets/img/work/work-2.jpg" data-fancybox 
                data-caption="<h5 class='fg-theme'>会社ホームページ</h5> <p>Source Code: <a href='#'>GitLab</a></p> <p>Demo: <a href='https://dicejapan.co.jp/'>DiCEJAPAN株式会社</a></p>">
                <img src="../assets/img/work/work-2.jpg" alt="">
                <div class="img-caption">
                    <h5 class="fg-theme">会社ホームページ</h5>
                    {{-- <p>Musics</p> --}}
                </div>
                </div>
            </div>
            <div class="grid-item winforms wow zoomIn">
                <div class="img-place" data-src="../assets/img/work/work-3.jpg" data-fancybox 
                data-caption="<h5 class='fg-theme'>工場生産管理システム</h5> <p>Source Code: <a href='#'>GitLab</a></p> <p>Demo: <a href='#'></a></p>">
                <img src="../assets/img/work/work-3.jpg" alt="">
                <div class="img-caption">
                    <h5 class="fg-theme">工場生産管理システム</h5>
                    {{-- <p>Games, Streaming</p> --}}
                </div>
                </div>
            </div>
            </div> <!-- End gridder -->
            {{--TODO: <div class="text-center wow fadeInUp">
            <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
            </div> --}}
        </div>
        </div> <!-- End Portfolio page -->
    
        <!-- Page Blog -->
        {{-- TODO:<div class="vg-page page-blog" id="blog">
        <h1 class="text-center fg-dark wow fadeInUp">Latest Post</h1>
        <div class="container">
            <div class="row post-grid">
            <div class="col-md-6 col-lg-4 wow fadeInUp">
                <div class="card">
                <div class="img-place">
                    <img src="../assets/img/work/work-9.jpg" alt="">
                </div>
                <div class="caption">
                    <a href="javascript:void(0)" class="post-category">Technology</a>
                    <a href="#" class="post-title">Invision design forward fund</a>
                    <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp">
                <div class="card">
                <div class="img-place">
                    <img src="../assets/img/work/work-6.jpg" alt="">
                </div>
                <div class="caption">
                    <a href="javascript:void(0)" class="post-category">Business</a>
                    <a href="#" class="post-title">Announcing a plan for small teams</a>
                    <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp">
                <div class="card">
                <div class="img-place">
                    <img src="../assets/img/work/work-1.jpg" alt="">
                </div>
                <div class="caption">
                    <a href="javascript:void(0)" class="post-category">Design</a>
                    <a href="#" class="post-title">5 basic tips for illustrating</a>
                    <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                </div>
                </div>
            </div>
            <div class="col-12 text-center py-3 wow fadeInUp">
                <a href="blog-minibar.html" class="btn btn-theme">See All Post</a>
            </div>
            </div>
        </div>
        </div>  --}}
        <!-- End page blog -->
    
        <!-- Page Contact -->
        <div class="vg-page page-contact" id="contact">
            <div class="container">
                <h1 class="text-center fg-dark wow fadeInUp">Contact me</h1>
                <p class="wow fadeInUp">最後までご覧いただきありがとうございました。このサイトを通して、私のことを少しでも知っていただけたのなら嬉しいです。もしこのサイトや私について何かコメントがありましたら、下記の連絡先をご利用ください。</p>

                <div class="text-center wow fadeInUp">
                    <a class="sns_btn btn_email" href="mailto:dinh.vnjp@gmail.com?subject=お問い合わせ">
                    <i class="ti-email"></i>
                    </a>
                    <a class="sns_btn btn_facebook" href="https://www.facebook.com/luuducdinh/">
                    <i class="ti-facebook"></i>
                    </a>
                    <a class="sns_btn btn_twitter" href="https://x.com/sadamaru_vnjp">
                    <i class="ti-twitter-alt"></i>
                    </a>
                    <a class="sns_btn btn_skype" href="https://join.skype.com/invite/f5Gn8r0W8hx8">
                    <i class="ti-skype"></i>
                    </a>
                    <a class="sns_btn btn_phone" href="tel:09084978366">
                        <i class="ti-mobile"></i>
                    </a>
                </div>
            </div>
        </div> <!-- End page contact -->
    
        <!-- Footer -->
        <div class="vg-footer">
            <div class="container">
                <p class="text-center mb-0 mt-4">Copyright &copy;2023. Sadamaru</p>
            </div>
        </div> <!-- End footer -->
    </div> <!-- End main wrapper -->

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>
    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/js/minibar-virtual.js"></script>
</body>
</html>