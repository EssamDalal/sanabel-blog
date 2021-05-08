<aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
    <p class="menu-label is-hidden-touch is-size-4">Slide bar</p>
    <ul class="menu-list">
        <li>
            <a href="{{ route('home') }}" class="" style="background-color: #37424c;color:white ">
                <span class="icon"><i class="fa fa-home"></i></span> Home
            </a>
        </li>
        <li>
            <a href="{{ route('posts.create') }}" class="">
                <span class="icon"><i class="fa fa-info"></i></span> Create Post
            </a>
        </li>
        <li>
            <a href="{{ route('categories.index') }}" class="">
                <span class="icon"><i class="fa fa-info"></i></span> Categories
            </a>
        </li>
        <li>
            <a href="{{ route('tags.index') }}" class="">
                <span class="icon"><i class="fa fa-info"></i></span> Tags
            </a>
        </li>
        <li>
            <a href="{{ route('categories.create') }}" class="">
                <span class="icon"><i class="fa fa-info"></i></span>Create Category
            </a>
        </li>
        <li>
            <a href="{{ route('tags.create') }}" class="">
                <span class="icon"><i class="fa fa-info"></i></span>Create Tag
            </a>
        </li>
    </ul>
</aside>
