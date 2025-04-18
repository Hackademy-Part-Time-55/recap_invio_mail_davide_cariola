<x-layout title="Welcome to Hyperfocus">

    <x-hero-section />

    <div class="container-fluid p-5 mb-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6">
                <h1 class="display-2 fw-semibold">
                    We are Hyperfocus.
                </h1>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-3 fw-semibold">
                    A design studio that sits at the intersection between brand & product design. We create loveable, shareable, bold, and engaging digital-first brands that will change the world.
                </p>
            </div>
        </div>
    </div>

    <x-white-section
        title="Recent Work"
        :data="$recentWorks"
    />


    <div class="container-fluid p-5 bg-accent mb-5">
        <div class="row justify-content-between mb-4">
            <div class="col-12 col-md-6">
                <h2>
                    Journal
                </h2>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-3 fw-semibold">
                    Our journal is our little quiet corner of the internet. Here we can express our thoughts, hopes, dreams, and aspirations as people and as a design studio. 
                </p>
            </div>
        </div>
        <div class="row justify-content-between">
            @foreach($articles as $article)
                <div class="col-12 col-md-3">
                    <img src="{{ $article['imageLink'] }}" alt="{{ $article['excerpt'] }}" class="img-fluid mb-3">
                    <h4 class="fs-5 fw-light">
                        {{ $article['title'] }}
                    </h4>
                    <h4 class="fs-5">
                        {{ $article['excerpt'] }}
                    </h4>
                </div>
            @endforeach
        </div>
    </div>

    <div>
        <x-white-section
            title="Our purpose"
            subtitle="We believe in building a place that is fun, friendly, and aspirational. Our team is passionate about creating change, not only in how branding is done but also socially, sustainable, and responsibly."
            :data="[
                ['imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Studio-Thumbnail.jpg'],
                ['imageLink' => 'https://hyperfocus.cc/wp-content/uploads/2024/07/Studio-Thumbnail-02-1.jpg']
            ]"
        />
        {{-- <div class="text-end">
            <a href="#" class="text-dark">▷ Learn more about us</a>
        </div> --}}
    </div>

    


</x-layout>