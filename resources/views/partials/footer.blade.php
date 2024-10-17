<footer>

    {{-- footer top --}}
    <section class="footer-top">
        <div class="myContainer d-flex justify-content-between align-items-center pt-4">

            {{-- links --}}
            <div class="d-flex">
                {{-- DC COMICS & SHOP --}}
                <section class="me-4">
                    {{-- comics --}}
                    <div>
                        <p class="list-title mb-2">DC COMICS</p>
                        <ul>
                            @foreach ($linksDcComics as $link)
                                <li>
                                    <a href="{{$link['url']}}">
                                        {{$link['name']}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- shop --}}
                    <div>
                        <p class="list-title mb-2">SHOP</p>
                        <ul>
                            @foreach ($linksShop as $link)
                                <li>
                                    <a href="{{$link['url']}}">
                                        {{$link['name']}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
    
                </section>
    
                <!-- DC -->
                <section class="me-4"> 
                    <div>
                        <p class="list-title mb-2">DC</p>
                        <ul>
                            @foreach ($linksDC as $link)
                                <li>
                                    <a href="{{$link['url']}}">
                                        {{$link['name']}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
    
                <!-- SITES -->
                <section>
                    <div>
                        <p class="list-title mb-2">SITES</p>
                        <ul>
                            @foreach ($linksSites as $link)
                                <li>
                                    <a href="{{$link['url']}}">
                                        {{$link['name']}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
    
            {{-- bg --}}
            <img class="dc-sfondo" src="img/dc-logo-bg.png" alt="DC">
            
          </div>
    </section>

    {{-- footer bottom --}}
    <section class="footer-bottom">

        <div class="myContainer d-flex justify-content-between align-items-center">
          <button class="sign-up-button">
            SIGN-UP NOW!
          </button>
  
          <div class="d-flex align-items-center">
  
              <div class="text-primary fw-bold me-3">
              FOLLOW US
              </div>
  
              <img class="me-3" src="/img/footer-facebook.png" alt="facebook">
              <img class="me-3" src="/img/footer-twitter.png" alt="facebook">
              <img class="me-3" src="/img/footer-youtube.png" alt="facebook">
              <img class="me-3" src="/img/footer-pinterest.png" alt="facebook">
              
              <img src="/img/footer-periscope.png" alt="facebook">
  
          </div>
        </div>
        
      </section>

</footer>
