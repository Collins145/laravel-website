<section id="Work" class="py-20">
    <div class="max-w-6xl mx-auto px-6 sm:px-0">
        <div class="flex-justify-center">
            <div class="w-full sm:w-2/3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <header class="mb-10">
                        <h3 class="text-3xl font-Open+Sans text-light-gray"><span class="text-green text-base mr-3">02.</span><span class="font-bold">Experience</span></h3>
                    </header>
                <div class="flex flex-wrap" x-data="{currentExperience: 'snobole', snobole: true, microsoft: false, ibm: false}" data-aos="fade-up" data-aos-duration="2000">
                    <div class="w-full sm:w-1/6 mb-4 sm:mb-0">
                        <div class="flex flex-row sm:flex-col">
                            <a href="snobole" @click.prevent="snobole = true ibm = false, microsoft = false" class="px-4 py-3 border-l-4 border-theme-aquamarine hover:bg-theme-gray-light hover:bg-opacity-25 text-theme-gray-deep hover:text-green">Snobole</a>
                            <a href="#" @click.prevent="microsoft = true ibm = false, google = false" class="px-4 py-3 border-l-2 border-gray-600 text-xs hover:bg-theme-gray-light hover:bg-opacity-25 text-theme-gray-deep hover:text-green">Microsoft</a>
                            <a href="#" @click.prevent="ibm = true, google = false, microsoft = false" class="px-4 py-3 border-l-2 border-gray-600 text-xs hover:bg-theme-gray-light hover:bg-opacity-25 text-theme-gray-deep hover:text-green">IBM</a>
                        </div>
                    </div>
                    <div class="w-full sm:w-5/6">
                        <div class="px-0 sm:px-6">
                            <div x-show="currentExperience === 'snobole'">
                                <header class="mb-6">
                                    <h3 class="text-xl font-Open+Sans text-theme-gray-light font-bold mb-1">Software Engineer<span class="text-theme-aquamarine mx-3">@</span><a href="#" class="text-green hover:underline">Snobole</a></h3>
                                    <p class="text-theme-gray-deep leading-relaxed mb-3 text-xs">
                                        January 2021 - present
                                    </p>
                                </header>
                                <div>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                </div>
                            </div>
                            <div x-show="currentExperience === 'microsoft'">
                                <header class="mb-6">
                                    <h3 class="text-xl font-Open+Sans text-theme-gray-light font-bold mb-1">Tech Lead Engineer<span class="text-theme-aquamarine mx-3">@</span><a href="#" class="text-theme-aquamarine hover:underline">Microsoft</a></h3>
                                    <p class="text-theme-gray-deep leading-relaxed mb-3 text-xs">
                                        April 2020 - January 2021
                                    </p>
                                </header>
                                <div>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                </div>
                            </div>
                            <div x-show="currentExperience === 'ibm'">
                                <header class="mb-6">
                                    <h3 class="text-xl font-Open+Sans text-theme-gray-light font-bold mb-1">Software Engineer<span class="text-theme-aquamarine mx-3">@</span><a href="#" class="text-theme-aquamarine hover:underline">IBM</a></h3>
                                    <p class="text-theme-gray-deep leading-relaxed mb-3 text-xs">
                                    June 2019 - February 2020
                                    </p>
                                </header>
                                <div>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                    <p class="text-theme-gray-deep leading-relaxed mb-6">
                                        Write modern, performant, maintainable code for a diverse array of client and internal projects
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
