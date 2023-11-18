<div>
    @section('sectionName')
        Home
    @endsection
    @section('content')
        <section>
            <div class="flex flex-col px-6 mt-8 md:flex-row md:items-center md:justify-center md:space-x-12">
                {{--Apps Delivered--}}
                <div class="flex flex-col space-y-12 items-end">
                    <div>
                        <img width="200px" src="{{ asset('images/index_about_img_1.png') }}" alt="">
                    </div>
                    <div class="flex space-x-3 items-center">
                        <p class="w-20 text-center">Apps Delivered</p>
                        <p class="text-red-500 font-bold text-5xl">100+</p>
                    </div>
                </div>

                {{--Experience--}}
                <div class="flex flex-col space-y-12 items-start md:flex-col-reverse md:space-y-reverse">
                    <div class="w-52">
                        <img src="{{ asset('images/index_about_img_2.png') }}" alt="">
                    </div>
                    <div class="flex space-x-3 items-center">
                        <p class="text-red-500 font-bold text-5xl">8</p>
                        <p class="w-20 text-center">Years of Experience</p>
                    </div>
                </div>

                {{--About Me 01--}}
                <div class="mt-20 flex space-x-4">
                    <p class="text-red-500 font-bold text-5xl">01</p>
                    <div class="flex flex-col space-y-4">
                        <p class="text-3xl font-bold uppercase">About Me</p>
                        <p class="text-gray-600 max-w-lg">
                            I am naveed ullah and this is what I am writing all about is my journey in the field
                            of computer science and development. I am naveed ullah and this is what I am writing all
                            about is my journey in the field
                            of computer science and development. I am naveed ullah and this is what I am writing all
                            about is my journey in the field
                            of computer science and development. I am naveed ullah and this is what I am writing all
                            about is my journey in the field
                            of computer science and development. I am naveed ullah and this is what I am writing all
                            about is my journey in the field
                            of computer science and development. I am naveed ullah and this is what I am writing all
                            about is my journey in the field
                            of computer science and development. I am naveed ullah and this is what I am writing all
                            about is my journey in the field
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="py-12 bg-gray-100 mt-8 flex flex-col space-y-12">
                <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-x-12 md:space-y-0 overflow-x-auto">
                    <img class="w-[144.67px] h-[28px]" src="{{ asset('images/behance.png') }}" alt="">
                    <img class="w-[113.22px] h-[28px]" src="{{ asset('images/slack.png') }}" alt="">
                    <img class="w-[117.09px] h-[28px]" src="{{ asset('images/dribbble.png') }}" alt="">
                    <img class="w-[93px] h-[28px]" src="{{ asset('images/twilio.png') }}" alt="">
                    <img class="w-[104.16px] h-[28px]" src="{{ asset('images/github.png') }}" alt="">
                </div>
                <div class="flex justify-center">
                    <div class="mx-12 bg-black rounded-lg shadow-lg p-12 w-full max-w-6xl">
                        <div class="flex flex-col space-y-12">
                            <p class="text-2xl font-bold text-white text-center">
                                Let's Work Together On Your Next Project
                            </p>
                            <div class="flex items-center justify-center">
                                <button class="rounded-md bg-red-500 shadow hover:bg-red-700 text-white uppercase px-8 py-2">
                                    <p>Hire me now</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</div>
