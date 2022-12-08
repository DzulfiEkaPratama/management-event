@extends('layouts.main')

@section('hero')

    <!-- ======= Hero Section ======= -->

    <section id="hero">
        <div class="layer">
            <div class="hero-container" data-aos="fade-up">
                <h1 class="text-oswald">Management Event</h1>

                @auth
                    <h2>Manage Your Events!!</h2>
                @else
                    <h2>Find Your Events!!</h2>
                @endauth

                <a href="/detaillistevent" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
            </div>
        </div>
    </section>

    <!-- End Hero -->

    {{-- List Event card Besar Section --}}

    <section id="search" class="services">

        {{-- Search Bar --}}

        <h2 class="text-center mb-4">Search</h2>

        <div class="row justify-content-center mx-auto w-100">    

            <div class="col-md-6">

                <div class="input-group mb-5">

                    <input type="text" class="form-control" placeholder="Search.." name="search">

                    <button class="btn btn-primary" type="sumbit">Search</button>

                </div>

            </div>

        </div>
        {{-- End --}}

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                {{-- <h2>List Event</h2> --}}

                <!-- <p>Backpacker Teaching awalnya sebuah komunitas ( atau bisa disebut organisasi non-formal ). awalnya berdiri dari sebuah tugas mata kuliah yang ditugaskan membuat vidio pembelajaran dan dari tugas itu hanya 15 mahasiswa kelas BSD yang bersedia mengerjakannya.</p> -->

            </div>

            <h2 class="mb-4">List Event</h2> 

            <div class="card mb-5 bg-light mt-5 mx-5 border-0 text-black" style="background-color: transparent; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.295);">

                <img src="https://source.unsplash.com/featured/1000x350?" class="card-img-top" alt="">

                <div class="card-body">

                    <small class="text-start">  

                        <ul style="list-style: none;">

                            <li>

                                <h5><i class="icofont-calendar"></i> Senin, 06 October 2022, <i class="icofont-wall-clock"></i> 14:00 - Selesai</h5>

                            </li>

                            <li>

                                <h5><i class="icofont-location-pin"></i> Indonesia</h5>

                            </li>

                            <li>

                                <h5><i class="icofont-globe"></i> Daring</h5>

                            </li>

                        </ul>

                    </small>

                    <div class="text-center">
                    
                        <a href="/detail" class="text-decoration-none btn btn-primary">See More</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- End Event card Besar Section -->

    <!-- List Event Card Kecil Section -->

    <section id="listevent" class="peta"> 

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                {{-- <h2>List Event</h2> --}}

                <!-- <p>Backpacker Teaching awalnya sebuah komunitas ( atau bisa disebut organisasi non-formal ). awalnya berdiri dari sebuah tugas mata kuliah yang ditugaskan membuat vidio pembelajaran dan dari tugas itu hanya 15 mahasiswa kelas BSD yang bersedia mengerjakannya.</p> -->

            </div>          

            <div class="row">

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="card" style="width: 23rem;">

                    <img src="https://source.unsplash.com/featured/500x400/?" class="card-img-top" alt="">

                    <div class="card-body">                        

                        <ul style="list-style: none;">

                            <li>

                                <h6><i class="icofont-calendar"></i> Senin, 06 October 2022, <i class="icofont-wall-clock"></i> 14:00 - Selesai</h6>

                            </li>

                            <li>

                                <h6><i class="icofont-location-pin"></i> Indonesia</h6>

                            </li>

                            <li>

                                <h6><i class="icofont-globe"></i> Daring</h6>

                            </li>

                        </ul>

                        <a href="/detail" class="btn btn-primary">See More</a>

                    </div>
                    
                    </div>

                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="card" style="width: 23rem;">

                    <img src="https://source.unsplash.com/featured/500x400/?" class="card-img-top" alt="">

                    <div class="card-body">                        

                        <ul style="list-style: none;">

                            <li>

                                <h6><i class="icofont-calendar"></i> Senin, 06 October 2022, <i class="icofont-wall-clock"></i> 14:00 - Selesai</h6>

                            </li>

                            <li>

                                <h6><i class="icofont-location-pin"></i> Indonesia</h6>

                            </li>

                            <li>

                                <h6><i class="icofont-globe"></i> Daring</h6>

                            </li>

                        </ul>

                        <a href="/detail" class="btn btn-primary">See More</a>

                    </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="card" style="width: 23rem;">

                    <img src="https://source.unsplash.com/featured/500x400/?" class="card-img-top" alt="">

                    <div class="card-body">                        

                        <ul style="list-style: none;">

                            <li>

                                <h6><i class="icofont-calendar"></i> Senin, 06 October 2022, <i class="icofont-wall-clock"></i> 14:00 - Selesai</h6>

                            </li>

                            <li>

                                <h6><i class="icofont-location-pin"></i> Indonesia</h6>

                            </li>

                            <li>

                                <h6><i class="icofont-globe"></i> Daring</h6>

                            </li>

                        </ul>

                        <a href="/detail" class="btn btn-primary">See More</a>

                    </div>
                    
                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- end section peta --}}

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact section-bg">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Kontak Kami</h2>

                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->

            </div>



            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                    <div class="info-box mb-4">

                        <img src="assets/asset/Untitled-4-01.png" height="40px" width="52px">

                        <h3>Alamat Kami</h3>

                        <p>Jalan Bukit Sikumbang, Kelurahan Kecamatan No.103, Rangkapan Jaya Baru, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16433</p>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="info-box  mb-4">

                        <img src="assets/asset/Untitled-4-02.png" height="40px" width="52px">

                        <h3>Email</h3>

                        <p>example@gmail.com</p>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="info-box  mb-4">

                        <img src="assets/asset/Untitled-4-03.png" height="40px" width="52px">

                        <h3>Kontak</h3>

                        <p>+0123456789</p>

                    </div>

                </div>



            </div>



            <div class="row" data-aos="fade-up" data-aos-delay="200">



                <div class="col-lg-6 ">

                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.978034873468!2d106.77396595071701!3d-6.3968319643235665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e966f00b8b2b%3A0x468862342db39278!2sSMP%20%26%20SMK%20ATLANTIS%20PLUS!5e0!3m2!1sid!2sid!4v1612415711081!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

                </div>



                <div class="col-lg-6">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                        <div class="form-row">

                            <div class="col-md-6 form-group">

                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                                <div class="validate"></div>

                            </div>

                            <div class="col-md-6 form-group">

                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu"
                                    data-rule="email" data-msg="Please enter a valid email" />

                                <div class="validate"></div>

                            </div>

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                            <div class="validate"></div>

                        </div>

                        <div class="form-group">

                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Tuliskan sesuatu untuk kami" placeholder="Pesan"></textarea>

                            <div class="validate"></div>

                        </div>

                        <div class="mb-3">

                            <div class="loading">Loading</div>

                            <div class="error-message"></div>

                            <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>

                        </div>

                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>

                    </form>

                </div>
            </div>
        </div>

    </section>

    <!-- End Contact Section -->

@endsection
