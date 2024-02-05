@php
    $bannerLink = [
    [
        'path' => 'buy-comics-digital-comics.png',
        'link' => '#',
        'name' => 'digital comics',
    ],
    [
        'path' => 'buy-comics-merchandise.png',
        'link' => '#',
        'name' => 'dc merchandise',
    ],
    [
        'path' => 'buy-comics-subscriptions.png',
        'link' => '#',
        'name' => 'subscription',
    ],
    [
        'path' => 'buy-comics-shop-locator.png',
        'link' => '#',
        'name' => 'comic shop locator',
    ],
    [
        'path' => 'buy-dc-power-visa.svg',
        'link' => '#',
        'name' => 'dc power visa',
    ],
];
@endphp

  <section class="banner">
    <div class="container py-3">
      <ul class="d-flex justify-content-around m-0">
        @foreach ($bannerLink as $link)
        <li class="d-flex align-items-center">
          <div>
            <img src="{{Vite::asset('resources/assets/img/'.$link['path'])}}" alt="{{$link['name']}}">
          </div>
          <a href="{{$link['link']}}" class="text-uppercase text-white text-decoration-none">{{$link['name']}}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </section>