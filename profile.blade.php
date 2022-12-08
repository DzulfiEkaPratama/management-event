@extends('layouts.main')

@section('hero')

{{-- List Event card Besar Section --}}

<section id="profile" class="profile section-bg">

    <div class="container mt-5" style="border-radius: 50px 50px 5px 5px;">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">

            <h2 style="padding-top: 40px;">Profile</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

            <div class="d-flex justify-content-center col-lg-12">

                <form action="" method="post" role="form" class="php-email-form mt-4 mb-3 w-75">

                    <div class="form-group">

                        <h6 class="ml-3">Nama</h6>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required disabled muted>

                        <div class="validate"></div>

                    </div>

                    <div class="form-group">

                        <h6 class="ml-3">Email</h6>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required disabled muted>

                        <div class="validate"></div>

                    </div>

                    <div class="form-group">

                        <h6 class="ml-3">No. Telephone</h6>
                        <input type="number" name="notel" class="form-control" id="notel" placeholder="No. Telephone" onkeypress="return onlyNumberKey(event)" required disabled muted>

                        <div class="validate"></div>

                    </div>
    
                    <div class="form-row">

                        <div class="col-md-6 form-group">

                            <h6 class="ml-3">Kota</h6>
                            <select class="form-control" name="kelamin" id="kelamin" placeholeder="Jenis Kelamin" required disabled muted>
                                <option value="" muted>-- Kota --</option>
                                <option value="Banda Aceh">Banda Aceh</option>
                                <option value="Langsa">Langsa</option>                            
                                <option value="Lhokseumawe">Lhokseumawe</option>                            
                                <option value="Sabang">Sabang</option>                            
                                <option value="Subulussalam">Subulussalam</option>                            
                                <option value="Denpasar">Denpasar</option>                            
                                <option value="Pangkalpinang">Pangkalpinang</option>                            
                                <option value="Cilegon">Cilegon</option>                            
                                <option value="Serang">Serang</option>                            
                                <option value="Tanggerang Selatan">Tanggerang Selatan</option>                            
                                <option value="Tanggerang">Tanggerang</option>                            
                                <option value="Bengkulu">Bengkulu</option>                            
                                <option value="Yogyakarta">Yogyakarta</option>                            
                                <option value="Gorontalo">Gorontalo</option>                            
                                <option value="Jakarta Barat">Jakarta Barat</option>                            
                                <option value="Jakarta Pusat">Jakarta Pusat</option>                            
                                <option value="Jakarta Selatan">Jakarta Selatan</option>                            
                                <option value="Jakarta Timur">Jakarta Timur</option>                            
                                <option value="Jakarta Utara">Jakarta Utara</option>                            
                                <option value="Sungai Penuh">Sungai Penuh</option>                            
                                <option value="Jambi">Jambi</option>                            
                                <option value="Bandung">Bandung</option>                            
                                <option value="Bekasi">Bekasi</option>                            
                                <option value="Bogor">Bogor</option>                            
                                <option value="Cimahi">Cimahi</option>                            
                                <option value="Cirebon">Cirebon</option>                            
                                <option value="Depok">Depok</option>                            
                                <option value="Sukabumi">Sukabumi</option>                            
                                <option value="Tasikmalaya">Tasikmalaya</option>                            
                                <option value="Banjar">Banjar</option>                            
                                <option value="Magelang">Magelang</option>                            
                                <option value="Pekalongan">Pekalongan</option>                            
                                <option value="Sala Tiga">Sala Tiga</option>                            
                                <option value="Semarang">Semarang</option>                            
                                <option value="Surakarta">Surakarta</option>                            
                                <option value="Tegal">Tegal</option>                            
                                <option value="Batu">Batu</option>                            
                                <option value="Blitar">Blitar</option>                            
                                <option value="Kediri">Kediri</option>                            
                                <option value="Madiun">Madiun</option>                            
                                <option value="Malang">Malang</option>                            
                                <option value="Mojokerto">Mojokerto</option>                            
                                <option value="Pasuruan">Pasuruan</option>                            
                                <option value="Probolinggo">Probolinggo</option>                            
                                <option value="Surabaya">Surabaya</option>                            
                                <option value="Pontianak">Pontianak</option>                            
                                <option value="Singkawang">Singkawang</option>                            
                                <option value="Banjarbaru">Banjarbaru</option>                            
                                <option value="Banjarmasin">Banjarmasin</option>                            
                                <option value="Palangkaraya">Palangkaraya</option>                            
                                <option value="Balikpapan">Balikpapan</option>                            
                                <option value="Bontang">Bontang</option>                            
                                <option value="Samarinda">Samarinda</option>                            
                                <option value="Tarakan">Tarakan</option>                            
                                <option value="Batam">Batam</option>                            
                                <option value="Tanjung Pinang">Tanjung Pinang</option>                            
                                <option value="Bandar Lampung">Bandar Lampung</option>                            
                                <option value="Metro">Metro</option>                            
                                <option value="Ternate">Ternate</option>                            
                                <option value="Tidore Kepulauan">Tidore Kepulauan</option>                            
                                <option value="Ambon">Ambon</option>                            
                                <option value="Tuai">Tuai</option>                            
                                <option value="Bima">Bima</option>                            
                                <option value="Mataram">Mataram</option>                            
                                <option value="Kupang">Kupang</option>                            
                                <option value="Sorong">Sorong</option>                            
                                <option value="Jayapura">Jayapura</option>                            
                                <option value="Dumai">Dmai</uoption>                            
                                <option value="Pekanbaru">Pekanbaru</option>                            
                                <option value="Makassar">Makassar</option>                            
                                <option value="Palopo">Palopo</option>                            
                                <option value="Parepare">Parepare</option>                            
                                <option value="Palu">Palu</option>                            
                                <option value="Baubau">Baubau</option>                            
                                <option value="Kendari">Kendari</option>                            
                                <option value="Bitung">Bitung</option>                            
                                <option value="Kotamobagu">Kotamobagu</option>                            
                                <option value="Manado">Manado</option>                            
                                <option value="Tomohon">Tomohon</option>                            
                                <option value="Bukit Tinggi">Bukit Tinggi</option>                            
                                <option value="Padang">Padang</option>                            
                                <option value="Padang Panjang">Padang Panjang</option>                            
                                <option value="Pariaman">Pariaman</option>                            
                                <option value="Payakumbuh">Payakumbuh</option>                            
                                <option value="Sawahlunto">Sawahlunto</option>                            
                                <option value="Solok">Solok</option>                            
                                <option value="LubukLinggau">LubukLinggau</option>                            
                                <option value="Pagar Alam">Pagar Alam</option>                            
                                <option value="Palembang">Palembang</option>                            
                                <option value="Prabumulih">Prabumulih</option>                            
                                <option value="Sekayu">Sekayu</option>                            
                                <option value="Gunungsitoli">Gunungsitoli</option>                            
                                <option value="Medan">Medan</option>                            
                                <option value="Padang Sidempuan">Padang Sidempuan</option>                            
                                <option value="Pematangsiantar">Pematangsiantar</option>                            
                                <option value="Sibolga">Sibolga</option>                            
                                <option value="TanjungBalai">TanjungBalai</option>                            
                                <option value="Tebing Tinggi">Tebing Tinggi</option>                            
                            </select>

                            <div class="validate"></div>

                        </div>

                        <div class="col-md-6 form-group">

                            <h6 class="ml-3">Provinsi</h5>
                            <select class="form-control" name="kelamin" id="kelamin" placeholeder="Jenis Kelamin" required disabled muted>
                                <option value="" muted>-- Provinsi --</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Bali">Bali</option>                            
                                <option value="Banten">Banten</option>                            
                                <option value="Bengkulu">Bengkulu</option>                                                                          
                                <option value="D.I Yogyakarta">D.I Yogyakarta</option>                            
                                <option value="D.K.I Jakatra">D.K.I Jakatra</option>                            
                                <option value="Gorontalo">Gorontalo</option>                            
                                <option value="Jambi">Jambi</option>                            
                                <option value="Jawa Barat">Jawa Barat</option>                            
                                <option value="Jawa Tengah">Jawa Tengah</option>                            
                                <option value="Jawa Timur">Jawa Timur</option>                            
                                <option value="Kalimantan Barat">Kalimantan Barat</option>                            
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>                            
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>                            
                                <option value="Kalimantan Timur">Kalimantan Timur</option>                            
                                <option value="Kalimantan Utara">Kalimantan Utara</option>                            
                                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>                            
                                <option value="Kepulauan Riau">Kepulauan Riau</option>                            
                                <option value="Lampung">Lampung</option>                            
                                <option value="Maluku">Maluku</option>                            
                                <option value="Maluku Utara">Maluku Utara</option>                            
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>                            
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>                            
                                <option value="Papua">Papua</option>                            
                                <option value="Papua Barat">Papua Barat</option>                            
                                <option value="Riau">Riau</option>                            
                                <option value="Sulawesi Barat">Sulawesi Barat</option>                            
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>                            
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>                            
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>                            
                                <option value="Sulawesi Utara">Sulawesi Utara</option>                            
                                <option value="Sumatra Barat">Sumatra Barat</option>                            
                                <option value="Sumatra Selatan">Sumatra Selatan</option>                            
                                <option value="Sumatra Utara">Sumatra Utara</option>                            
                            </select>

                            <div class="validate"></div>

                        </div>

                    </div>

                </form>

            </div>
        </div>

    </div>

</section>

{{-- End --}}

@endsection
