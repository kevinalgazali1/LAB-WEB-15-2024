@extends('master')

@section('title', 'About')

@section('banner-content')
    <h1>About Agatha Series</h1>
    <p>Learn more about Agatha and her mystical journey.</p>
    <div class="about-overlay">
        <div class="overview-container">
            <div class="poster">
                <img src="{{ asset('images/poster.png') }}" alt="Agatha Series Poster">
            </div>

            <div class="overview-content">
                    <div class="agatha-logo">
                        <img src="{{ asset('images/agatha2.png') }}" alt="Agatha All Along Logo">
                    </div>
                <p>
                    In Agatha All Along, the infamous Agatha Harkness finds herself down and out of power after a suspicious goth Teen helps break her free from a distorted spell.
                    Her interest is piqued when he begs her to take him on the legendary Witches' Road, a magical gauntlet of trials that, if survived, rewards a witch with what they're missing.
                    Together, Agatha and this mysterious Teen pull together a desperate coven, and set off down, down, down The Road…
                </p>
                <div class="details">
                    <div><strong>EXECUTIVE PRODUCERS</strong><br> Kevin Feige, Louis D’Esposito, Brad Winderbaum, Mary Livanos and Jac Schaeffer</div>
                    <div><strong>DIRECTORS</strong><br> Jac Schaeffer, Rachel Goldberg and Gandja Montiero</div>
                    <div><strong>CREATOR/SHOWRUNNER</strong><br> Jac Schaeffer</div>
                    <div><strong>CAST</strong><br> Kathryn Hahn, Joe Locke, Sasheer Zamata, Ali Ahn, Maria Dizzia, Paul Adelstein, Miles Gutierrez-Riley, Okwui Okpokwasili, Debra Jo Rupp, Patti LuPone and Aubrey Plaza</div>
                    <div><strong>NETWORK</strong><br> Disney+</div>
                    <div><strong>RELEASE DATE</strong><br> September 18, 2024</div>
                </div>
            </div>
        </div>

        <div class="episodes-title">
            <h2>Season 1 Episodes</h2>
        </div>

        <div class="episode-grid">
            <div class="episode-card">
                <img src="{{ asset('images/eps1.png') }}" alt="Episode 1 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 1: Seekest Thou the Road</div>
                    <div class="episode-info">
                        <span>S1 E1 • 18 Sep 2024 • 39m</span>
                    </div>
                    <div class="episode-description">
                        Detective Agnes investigates an unusual murder when the return of a former partner and the complication of a mysterious goth Teen change everything.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>7.3</span>
                    </div>
                </div>
            </div>
    
            <div class="episode-card">
                <img src="{{ asset('images/eps2.png') }}" alt="Episode 2 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 2: Circle Sewn With Fate / Unlock Thy Hidden Gate</div>
                    <div class="episode-info">
                        <span>S1 E2 • 18 Sep 2024 • 41m</span>
                    </div>
                    <div class="episode-description">
                        With old foes in hot pursuit, Agatha and Teen gather a desperate coven of witches to walk The Witches' ROad to find what's missing.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>7.6</span>
                    </div>
                </div>
            </div>
    
            <div class="episode-card">
                <img src="{{ asset('images/eps3.png') }}" alt="Episode 3 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 3: Through Many Miles / Of Tricks and Trials</div>
                    <div class="episode-info">
                        <span>S1 E3 • 25 Sep 2024 • 37m</span>
                    </div>
                    <div class="episode-description">
                        The coven sets off down the Road and its many perils are quickly revealed, including their first trial.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>7.5</span>
                    </div>
                </div>
            </div>

            <div class="episode-card">
                <img src="{{ asset('images/eps4.png') }}" alt="Episode 4 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 4: If I Can't Reach You / Let My Song Teach You</div>
                    <div class="episode-info">
                        <span>S1 E4 • 2 Oct 2024 • 40m</span>
                    </div>
                    <div class="episode-description">
                        The Road isn't subtle. A new addition to the coven brings the witches to their second cursed trial.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>7.3</span>
                    </div>
                </div>
            </div>

            <div class="episode-card">
                <img src="{{ asset('images/eps5.png') }}" alt="Episode 5 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 5: Darkest Hour / Wake Thy Power</div>
                    <div class="episode-info">
                        <span>S1 E5 • 9 Oct 2024 • 30m</span>
                    </div>
                    <div class="episode-description">
                        With enemies closing in, Agatha and the coven flee under the light of a blood moon to the next ghastly trial.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>7.9</span>
                    </div>
                </div>
            </div>
            
            <div class="episode-card">
                <img src="{{ asset('images/eps6.png') }}" alt="Episode 6 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 6: Familiar by Thy Side</div>
                    <div class="episode-info">
                        <span>S1 E6 • 16 Oct 2024 • 47m</span>
                    </div>
                    <div class="episode-description">
                        Familiar Teen is indeed more than he seems. His connections to the coven and his true want from The Witches' Road are revealed. There's no going back.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>8.2</span>
                    </div>
                </div>
            </div>
            
            <div class="episode-card top-rated">
                <div class="top-rated-label">Top Rated</div>
                <img src="{{ asset('images/eps7.png') }}" alt="Episode 7 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 7: Death's Hand in Mine</div>
                    <div class="episode-info">
                        <span>S1 E7 • 23 Oct 2024 • 34m</span>
                    </div>
                    <div class="episode-description">
                        Those remaining suffer the hand they are dealt in the next trial. Things aren't looking up.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>9.2</span>
                    </div>
                </div>
            </div>
            
            
            <div class="episode-card">
                <img src="{{ asset('images/eps8.png') }}" alt="Episode 8 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 8: Follow Me My Friend / To Glory At the End</div>
                    <div class="episode-info">
                        <span>S1 E8 • 30 Oct 2024 • 46m</span>
                    </div>
                    <div class="episode-description">
                        Get ready for fireworks! Get ready for spectacle! It's the last trial and the end of The Road after all.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>8.8</span>
                    </div>
                </div>
            </div>
        
            <div class="episode-card">
                <img src="{{ asset('images/eps9.png') }}" alt="Episode 9 Thumbnail" class="episode-thumbnail">
                <div class="episode-content">
                    <div class="episode-title">Episode 9: Maiden Mother Crone</div>
                    <div class="episode-info">
                        <span>S1 E9 • 30 Oct 2024 • 38m</span>
                    </div>
                    <div class="episode-description">
                        The truth of Agatha Harkness and the Witches Road. One door closes.
                    </div>
                    <div class="episode-rating">
                        <img src="{{ asset('images/imdb-logo.png') }}" alt="IMDB Logo">
                        <span>8.4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
