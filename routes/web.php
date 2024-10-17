<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');

    $iconLinks = [
        [
            'name' => 'DIGITAL COMICS',
            'img' => 'img/buy-comics-digital-comics.png'
        ],
        [
            'name' => 'DC MERCHANDISE',
            'img' => 'img/buy-comics-merchandise.png'
        ],
        [
            'name' => 'SUBSCRIPTION',
            'img' => 'img/buy-comics-subscriptions.png'
        ],
        [
            'name' => 'COMIC SHOP LOCATOR',
            'img' => 'img/buy-comics-shop-locator.png'
        ],
        [
            'name' => 'DC POWER VISA',
            'img' => 'img/buy-dc-power-visa.svg'
        ],
    ];

    $linksDcComics = [
      [
        'name' => 'Characters',
        'url' => '#'
      ],
      [
        'name' => 'Comics',
        'url' => '#'
      ],
      [
        'name' => 'Movies',
        'url' => '#'
      ],
      [
        'name' => 'TV',
        'url' => '#'
      ],
      [
        'name' => 'Games',
        'url' => '#'
      ],
      [
        'name' => 'Videos',
        'url' => '#'
      ],
      [
        'name' => 'News',
        'url' => '#'
      ], 
    ];
    $linksShop = [
        [
          'name' => 'Shop DC',
          'url' => '#'
        ],
        [
          'name' => 'Shop DC Collectibles',
          'url' => '#'
        ],
    ];
    $linksDC = [
        [
          'name' => 'Terms of Use',
          'url' => '#'
        ],
        [
          'name' => 'Privacy policy (New)',
          'url' => '#'
        ],
        [
            'name' => 'Ad Choiches',
            'url' => '#'
          ],
          [
            'name' => 'Adv',
            'url' => '#'
          ],
          [
            'name' => 'Jobs',
            'url' => '#'
          ],
          [
            'name' => 'Subscripions',
            'url' => '#'
          ],
          [
            'name' => 'Talents',
            'url' => '#'
          ],
          [
            'name' => 'CPSC Certificates',
            'url' => '#'
          ],
          [
            'name' => 'Ratings',
            'url' => '#'
          ],
          [
            'name' => 'Shop Help',
            'url' => '#'
          ],
          [
            'name' => 'Contact Us',
            'url' => '#'
          ],
    ];
    $linksSites = [
        [
          'name' => 'DC',
          'url' => '#'
        ],
        [
          'name' => 'MAD Magazine',
          'url' => '#'
        ],
        [
            'name' => 'DC Kids',
            'url' => '#'
        ],
        [
            'name' => 'DC Universe',
            'url' => '#'
        ],
        [
            'name' => 'DC Power Visa',
            'url' => '#'
        ],
    ];

    return view('comics', compact('comics', 'iconLinks', 'linksDcComics', 'linksShop', 'linksDC', 'linksSites'));
});