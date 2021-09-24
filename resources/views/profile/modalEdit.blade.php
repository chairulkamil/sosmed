<div class="modal fade" id="textbox" aria-labelledby="textbox">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Profile</h5>
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
        <form action="/profile" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          
          <div class="form-group" >
              <label for="fullName">Full Name</label>
              <input  type="text" name="fullName" class="form-control" id="fullName" value="{{$profile->fullName}}">
              
          </div>
          <div class="form-group" >
              <label for="alamat">Alamat</label>
            <input  type="text" name="alamat" class="form-control" id="alamat" value="{{$profile->alamat}}">
            
        </div>
        <div class="form-group" >
            <label for="alamat">No Handphone</label>
          <input  type="text" name="no_hp" class="form-control" id="no_hp" value="{{$profile->no_hp}}">
          
      </div>
    <div class="form-group" >
        <label for="tgl_lahir">Tanggal Lahir</label>
      <input  type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{$profile->tgl_lahir}}">
      
  </div>
  <div class="form-group" >
    <label for="work">Pekerjaan</label>
  <input  type="text" name="work" class="form-control" id="work" value="{{$profile->work}}">
  
</div>
<div class="form-group" >
    <label for="bio">Biografi</label>
  <input  type="text" name="bio" class="form-control" id="bio" value="{{$profile->bio}}">
</div>

<div class="form-group" >
    <label for="hobby">Hobby</label>
  <input  type="text" name="hobby" class="form-control" id="hobby" value="{{$profile->hobby}}">
  
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
            <button type="submit" class="post-share-btn">
              post
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>