<x-layout>

    <div class="container text-center" style="margin-top: 250px;">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <h1>{{ $article['title'] }}</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-md-8">
                <img src="{{ $article['imageLink'] }}" alt="{{ $article['title'] }}" class="img-fluid">
            </div>
        </div>
        <div class="row mb-4 justify-content-center text-start">
            <div class="col-12 col-md-8">
                {!! $article['body'] !!}
            </div>
            <div class="col-12 col-md-8 mt-5">
                <a href="{{ route('homepage') . '#journal' }}" class="text-dark">Torna indietro</a>
            </div>
        </div>
    </div>


</x-layout>