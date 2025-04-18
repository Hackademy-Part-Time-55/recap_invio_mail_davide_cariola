@props([
    'title' => '',
    'subtitle' => '',
    'data' => [],
])

<div class="container-fluid p-5 mb-5">
    <div class="row mb-4">
        <div class="col-12 col-md-6">
            <h2>
                {{ $title }}
            </h2>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-3 fw-semibold">
                {{ $subtitle }} 
            </p>
        </div>
    </div>
    <div class="row justify-content-between">
        @foreach($data as $element)
            <div class="col-12 col-md-6 mb-5">
                <img src="{{ $element['imageLink'] }}" alt="{{ $element['title'] ?? 'Immagine dello studio di Hyperfocus' }}" class="img-fluid mb-3">
                
                @if(isset($element['title']) && isset($element['subtitle']))
                    <h3>
                        {{ $element['title'] }}
                    </h3>
                    <p class="fs-3">
                        {{ $element['subtitle'] }}
                    </p>
                @endif
            </div>
        @endforeach
    </div>
</div>