@extends('layouts.app')

@section('title')
    Ketentuan Tokokoi | Tokokoi
@endsection

@section('content')
<!-- Page Content -->
    <div class="page-content page-home">
      <section class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div
                class="nav flex-column nav-pills new-pill"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
                data-aos="fade-right"
                data-aos-delay="100"
              >
                <a
                  class="nav-link active"
                  id="v-pills-home-tab"
                  data-toggle="pill"
                  href="#v-pills-home"
                  role="tab"
                  aria-controls="v-pills-home"
                  aria-selected="true"
                  >Tentang TokoKoi</a
                >
                <a
                  class="nav-link"
                  id="v-pills-pendahuluan-tab"
                  data-toggle="pill"
                  href="#v-pills-pendahuluan"
                  role="tab"
                  aria-controls="v-pills-pendahuluan"
                  aria-selected="false"
                  >Pendahuluan</a
                >
                <a
                  class="nav-link"
                  id="v-pills-definisi-tab"
                  data-toggle="pill"
                  href="#v-pills-definisi"
                  role="tab"
                  aria-controls="v-pills-definisi"
                  aria-selected="false"
                  >Definisi</a
                >
                <a
                  class="nav-link"
                  id="v-pills-layanan-tab"
                  data-toggle="pill"
                  href="#v-pills-layanan"
                  role="tab"
                  aria-controls="v-pills-layanan"
                  aria-selected="false"
                  >Layanan</a
                >
                <a
                  class="nav-link"
                  id="v-pills-pengiriman-tab"
                  data-toggle="pill"
                  href="#v-pills-pengiriman"
                  role="tab"
                  aria-controls="v-pills-pengiriman"
                  aria-selected="false"
                  >Metode Pengiriman</a
                >
                <a
                  class="nav-link"
                  id="v-pills-akun-tab"
                  data-toggle="pill"
                  href="#v-pills-akun"
                  role="tab"
                  aria-controls="v-pills-akun"
                  aria-selected="false"
                  >Akun</a
                >
                <a
                  class="nav-link"
                  id="v-pills-lapak-tab"
                  data-toggle="pill"
                  href="#v-pills-lapak"
                  role="tab"
                  aria-controls="v-pills-lapak"
                  aria-selected="false"
                  >Lapak</a
                >
                <a
                  class="nav-link"
                  id="v-pills-transaksi-tab"
                  data-toggle="pill"
                  href="#v-pills-transaksi"
                  role="tab"
                  aria-controls="v-pills-transaksi"
                  aria-selected="false"
                  >Transaksi</a
                >
                <a
                  class="nav-link"
                  id="v-pills-terlarang-tab"
                  data-toggle="pill"
                  href="#v-pills-terlarang"
                  role="tab"
                  aria-controls="v-pills-terlarang"
                  aria-selected="false"
                  >Barang Terlarang</a
                >
                <a
                  class="nav-link"
                  id="v-pills-dana-tab"
                  data-toggle="pill"
                  href="#v-pills-dana"
                  role="tab"
                  aria-controls="v-pills-dana"
                  aria-selected="false"
                  >Pencairan Dana</a
                >
                <a
                  class="nav-link"
                  id="v-pills-gantirugi-tab"
                  data-toggle="pill"
                  href="#v-pills-gantirugi"
                  role="tab"
                  aria-controls="v-pills-gantirugi"
                  aria-selected="false"
                  >Ganti Rugi</a
                >
                <a
                  class="nav-link"
                  id="v-pills-sanksi-tab"
                  data-toggle="pill"
                  href="#v-pills-sanksi"
                  role="tab"
                  aria-controls="v-pills-sanksi"
                  aria-selected="false"
                  >Sanksi</a
                >
                <a
                  class="nav-link"
                  id="v-pills-privasi-tab"
                  data-toggle="pill"
                  href="#v-pills-privasi"
                  role="tab"
                  aria-controls="v-pills-privasi"
                  aria-selected="false"
                  >Kebijakan Privasi</a
                >
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="v-pills-home"
                  role="tabpanel"
                  aria-labelledby="v-pills-home-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div
                          class="col-12"
                          data-aos="fade-left"
                          data-aos-delay="100"
                        >
                          <h5 class="judul-new">Tentang TokoKoi</h5>
                          <h5 class="sub-judul-new">
                            Tokokoi hadir sebagai website marketplace ikan koi
                            di Indonesia, perbedaan mendasar antara tokokoi
                            dengan marketplace yang lain tidak hanya terletak di
                            komoditas utama yang dijajakan, tokokoi membangun
                            algoritma yang mengakomodir seluruh proses transaksi
                            dimulai dari pengkategorian jenis ikan koi sampai
                            dengan mekanisme checkout dan transaksi
                            pembayaran.<br /><br />
                            Kehadiran marketplace yang selama ini sudah hadir di
                            Indonesia dirasa masih kurang mewakili kebutuhan
                            transaksi ikan hias di Indonesia, karena komponen
                            transaksinya yang dirasa belum memenuhi spesifikasi
                            yang diharapkan oleh penghobi dan pembudidaya ikan
                            koi yang selama ini melakukan transaksi. Untuk itu
                            kami berusahan membangun ekosistem yang dapat
                            mengakomodasi kebutuhan penghobi dan pembudidaya
                            ikan koi dalam bertransaksi.
                          </h5>
                          <h5 class="sub-judul-new">
                            Visi TokoKoi:
                            <strong class="tebal"
                              >Menjadi online marketplace ikan koi nomor 1 di
                              Indonesia</strong
                            >
                          </h5>
                          <h5 class="sub-judul-new">
                            Misi TokoKoi:
                            <strong class="tebal"
                              >Memberdayakan pembudidaya koi yang ada di seluruh
                              penjuru Indonesia</strong
                            >
                          </h5>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-pendahuluan"
                  role="tabpanel"
                  aria-labelledby="v-pills-pendahuluan-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Pendahuluan</h5>
                          <h5 class="sub-judul-new">
                            TokoKoi adalah website marketplace yang dibangun
                            oleh Muklis Adi Saputro sebagai project tugas akhir
                            serta salah satu syarat kelulusan pendidikan sarjana
                            informatika Universitas Teknologi Yogyakarta.
                            TokoKoi dalam hal ini menyediakan Platform
                            perdagangan elektronik (e-commerce) di mana Pengguna
                            dapat melakukan transaksi jual-beli ikan koi dan
                            menggunakan berbagai fitur serta layanan yang
                            tersedia. Setiap pihak yang berada di wilayah Negara
                            Kesatuan Republik Indonesia dapat mengakses Platform
                            TokoKoi untuk kemudian membuka lapak, menjual koi,
                            membeli koi, menggunakan fitur/layanan, atau hanya
                            sekadar mengakses/mengunjungi Platform TokoKoi.
                            Sebagai penunjang bisnis dan penyedia Platform
                            perdagangan elektronik, TokoKoi menjamin keamanan
                            dan kenyamanan bagi para Pengguna.
                            <br />
                            <br />
                            Aturan Penggunaan ini mengatur penggunaan seluruh
                            layanan yang terdapat pada Platform TokoKoi yang
                            berlaku terhadap seluruh Pengguna dan terhadap
                            setiap Pihak yang menyampaikan permintaan atau
                            informasi kepada TokoKoi. Dengan mendaftar akun
                            TokoKoi dan/atau menggunakan Platform TokoKoi, maka
                            Pengguna dianggap telah membaca, mengerti, memahami
                            dan menyetujui seluruh isi dalam Aturan Penggunaan.
                            <br />
                            <br />
                            ATURAN PENGGUNAAN INI MERUPAKAN BENTUK KESEPAKATAN
                            YANG MERUPAKAN PERJANJIAN MENGIKAT ANTARA PENGGUNA.
                            PENGGUNA SECARA SADAR DAN SUKARELA MENYETUJUI
                            KETENTUAN INI UNTUK MENGGUNAKAN LAYANAN DI PLATFORM
                            TOKOKOI.
                          </h5>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-definisi"
                  role="tabpanel"
                  aria-labelledby="v-pills-definisi-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Definisi</h5>
                          <h5 class="sub-judul-new">
                            Dalam Aturan Penggunaan ini, sepanjang tidak
                            ditentukan lain, istilah-istilah di bawah ini
                            mempunyai arti sebagai berikut:
                          </h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Pengguna</strong> adalah
                                pihak (terdaftar/tidak terdaftar) yang mengakses
                                Platform TokoKoi, termasuk namun tidak terbatas
                                pada Pembeli dan Penjual, mitra, user offline,
                                klien yang mana wajib mematuhi Aturan Penggunaan
                                TokoKoi beserta ketentuan-ketentuan lain
                                termasuk namun tidak terbatas pada Kebijakan
                                Privasi TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Akun</strong> adalah data
                                tentang Pengguna, minimum terdiri dari username,
                                password, nomor telepon, dan email yang wajib
                                diisi oleh Pengguna Terdaftar.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Platform TokoKoi</strong>
                                adalah situs resmi www.tokokoi.com dan seluruh
                                microsite resmi yang dapat diakses melalui
                                perangkat komputer dan/atau perangkat seluler
                                Pengguna.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Barang</strong> adalah
                                suatu objek yang memiliki wujud dan nilai jual
                                beli yang memenuhi kriteria pengiriman pihak
                                penyelenggara jasa ekspedisi pengiriman Barang,
                                dalam hal ini barang yang dimaksud adalah ikan
                                koi yang diperjual belikan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Layanan</strong> adalah
                                secara kolektif: (i) Platform TokoKoi; (ii)
                                Konten, fitur, layanan, dan fungsi apa pun yang
                                tersedia di atau melalui Platform oleh atau atas
                                nama TokoKoi, termasuk Layanan Partner; dan
                                pemberitahuan email, tombol, widget, dan iklan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Aturan Penggunaan</strong>
                                adalah perjanjian antara Pengguna dan TokoKoi
                                yang berisi seperangkat peraturan yang mengatur
                                hak, kewajiban, tanggung jawab Pengguna dan
                                TokoKoi, serta tata cara penggunaan sistem
                                layanan TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Penjual</strong> adalah
                                Pengguna terdaftar yang melakukan penjualan
                                dan/atau penawaran Barang kepada para Pengguna
                                melalui lapak di Platform TokoKoi serta wajib
                                mematuhi Aturan Penggunaan TokoKoi beserta
                                ketentuan-ketentuan lain termasuk namun tidak
                                terbatas pada Kebijakan Privasi TokoKoi
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Pembeli</strong> adalah
                                Pengguna terdaftar atau tidak terdaftar yang
                                melakukan pembelian Barang yang dijual oleh
                                Penjual (Pelapak) di Platform TokoKoi serta
                                wajib mematuhi Aturan Penggunaan TokoKoi beserta
                                ketentuan-ketentuan lain termasuk namun tidak
                                terbatas pada Kebijakan Privasi TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal"
                                  >TokoKoi Payment System</strong
                                >
                                adalah sistem pembayaran yang difasilitasi oleh
                                TokoKoi untuk para Pengguna melakukan transaksi
                                jual-beli di Platform TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Lapak</strong> adalah
                                tempat dimana Penjual (Pelapak) dapat menawarkan
                                dan/atau menjual barang dagangannya yang
                                terdapat pada Platform TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal">Barang Terlarang</strong>
                                adalah adalah barang yang dilarang
                                diperdagangkan oleh Penjual (Pelapak) di
                                Platform TokoKoi berdasarkan peraturan
                                perundang-undangan yang berlaku di Indonesia dan
                                kebijakan internal TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                <strong class="tebal"
                                  >Data / Informasi Pribadi</strong
                                >
                                adalah data terkait dengan Pengguna yang dapat
                                teridentifikasi dan/atau dapat diidentifikasi
                                secara tersendiri atau dikombinasikan dengan
                                informasi lainnya baik secara langsung maupun
                                secara tidak langsung melalui sistem Elektronik
                                dan/atau non elektronik
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-layanan"
                  role="tabpanel"
                  aria-labelledby="v-pills-layanan-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Layanan</h5>
                          <h5 class="sub-judul-new"></h5>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-pengiriman"
                  role="tabpanel"
                  aria-labelledby="v-pills-pengiriman-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Metode Pengiriman Barang</h5>
                          <h5 class="sub-judul-new"></h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengiriman barang untuk setiap transaksi yang
                                terjadi melalui Platform TokoKoi menggunakan
                                layanan pengiriman barang yang disediakan
                                TokoKoi atas kerjasama TokoKoi dengan pihak jasa
                                ekspedisi pengiriman barang resmi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna memahami dan menyetujui bahwa segala
                                bentuk peraturan terkait dengan syarat dan
                                ketentuan pengiriman barang sepenuhnya
                                ditentukan oleh pihak jasa ekspedisi pengiriman
                                barang dan sepenuhnya menjadi tanggung jawab
                                pihak jasa ekspedisi pengiriman barang.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                TokoKoi hanya berperan sebagai media perantara
                                antara Pengguna dengan pihak jasa ekspedisi
                                pengiriman barang.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna wajib memahami, menyetujui, serta
                                mengikuti ketentuan-ketentuan pengiriman barang
                                yang telah dibuat oleh pihak jasa ekspedisi
                                pengiriman barang.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak (Penjual) wajib bertanggung jawab penuh
                                atas barang yang dikirimnya.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna memahami dan menyetujui bahwa segala
                                bentuk kerugian yang dapat timbul akibat
                                kerusakan ataupun kehilangan pada barang, baik
                                pada saat pengiriman barang tengah berlangsung
                                maupun pada saat pengiriman barang telah
                                selesai, adalah sepenuhnya tanggung jawab pihak
                                jasa ekspedisi pengiriman barang.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Dalam hal diperlukan untuk dilakukan proses
                                pengembalian barang, maka Pengguna, baik Pelapak
                                (Penjual) maupun Pembeli, diwajibkan untuk
                                melakukan pengiriman barang langsung ke
                                masing-masing Pembeli maupun Pelapak (Penjual).
                                TokoKoi tidak menerima pengembalian atau
                                pengiriman barang atas transaksi yang dilakukan
                                oleh Pengguna dalam kondisi apa pun.
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-akun"
                  role="tabpanel"
                  aria-labelledby="v-pills-akun-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">
                            Pengguna, Akun, Keamanan, dan Password
                          </h5>
                          <h5 class="sub-judul-new">
                            Persyaratan wajib bagi Pengguna untuk mengakses
                            layanan di Platform TokoKoi, antara lain:
                          </h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna wajib berusia minimal 18 tahun (kecuali
                                ditentukan lain oleh peraturan
                                perundang-undangan yang berlaku di Indonesia).
                                Pengguna yang belum genap berusia 18 tahun wajib
                                memperoleh persetujuan dari orang tua atau wali
                                untuk menggunakan dan/atau mengakses layanan di
                                Platform TokoKoi dan bertanggung jawab atas
                                segala biaya yang timbul terkait penggunaan
                                layanan di Platform TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna wajib membaca, memahami serta mengikuti
                                semua ketentuan yang diatur dalam Aturan
                                Penggunaan ini.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna yang memiliki akun di Platform TokoKoi,
                                wajib mengisi data pribadi secara lengkap sesuai
                                dengan identitas pribadinya di halaman profil
                                TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna wajib menyampaikan informasi yang
                                benar, tepat, lengkap dan terbaru dari diri
                                Pengguna dalam rangka penggunaan Platform
                                TokoKoi dari waktu ke waktu.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang menggunakan robot, spider,
                                proses atau sarana untuk mengakses layanan untuk
                                tujuan apapun, atau perangkat otomatis lainnya,
                                termasuk namun tidak terbatas untuk memantau
                                atau menyalin setiap bahan yang ada pada layanan
                                di Platform TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang mencantumkan alamat, nomor
                                kontak, alamat email, Platform, forum, dan
                                username media sosial di foto profil, header
                                lapak, foto produk, nama akun (username), nama
                                lapak, dan deskripsi lapak. TokoKoi dapat
                                sewaktu-waktu melakukan tindakan terhadap
                                pelanggaran tersebut tanpa pemberitahuan
                                sebelumnya.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna bertanggung jawab dan wajib menjaga
                                keamanan dari akun termasuk namun tidak terbatas
                                pada penggunaan email dan password milik
                                Pengguna.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Demi keamanan dan kenyamanan para Pengguna,
                                setiap transaksi jual-beli di TokoKoi diwajibkan
                                untuk menggunakan TokoKoi Payment System. Untuk
                                informasi mengenai penggunaan TokoKoi Payment
                                System dapat dipelajari di Panduan TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Dalam hal Pengguna melakukan pelaporan dan/atau
                                aduan atas layanan di Platform TokoKoi dan/atau
                                Aturan Penggunaan, maka setiap laporan dan/atau
                                aduan tersebut wajib disampaikan dengan itikad
                                baik dan dengan tujuan menyelesaikan masalah.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang menggunakan Platform TokoKoi
                                untuk melanggar peraturan yang ditetapkan oleh
                                hukum di Indonesia maupun di negara lainnya.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna wajib menghargai hak-hak Pengguna
                                lainnya dengan tidak memberikan informasi
                                pribadi ke pihak lain tanpa izin pihak yang
                                bersangkutan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang memanipulasi harga barang yang
                                dicantumkan di Platform TokoKoi dengan tujuan
                                apa pun termasuk namun tidak terbatas untuk
                                mengelabui Pembeli.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang mengirimkan pesan spam dalam
                                bentuk apa pun dengan merujuk pada fitur/layanan
                                apa pun di Platform TokoKoi untuk tujuan apa
                                pun.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                TokoKoi berhak sewaktu-waktu tanpa pemberitahuan
                                terlebih dahulu kepada Pengguna untuk memblokir
                                penggunaan sistem jika Pengguna melanggar
                                peraturan perundang-undangan yang berlaku di
                                wilayah Indonesia.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang menggunakan logo TokoKoi pada
                                foto profil Pengguna (avatar).
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang mendistribusikan virus atau
                                teknologi lainnya yang dapat membahayakan
                                TokoKoi, kepentingan dan/atau properti dari
                                Pengguna TokoKoi, maupun instansi Pemerintahan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dilarang membuat akun TokoKoi dalam
                                jumlah banyak dengan tujuan menghindari batasan
                                pembelian, penyalahgunaan promosi, konsekuensi
                                Aturan Penggunaan, dan/atau tindakan lain yang
                                dapat diindikasikan sebagai usaha persaingan
                                tidak sehat.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                TokoKoi tidak memungut biaya pendaftaran akun
                                TokoKoi kepada Pengguna.
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-lapak"
                  role="tabpanel"
                  aria-labelledby="v-pills-lapak-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Pelapak</h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak (Penjual) dilarang mempergunakan lapak
                                (termasuk namun tidak terbatas pada halaman
                                deskripsi dan informasi barang) sebagai media
                                untuk beriklan atau melakukan promosi untuk
                                Platform lain di luar Platform TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak (Penjual) dilarang memberikan keterangan
                                (informasi lapak dan/atau Barang) selain/di luar
                                daripada keterangan lapak dan/atau Barang yang
                                bersangkutan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Penamaan Barang dan informasi produk harus
                                sesuai dengan kondisi Barang yang ditampilkan
                                dan Pelapak (Penjual) tidak diperkenankan
                                mencantumkan nama dan informasi yang tidak
                                sesuai dengan kondisi Barang.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak (Penjual) tidak diperkenankan
                                memperdagangkan jasa, atau Barang non-fisik,
                                kecuali telah bekerja sama resmi dengan TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                TokoKoi memiliki kewenangan untuk mengubah nama
                                dan/atau memakai nama lapak dan/atau domain
                                Pelapak untuk kepentingan internal TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Penamaan Barang harus dilakukan sesuai dengan
                                informasi detail, spesifikasi, dan kondisi
                                Barang, dengan demikian Pelapak (Penjual) tidak
                                diperkenankan untuk mencantumkan nama dan/atau
                                kata yang tidak berkaitan dengan Barang
                                tersebut.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak (Penjual) dilarang memberikan data
                                kontak pribadi dengan maksud untuk melakukan
                                transaksi secara langsung kepada Pembeli atau
                                calon Pembeli.
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-transaksi"
                  role="tabpanel"
                  aria-labelledby="v-pills-transaksi-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Transaksi</h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib mematuhi setiap ketentuan dalam
                                Aturan Penggunaan TokoKoi dalam melakukan
                                penawaran/penjualan Barang di platform TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib menempatkan barang dagangan sesuai
                                dengan kategori dan sub-kategorinya.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib mengisi nama atau judul barang
                                secara jelas dan lengkap.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib mengisi harga yang sesuai dengan
                                harga yang sebenarnya.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib mengirimkan barang menggunakan
                                jasa ekspedisi sesuai dengan yang dipilih oleh
                                Pembeli pada saat melakukan transaksi di dalam
                                sistem TokoKoi. Apabila Pelapak menggunakan jasa
                                ekspedisi yang berbeda dengan jasa dan/atau
                                jenis jasa ekspedisi yang dipilih oleh Pembeli
                                pada saat melakukan transaksi di dalam sistem
                                TokoKoi, maka Pelapak bertanggung jawab atas
                                segala hal selama proses pengiriman yang
                                disebabkan oleh penggunaan jasa dan/atau jenis
                                jasa ekspedisi yang berbeda tersebut.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak memahami dan menyetujui bahwa kekurangan
                                dana biaya kirim yang disebabkan oleh penggunaan
                                jasa dan/atau jenis jasa yang berbeda dari
                                pilihan Pembeli pada saat melakukan transaksi di
                                dalam sistem TokoKoi merupakan tanggung jawab
                                Pelapak, terkecuali perbedaan tersebut atas
                                permintaan Pembeli.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib memenuhi ketentuan yang telah
                                ditetapkan oleh pihak jasa ekspedisi berkaitan
                                dengan packing barang yang aman serta
                                menggunakan asuransi dan/atau packing kayu pada
                                barang-barang tertentu, sehingga apabila barang
                                rusak atau hilang, Pelapak dapat mengajukan
                                klaim ke pihak jasa ekspedisi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib mengetahui dan mematuhi segala
                                persyaratan dan aturan yang ditetapkan oleh
                                perusahaan jasa pengiriman, serta bertanggung
                                jawab atas setiap barang yang dikirim.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                ika Pelapak tidak menentukan waktu kirim barang
                                pada setiap produknya, maka Pelapak wajib
                                mengirimkan barang dalam waktu 2x24 jam hari
                                kerja (untuk biaya pengiriman reguler) atau 2x24
                                jam (untuk biaya pengiriman kilat) setelah
                                status transaksi “Dibayar”. Untuk informasi Atur
                                Waktu Kirim, kunjungi halaman Cara Atur Waktu
                                Kirim (Input Resi). Pelapak dianggap telah
                                menolak pesanan jika Pelapak tidak dapat
                                mengirimkan barang dalam batas waktu yang telah
                                ditentukan pada poin ini. Pelapak melakukan
                                tolak pesanan secara langsung, dan/atau
                                mengabaikan transaksi, sehingga sistem secara
                                otomatis memberikan feedback negatif dan
                                reputasi tolak pesanan, serta mengembalikan
                                seluruh dana (refund) ke Pembeli.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib mengetahui dan mematuhi segala
                                persyaratan dan aturan yang ditetapkan oleh
                                perusahaan jasa pengiriman, serta bertanggung
                                jawab atas setiap barang yang dikirim.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak wajib mendaftarkan nomor resi pengiriman
                                yang benar dan asli setelah status transaksi
                                “Dibayar”. Satu nomor resi hanya berlaku untuk
                                satu nomor transaksi di TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak mendapatkan sanksi berupa pembekuan akun
                                jika performa lapak dianggap di bawah standar
                                TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak dilarang memanipulasi harga Barang
                                dengan tujuan apapun.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak dilarang menggunakan gambar atau foto
                                barang dengan watermark yang menandakan hak
                                kepemilikan orang lain.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelapak dilarang memberikan informasi kontak
                                pribadi dengan maksud untuk melakukan transaksi
                                secara langsung dengan Pembeli/calon Pembeli di
                                luar dari Platform TokoKoi.
                              </h5>
                            </li>
                          </ol>
                          <h5 class="sub-judul-new">Transaksi Pembelian</h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pembeli wajib bertransaksi melalui prosedur
                                transaksi yang telah ditetapkan oleh TokoKoi.
                                Pembeli melakukan pembayaran dengan menggunakan
                                metode pembayaran yang sebelumnya telah dipilih
                                oleh Pembeli, dan kemudian TokoKoi akan
                                meneruskan dana ke pihak Penjual/Pelapak apabila
                                tahapan transaksi jual beli pada sistem TokoKoi
                                telah selesai.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pembeli memahami dan menyetujui bahwa segala
                                transaksi yang dilakukan di luar transaksi resmi
                                TokoKoi dan/atau tanpa sepengetahuan TokoKoi
                                (melalui jaringan pribadi, pengiriman pesan,
                                pembelian di luar TokoKoi, dan/atau pembelian di
                                luar tagihan yang ditagihkan TokoKoi) merupakan
                                tanggung jawab pribadi Pembeli, dan bukan
                                tanggung jawab dari pihak TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pembeli memahami dan menyetujui untuk tidak
                                menyerahkan/memberitahukan bukti transaksi yang
                                dilakukan di TokoKoi pada pihak lain selain
                                pihak TokoKoi melalui saluran komunikasi resmi
                                TokoKoi. Dalam hal tersebut, jika terjadi
                                kerugian yang diakibatkan oleh penyerahan atau
                                pemberitahuan bukti transaksi pada pihak lain
                                tersebut, maka hal tersebut merupakan tanggung
                                jawab masing-masing Pembeli.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pembeli memahami dan menyetujui bahwa segala
                                klaim yang dilayangkan setelah adanya
                                konfirmasi/konfirmasi otomatis penerimaan barang
                                bukan menjadi tanggung jawab pihak TokoKoi.
                                Kerugian yang timbul setelah adanya
                                konfirmasi/konfirmasi otomatis penerimaan barang
                                adalah tanggung jawab masing-masing Pembeli.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna dengan ini sepakat dan menyetujui bahwa
                                TokoKoi dengan menggunakan pertimbangannya dapat
                                sewaktu-waktu mengenakan biaya tambahan atas
                                transaksi di Platform TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Apabila di kemudian hari ditemukan pelanggaran
                                terhadap Kebijakan Jual Barang oleh Pembeli,
                                TokoKoi berhak untuk melakukan tindakan yang
                                dianggap perlu terhadap Pembeli demi menjaga
                                keamanan dan kenyamanan Pengguna lain.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pembeli memahami sepenuhnya dan menyetujui bahwa
                                segala transaksi yang dilakukan antar Pembeli
                                dan Penjual, selain melalui Rekening Resmi
                                TokoKoi dan/atau tanpa sepengetahuan TokoKoi
                                (melalui fasilitas/jaringan pribadi, pengiriman
                                pesan, pengaturan transaksi khusus di luar
                                Platform TokoKoi atau upaya lainnya), adalah
                                merupakan tanggung jawab pribadi dari Pembeli.
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-terlarang"
                  role="tabpanel"
                  aria-labelledby="v-pills-terlarang-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Barang Terlarang</h5>
                          <h5 class="sub-judul-new">
                            Barang terlarang adalah barang yang dilarang
                            diperjualbelikan di Platform TokoKoi berdasarkan
                            peraturan perundang-undangan yang berlaku di
                            Republik Indonesia , kebijakan internal TokoKoi,
                            dan/atau Kebijakan Platform Distribusi Aplikasi.
                            Barang tersebut adalah barang dan/atau jasa yang
                            tergolong berbahaya, melanggar hukum, mengancam,
                            melecehkan, menghina, memfitnah, mengintimidasi,
                            menginvasi privasi orang lain atau hak-hak lainnya
                            yang melanggar hukum dengan cara apapun. Berdasarkan
                            hal-hal tersebut, barang-barang yang dilarang untuk
                            diperjualbelikan di Platform TokoKoi, antara lain:
                          </h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Segala bentuk tulisan yang dapat berpengaruh
                                negatif terhadap TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Barang terkait perjudian.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">Barang mistis.</h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Jasa, donasi, sewa menyewa, promo event. Kecuali
                                terdapat kerja sama resmi dengan TokoKoi
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-dana"
                  role="tabpanel"
                  aria-labelledby="v-pills-dana-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Pencairan Dana</h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pengguna wajib mengisi data rekening bank untuk
                                kepentingan pencairan dana di TokoKoi.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Dana akan ditransfer ke rekening Pengguna dalam
                                waktu 1x24 jam untuk BCA, BNI, Mandiri, BRI,
                                atau 2x24 jam untuk rekening tujuan selain
                                keempat bank tersebut.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pencairan dana hanya dapat dilakukan sebanyak 1x
                                sehari.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Nominal minimum pencairan dana adalah sebesar Rp
                                25.000.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pencairan dana selain ke rekening bank BCA, BRI,
                                Mandiri, BNI, dan BNI Syariah akan dikenakan
                                biaya administrasi sebesar Rp 6.500.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                TokoKoi berhak melakukan tindakan pemeriksaan,
                                pembekuan, penundaan, dan/atau pembatalan
                                terhadap transaksi pencairan dana yang dilakukan
                                oleh Pengguna apabila ditemukan adanya tindakan
                                pelanggaran atas syarat dan ketentuan TokoKoi,
                                kecurangan, manipulasi, penipuan dan/atau
                                kejahatan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pemeriksaan, pembekuan, penundaan, dan/atau
                                pembatalan terhadap transaksi pencairan dana
                                Pengguna yang dilakukan oleh TokoKoi, dapat
                                dilakukan dalam jangka waktu selama yang
                                diperlukan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Dalam hal Pengguna meninggal dunia, maka TokoKoi
                                akan segera melakukan pencairan ke rekening bank
                                yang terdaftar dan/atau pernah terdaftar di Akun
                                TokoKoi.
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-gantirugi"
                  role="tabpanel"
                  aria-labelledby="v-pills-gantirugi-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Ganti Rugi</h5>
                          <h5 class="sub-judul-new">
                            Pengguna setuju untuk melepaskan TokoKoi dari
                            tuntutan ganti rugi dan menjaga TokoKoi (termasuk
                            perusahaan terafiliasi, direktur, komisaris,
                            pejabat, serta seluruh karyawan dan agen) dari
                            segala klaim atau tuntutan, kewajiban, kerugian, dan
                            biaya hukum yang wajar, yang dilakukan oleh Pihak
                            Ketiga yang timbul akibat kesalahan Pengguna
                            termasuk namun tidak terbatas pada pelanggaran
                            Aturan Penggunaan ini, penggunaan Layanan TokoKoi di
                            Platform TokoKoi yang tidak semestinya, pelanggaran
                            terhadap hak Pihak Ketiga, pelanggaran Kebijakan
                            Privasi TokoKoi dan/atau pelanggaran Pengguna
                            terhadap peraturan perundang-undangan yang berlaku
                            di Republik Indonesia.
                          </h5>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-sanksi"
                  role="tabpanel"
                  aria-labelledby="v-pills-sanksi-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Sanksi</h5>
                          <h5 class="sub-judul-new">
                            Bukalapak memiliki kewenangan untuk mengambil
                            tindakan yang dianggap perlu terhadap akun Pengguna,
                            termasuk akun yang diduga dan/atau terindikasi
                            melakukan penyalahgunaan, memanipulasi, dan/atau
                            melanggar Aturan Penggunaan di Bukalapak, mulai dari
                            melakukan moderasi, menghentikan layanan “Jual
                            Barang”, membatasi jumlah pembuatan akun, membatasi
                            atau mengakhiri hak setiap Pengguna untuk
                            menggunakan layanan, maupun menutup akun tersebut
                            tanpa memberikan pemberitahuan atau informasi
                            terlebih dahulu kepada pemilik akun yang
                            bersangkutan.
                          </h5>
                          <ol>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pemblokiran dan atau penghapusan barang yang
                                termasuk dalam barang terlarang di Aturan
                                Penggunaan Bukalapak.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pembekuan akun yang menjual barang terlarang di
                                Aturan Penggunaan Bukalapak.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Penonaktifan akun yang menjual barang terlarang
                                di aturan penggunaan Bukalapak.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Penonaktifan fitur Chat apabila ditemukan adanya
                                indikasi penipuan maupun kecurangan.
                              </h5>
                            </li>
                            <li class="list-judul list-judul-last">
                              <h5 class="sub-judul-list-new">
                                Pelaporan kepada pihak yang berwajib termasuk
                                namun tidak terbatas pada pihak kepolisian, dan
                                lain-lain.
                              </h5>
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-privasi"
                  role="tabpanel"
                  aria-labelledby="v-pills-privasi-tab"
                >
                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-12" data-aos="fade-up">
                          <h5 class="judul-new">Privasi</h5>
                          <h5 class="sub-judul-new">
                            Bukalapak tunduk terhadap segala peraturan
                            perundang-undangan dan kebijakan pemerintah Republik
                            Indonesia yang berlaku, termasuk yang mengatur
                            tentang informasi dan transaksi elektronik,
                            penyelenggaraan sistem elektronik, dan perlindungan
                            data pribadi Pengguna; termasuk segala peraturan
                            pelaksana dan peraturan perubahan dari
                            peraturan-peraturan tersebut yang mengatur dan
                            melindungi penggunaan data dan informasi penting
                            para Pengguna.
                          </h5>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </div>    
@endsection

@push('addon-script')
    <script src="/script/navbar-scroll.js"></script>
    <script>
      $("#myTab a").on("click", function (e) {
        e.preventDefault();
        $(this).tab("show");
      });
    </script>
@endpush