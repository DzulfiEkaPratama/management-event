@extends('layouts.main')

@section('hero')

    <!-- ======= Hero Section ======= -->

    <section id="hero">

        <div class="layer">

            <div class="hero-container" data-aos="fade-up">

                <h1 class="text-oswald">"Judul Event"</h1>

                <h2>"<i class="icofont-wall-clock"></i> Tanggal Event"</h2>
                
                <button class="btn btn-primary w-50 mb-5 rounded-pill" type="submit"><a href="/daftar" style="color: white;">Daftar Event</a></button>

                <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>

            </div>

        </div>

    </section>

    <!-- End Hero -->

    {{-- Service Section --}}

    <section id="services" class="services">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Tentang Kegiatan</h2>

                <!-- <p>Backpacker Teaching awalnya sebuah komunitas ( atau bisa disebut organisasi non-formal ). awalnya berdiri dari sebuah tugas mata kuliah yang ditugaskan membuat vidio pembelajaran dan dari tugas itu hanya 15 mahasiswa kelas BSD yang bersedia mengerjakannya.</p> -->

            </div>

            <div class="row">

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="icon-box" data-aos="fade-up">

                        <div class="icon">

                            <img src="assets/asset/Untitled-2-01.png" class="layer-1">

                            <img src="assets/asset/Untitled-2-04.png" class="layer-2">

                        </div>

                        <h4 class="title"><a href="">Visi</a></h4>

                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nostrum autem numquam sit, assumenda perspiciatis beatae. Quos, obcaecati. Esse, soluta?</p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">

                        <div class="icon">

                            <img src="assets/asset/Untitled-2-02.png" class="layer-1">

                            <img src="assets/asset/Untitled-2-05.png" class="layer-2">

                        </div>

                        <h4 class="title"><a href="">Misi</a></h4>

                        <p class="description">

                            Lorem ipsum dolor sit.

                            <br>- Lorem ipsum dolor sit, amet consectetur adipisicing.

                            <br>- Lorem ipsum dolor sit amet consectetur.

                            <br>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.

                        </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">

                        <div class="icon">

                            <img src="assets/asset/Untitled-2-03.png" class="layer-1">

                            <img src="assets/asset/Untitled-2-06.png" class="layer-2">

                        </div>

                        <h4 class="title"><a href="">Tujuan</a></h4>

                        <p class="description">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore!

                            <br>2. Lorem ipsum dolor sit amet.

                            <br>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at asperiores temporibus esse provident eligendi odit impedit. Doloribus quis aut, porro nostrum dolore fuga.
                            <br>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, autem.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- End Services Section -->

    <!-- Pembicara Section -->

    <section id="peta" class="peta">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Pembicara</h2>
                
            </div>
            
            <div class="row" data-aos="fade-in">
                
                <div class="col-lg-12 d-flex justify-content-center">
                    
                    <img src="https://source.unsplash.com/featured/250x250/?people" class="img-fluid rounded-circle" alt="Workplace" usemap="#petamap">

                    <map class="petamap">
                        
                        <area shape="rect" coords="65,70,270,350" alt="Computer" href="computer.htm">
                        
                        <area shape="rect" coords="290,172,333,250" alt="Phone" href="phone.htm">

                        <area shape="circle" coords="337,300,44" alt="Cup of coffee" href="coffee.htm">
                        
                    </map>
                    
                </div>
                
            </div>
                
        </div>
        
        <div class="text-center mt-3" data-aos="fade-up">
            <h4>"Nama Pembicara"</h4>
        </div>

    </section>

    {{-- end section Pembicara --}}

    {{-- section kegiatan --}}

    <section id="portfolio" class="portfolio">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Jadwal Kegiatan</h2>

                <p></p>

                <!-- <h3>Goes To</h3> -->

            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-12 d-flex justify-content-center">

                    <ul id="portfolio-flters">

                        <li data-filter=".filter-1">Hari 1</li>

                        <li data-filter=".filter-2">Hari 2</li>

                        <li data-filter=".filter-3">Hari 3</li>

                        <li data-filter=".filter-4">Hari 4</li>

                        <li data-filter=".filter-5">Hari 5</li>

                    </ul>

                </div>

            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-12 col-md-6 portfolio-item filter-1">

                    <div class="portfolio-wrap">

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item" style="background-color: #ffffff57;">Hari 1</li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.00 WIB - 10.30 WIB</small><br>

                                <h3>Pembukaan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.30 WIB - 14.30 WIB</small><br>

                                <h3>Isi</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>14.30 WIB - 15.00 WIB</small><br>

                                <h3>Penutupan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-12 col-md-6 portfolio-item filter-2">

                    <div class="portfolio-wrap">

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item" style="background-color: #ffffff57;">Hari 2</li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.00 WIB - 10.30 WIB</small><br>

                                <h3>Pembukaan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.30 WIB - 14.30 WIB</small><br>

                                <h3>Isi</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>14.30 WIB - 15.00 WIB</small><br>

                                <h3>Penutupan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-12 col-md-6 portfolio-item filter-3">

                    <div class="portfolio-wrap">

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item" style="background-color: #ffffff57;">Hari 3</li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.00 WIB - 10.30 WIB</small><br>

                                <h3>Pembukaan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.30 WIB - 14.30 WIB</small><br>

                                <h3>Isi</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>14.30 WIB - 15.00 WIB</small><br>

                                <h3>Penutupan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-12 col-md-6 portfolio-item filter-4">

                        <div class="portfolio-wrap">

                            <ul class="list-group list-group-flush">

                                <li class="list-group-item" style="background-color: #ffffff57;">Hari 4</li>

                                <li class="list-group-item" style="background-color: #ffffff57;">

                                    <small>10.00 WIB - 10.30 WIB</small><br>

                                    <h3>Pembukaan</h3>
                                    
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                    
                                </li>

                                <li class="list-group-item" style="background-color: #ffffff57;">

                                    <small>10.30 WIB - 14.30 WIB</small><br>

                                    <h3>Isi</h3>
                                    
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                    
                                </li>

                                <li class="list-group-item" style="background-color: #ffffff57;">

                                    <small>14.30 WIB - 15.00 WIB</small><br>

                                    <h3>Penutupan</h3>
                                    
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                    
                                </li>

                            </ul>

                        </div>

                </div>

                <div class="col-lg-12 col-md-6 portfolio-item filter-5">

                    <div class="portfolio-wrap">

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item" style="background-color: #ffffff57;">Hari 5</li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.00 WIB - 10.30 WIB</small><br>

                                <h3>Pembukaan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>10.30 WIB - 14.30 WIB</small><br>

                                <h3>Isi</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                            <li class="list-group-item" style="background-color: #ffffff57;">

                                <small>14.30 WIB - 15.00 WIB</small><br>

                                <h3>Penutupan</h3>
                                
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla, beatae accusamus culpa laborum illo dolores, ad magnam voluptates odio deleniti iusto nisi iste dolore tempore officiis pariatur quae animi est. Veritatis animi, autem est temporibus praesentium ducimus impedit exercitationem dolorum, sapiente non illum vitae modi cupiditate, quos saepe inventore.</p>
                                
                            </li>

                        </ul>

                    </div>

                </div>

        </div>

    </section>

    {{-- end section kegiatan --}}

@endsection