@php
    $links = [
        [
            'title' => 'characters',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'comics',
            'link' => '#',
            'isActive' => true,
        ],
        [
            'title' => 'movies',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'tv',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'games',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'collectibles',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'videos',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'fans',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'news',
            'link' => '#',
            'isActive' => false,
        ],
        [
            'title' => 'shop',
            'link' => '#',
            'isActive' => false,
            'dropdown' => [['title' => 'shop1', 'link' => '#'], ['title' => 'shop2', 'link' => '#'], ['title' => 'shop3', 'link' => '#']],
        ],
    ];
@endphp

<header>
    <div class="container-fluid bg-primary ">
        <ul class="container navbar-nav d-flex flex-row justify-content-end">
            <li class="nav-item me-5 pe-5">
                <a class="nav-link active text-uppercase text-white me-5 pe-5" aria-current="page" href=""><small>dc
                        power&#8482; visa&#174;</small></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-uppercase text-white" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <small>
                        additional dc sites
                    </small>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">link 1</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <nav class="navbar container navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand me-5 pe-5" href="#">
                <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="Dc logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($links as $link)
                        @if (!isset($link['dropdown']))
                            <li class="nav-item text-uppercase fw-bolder">
                                <a class="nav-link active" aria-current="page" href="">{{ $link['title'] }}</a>
                            </li>
                        @else
                            <li class="nav-item text-uppercase fw-bolder dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">{{ $link['title'] }}</a>
                                <ul class="dropdown-menu">
                                    @foreach ($link['dropdown'] as $dropdown)
                                        <li><a class="dropdown-item"
                                                href="{{ $dropdown['link'] }}">{{ $dropdown['title'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <form class="d-flex align-items-center" role="search">
                <div class="border-bottom border-primary me-3">
                    <input class=" p-0 py-1 m-0 border-0 text-end" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn text-white p-0 pb-1" type="submit">
                        <img class="search-icon"
                            src="https://cdn0.iconfinder.com/data/icons/phosphor-regular-vol-3/256/magnifying-glass-512.png"
                            alt="search icon">
                    </button>
                </div>
            </form>
        </div>
    </nav>
</header>
