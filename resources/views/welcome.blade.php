<x-layout title="Welcome to Hyperfocus">

    <x-hero-section />

    <div class="container-fluid p-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6">
                <h1 class="display-2 fw-semibold">
                    We are Hyperfocus.
                </h1>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-2 fw-semibold">
                    A design studio that sits at the intersection between brand & product design. We create loveable, shareable, bold, and engaging digital-first brands that will change the world.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-12">
                <h2>
                    Recent Work
                </h2>
            </div>
        </div>
        <div class="row justify-content-between">
            @foreach($recentWorks as $work)
                <div class="col-12 col-md-6 mb-5">
                    <img src="{{ $work['imageLink'] }}" alt="{{ $work['title'] }}" class="img-fluid">
                    <h3>
                        {{ $work['title'] }}
                    </h3>
                    <p class="fs-3">
                        {{ $work['subtitle'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid p-5 bg-accent">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h2>
                    Journal
                </h2>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-2 fw-semibold">
                    Our journal is our little quiet corner of the internet. Here we can express our thoughts, hopes, dreams, and aspirations as people and as a design studio. 
                </p>
            </div>
        </div>
    </div>


</x-layout>