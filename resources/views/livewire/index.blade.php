<div>
    {{--Main Container--}}
    <div class="container max-w-screen-2xl">
        {{--Sections--}}
        <div class="flex flex-col space-y-4">
            {{--About--}}
            <section class="max-w-full">
                {{--About Header--}}
                <div class="flex flex-col bg-black/60 px-8 py-4 items-center">
                    <div class="absolute z-[-10] top-0 w-full">
                        <video
                                class="w-full h-auto max-h-[315px] md:max-h-[325px] object-cover"
                                preload="auto"
                                muted
                                autoplay="autoplay"
                                loop
                        >
                            <source src="{{ asset('images/naveed-video.mp4') }}"/>
                        </video>
                    </div>

                    {{--App Bar--}}
                    <div class="flex min-w-full justify-between items-center">
                        {{--Logo--}}
                        <h1 class="text-2xl text-white">
                            Naveed Ullah
                        </h1>

                        {{--Menue MD--}}
                        <div class="hidden md:flex md:space-x-3 items-center">
                            {{--Menue Item--}}
                            <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                Home</p>
                            <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                About</p>
                            <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                Service</p>
                            <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                Portfolio</p>
                        </div>

                        {{--Contact Button--}}
                        <div class="group">
                            <div class="hidden md:flex border border-red-500 rounded-lg px-6 py-2 group-hover:bg-red-500 transition-colors duration-300 group-hover:cursor-pointer">
                                <p class="text-red-500 uppercase font-bold group-hover:text-white">Contact</p>
                            </div>
                        </div>

                        <div class="md:hidden group">
                            {{--Humberger Menue--}}
                            <div>
                                <svg id='menu-2_24' width='24' height='24' viewBox='0 0 24 24'
                                     xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                    <rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>


                                    <g transform="matrix(1 0 0 1 12 12)">
                                        <g style="">
                                            <g transform="matrix(1 0 0 1 0 0)">
                                                <path style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                                      transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                                      stroke-linecap="round"/>
                                            </g>
                                            <g transform="matrix(1 0 0 1 0 -6)">
                                                <line style="stroke: rgb(255,255,255); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                                      x1="-8" y1="0" x2="8" y2="0"/>
                                            </g>
                                            <g transform="matrix(1 0 0 1 0 0)">
                                                <line style="stroke: rgb(255,255,255); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                                      x1="-8" y1="0" x2="8" y2="0"/>
                                            </g>
                                            <g transform="matrix(1 0 0 1 0 6)">
                                                <line style="stroke: rgb(255,255,255); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                                      x1="-8" y1="0" x2="8" y2="0"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            {{--Menue For Mobile--}}
                            <div class="hidden w-32 absolute bg-black p-4 shadow-lg shadow-gray-600 group-hover:flex flex-col space-y-3 right-4 top-2 rounded-lg">
                                <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                    Home</p>
                                <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                    About</p>
                                <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                    Service</p>
                                <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                    Portfolio</p>
                                <p class="text-gray-400 font-bold uppercase hover:text-red-500 hover:cursor-pointer">
                                    Contact</p>
                            </div>
                        </div>
                    </div>

                    {{--About Title--}}
                    <div class="my-20">
                        <p class="text-5xl text-white uppercase font-bold">About</p>
                        <div class="flex justify-center mt-5">
                            <p class="text-gray-400">Home /</p>
                            <p class="text-white ml-1">About</p>
                        </div>
                    </div>
                </div>

                {{--About Body Hader--}}
                <div class="flex flex-col space-y-3 md:flex-row md:space-x-12 md:space-y-0 items-center my-5 px-6">
                    {{--Image--}}
                    <div class="max-w-lg">
                        <img class="rounded-md  shadow-lg w-[250px] md:w-[585px]" src="{{ asset('images/naveed-img.jpg') }}"
                             alt="">
                    </div>

                    {{--01 Details--}}
                    <div class="flex flex-col w-full items-center md:items-start">
                        <div class="flex space-x-6">
                            <p class="text-red-500 font-bold text-3xl ">
                                01
                            </p>
                            <p class="font-bold text-3xl uppercase">
                                About me
                            </p>
                        </div>
                        <div class="flex flex-col space-y-3 mt-8">
                            <p class="font-bold text-2xl max-w-lg md:max-w-2xl text-center md:text-start">
                                I'm Professional Designer and Front-End Web Developer That Solve Your Problems
                            </p>
                            <p class="max-w-lg md:max-w-2xl text-center text-gray-600 md:text-start">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                                consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet Amet
                                minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                                consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud ametAmet
                                minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                                consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                            </p>
                        </div>

                        <div class="flex flex-row w-full space-x-8 mt-8 justify-center md:justify-start">
                            <div class="flex flex-row max-w-min space-x-4 items-center">
                                <p class="text-red-500 font-bold text-3xl ">
                                    08
                                </p>
                                <p class="font-bold text-gray-600 text-center">
                                    Years of Experience
                                </p>
                            </div>

                            <div class="flex flex-row max-w-min space-x-4 items-center">
                                <p class="text-red-500 font-bold text-3xl ">
                                    100+
                                </p>
                                <p class="font-bold text-gray-600 text-center">
                                    Apps Delivered
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
