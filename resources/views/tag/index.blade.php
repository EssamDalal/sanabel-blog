<x-layouts.app>

    <div class="mt-5">

        <section class="main-content columns is-fullheight">

            <x-sidebar />

            <section class="container mt-5">


                <section class="hero is-medium" style="background-color: #333;  ">

                    <div class="hero-body has-text-centered">
                        <h1 class="title " style="color: darkorange">
                            Tags Page
                        </h1>
                        <p class="subtitle " style="color: darkorange">Numbers of Tags Is : <span
                                style="font-size: 20px;">{{ $tags->count() }}</span> </p>
                    </div>
                </section>
                <section class="container mb-6 mt-6">
                    <div class="columns is-multiline ">
                        @foreach ($tags as $tag)
                            <div class="column is-one-third">
                                <div class="field is-grouped is-grouped-multiline">
                                    <div class="control">
                                        <div class="tags has-addons are-medium">
                                            <span class="tag is-dark">{{ $tag->name }}</span>
                                            <a href="{{ route('tags.show', $tag) }}">
                                                <span class="tag is-info">show posts</span>
                                            </a>
                                            <a href="{{ route('tags.edit', $tag) }}">
                                                <span class="tag is-danger">edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </section>
    </div>

</x-layouts.app>
