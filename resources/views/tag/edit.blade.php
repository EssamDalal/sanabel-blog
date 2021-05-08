<x-layouts.app>

    <section class="container" style="margin-bottom: 30px;margin-top: 100px">
      <div class="title is-3">Edit {{ $tag->name }}</div>
      <form action="{{ route('tags.update' , $tag) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input @error('name')is-danger @enderror" value="{{ $tag->name  }}" type="text" placeholder="tag name" name="name">
          </div>
          @error('name')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label">Slug</label>
          <div class="control">
            <input class="input @error('slug') is-danger  @enderror" value="{{ $tag->slug }}" type="text" placeholder="Slug" name="slug">
          </div>
          @error('slug')
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
