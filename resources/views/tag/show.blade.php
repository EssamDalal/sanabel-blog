<x-layouts.app>
    <section class="hero is-medium" style="background-color: #333;  ">
        <div class="hero-body has-text-centered">
            <h1 class="title " style="color: darkorange">
                Tags Page
            </h1>
            <p class="subtitle " style="color: darkorange">Numbers of Tags Is : <span
                    style="font-size: 20px;">{{ $post->$tags->count() }}</span> </p>
        </div>
    </section>
    <section class="section">
        <section class="container mb-6 mt-6">
            <div class="columns is-multiline ">
                {{-- @foreach ($tags->$post as $tag  )
                    <span class="tag is-warning">{{ $tag->name }}</span>
                @endforeach --}}
            </div>
        </section>
    </section>

</x-layouts.app>
