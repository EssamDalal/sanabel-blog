<x-layouts.app>

  <section class="container" style="margin-bottom: 30px;margin-top: 100px">
    <div class="title is-3">Edit {{ $category->name }}</div>
    <form action="/categories/{{ $category->id }}" method="POST">
      @csrf
      <input type="hidden" name="_method" value="PUT">
      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input class="input @error('name')is-danger @enderror" value="{{ $category->name  }}" type="text" placeholder="category name" name="name">
        </div>
        @error('name')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field">
        <label class="label">Icon Image (URL)</label>
        <div class="control">
          <input class="input @error('icon') is-danger  @enderror" value="{{ $category->icon }}" type="text" placeholder="Image url" name="icon">
        </div>
        @error('icon')
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
