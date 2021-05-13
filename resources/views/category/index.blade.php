<x-layouts.app>

    <div style="margin-top: 30px;">

        <section class="main-content columns is-fullheight">

            <x-sidebar />

            <section class="container mt-5">

                <section class="hero is-medium" style="background-color: #333;">
                    <div class="hero-body has-text-centered">
                        <h1 class="title " style="color: darkorange">
                            Categories Page
                        </h1>

                        <p class="subtitle" style="color: darkorange">Numbers of Categories Is : <span
                                style="font-size: 20px;color: darkorange">{{ $categories->count() }}</span> </p>
                    </div>
                </section>
                <section class="section">
                    <section class="container mb-6 mt-6">
                        <div class="columns is-multiline ">
                            @foreach ($categories as $category)
                                <div class="column is-one-third">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure class="image is-48x48">
                                                        <img src="{{ $category->icon }}" alt="Placeholder image">
                                                    </figure>
                                                </div>
                                                <div class="media-content">
                                                    <p class="title is-4">{{ $category->name }}</p>
                                                    <p class="subtitle is-6">@johnsmith</p>
                                                </div>
                                            </div>
                                            <div class="content">

                                                <time datetime="2016-1-1">{{ $category->created_at }}</time>
                                            </div>
                                            <div>
                                                <a href="{{ route('categories.show', $category) }}">
                                                    <button class="button is-fullwidth is-primary is-outlined mb-5">Show
                                                        All
                                                        Post</button>
                                                </a>
                                                <a href="{{ route('categories.edit', $category) }}">
                                                    <button
                                                        class="button is-fullwidth is-danger  is-outlined">Edit</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </section>
            </section>
        </section>
    </div>
</x-layouts.app>
