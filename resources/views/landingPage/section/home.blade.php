@extends('LandingPage.index')

@section('title', 'Ani - Tech')

@section('content')

<div class="flex md:items-center md:justify-center w-full p-5">
    <!-- Bagian Kiri -->
    <div class="md:w-1/2 w-full flex flex-col md:pl-20 ">
        <h1 class="md:text-4xl text-2xl font-bold text-tcolor1 mb-4 ">Perfect place <br>to <span class="text-primary2">develop</span><br> your business</h1>

        <p class="text-darkui">We believe in a collaborative approach to software development, <br> where we work
            closely
            with our clients to turn their vision into <br> reality. Our agile development methodology ensures that
            projects <br>
            are delivered on time and on budget, with full transparency <br>throughout the process.</p>
        <button class="bg-tcolor hover:bg-tcolor1 text-white font-bold py-4 px-4 rounded-xl md:w-1/4 mt-8">Contact
            Us</button>
    </div>

    <!-- Bagian Kanan -->
    <div class="w-1/2 hidden md:flex md:justify-center">
        <img src="{{ asset('images/home-image1.png') }}" alt="Your Image" class="w-5/6 m-auto">
    </div>
        {{-- Wavey end --}}
        

    </div>

    {{-- <------------------- About Us --------------------> --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e5e7eb" fill-opacity="1" d="M0,288L60,250.7C120,213,240,139,360,112C480,85,600,107,720,144C840,181,960,235,1080,256C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
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
                class="w-full max-w-md bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image1.png') }}" class="w-1/2  mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-md bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image2.png') }}" class="w-1/2  mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-md bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image3.png') }}" class="w-1/2 h-auto  mx-auto py-5" />
                </a>
            </div>
            <!-- Posisi grid ke kanan -->
            <div
                class="w-full max-w-md max-h-md h-full bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2 mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image4.png') }}" class="w-full h-auto mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-md max-h-md h-full bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2 mx-auto ">
                <a href="#">
                    <img src="{{ asset('images/who-image5.png') }}" class="w-full h-auto  mx-auto py-5" />
                </a>
            </div>
            <div
                class="w-full max-w-md max-h-md h-full bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2  mx-auto">
                <a href="#">
                    <img src="{{ asset('images/who-image6.png') }}" class="w-full h-auto  mx-auto py-5" />
                </a>
            </div>
        </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e5e7eb" fill-opacity="1" d="M0,288L60,250.7C120,213,240,139,360,112C480,85,600,107,720,144C840,181,960,235,1080,256C1200,277,1320,267,1380,261.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
    {{-- <------------------- About Us --------------------> --}}

{{-- <------------------- Services --------------------> --}}

<div class=" justify-center items-center  text-center py-24 ">
    <div class="wave-headerr">
        <h1 class="text-2xl font-bold py-5 text-darkui">What We Offer</h1>
        <p class="text-md mt-8 mb-20 font-normal text-darkui">Our team of skilled professionals is dedicated to delivering
            high-quality
            solutions that <br> drive innovation and exceed expectations. From concept to deployment, we offer end- <br>
            to-end services that empower your business to thrive in today's digital landscape.</p>
    </div>
    <div class="flex flex-col md:flex-row justify-center mx-auto gap-4 mb-24 px-20 ">
        <div class="md:w-1/4 w-full max-w-sm bg-bgui border border-primary rounded-lg shadow py-24 text-center">
            <div class="rounded-full bg-icon1 mx-auto pt-10" style="width: 120px; height: 120px;">
                <i class="fa-solid fa-laptop text-5xl text-white"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold py-5 text-darkui">Web Development</h1>
            </div>
            <p class="mt-2 text-darkui">We specialize in developing <br> innovative mobile applications for <br> Android
                platforms, ensuring
                <br> seamless performance and <br> engaging user experiences.
            </p>
        </div>
        <div class="md:w-1/4 w-full max-w-sm bg-bgui border border-primary rounded-lg shadow py-24 text-center">
            <div class="rounded-full bg-icon2 mx-auto pt-10" style="width: 120px; height: 120px;">
                <i class="fa-solid fa-mobile text-5xl text-white"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold py-5 text-darkui">Mobile App Development</h1>
            </div>
            <p class="mt-2 text-darkui">From concept to launch, we <br> create stunning websites that are <br> not only visually
                impressive but <br> also highly functional and user- <br> friendly.

            </p>
        </div>
        <div class="md:w-1/4 w-full max-w-sm bg-bgui border border-primary rounded-lg shadow py-24 text-center">
            <div class="rounded-full bg-icon3 mx-auto pt-10" style="width: 120px; height: 120px;">
                <i class="fa-solid fa-pen-nib text-5xl text-white"></i>

            </div>
            <div>
                <h1 class="text-2xl font-bold py-5 text-darkui">UI/UX Design</h1>
            </div>
            <p class="mt-2 text-darkui">Our team of designers is <br> dedicated to creating intuitive <br> and visually appealing
                interfaces <br> that enhance user engagement <br> and satisfaction.

            </p>
        </div>
        <div class="md:w-1/4 w-full max-w-sm bg-bgui border border-primary rounded-lg shadow py-24 text-center">
            <div class="rounded-full bg-icon4 mx-auto pt-10" style="width: 120px; height: 120px;">

                <i class="fa-solid fa-database text-5xl text-white"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold py-5 text-darkui">Data Science</h1>
            </div>
            <p class="mt-2 text-darkui">Help you unlock the potential of <br>your data, providing valuable <br> insights and
                driving informed <br> decision-making to fuel <br> your growth and success.
            </p>
        </div>



    </div>
</div>
{{-- <------------------- Service--------------------> --}}

{{-- <------------------- Product  --------------------> --}}

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#C4DEE3" fill-opacity="1" d="M0,288L60,250.7C120,213,240,139,360,112C480,85,600,107,720,144C840,181,960,235,1080,256C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<div class=" pt-24 pb-48 bg-tcolor2">
    <div class=" wave-headerr justify-center text-center">
        <h1 class="text-2xl font-bold py-5 text-darkui">Our Product</h1>
        <p class="text-md mt-8 mb-20 font-normal text-darkui">We are incredibly excited to introduce our <br>latest product, a
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

            <p class="text-lg text-left text-darkui">SiMedit is an Android-based financial management application
                specifically designed to help students overcome financial challenges. Withfocus on the unique needs
                of college students.</p>
            <p class="text-lg text-left mt-10 text-darkui">This app allows users to allocate and monitor funds for academic
                purposes
                such as thesis and research, as well as recreational activities such as hanging out and so on. This
                app becomes financial journey for students, providing practical solutions to achieve a balance
                between academic needs and daily lifestyle.</p>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#C4DEE3" fill-opacity="1" d="M0,288L60,250.7C120,213,240,139,360,112C480,85,600,107,720,144C840,181,960,235,1080,256C1200,277,1320,267,1380,261.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

{{-- <------------------- Product  --------------------> --}}


{{-- <------------------- FAQ  --------------------> --}}
<div class=" py-24">
    <div class="wave-headerr justify-center text-center items-center">
        <h1 class="text-2xl font-bold pt-5 pb-16 text-darkui">Quick answers to questions you may have. </h1>

    </div>
    <div class="flex items-center justify-between p-8  ">
        <!-- Sisi kiri (gambar) -->
        <div class="md:w-1/2 md:mr-2 text-left md:px-24 w-full">

            <h1 class="text-left text-6xl text-tcolor1 font-semibold"><span class="text-primary2">F</span>requently <br> <span class="text-primary2">A</span>sked <br><span class="text-primary2">Q</span>uestions</h1>
            <div class="mt-12">

                <p class="text-darkui">We strive to provide quick answers to your questions. If you <br> can't find what you're looking
                    for, please don't hesitate to <br> <span class="text-primary2"> Contact us.</span></p>
            </div>
        </div>
        <!-- Sisi kanan (teks) -->
        <div class="md:flex hidden md:w-1/2 md:mr-5">
            <div class="md:w-1/2 w-full flex flex-col p-5">
                <div class="flex flex-col">
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex flex-row justify-between">
                        <h3>What type of development service do you offer ?</h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0003 13.83C19.0008 13.6806 18.9678 13.533 18.9038 13.3981C18.8398 13.2631 18.7463 13.1442 18.6303 13.05L12.6303 8.22004C12.4513 8.07296 12.2269 7.99255 11.9953 7.99255C11.7637 7.99255 11.5392 8.07296 11.3603 8.22004L5.36028 13.22C5.15606 13.3898 5.02763 13.6337 5.00325 13.8981C4.97888 14.1625 5.06054 14.4258 5.23028 14.63C5.40001 14.8343 5.64393 14.9627 5.90835 14.9871C6.17278 15.0114 6.43606 14.9298 6.64028 14.76L12.0003 10.29L17.3603 14.61C17.5071 14.7323 17.6858 14.81 17.8753 14.8339C18.0649 14.8578 18.2573 14.8268 18.4299 14.7448C18.6024 14.6627 18.7478 14.533 18.8489 14.3709C18.95 14.2088 19.0025 14.0211 19.0003 13.83Z" fill="#4C9DAE"/>
                            </svg>
                    </div>
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex hidden">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias, hic repellendus aliquid nulla ducimus voluptates. Ratione nobis, officia sapiente reprehenderit voluptatibus quaerat reiciendis illo, earum, eveniet aspernatur laboriosam deserunt et quia atque dolorem voluptate enim repellat totam incidunt. Repellat.</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="border-tcolor1 border-2 bg-primary2 p-2 mb-2 rounded-md flex flex-row justify-between">
                        <h3>What type of development service do you offer ?</h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0003 13.83C19.0008 13.6806 18.9678 13.533 18.9038 13.3981C18.8398 13.2631 18.7463 13.1442 18.6303 13.05L12.6303 8.22004C12.4513 8.07296 12.2269 7.99255 11.9953 7.99255C11.7637 7.99255 11.5392 8.07296 11.3603 8.22004L5.36028 13.22C5.15606 13.3898 5.02763 13.6337 5.00325 13.8981C4.97888 14.1625 5.06054 14.4258 5.23028 14.63C5.40001 14.8343 5.64393 14.9627 5.90835 14.9871C6.17278 15.0114 6.43606 14.9298 6.64028 14.76L12.0003 10.29L17.3603 14.61C17.5071 14.7323 17.6858 14.81 17.8753 14.8339C18.0649 14.8578 18.2573 14.8268 18.4299 14.7448C18.6024 14.6627 18.7478 14.533 18.8489 14.3709C18.95 14.2088 19.0025 14.0211 19.0003 13.83Z" fill="#4C9DAE"/>
                            </svg>
                    </div>
                    <div class="border-tcolor1 border-2 bg-primary2 p-2 mb-2 rounded-md flex">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias, hic repellendus aliquid nulla ducimus voluptates. Ratione nobis, officia sapiente reprehenderit voluptatibus quaerat reiciendis illo, earum, eveniet aspernatur laboriosam deserunt et quia atque dolorem voluptate enim repellat totam incidunt. Repellat.</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex flex-row justify-between">
                        <h3>What type of development service do you offer ?</h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0003 13.83C19.0008 13.6806 18.9678 13.533 18.9038 13.3981C18.8398 13.2631 18.7463 13.1442 18.6303 13.05L12.6303 8.22004C12.4513 8.07296 12.2269 7.99255 11.9953 7.99255C11.7637 7.99255 11.5392 8.07296 11.3603 8.22004L5.36028 13.22C5.15606 13.3898 5.02763 13.6337 5.00325 13.8981C4.97888 14.1625 5.06054 14.4258 5.23028 14.63C5.40001 14.8343 5.64393 14.9627 5.90835 14.9871C6.17278 15.0114 6.43606 14.9298 6.64028 14.76L12.0003 10.29L17.3603 14.61C17.5071 14.7323 17.6858 14.81 17.8753 14.8339C18.0649 14.8578 18.2573 14.8268 18.4299 14.7448C18.6024 14.6627 18.7478 14.533 18.8489 14.3709C18.95 14.2088 19.0025 14.0211 19.0003 13.83Z" fill="#4C9DAE"/>
                            </svg>
                    </div>
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex hidden">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias, hic repellendus aliquid nulla ducimus voluptates. Ratione nobis, officia sapiente reprehenderit voluptatibus quaerat reiciendis illo, earum, eveniet aspernatur laboriosam deserunt et quia atque dolorem voluptate enim repellat totam incidunt. Repellat.</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex flex-row justify-between">
                        <h3>What type of development service do you offer ?</h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0003 13.83C19.0008 13.6806 18.9678 13.533 18.9038 13.3981C18.8398 13.2631 18.7463 13.1442 18.6303 13.05L12.6303 8.22004C12.4513 8.07296 12.2269 7.99255 11.9953 7.99255C11.7637 7.99255 11.5392 8.07296 11.3603 8.22004L5.36028 13.22C5.15606 13.3898 5.02763 13.6337 5.00325 13.8981C4.97888 14.1625 5.06054 14.4258 5.23028 14.63C5.40001 14.8343 5.64393 14.9627 5.90835 14.9871C6.17278 15.0114 6.43606 14.9298 6.64028 14.76L12.0003 10.29L17.3603 14.61C17.5071 14.7323 17.6858 14.81 17.8753 14.8339C18.0649 14.8578 18.2573 14.8268 18.4299 14.7448C18.6024 14.6627 18.7478 14.533 18.8489 14.3709C18.95 14.2088 19.0025 14.0211 19.0003 13.83Z" fill="#4C9DAE"/>
                            </svg>
                    </div>
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex hidden">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias, hic repellendus aliquid nulla ducimus voluptates. Ratione nobis, officia sapiente reprehenderit voluptatibus quaerat reiciendis illo, earum, eveniet aspernatur laboriosam deserunt et quia atque dolorem voluptate enim repellat totam incidunt. Repellat.</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex flex-row justify-between">
                        <h3>What type of development service do you offer ?</h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0003 13.83C19.0008 13.6806 18.9678 13.533 18.9038 13.3981C18.8398 13.2631 18.7463 13.1442 18.6303 13.05L12.6303 8.22004C12.4513 8.07296 12.2269 7.99255 11.9953 7.99255C11.7637 7.99255 11.5392 8.07296 11.3603 8.22004L5.36028 13.22C5.15606 13.3898 5.02763 13.6337 5.00325 13.8981C4.97888 14.1625 5.06054 14.4258 5.23028 14.63C5.40001 14.8343 5.64393 14.9627 5.90835 14.9871C6.17278 15.0114 6.43606 14.9298 6.64028 14.76L12.0003 10.29L17.3603 14.61C17.5071 14.7323 17.6858 14.81 17.8753 14.8339C18.0649 14.8578 18.2573 14.8268 18.4299 14.7448C18.6024 14.6627 18.7478 14.533 18.8489 14.3709C18.95 14.2088 19.0025 14.0211 19.0003 13.83Z" fill="#4C9DAE"/>
                            </svg>
                    </div>
                    <div class="border-tcolor1 border-2 bg-white p-2 mb-2 rounded-md flex hidden">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias, hic repellendus aliquid nulla ducimus voluptates. Ratione nobis, officia sapiente reprehenderit voluptatibus quaerat reiciendis illo, earum, eveniet aspernatur laboriosam deserunt et quia atque dolorem voluptate enim repellat totam incidunt. Repellat.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- <------------------- FAQ  --------------------> --}}


