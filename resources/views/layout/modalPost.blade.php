<!-- share content box start -->
<div class="share-content-box w-100">
  <form class="share-text-box">
    <textarea
      name="share"
      class="share-text-field"
      aria-disabled="true"
      placeholder="Say Something"
      data-toggle="modal"
      data-target="#textbox"
      id="email"
    ></textarea>
  </form>
  <div class="row mt-2">
    <div class="col-8"><button data-toggle="modal" data-target="#quot" type="button" class="post-share-btn justify-content-md-end" >Quotes / Cerita</button>
    </div>
    <div class="col">
      
      <button data-toggle="modal" data-target="#foto" type="button" class="post-share-btn"><i class="fas fa-images"></i>Photo</button>
    </div>
  </div>
</div>
<!-- share content box end -->


<!-- Modal start -->
<div class="modal fade" id="textbox" aria-labelledby="textbox">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Status duluu</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body custom-scroll">
      <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        
        <div class="form-group" >
            <input  type="text" name="status" class="form-control" id="status" placeholder="Mikirin Apa gan?">
            @error('status')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <div class="modal-footer">
          <button
            type="button"
            class="post-share-btn"
            data-dismiss="modal"
          >
            cancel
          </button>
          <button type="submit" class="post-share-btn" id="statusbtn">
            post
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Modal end -->

<!-- Modal start -->
<div class="modal fade" id="quot" aria-labelledby="quot">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Kasih Paham Gan</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body custom-scroll">
      <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        
        
        <div class="form-group" >
          <textarea class="ckeditor form-control" name="quotes"></textarea>
            
        </div>
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <div class="modal-footer">
          <button
            type="button"
            class="post-share-btn"
            data-dismiss="modal"
          >
            cancel
          </button>
          <button type="submit" class="post-share-btn" id="quotesbtn">
            post
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- Modal start -->
<div class="modal fade" id="foto" aria-labelledby="foto">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ekspresikan Gaya lo</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body custom-scroll">
      <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        
        
        <div class="form-group" >
          <label for="image">Foto</label><br>
          <input type="file" name="image">
          @error('image')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="form-group" >
          <label for="caption">Caption</label>
          <input type="text" name="caption" class="form-control" id="caption" placeholder="Masukkan Caption">
          @error('caption')
              <div class="alert alert-danger">
                  {{ $message }}
              </div>
          @enderror
      </div>
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <div class="modal-footer">
          <button
            type="button"
            class="post-share-btn"
            data-dismiss="modal"
          >
            cancel
          </button>
          <button type="submit" class="post-share-btn" id="fotobtn">
            post
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

</div>

@push('status')
    <script>
       const statusbtn = document.getElementById('statusbtn');
      statusbtn.addEventListener('click', function(){
        swal("Berhasil", "Status Berhasil di update!", "success");
      });

      const quotesbtn = document.getElementById('quotesbtn');
      quotesbtn.addEventListener('click', function(){
        swal("Berhasil", "Quotes Berhasil di-posting!", "success");
      });
      
      const fotobtn = document.getElementById('fotobtn');
      fotobtn.addEventListener('click', function(){
        swal("Berhasil", "Foto Berhasil di-posting!", "success");
      });
    </script>
@endpush