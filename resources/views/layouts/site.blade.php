<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('portfolio')}}</title>
<!-- Styles -->
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<!-- Scripts -->
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body class="bg-deep-blue text-deep-gray">
<!-- NAVIGATION -->
    <header id="header" x-data="{isOpen: false}" class="bg-bg-blue-base sticky top-0 z-20">
        <div class="max-w-7xl mx-auto px-6 justify-items-end">
            <div class="flex sm:visible justify-between">
                    <img class="w-28 h-28 text-green" src="{{url('images/portfolio-logo.png')}}" alt="portfolio-logo">
                <div class="hidden justify-end items-center sm:flex sm:px-0">
                    <a href="#about"><span class="text-green mr-2">01.</span><span class=" text-light-gray hover:text-green mr-6">About</span></a>
                    <a href="#experience"><span class="text-green mr-2">02.</span><span class=" text-light-gray hover:text-green mr-6">Experience</span></a>
                    <a href="#projects"><span class="text-green mr-2">03.</span><span class=" text-light-gray hover:text-green mr-6">Projects</span></a>
                    <a href="#blog"><span class="text-green mr-2">04.</span><span class=" text-light-gray hover:text-green mr-6">Blog</span></a>
                    <a href="/resume.pdf" target="_blank" class="border rounded px-4 py-2 hover:text-green">Resume</a>
                </div>
                <button @click="isOpen = !isOpen" type="button" class="text-green-400 block sm:hidden cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
            </div>
            <!-- Mobile-Menu-->
            <div x-show='isOpen'>
                <div class="space-y-4 sm:hidden text-left">
                    <a href="#about" class="block"><span class="text-green mr-2">01.</span><span class="mr-6 text-light-gray hover:text-green">About</span></a>
                    <a href="#experience" class="block"><span class="text-green mr-2">02.</span><span class="mr-6 text-light-gray hover:text-green">Experience</span></a>
                    <a href="#portfolio"class="block"><span class="text-green mr-2">03.</span><span class="mr-6 text-light-gray hover:text-green">Portfolio</span></a>
                    <a href="#contact" class="block"><span class="text-green mr-2">04.</span><span class="mr-6 text-light-gray hover:text-green">Contact</span></a>
                    <a href="/resume.pdf" target="_blank" class="border rounded px-4 py-2 text-green inline-block">Resume</a>
                </div>
            </div>
        </div>
    </header>
    <main>

        @yield('content')

    </main>
    <footer>
        <section id="credits" class="py-8 bg-bg-dark-blue">
            <div class="max-w-5xl mx-auto px-6 lg:px-0">
                  <div class="w-full text-center">
                      <p class="text-xs text-theme-gray-deep hover:text-green pb-4">
                          Developed by Collins Omondi
                      </p>
                      <p class="text-center text-deep-gray text-xs hover:text-green">&copy;2022</p>
                  </div>
            </div>
        </section>
    </footer>
    <script>
        window.sr=ScrollReveal();
        sr.reveal('#header',{
            duration:2000,
            origin:'bottom'
        });
        sr.reveal('#intro',{duration:2000}, 50);
        // sr.reveal('#intro',{
        //     duration:2000,
        //     origin:'top',
        //     distance:'3000px'
        // });
        sr.reveal('#Get-in-touch',{
            duration:2000,
            delay:2000,
            origin:'top',
            distance:'3000px'
        });
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        $(function() {
            // Smooth Scrolling
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 2000);
                return false;
              }
            }
          });
        });
    </script>
</body>
</html>
