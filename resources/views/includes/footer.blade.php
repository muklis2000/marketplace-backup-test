       <hr class="mt-4 mb-5">
      
      <section class="mt-3 mb-n5" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <h6 class="mb-4">TokoKoi</h6>
              <a class="component-products d-block" href="{{ route('categories') }}">
                <div class="products-text-footer">Kategori</div>
              </a>
              <a class="component-products d-block" href="{{ route('bantuan') }}">
                <div class="products-text-footer">Bantuan</div>
              </a>
              <a class="component-products d-block" href="{{ route('ketentuan') }}">
                <div class="products-text-footer">Panduan</div>
              </a>
              <a class="component-products d-block" href="{{ route('register') }}">
                <div class="products-text-footer">Daftar</div>
              </a>
            </div>
            
            <div class="col-6 col-md-4 col-lg-3">
              <h6 class="mb-4">Kategori</h6>
              @forelse ($categories as $category)
                <a class="component-products d-block" href="{{ route('categories-detail', $category->slug) }}">
                  <div class="products-text-footer">{{ $category->name }}</div>
                </a>
              @empty
                <a class="component-products d-block" href="">
                  <div class="products-text-footer">Kategori Kosong</div>
                </a>
              @endforelse
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <h6 class="mb-4">Bantuan dan Panduan</h6>
              <a class="component-products d-block" href="{{ route('ketentuan') }}">
                <div class="products-text-footer">Tentang TokoKoi</div>
              </a>
              <a class="component-products d-block" href="{{ route('ketentuan') }}">
                <div class="products-text-footer">Syarat dan Ketentuan</div>
              </a>
              <a class="component-products d-block" href="{{ route('ketentuan') }}">
                <div class="products-text-footer">Kebijakan Privasi</div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <h6 class="mb-4">Ikuti Kami</h6>

              @forelse ($sosials as $sosial)
                <a href="{{ $sosial->ig }}"
                  ><img class="sosial-media" src="/images/ig.png" alt=""
                /></a>
                <a href="{{ $sosial->fb }}"
                  ><img class="sosial-media" src="/images/fb.png" alt=""
                /></a>
                <a href="{{ $sosial->yt }}"
                  ><img class="sosial-media" src="/images/yt.png" alt=""
                /></a>
              @empty
                
              @endforelse

              <h6 class="mb-4 mt-4">Hubungi Kami</h6>

              @forelse ($sosials as $sosial)
                <a class="component-products d-block" href="">
                  <div class="products-text-footer">Cs: {{ $sosial->cs }}</div>
                </a>
                <a class="component-products d-block" href="">
                  <div class="products-text-footer">Email: {{ $sosial->email }}</div>
                </a>
              @empty
                
              @endforelse

            </div>
          </div>
        </div>
      </section>
      
      <footer class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">
              2020 Copyright TokoKoi. Projek Tugas Akhir.
            </p>
          </div>
        </div>
      </div>
    </footer>