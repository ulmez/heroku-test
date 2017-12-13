<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    
    <title>Ghouls</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    
    <link rel="stylesheet" href="{{ secure_url('css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_url('css/index.css') }}">
  </head>
  <body>
    <div class="outer-container">
      <div class="overlayViewport">
        <div class="content-wrapper">
        </div>
        <div class="overlayContent">
            <!-- <header id="header"> -->
                <section class="section is-paddingless">

                    <nav id="main-navigation">
                        <div id="brand">
                            <a href="#" id="brand-link">GMDb</a>
                        </div>
                        <ul id="main-menu-links">
                            <li>
                                <a href="#" title="Movies">Movies</a>
                            </li>
                            <li>
                                <a href="#" title="TV-Shows">TV-Shows</a>
                            </li>
                        </ul>
                            <div id="main-search-holder">
                            <input id="main-search" class="input" type="text" placeholder="Find Movies, TV-Shows, Actors and more..." />
                            <div class="icon-holder">
                                <button id="magnify-icon"></button>
                            </div>
                            <div class="icon-holder">
                                <button id="filter-icon"></button>
                            </div>
                        </div>
                        <div id="avatar">
                            <div class="icon-holder avatar">
                                <button id="user-menu"></button>
                            </div>
                        </div>
                    </nav>
                </section>
            <!-- </header> -->
        </div>
      </div>
      <div class="contentViewport">
        <div class="content">
          <img src="{{ secure_url('img/pan-banner.png') }}" />
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ secure_url('js/index.js') }}"></script>
    {{ strpos(URL::to('/'), 'http://') === 0 ? URL::to('js/index.js') : secure_url('js/index.js') }}
  </body>
</html>
