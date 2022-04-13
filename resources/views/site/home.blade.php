@extends ("layouts.site")
@section ("content")
    <header>
        <section id="intro" class="py-20" style="height: 80vh;">
            <div class="max-w-6xl mx-auto">
                <div class="space-y-8 px-10 sm:px-0">
                    <h3 class="text-xl text-green">Hi, my name is</h3>
                    <h1 class="text-6xl font-bold text-light-gray">Collins Omondi.</h1>
                    <h1 class="text-5xl font-bold">I build things for the web.</h1>
                    <p class="text-lg leading-relaxed pb-10">
                        I'm a Web-developer based in Nairobi who specializes in building (and occasionally designing) exceptional digital experiences. <br>
                        I advance technology by contributing to open source
                        Currently, I'm a developer at <a href="https://snobole.com/" target="_blank" class="text-blue-300 text-green">Snobole</a> focused on building accessible, <br> human-centered products.
                    </p>
                    <a id="Get-in-touch" href="#collinsomondi825@gmail.com" target="_blank"><span class="border rounded px-4 py-3 text-green">Get In Touch</span></a>
                </div>
            </div>
        </section>
    </header>
    @include('components.site.about')
    @include('components.site.experience')
    @include('components.site.projects')
    @include('components.site.contact')
    {{-- @include('components.site.') --}}
@endsection
