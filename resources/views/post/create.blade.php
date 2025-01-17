<x-layouts.app>

  <section class="container " style="margin-bottom: 30px;margin-top: 100px">
    <div class="title is-3">Create New Post</div>
    <form action="/posts" method="POST">
      @csrf
      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input @error('title')is-danger @enderror" value="{{ old('title')  }}" type="text" placeholder="Post Title" name="title">
        </div>
        @error('title')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="field">
        <label class="label">Slug</label>
        <div class="control">
          <input class="input @error('slug')is-danger @enderror" value="{{ old('slug')  }}" type="text" placeholder="Post slug" name="slug">
        </div>
        @error('slug')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="field">
        <label class="label">Tags</label>

        <div class="control">
          <div class="select is-multiple @error('tags')is-danger @enderror">
            <select name="tage[]" value="{{ old('tags') }}" multiple>
              @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        @error('tags')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="field">
        <label class="label">Category</label>

        <div class="control">
          <div class="select @error('category_id')is-danger @enderror">
            <select name="category_id" value="{{ old('category_id') }}">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        @error('category_id')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="field">
        <label class="label">Featured Image (URL)</label>
        <div class="control">
          <input class="input @error('img') is-danger  @enderror" value="{{ old('img') }}" type="text" placeholder="Image url" name="img">
        </div>
        @error('img')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field">
        <label class="label">Content</label>
        <div class="control">
          <textarea class="textarea @error('body') is-danger @enderror"  placeholder="Post Content" name="body">{{ old('body') }}</textarea>
        </div>
        @error('body')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Submit</button>
        </div>
        <div class="control">
          <button class="button is-link is-light">Cancel</button>
        </div>
      </div>
    </form>
  </section>
</x-layouts.app>
