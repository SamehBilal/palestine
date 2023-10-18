<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Palestine</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap');

            :root {
            --manhatta: #044031;
            --redwood: #fff;
            --transition-function: cubic-bezier(0.74, 0.04, 1, 1.34);
            --transition-time: 330ms;
            --white: #FFF;
            }

            *,
            ::after,
            ::before {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            }

            body {
            background-color: var(--manhatta);
            }

            .main {
            align-items: center;
            display: flex;
            justify-content: center;
            margin-bottom: 5rem;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
            width: 100%;
            }

            .main::before,
            .footer::after {
            background-image: linear-gradient(to top, var(--manhatta), transparent);
            bottom: 0;
            content: '';
            height: 10rem;
            position: absolute;
            width: 100%;
            z-index: 2;
            }

            .pyramid {
            height: 100%;
            left: 0;
            object-fit: cover;
            pointer-events: none;
            position: absolute;
            top: 0;
            width: 100%;
            }

            .left-rock,
            .right-rock {
            bottom: 0;
            object-fit: cover;
            pointer-events: none;
            position: absolute;
            z-index: 1;
            }

            .left-rock {
            height: 75%;
            left: 0;
            }

            .right-rock {
            height: 70%;
            right: 0;
            }

            .title {
            color: var(--white);
            font-size: 12rem;
            font-weight: 900;
            line-height: 1.1;
            position: relative;
            text-shadow: 0.25rem 0.25rem 0.25rem rgba(0, 0, 0, 0.45);
            }

            /* Introduction section */
            .introduction {
            display: grid;
            grid-gap: 2rem;
            grid-template-columns: 1fr 1fr;
            margin: 0 auto 2rem;
            max-width: 60rem;
            padding: 2rem;
            width: 100%;
            }

            .img-banner {
            width: 100%;
            }

            .content {
            display: flex;
            flex-direction: column;
            }

            .subtitle {
            color: var(--redwood);
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 1rem;
            }

            .paragraph {
            color: var(--redwood);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.15;
            margin-bottom: 1rem;
            }

            .link {
            background-color: var(--redwood);
            border: 0.1rem solid var(--redwood);
            color: var(--white);
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 400;
            padding: 0.5rem;
            text-align: center;
            text-decoration: none;
            transition: background-color var(--transition-time) var(--transition-function);
            width: 10rem;
            }

            .link:hover {
            background-color: transparent;
            color: var(--redwood);
            }

            /* Most popular destinations */
            .popular {
            display: flex;
            flex-direction: column;
            margin: 0 auto;
            max-width: 60rem;
            padding: 2rem;
            width: 100%;
            }

            .popular .subtitle {
            text-align: center;
            }

            .quote {
            margin: 0 auto 3rem;
            max-width: 26rem;
            text-align: center;
            width: 100%;
            }

            .gallery {
            display: grid;
            grid-gap: 1.5rem;
            grid-template-columns: repeat(3, 1fr);
            }

            .card {
            height: 26rem;
            overflow: hidden;
            position: relative;
            width: 100%;
            }

            .card__content {
            background-color: rgba(0, 0, 0, 0.7);
            height: 100%;
            left: 0;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            transition: opacity 400ms var(--transition-function);
            width: 100%;
            z-index: 1;
            }

            .card__img {
            transition: transform 200ms var(--transition-function);
            width: 100%;
            }

            .card__title {
            background-color: rgba(0, 0, 0, 0.8);
            color: var(--white);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 0.5rem;
            text-align: center;
            text-transform: uppercase;
            transform: translateY(-100%);
            transition: transform 200ms var(--transition-function);
            }

            .card__description {
            color: var(--white);
            font-size: 0.9rem;
            padding: 1rem;
            text-align: center;
            transform: translateY(100%);
            transition: transform 200ms var(--transition-function) 100ms;
            }

            /* Card hover effect */
            .card:hover .card__img {
            transform: scale(1.1);
            }

            .card:hover .card__content {
            opacity: 1;
            }

            .card:hover .card__title,
            .card:hover .card__description {
            transform: translateY(0);
            }

            /* Footer */
            .footer {
            align-items: center;
            background: url('https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80')
            100% / cover no-repeat;
            display: flex;
            justify-content: center;
            min-height: 70vh;
            position: relative;
            width: 100%;
            }

            .footer::after {
            background-image: linear-gradient(to bottom, var(--manhatta), transparent);
            bottom: unset;
            top: 0;
            }

            .footer-title {
            font-size: 8rem;
            font-weight: 600;
            max-width: 100%;
            text-align: center;
            width: 36rem;
            }

            @media screen and (max-width: 50rem) {
            .title {
                font-size: 5rem;
            }

            .introduction {
                grid-template-columns: 1fr;
            }

            .gallery {
                grid-template-columns: 1fr;
            }
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif
    <section class="main">
        <img class="pyramid" src="{{ asset('assets/images/palestine.jpg') }}" alt="Egypt pyramid" />
        <img class="left-rock" src="https://res.cloudinary.com/henryzarza/image/upload/v1601143960/General%20assets/left-rock_esxqua.png" alt="Left Rock" id="left-rock" />
        <img class="right-rock" src="https://res.cloudinary.com/henryzarza/image/upload/v1601143960/General%20assets/right-rock_aw8bfo.png" alt="Right Rock" id="right-rock" />
        <h1 class="title" id="title">Palestine</h1>
      </section>
      <section class="introduction">
        <div class="content">
          <h2 class="subtitle">Welcome To Egypt</h2>
          <p class="paragraph">
            Egypt (/ˈiːdʒɪpt/ (About this soundlisten) EE-jipt; Arabic: مِصر‎ Miṣr), is a
            transcontinental country spanning the northeast corner of Africa and southwest corner of
            Asia by a land bridge formed by the Sinai Peninsula. Egypt is a Mediterranean country
            bordered by the Gaza Strip (Palestine) and Israel to the northeast, the Gulf of Aqaba and
            the Red Sea to the east, Sudan to the south, and Libya to the west. Across the Gulf of
            Aqaba lies Jordan, across the Red Sea lies Saudi Arabia, and across the Mediterranean lie
            Greece, Turkey and Cyprus, although none share a land border with Egypt.
          </p>
          <p class="paragraph">
            Egypt has one of the longest histories of any country, tracing its heritage along the Nile
            Delta back to the 6th–4th millennia BCE. Considered a cradle of civilisation, Ancient
            Egypt saw some of the earliest developments of writing, agriculture, urbanisation,
            organised religion and central government. Iconic monuments such as the Giza Necropolis
            and its Great Sphinx, as well the ruins of Memphis, Thebes, Karnak, and the Valley of the
            Kings, reflect this legacy and remain a significant focus of scientific and popular
            interest.
          </p>
          <a href="https://en.wikipedia.org/wiki/Egypt" target="blank" rel="noopener" class="link">
            Read more
          </a>
        </div>
        <img class="img-banner" src="https://images.unsplash.com/photo-1592488831360-6556895a7f23?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=933&q=80" alt="The Pyramids Of Giza" />
      </section>
      <section class="popular">
        <h2 class="subtitle">Most Popular Destinations</h2>
        <p class="paragraph quote">
          When you arrive and walk up to these structures it is so surreal it takes a moment to
          believe it is reality. The pyramids are a work of art and sparks something so adventurous in
          you.
        </p>
        <div class="gallery">
          <div class="card">
            <div class="card__content">
              <h6 class="card__title">Destination name</h6>
              <p class="card__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta necessitatibus deserunt
                eligendi minus ut. Nulla officiis unde provident exercitationem quae vero tenetur
                voluptates, eligendi, nemo qui cumque soluta architecto aliquam.
              </p>
            </div>
            <img class="card__img" src="https://images.unsplash.com/photo-1600823371644-bdda7b22882a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=925&q=80" alt="Giza Necropolis" />
          </div>
          <div class="card">
            <div class="card__content">
              <h6 class="card__title">Destination name</h6>
              <p class="card__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta necessitatibus deserunt
                eligendi minus ut. Nulla officiis unde provident exercitationem quae vero tenetur
                voluptates, eligendi, nemo qui cumque soluta architecto aliquam.
              </p>
            </div>
            <img class="card__img" src="https://images.pexels.com/photos/2184504/pexels-photo-2184504.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Giza Necropolis" />
          </div>
          <div class="card">
            <div class="card__content">
              <h6 class="card__title">Destination name</h6>
              <p class="card__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta necessitatibus deserunt
                eligendi minus ut. Nulla officiis unde provident exercitationem quae vero tenetur
                voluptates, eligendi, nemo qui cumque soluta architecto aliquam.
              </p>
            </div>
            <img class="card__img" src="https://images.pexels.com/photos/1755390/pexels-photo-1755390.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Egypt beach" />
          </div>
        </div>
      </section>
      <footer class="footer">
        <h1 class="title footer-title">Free Palestine</h1>
      </footer>

      <script>
        const leftRock = document.getElementById('left-rock');
        const rightRock = document.getElementById('right-rock');
        const title = document.getElementById('title');

        window.addEventListener('scroll', () => {
        const { scrollY } = window;
        leftRock.style.transform = `translateX(${scrollY * -0.9}px)`;
        rightRock.style.transform = `translateX(${scrollY * 1.5}px)`;
        title.style.transform = `translate3d(${scrollY * 0.5}px, ${scrollY * -0.8}px, 0)`;
        });
      </script>
</body>
</html>
