{{-- links --}}
@php
    $links = [
        [
            'url' => '/',
            'label' => 'Characters',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Comics',
            'active' => true,
        ],
        [
            'url' => '/',
            'label' => 'Movies',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'TV',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Games',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Collectibles',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Videos',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Fans',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'News',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Shop',
            'active' => false,
        ],
    ];
@endphp

{{-- header --}}
<header>
    <nav>
        <div>
            {{-- logo --}}
            <img src="/img/dc-logo.png" alt="DC">
        </div>

        <ul>
            {{-- ciclo per lettura link --}}
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
