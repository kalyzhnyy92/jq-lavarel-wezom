<div class="social">
    <h2 class="social__title">Мы в соц. сетях</h2>
    <div class="social__icon justify-content-between align-items-center">
        <a class="social__facebook" href="https://www.facebook.com" target="blank">
            @component('icons.facebook')
                @slot('class')
                    social__icon--facebook
                @endslot
            @endcomponent
        </a>
        <a class="social__twitter" href="https://twitter.com" target="blank">
            @component('icons.twitter')
                @slot('class')
                    social__icon--twitter
                @endslot
            @endcomponent
        </a>
        <a class="social__youtube" href="https://www.youtube.com" target="blank">
            @component('icons.youtube')
                @slot('class')
                    social__icon--youtube
                @endslot
            @endcomponent
        </a>
        <a class="social__instagram" href="https://www.instagram.com" target="blank">
            @component('icons.instagram')
                @slot('class')
                    social__icon--instagram
                @endslot
            @endcomponent
        </a>
    </div>
</div>