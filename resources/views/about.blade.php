<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Blast fast website blog with new laravel cms blog using lava web apps.">
        <meta name="author" content="https://lavapos.vercel.app/">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <title>PT.IGG</title>
        <link rel="icon" href="https://mesinkasironline.web.app/img/createwebsitelaravel.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css" /> 
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> 
        <script src="https://unpkg.com/vue/dist/vue.js"></script> 
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" /
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/clean-blog.min.css') }}" rel="stylesheet">
    </head>
    <body> 
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary shadow border-bottom" id="mainNav">
            <div class="container">
                <a class="navbar-brand  text-white" href="/">PT.IGG</a>
                <button class="navbar-toggler navbar-toggler-right text-white" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    PT.IGG
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="ml-auto navbar-nav  text-white">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">
                                Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('blog') }}">
                                Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('about') }}">
                                Divisi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('contact') }}">
                                Pengumuman Tender & Lelang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid lead">
            <div class="row">
                <div class="col-12 col-md-12 p-3 p-md-5 text-center"> 
                    <img src="{{URL::asset('/uploads/ss.png')}}" class="img-fluid animate__animated animate__bounceInDown" />
                    <div class="p-3 p-md-5 ">
                        <br>
                        <h1>DIVISI</h1>
                        <h3>Terdapat 5 Divisi Pada PT.IGG</h3>
                        <div class="col-12 col-md-12 p-3 p-md-5">
                            <h4> 1. Divisi Keuangan dan Logistik
                            </h4>
                            <p> a. Bekerja sama dengan manajer lain, bertugas merencanakan dan 
                            meramalkan beberapa aspek dalam perusahaan termasuk perencanaan 
                            umum keuangan perusahaan.
                            <br>b. Bertugas mengambil keputusan penting investasi dan berbagai 
                            pembiayaan serta semua hal yang berkaitan dengan keputusan tersebut.
                            <br>c. Bertugas menjalankan dan mengoperasikan roda kehidupan perusahaan 
                            seefisien mungkin dengan menjalin kerjasama dengan manajer lainnya.
                            <br>d. Bertugas sebagai penghubung antara perusahaan dengan pasar keuangan 
                            sehingga bisa mendapatkan dana-dana hasil produksi perusahaan maupun 
                            surat berharga perusahaan.</p> 

                            <h4> 2. Divisi Pengadaan dan Pemasaran
                            </h4>
                            <p> a. Bertanggung jawab terhadap manajemen bagian pemasaran.
                                <br>b. Bertanggung jawab terhadap perolehan hasil penjualan dan penggunaan 
                                dana promosi.
                                <br>c. Bertanggung jawab sebagai koordinator manajer produk dan manajer 
                                penjualan.
                                <br>d. Membina dan membimbing seluruh karyawan bagian pemasaran.
                                <br>e. Membuat laporan pemasaran yang ditujukan untuk direksi.</p> 
                        
                            <h4> 3. Divisi Sumber Daya Manusia dan Umum
                            </h4>
                            <p> a. Merencanakan dan mengkoordinasikan tenaga kerja perusahaan dan 
                                hanya mempekerjakan karyawan berbakat.
                                <br> b. Menjadi penghubung antara manajemen dengan karyawan.
                                <br> c. Melakukan pelayanan karyawan.
                                <br> d. Memberi masukan kepada manajer mengenai kebijakan perusahaan.
                                <br> e. Mengkoordinir dan mengawasi pekerjaan para pegawai khusus dan staf 
                                pendukung.
                                <br> f. Mengawasi proses perekrutan, wawancara kerja, seleksi dan penempatan 
                                karyawanbaru.
                                <br> g. Menangani isu-isu ketenagakerjaan.</p>
                            
                            <h4> 4. Proyek
                            </h4>

                            <h4> 5. Project PGT
                            </h4>

                                </div>
                            </div> 
                            <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script> 
                            <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script> 
                            <script src="https://bstp.sourceforge.io/calulators.js"></script> 
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> 
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
                        </body>
                        </html>