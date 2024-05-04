@extends('LandingPage.index')

@section('title', 'Ani - Tech')

@section('content')

    <div class="flex md:items-center md:justify-center w-full p-5">
        <!-- Bagian Kiri -->
        <div class="md:w-1/2 w-full flex flex-col md:pl-20 ">
            <h1 class="md:text-4xl text-2xl font-bold text-gray-300 mb-4 ">Perfect place <br>to <span
                    class="text-black">develop</span><br> your business</h1>

            <p class="text-gray-300">We believe in a collaborative approach to software development, <br> where we work
                closely
                with our clients to turn their vision into <br> reality. Our agile development methodology ensures that
                projects <br>
                are delivered on time and on budget, with full transparency <br>throughout the process.</p>
            <button class="bg-button hover:bg-buttonhover text-white font-bold py-4 px-4 rounded-xl md:w-1/3 mt-8  ">Contact
                Us</button>
        </div>

        <!-- Bagian Kanan -->
        <div class="w-1/2 hidden md:flex md:justify-center">
            <img src="{{ asset('images/home-image1.png') }}" alt="Your Image" class="w-5/6 m-auto">
        </div>
        {{-- Wavey end --}}
        

    </div>
    {{-- <------------------- About Us --------------------> --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e5e7eb" fill-opacity="1" d="M0,192L80,202.7C160,213,320,235,480,224C640,213,800,171,960,154.7C1120,139,1280,149,1360,154.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    <div class="bg-primary justify-center items-center text-center pt-24 pb-48">
        <div class="wave-headerr">
            <h1 class="md:text-4xl text-2xl font-bold py-5">Who Are We</h1>
            <p class="text-md mt-8 mb-12">Aplikasi Nusantara Inovasi is dedicated to building software solutions that drive
                your <br>business forward. With
                our expertise and passion for technology, we transform ideas <br> into powerful, scalable designs which turn
                into
                applications that deliver results.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6 mx-auto  ">
            <div
                class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image1.png') }}" class="w-1/4 mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image2.png') }}" class="w-1/4 mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image3.png') }}" class="w-1/4 mx-auto py-5" />
                </a>
            </div>
            <!-- Posisi grid ke kanan -->
            <div
                class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2 mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image4.png') }}" class="w-1/4 mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2 mx-auto ">
                <a href="#">
                    <img src="{{ asset('images/who-image5.png') }}" class="w-1/4 mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image6.png') }}" class="w-1/4 mx-auto py-5" />
                </a>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e5e7eb" fill-opacity="1" d="M0,192L80,202.7C160,213,320,235,480,224C640,213,800,171,960,154.7C1120,139,1280,149,1360,154.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
    {{-- <------------------- About Us --------------------> --}}

    {{-- <------------------- Services --------------------> --}}

    <div class=" justify-center items-center  text-center py-24 ">
        <div class="wave-headerr">
            <h1 class="text-2xl font-bold py-5">What We Offer</h1>
            <p class="text-md mt-8 mb-20 font-normal">Our team of skilled professionals is dedicated to delivering
                high-quality
                solutions that <br> drive innovation and exceed expectations. From concept to deployment, we offer end- <br>
                to-end services that empower your business to thrive in today's digital landscape.</p>
        </div>
        <div class="flex flex-col md:flex-row justify-center mx-auto gap-6 mb-24 px-10 ">
            <div class="md:w-1/4 w-full max-w-sm bg-white border border-primary rounded-lg shadow py-24 text-center">
                <div class="rounded-full bg-primary mx-auto pt-10" style="width: 120px; height: 120px;">
                    <i class="fa-solid fa-laptop text-5xl text-gray-600"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold py-5">Web Development</h1>
                </div>
                <p class="mt-2">We specialize in developing <br> innovative mobile applications for <br> Android
                    platforms, ensuring
                    <br> seamless performance and <br> engaging user experiences.
                </p>
            </div>
            <div class="md:w-1/4 w-full max-w-sm bg-white border border-primary rounded-lg shadow py-24 text-center">
                <div class="rounded-full bg-primary mx-auto pt-10" style="width: 120px; height: 120px;">
                    <i class="fa-solid fa-laptop text-5xl text-gray-600"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold py-5">Mobile App Development</h1>
                </div>
                <p class="mt-2">From concept to launch, we <br> create stunning websites that are <br> not only visually
                    impressive but <br> also highly functional and user- <br> friendly.

                </p>
            </div>
            <div class="md:w-1/4 w-full max-w-sm bg-white border border-primary rounded-lg shadow py-24 text-center">
                <div class="rounded-full bg-primary mx-auto pt-10" style="width: 120px; height: 120px;">
                    <i class="fa-solid fa-pen-nib text-5xl text-gray-600"></i>

                </div>
                <div>
                    <h1 class="text-2xl font-bold py-5">UI/UX Design</h1>
                </div>
                <p class="mt-2">Our team of designers is <br> dedicated to creating intuitive <br> and visually appealing
                    interfaces <br> that enhance user engagement <br> and satisfaction.

                </p>
            </div>
            <div class="md:w-1/4 w-full max-w-sm bg-white border border-primary rounded-lg shadow py-24 text-center">
                <div class="rounded-full bg-primary mx-auto pt-10" style="width: 120px; height: 120px;">

                    <i class="fa-solid fa-database text-5xl text-gray-600"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold py-5">Data Science</h1>
                </div>
                <p class="mt-2">Help you unlock the potential of <br>your data, providing valuable <br> insights and
                    driving informed <br> decision-making to fuel <br> your growth and success.
                </p>
            </div>



        </div>
    </div>
    {{-- <------------------- Service--------------------> --}}

    {{-- <------------------- Product  --------------------> --}}


    <div class=" pt-24 pb-48 bg-gray-100"">
        <div class="wave-headerr justify-center text-center">
            <h1 class="text-2xl font-bold py-5">Our Product</h1>
            <p class="text-md mt-8 mb-20 font-normal">We are incredibly excited to introduce our <br>latest product, a
                true testament to our startup agency's unwavering commitment to pushing the boundaries of innovation and
                <br>delivering excellence in every aspect of our work.
            </p>
        </div>

        <!-- Bagian Kanan -->
        <div class="flex flex-col md:flex-row items-center justify-between p-8">
            <!-- Sisi kiri (gambar) -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/product-image1.png') }}" alt="Gambar" class="w-full rounded-lg">
            </div>
            <!-- Sisi kanan (teks) -->
            <div class="w-full md:w-1/2">

                <p class="text-lg text-left">SiMedit is an Android-based financial management application
                    specifically designed to help students overcome financial challenges. Withfocus on the unique needs
                    of college students.</p>
                <p class="text-lg text-left mt-10">This app allows users to allocate and monitor funds for academic
                    purposes
                    such as thesis and research, as well as recreational activities such as hanging out and so on. This
                    app becomes financial journey for students, providing practical solutions to achieve a balance
                    between academic needs and daily lifestyle.</p>
            </div>
        </div>



    </div>

    {{-- <------------------- Product  --------------------> --}}


    {{-- <------------------- FAQ  --------------------> --}}
    <div class=" py-24">
        <div class="wave-headerr justify-center text-center items-center">
            <h1 class="text-2xl font-bold pt-5 pb-16">Quick answers to questions you may have. </h1>

        </div>
        <div class="flex items-center justify-between p-8  ">
            <!-- Sisi kiri (gambar) -->
            <div class="md:w-1/2 md:mr-4 text-left md:px-36 w-full">

                <h1 class="text-left text-6xl">Frequently <br> Asked <br>Questions</h1>
                <div class="mt-12">

                    <p>We strive to provide quick answers to your questions. If you <br> can't find what you're looking
                        for, please don't hesitate to <br> Contact us.</p>
                </div>
            </div>
            <!-- Sisi kanan (teks) -->
            <div class="md:flex hidden md:w-1/2">


            </div>
        </div>
    </div>
    {{-- <------------------- FAQ  --------------------> --}}


    {{-- <------------------- Testimonials  --------------------> --}}

    <div class="py-24">
        <div class="wave-headewr justify-center text-center">
            <h1 class="text-2xl font-bold py-5">See what our clients say!</h1>
            <p class="text-md mt-8 mb-20 font-normal">we take pride in delivering exceptional software solutions that
                exceed
                our clients' <br>expectations. Here's what some of our clients have to say about working with us:</p>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center gap-6">
            <div class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2">
                <div class="flex flex-col items-center pb-10 pt-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/testi-image1.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Information System Students</span>
                    <div class="flex mt-4 md:mt-6">
                        <div class="w-6 h-6 mr-2 text-gray-500">
                            <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                        </div>
                        <p class="text-dark2 dark:text-gray-300 italic pr-4">"Kutipan Anda di sini. &#128525; &#128525;"
                        </p>
                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>


            <div class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2">
                <div class="flex flex-col items-center pb-10 pt-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/testi-image1.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Information System Students</span>
                    <div class="flex mt-4 md:mt-6">
                        <div class="w-6 h-6 mr-2 text-gray-500">
                            <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                        </div>
                        <p class="text-dark2 dark:text-gray-300 italic pr-4">"Kutipan Anda di sini. &#128525; &#128525;"
                        </p>
                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2">
                <div class="flex flex-col items-center pb-10 pt-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/testi-image1.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Information System Students</span>
                    <div class="flex mt-4 md:mt-6">
                        <div class="w-6 h-6 mr-2 text-gray-500">
                            <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                        </div>
                        <p class="text-dark2 dark:text-gray-300 italic pr-4">"Kutipan Anda di sini. &#128525; &#128525;"
                        </p>
                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    {{-- <------------------- Testimonials  --------------------> --}}


    {{-- <------------------- Footer --------------------> --}}
    <footer class="py-24 text-center bg-[#D9D9D9]">
        <!-- Logo -->
        <div class="mb-8">
            <img src="{{ asset('images/logo.png') }}" class="w-24 mx-auto" alt="Logo">
        </div>

        <!-- Menu -->
        <nav class="mb-8">
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">Home</a>
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">About Us</a>
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">Services</a>
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">FAQ</a>
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">Testimonials</a>
        </nav>

        <!-- Social Icons -->
        <div class="mb-8">
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2"><i class="fa-solid fa-envelope"></i></a>
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2"><i class="fas fa-phone"></i></a>
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="text-gray-600 hover:text-gray-900 mx-2"><i class="fab fa-instagram"></i></a>
        </div>

        <!-- Copyright -->
        <p class="text-sm text-gray-600">© Copyright 2024 - All rights reserved.</p>
    </footer>
    {{-- <------------------- Footer --------------------> --}}



@endsection
