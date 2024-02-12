<section>
    <div class="shop-link">
        @foreach (['digital-comics', 'merchandise', 'subscriptions', 'shop-locator', 'dc-power-visa'] as $item)
            <div class="card-shop">
                <img src="{{ Vite::asset('resources/imgs/buy-comics-' . $item . '.png') }}" alt="img DC">
                <a class="uppercase" href="#">
                    {{ str_replace('-', ' ', $item) }}
                </a>
            </div>
        @endforeach
    </div>
</section>
