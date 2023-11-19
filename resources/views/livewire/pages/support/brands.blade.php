<style>
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
            content: "{{ $brand->child?->name }}";
        }
    @endforeach
</style>

