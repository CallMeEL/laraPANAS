@extends('home.master')

@section('content')
        <!-- banner -->
        <div class="container-fluid banner">
            <div class="container text-center">
              <h3 class="p-3 mb-2 bg-light text-dark">Selamat Datang di Website PANAS</h3>
              <h4 class="p-3 mb-2 bg-success text-white">Ayo Selamatkan Bumi Kita Dengan Mengurangi Sampah Plastik</h4>
              <a href="#layanan">
                <button type="button" class="btn btn-danger btn-lg">
                  Layanan
                </button>
              </a>
            </div>
          </div>
          <!-- layanan -->
          <div class="container-fluid layanan pt-5 pb-5">
            <div class="container text-center">
              <h2 class="display-3" id="layanan">Layanan</h2>
              <p>
                Jual Sampah Plastik Anda dan Dapatkan Uang!
              </p>
              <div class="row pt-4">
                {{-- <div class="col-md-4">
                  <span class="lingkaran"><i class="fas fa-money-bill fa-5x"></i></span>
                  <div>
                    <a href="{{ route('pengiriman.create') }}"><h3 class="mt-3 btn btn-secondary">Jual Sampah</h3></a>
                  </div>
                  <p>
                    Anda dapat menjual sampah plastik dimanapun dan kapanpun!
                  </p>
                </div> --}}

                <div class="col-md-6">
                  <span class="lingkaran"><i class="fas fa-coins fa-5x"></i></span>
                  <div>
                     <a href="{{ route('sampah.create') }}"><h3 class="mt-3 btn btn-secondary">Jual Sampah</h3></a>
                  </div>
                  <p>
                    Ayo jual sampah, dapatkan uang dan lindungi bumi kita
                  </p>
                </div>

                <div class="col-md-6">
                  <span class="lingkaran"
                    ><i class="fas fa-chart-bar fa-5x"></i></span>
                  <div>
                    <a href="{{ route('sampah.tabelsampah')}}"><h3 class="mt-3 btn btn-secondary">Hasil Penjualan</h3></a>
                  </div>
                  <p>
                    Sekecil apapun tindakan kita untuk mengurangi sampah itu akan berpengaruh
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- portofolio -->
          <div class="container-fluid pt-5 pb-5 bg-light">
            <div class="container text-center">
              <h2 class="display-3" id="portofolio">Sampah</h2>
              <p>
                  Menurut World Health Organization (WHO), sampah adalah barang yang berasal dari kegiatan manusia yang tidak lagi digunakan, baik tidak dipakai, tidak disenangi, ataupun yang dibuang.
                  Pengertian tersebut mengartikan bahwa limbah sisa buangan merupakan benda yang tidak disenangi sehingga banyak orang yang akan membuangnya ke alam.
                  Banyak sisa buangan dari material tertentu yang membutuhkan waktu lama untuk terurai di alam dan menimbulkan sejumlah masalah pada lingkungan.
              <br><br>
                  Jenis Sampah Berdasarkan Sifatnya Jika menggolongkan sampah berdasarkan sifatnya, maka material sisa tersebut dapat dibagi menjadi dua jenis, yaitu organik (degradable) dan anorganik (undegradable). Sifat ini mempunyai kaitan dengan material buangan dan proses dekomposisinya di alam. <br>
                  1. Sampah Organik adalah material sisa yang dihasilkan dari bahan hayati, sehingga mudah terdegradasi secara alami oleh mikroba. Sampah jenis ini sangat mudah membusuk dan biasanya berasal dari sisa makanan, kulit buah, sayur, daun, dan kayu. Material seperti ini banyak dihasilkan di dapur rumah tangga dan pasar. <br>
                  2. Sampah Anorganik adalah material sisa yang dihasilkan dari bahan non-hayati berupa olahan tambang dan produk sintetik, sehingga sulit membusuk. Jenis ini tidak mudah terdegradasi oleh mikroba jadi butuh waktu lama agar dapat terurai. Sampah ini bisa berbahan plastik, kaca, logam, keramik, dan kertas.

              <br><br>
              Sampah merupakan permasalahan serius yang sedang dihadapi oleh manusia. Pasalnya tidak semua sampah bisa terurai secara cepat, bahkan ada yang butuh ratusan tahun untuk hancur. Sementara itu jumlah sampah terus bertambah setiap harinya, sehingga ada ketidakseimbangan antara pertambahan dan penguraian.
              Apabila dibiarkan terus menerus tanpa tindaklanjut, sampah akan berdampak buruk bagi kehidupan.


              </p>
              <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                  <div class="card crop-img">
                    <img src="{{ ('img/kesehatan.jpg') }}" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                      <h5 class="card-title">Dampak Bagi Kesehatan</h5>
                      <p class="card-text">
                        Sampah yang sudah bertumpuk dalam waktu lama akan menjadi sarang perkembangbiakan organisme penyebab penyakit berbahaya. Tidak hanya itu, makhluk hidup lain yang menyukai tempat kotor juga akan tertarik untuk mendatangi tumpukan sampah, seperti virus, bakteri, lalat, belatung, bahkan anjing dan kucing.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card crop-img">
                    <img src="{{ ('img/lingkungan.jpg') }}" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                      <h5 class="card-title">Dampak Bagi Lingkungan</h5>
                      <p class="card-text">
                        Tidak hanya berdampak buruk bagi kesehatan manusia, limbah juga berakibat fatal terhadap lingkungan di sekitarnya. Apalagi rata-rata masyarakat menjadikan selokan dan aliran sungai sebagai lokasi pembuangan limbah baik yang berwujud padat ataupun cair. Padahal limbah tersebut dapat menyebabkan pencemaran pada ekosistem sungai.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card crop-img">
                    <img src="{{ ('img/tanah.jpg') }}" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                      <h5 class="card-title">Dampak Bagi Tanah</h5>
                      <p class="card-text">
                        Material sisa juga banyak dihasilkan dari sektor pertanian dan perkebunan. Walaupun limbah dari sektor tersebut dianggap tidak berbahaya, karena bersifat organik sehingga mudah terurai. Akan tetapi pada kenyataannya saat ini sudah banyak bahan kimia yang digunakan pada sektor tersebut.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                  <div class="card crop-img">
                    <img src="{{ ('img/sosial.jpg') }}" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                      <h5 class="card-title">Dampak Bagi Sosial dan Bagi Ekonomi</h5>
                      <p class="card-text">
                        Limbah yang terus bertumpuk dalam waktu lama juga berimbas pada kehidupan sosial dan ekonomi masyarakat. Sebagai contoh penyakit yang ditimbulkan oleh lingkungan kotor tidak jarang yang membutuhkan penanganan serius dari tenaga medis. Pada kondisi seperti tentu saja diperlukan biaya yang lebih besar untuk berobat.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card crop-img">
                    <img src="{{ ('img/bencana.jpg') }}" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                      <h5 class="card-title">Dampak Bencana</h5>
                      <p class="card-text">
                        Masyarakat mempunyai kecenderungan untuk membuang limbah ke aliran air seperti selokan dan sungai. Kondisi tersebut jika dibiarkan terus menerus akan mengakibatkan penyumbatan aliran air. Alih-alih mengalir, air justru akan tertampung dan semakin bertambah tinggi.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
            </div>
          </div>
          <!-- tentang -->
          <div class="container-fluid pt-5 pb-5">
            <div class="container">
              <h2 class="display-3 text-center" id="tentang">Tentang PANAS</h2>
              <p class="text-center">
                PENGELOLAAN SAMPAH PLASTIK
              </p>
              <div class="clearfix pt-5">
                <img
                  src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg"
                  class="col-md-6 float-md-end mb-3 crop-img"
                  width="300"
                  height="300"
                />
                <p>
                  PANAS adalah sebuah website yang berguna sebagai perantara dalam jual beli
                  sampah. Perlu diketahui Berdasarkan data Kementerian Lingkungan Hidup dan
                  Kehutanan (KLHK), Indonesia menghasilkan 67,8 juta ton sampah pada 2020.
                </p>
                <p>
                  Oleh karena itu diharapkan dengan adanya website PANAS ini dapat membantu
                  masyarakat sekitar dalam menjual sampah plastik.
                </p>
                <p>
                  Jika masyarakat menjual
                  sampah plastik pada PANAS maka pegawai dari PANAS akan menuju ke lokasi
                  masyarakat tersebut sehingga masyarakat tidak perlu menuju lokasi cabang
                  PANAS. Masyarakat yang menjual sampah plastik pada website PANAS juga
                  mendapat uang dari hasil penjualan sampah tersebut.
                </p>
                <p>
                  Dengan dipermudah menjual
                  sampah plastik melalui website dan mendapatkan uang dari hasil menjual sampah
                  plastik maka masyarakat akan terdorong untuk tidak membuang sampah plastik
                  sembarangan.
                </p>
              </div>
            </div>
          </div>
          <!-- tim -->
          <div class="container-fluid pt-5 pb-5 bg-light">
            <div class="container text-center">
              <h2 class="display-3" id="staff">Tim Kami</h2>
              <p>
                  Website PANAS ini dibuat dengan tujuan untuk memenuhi tugas mata kuliah
                  Pemrograman Web
              </p>
              <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-3 text-center tim">
                  <img src="{{ ('img/Rizky.png') }}" class="rounded-circle mb-3">
                  <h4>Rizky Rizaldi Kurniawan</h4>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    <a href="https://www.instagram.com/rzkyrizld_/" class="social"><i class="fab fa-instagram"></i></a>
                    rzkyrizld_</p>
                </div>
                <div class="col-md-3 text-center tim">
                  <img src="{{ ('img/manuel.png') }}" class="rounded-circle mb-3">
                  <h4>Manuel Tanbica Graciello</h4>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    <a href="https://www.instagram.com/nueltan15_/" class="social"><i class="fab fa-instagram"></i></a>
                    nueltan15_</p>
                </div>
                <div class="col-md-3 text-center tim">
                  <img src="{{ ('img/rachel.png') }}" class="rounded-circle mb-3">
                  <h4>Rachel Nathania Nugroho</h4>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    <a href="https://www.instagram.com/rachel_nathanian/" class="social"><i class="fab fa-instagram"></i></a>
                    rachel_nathanian</p>
                </div>
                <div class="col-md-3 text-center tim">
                  <img src="{{ ('img/theodora.jpg') }}" class="rounded-circle mb-3">
                  <h4>Theodora Monica</h4>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    <a href="https://www.instagram.com/theodrm/" class="social"><i class="fab fa-instagram"></i></a>
                    theodrm</p>
                </div>
              </div>
            </div>
          </div>

          <!-- kontak -->
          <div class="container-fluid pt-5 pb-5 kontak">
            <div class="container">
              <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
              <p class="text-center">
                Kritik dan saran dapat membantu meningkatkan kualitas web PANAS
              </p>
              <div class="row pb-3">
                <div class="col-md-6">
                  <input
                    class="form-control form-control-lg mb-3"
                    type="text"
                    placeholder="Nama"
                  />
                  <input
                    class="form-control form-control-lg mb-3"
                    type="text"
                    placeholder="Email"
                  />
                  <input
                    class="form-control form-control-lg"
                    type="text"
                    placeholder="No. Phone"
                  />
                </div>
                <div class="col-md-6">
                  <textarea class="form-control form-control-lg" rows="5"></textarea>
                </div>
              </div>
              <div class="col-md-3 mx-auto text-center">
                <button type="button" class="btn btn-danger btn-lg">
                  Kirim Pesan
                </button>
              </div>
            </div>
          </div>
@endsection
