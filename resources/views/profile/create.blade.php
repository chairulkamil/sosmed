<div class="card">
    <div class="card-body">
        <form action="/profile" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label for="fullName">Nama Lengkap</label>
                <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Masukkan Nama Lengkap">
                @error('fullName')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto">
                @error('foto')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_hp">No Telepon</label>
                <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Masukkan No Telepon">
                @error('no_hp')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
                @error('tgl_lahir')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="work">Pekerjaan</label>
                <input type="text" name="work" class="form-control" id="work" placeholder="Masukkan Pekerjaan">
                @error('work')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" name="bio" class="form-control" id="bio" placeholder="Masukkan Bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="hobby">Hobby</label>
                <input type="text" name="hobby" class="form-control" id="hobby" placeholder="Masukkan Hobby">
                @error('hobby')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>