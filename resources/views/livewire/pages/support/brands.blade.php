<style>
    .ch-img-287 {
        background-image: url({{ asset("assets/img/brands/adidas.png") }});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .ch-img-162 {
        background-image: url({{ asset("assets/img/brands/7up.png") }});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    @foreach ($brands as $brand)

    .ch-img-{{ $brand->id }} {
            background-image: url({{ asset("assets/img/brands/{$brand->logo}") }});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .ch-img-back-{{ $brand->id }} {
            background-image: url({{ asset("assets/img/brands/{$brand->child?->logo}") }});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card-title-{{ $brand->id }}:hover span {
            display: none;
        }

        .card-title-{{ $brand->id }}:hover p:before {
            content: "{{ app()->getLocale() == 'ar' ? $brand->child?->ar_name:$brand->child?->name }}";
        }
    @endforeach
</style>

