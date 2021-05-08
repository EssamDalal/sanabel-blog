<x-layouts.app>
    <section class="hero is-medium" style="background-color: #333;">
        <div class="hero-body has-text-centered">
            <h1 class="title" style="color: darkorange">
                Category \{{ $category->name }}\ Page
            </h1>

        </div>
    </section>
    <section class="section mt-6 ml-6">

        <div class="field is-grouped is-grouped-multiline">
            <div class="control">
                <figure>
                    <img src="{{ $category->icon }}" width="50px">
                </figure>
            </div>
            <div class="control">
                <div class="tags are-medium has-addons">
                    <span class="tag is-info">{{ $category->name }}</span>
                    <a href="{{ route('categories.edit', $category) }}"><span class="tag is-dark">edit
                            category</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-6 mt-6">
        <div class="columns is-multiline ">
            @foreach ($category->posts as $post)
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ $post->img }} alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">{{ $post->title }}</p>
                                </div>
                            </div>
                            <div class="content">
                                {{ Str::limit($post->body, 30) }}
                                {{-- {{$post->body}} --}}
                                <br>
                                <time datetime="2016-1-1">{{ $post->created_at }}</time>
                            </div>
                            <div>
                                <a href="/posts/{{ $post->id }}">
                                    <button class="button is-fullwidth is-primary is-outlined mb-5">Show</button>
                                </a>
                                <a href="/posts/{{ $post->id }}/edit">
                                    <button class="button is-fullwidth is-danger  is-outlined">Edit</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.app>
