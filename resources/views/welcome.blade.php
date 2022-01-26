@component('layouts.new')
<section style="margin-top: 150px">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12">

                <iframe width="100%" height="500" src="https://www.youtube.com/embed/99XW_-HhTG4?autoplay=0&mute=1&showinfo=0&controls=0&autohide=1?autoplay=0&mute=1&showinfo=0&controls=0&autohide=1" allowfullscreen></iframe>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row text-center" style="margin: 100px 0 30px 0">
            <h2>
                <span style="background: black; padding: 0px 20px; color: white">Learning materials</span> 
            </h2>
        </div>
        <div class="row mt-4">
            @foreach ($articles as $article)
            <div class="col-md-4 text-center mb-2">
                <img src="{{ $article->thumbnail }}" style="max-width: 200px; background: white; border: 1px solid rgba(0, 0, 0, 0.292); padding: 10px" alt="">
                <br><br>
                <a href="{{ $article->document }}" target="_blank" style="color: black">
                    <strong>{{ $article->title }}</strong>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-3">
            <a href="/articles" class="btn btn-light btn-lg" style="border: 1px solid;padding: 8px 50px;box-shadow: 5px 10px #E48821;">
                See all resources
            </a>
        </div>
    </div>
</section>

<section style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center mb-3">
                <a href="https://web.facebook.com/taitanzania/" target="_blank">
                    <i class="lni lni-facebook-filled"></i>
                </a>
            </div>
            <div class="col-md-3 text-center mb-3">
                <a href="https://www.instagram.com/taitanzania/?hl=en" target="_blank">
                    <i class="lni lni-instagram-filled"></i>
                </a>
            </div>
            <div class="col-md-3 text-center mb-3">
                <a href="https://twitter.com/taitanzania" target="_blank">
                    <i class="lni lni-twitter-filled"></i>
                </a>
            </div>
            <div class="col-md-3 text-center mb-3">
                <a href="https://www.youtube.com/c/TaiTanzania" target="_blank">
                    <i class="lni lni-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endcomponent
