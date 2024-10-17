<footer>
    <nav>

        <div>
            <h4>
                DC COMICS
            </h4>
            <ul>
                @foreach ($linksDcComics as $link)
                    <li>
                        <a href="{{$link['url']}}">
                            {{$link['name']}}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h4>
                SHOP
            </h4>
            <ul>
                @foreach ($linksShop as $link)
                    <li>
                        <a href="{{$link['url']}}">
                            {{$link['name']}}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h4>
                DC
            </h4>
            <ul>
                @foreach ($linksDC as $link)
                    <li>
                        <a href="{{$link['url']}}">
                            {{$link['name']}}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h4>
                SITES
            </h4>
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

    </nav>
</footer>
