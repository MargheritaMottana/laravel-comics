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

    return view('comics', compact('comics', 'linksDcComics', 'linksShop', 'linksDC', 'linksSites'));
});