{{-- <------------------- Testimonials  --------------------> --}}

<div class="py-24">
    <div class="wave-headewr justify-center text-center">
        <h1 class="text-2xl font-bold py-5 text-darkui">See what our clients say!</h1>
        <p class="text-md mt-8 mb-20 font-normal text-darkui">we take pride in delivering exceptional software solutions that
            exceed
            our clients' <br>expectations. Here's what some of our clients have to say about working with us:</p>
    </div>
    <div class="flex flex-col md:flex-row justify-center items-center gap-6">
        <div class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2">
            <div class="flex flex-col items-center pb-10 pt-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/testi-image1.jpg') }}" alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-primary2 dark:text-white">Bonnie Green</h5>
                <span class="text-sm text-darkui">Information System Students</span>
                <div class="flex mt-4 md:mt-6">
                    <div class="w-6 h-6 mr-2 text-gray-500">
                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#C4DEE3" viewBox="0 0 18 14">
                            <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                    <p class="text-darkui italic pr-4">"Kutipan Anda di sini. &#128525; &#128525;"
                    </p>
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#C4DEE3" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
            </div>
        </div>


        <div class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2">
            <div class="flex flex-col items-center pb-10 pt-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/testi-image1.jpg') }}" alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-primary2 dark:text-white">Bonnie Green</h5>
                <span class="text-sm text-darkui">Information System Students</span>
                <div class="flex mt-4 md:mt-6">
                    <div class="w-6 h-6 mr-2 text-gray-500">
                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#C4DEE3" viewBox="0 0 18 14">
                            <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                    <p class="text-darkui italic pr-4">"Kutipan Anda di sini. &#128525; &#128525;"
                    </p>
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#C4DEE3" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm bg-white border border-primary rounded-lg shadow dark:bg-dark dark:border-dark2">
            <div class="flex flex-col items-center pb-10 pt-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/testi-image1.jpg') }}" alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-primary2 dark:text-white">Bonnie Green</h5>
                <span class="text-sm text-darkui ">Information System Students</span>
                <div class="flex mt-4 md:mt-6">
                    <div class="w-6 h-6 mr-2 text-gray-500">
                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#C4DEE3" viewBox="0 0 18 14">
                            <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                    <p class="text-darkui italic pr-4">"Kutipan Anda di sini. &#128525; &#128525;"
                    </p>
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#C4DEE3" viewBox="0 0 18 14">
                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{{-- <------------------- Testimonials  --------------------> --}}

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D9D9D9" fill-opacity="1" d="M0,288L60,250.7C120,213,240,139,360,112C480,85,600,107,720,144C840,181,960,235,1080,256C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    {{-- <------------------- Footer --------------------> --}}
    <footer class="py-24 text-center bg-[#D9D9D9]">
        <!-- Logo -->
        <div class="mb-8">
            <img src="{{ asset('images/logo.png') }}" class="w-24 mx-auto" alt="Logo">
        </div>

    <!-- Menu -->
    <nav class="mb-8">
        <a href="#" class="text-darkui hover:text-tcolor font-bold mx-2">Home</a>
        <a href="#" class="text-darkui hover:text-tcolor mx-2 font-bold">About Us</a>
        <a href="#" class="text-darkui hover:text-tcolor mx-2 font-bold">Services</a>
        <a href="#" class="text-darkui hover:text-tcolor mx-2 font-bold">FAQ</a>
        <a href="#" class="text-darkui hover:text-tcolor mx-2 font-bold">Testimonials</a>
    </nav>

    <!-- Social Icons -->
    <div class="mb-8">
        <a href="#" class="text-darkui hover:text-tcolor mx-2"><i class="fa-solid fa-envelope"></i></a>
        <a href="#" class="text-darkui hover:text-tcolor mx-2"><i class="fas fa-phone"></i></a>
        <a href="#" class="text-darkui hover:text-tcolor mx-2"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="text-darkui hover:text-tcolor mx-2"><i class="fab fa-instagram"></i></a>
    </div>

        <!-- Copyright -->
        <p class="text-sm text-gray-600">© Copyright 2024 - All rights reserved.</p>
    </footer>
    {{-- <------------------- Footer --------------------> --}}



@endsection