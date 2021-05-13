<x-layouts.app>

    <div style="margin-top: 30px;">

        <section class="main-content columns is-fullheight">

            <x-sidebar />

            <section class="container mt-5">

                <section class="hero is-medium" style="background-color: #333;">
                    <div class="hero-body has-text-centered">
                        <h1 class="title" style="color: darkorange">
                            Welcome To Our Blog

                        </h1>

                        <p class="subtitle" style="color: darkorange">Numbers of Our Posts Is : <span
                                style="color: darkorange;font-size: 25px">{{ $posts->count() }}</span></p>
                    </div>
                </section>
                <section class="container m-6">
                    <div class="columns is-multiline ">
                        @foreach ($posts as $post)
                            <div class="column is-one-third">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src={{ $post->img }} alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="level">
                                                <div class="media-content">
                                                <p class="title is-4">{{ $post->title }}</p>
                                                @foreach ($post->tags as $tag)
                                                    <span class="tag is-warning">{{ $tag->name }}</span>
                                                @endforeach

                                            </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            {{ Str::limit($post->body, 80) }}
                                            <br>
                                            <time datetime="2016-1-1">{{ $post->created_at }}</time>
                                        </div>
                                        <div class="m-5">

                                        </div>

                                        <div class="buttons">
                                            <a href="/posts/{{ $post->id }}">
                                                <button class="button is-info is-outlined is-normal ml-5 mr-5">Show
                                                    Post</button>
                                            </a>
                                            <a href="/posts/{{ $post->id }}/edit">
                                                <button class="button is-primary is-outlined is-normal ml-5">Edit
                                                    Post</button>
                                            </a>
                                        </div>
                                        <div>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="button is-danger is-outlined is-normal is-fullwidth">Delete
                                                    Post</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="column is-12">{{ $posts->links() }}</div>
                    </div>
                </section>
            </section>
        </section>
    </div>

</x-layouts.app>
