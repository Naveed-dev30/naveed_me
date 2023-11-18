<div>
    @section('sectionName')
        About
    @endsection
    @section('content')
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
    @endsection
</div>
