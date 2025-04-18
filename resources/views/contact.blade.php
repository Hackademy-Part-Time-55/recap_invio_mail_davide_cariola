<x-layout>

    <div class="container-fluid bg-dark text-white min-vh-100" style="padding-top: 150px;">
        <div class="row justify-content-between mb-4 p-5">
            <div class="col-12 col-md-6">
                <h1>
                    Contact
                </h1>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-3 fw-semibold">                    
                    If you are a game changer, a seeker of the new, or a brand for change then this is the place for you. We are an ambitious and culturally diverse team wanting to make a difference. If this sounds like you have landed in the right place then hit that button and give us a heads up.
                </p>
            </div>
        </div>
        <div class="row justify-content-end p-5">
            <div class="col-12 col-md-6">
                {{-- form --}}
                <form method="POST" action="{{ route('contact.sendMail') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="userMessage" class="form-label">Full name</label>
                        <textarea name="userMessage" id="userMessage" cols="30" rows="7" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-light">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>