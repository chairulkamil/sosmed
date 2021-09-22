<div class="card">
    <div class="card-body">
        <form action="/post" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" id="status" placeholder="Masukkan Status">
                @error('status')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" name="image">
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="caption">Caption</label>
                <input type="text" name="caption" class="form-control" id="caption" placeholder="Masukkan Caption">
                @error('caption')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="quotes">Quotes</label>
                <input type="text" name="quotes" class="form-control" id="quotes" placeholder="Masukkan Quotes">
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