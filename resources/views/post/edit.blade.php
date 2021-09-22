<div class="card">
    <div class="card-body">
        <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label for="status">Status</label><br>
                <input type="text" name="status" class="form-control" id="status" placeholder="Masukkan Status" value="{{ $post->status}}">
                @error('status')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Foto</label><br>
                <img src="{{ URL($post->image) }}" height="100" width="150">
                <input type="file" name="image" {{ $post->image }}>
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="caption">Caption</label><br>
                <input type="text" name="caption" class="form-control" id="caption" placeholder="Masukkan Caption" value="{{ $post->caption}}">
                @error('caption')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="quotes">Quotes</label><br>
                <input type="text" name="quotes" class="form-control" id="quotes" placeholder="Masukkan Quotes" value="{{ $post->quotes}}">
                @error('quotes')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>