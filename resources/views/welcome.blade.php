<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


</head>
<body>
    <div class="scroll-up-btn">
        <div class="fa fa-angle-up"></div>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#teams">Teams</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Zain Mehdi </div>
                <div class="text-3">And I'm  <span class="typing"></span></div>
                <a href="http://wa.me/923310439025">Hire me</a>
            </div>
        </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="{{asset('assets/images/zainDp11.jpg')}}" alt="">
                </div>
                <div class="cloumn right">
                    <div class="text">I'm zain and I'm a full stack <span> Laravel developer</span></div>
                    <p>I'can build your idea into the world of web. I have a team of Graphic Designing, SEO experts & Social media marketing. Give a chance for your service and you will not regret.</p>
                    <a href="{{route('cv.download.index')}}">Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>A professional team of web designing is ready for attractive designs. Our clients are everything for us!</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-code"></i>
                        <div class="text">Web Development</div>
                        <p>The challenging growth of technology can't push you back. We are ready for difficult and challenging tasks.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-handshake-o"></i>
                        <div class="text">Other Service</div>
                        <p>Social media marketing and SEO work is now compulsory for world of internet. Google Analytics can help your marketing strategy.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">About Me</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I'm a professional web developer and  hard worker person. My moto is "Your talent determines what you can do. Your motivation determines how much you’re willing to do. Your attitude determines how well you do it." </p>
                    <a href="#"> Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>60%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Laravel(PHP)</span>
                            <span>70%</span>
                        </div>
                        <div class="line lara"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL/PgSQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my team section -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Team</h2>
            <div class="carousel owl-carousel">
                <div class="card ">
                    <div class="box">
                        <img src="{{asset('assets/images/ijazdp.PNG')}}" alt="">
                        <div class="text">Ijaz Ahamad</div>
                        <p>I'm level 2 seller on fiver and a well established entrepreneur. I've two years of experience in freelancing</p>
                    </div>
                </div>
                <div class="card ">
                    <div class="box">
                        <img src="{{asset('assets/images/rohixdp.PNG')}}" alt="">
                        <div class="text">Rohix Musavi</div>
                        <p>I'm a professional graphic designer with two years of professional experience in multiple companies.</p>
                    </div>
                </div>
                <div class="card ">
                    <div class="box">
                        <img src="{{asset('assets/images/samdp.jpeg')}}" alt="">
                        <div class="text">Ahamad Mehdi</div>
                        <p>I'm a professional SEO expert and having skills in other related technologies like ...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <div class="title">Contact me</div>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in touch</div>
                    <p>Contact us via Email or Whatsapp. Forgive me If I responsed late!</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fa fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Zain Mehdi</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-map"></i>  
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Lahore, Pakistan</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">zainmehdi80@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="{{route('message.save')}}" method="post">
                        @csrf
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="describe" cols="30" rows="10" placeholder="Describe your idea or project" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Created By <strong>Zain Mehdi</strong> <span class="fa fa-copyright"> 2022 All Rights Reserved.</span></span>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>
    <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>