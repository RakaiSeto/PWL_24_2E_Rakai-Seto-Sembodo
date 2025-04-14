@extends('layouts.template')

@section('content')
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">{{ $page->title }}</h3>
      <div class="card-tools"></div>
    </div>
    <div class="card-body">
      <h4>Current profile of {{ Auth::user()->name }}</h4>
      <img src="{{ asset(session('user_foto') ? session('user_foto') : 'default-user.jpg') }}" alt="Profile Photo" class="img-fluid rounded-circle" style="max-width: 200px">
      <form action="{{ url('/do-change-photo') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Update Photo</label>
        <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
      </div>
      <button type="button" id="update-photo-btn" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
@endsection

@push('js')

<script>
    $(document).ready(function() {
      $('#update-photo-btn').on('click', function() {
        const form = $(this).closest('form');
        const formData = new FormData(form[0]);

        console.log(formData);

        $.ajax({
          url: form.attr('action'),
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            if (response.success) {
              alert('Profile photo updated successfully');
              // Update the photo URL in the header
              window.location.reload();
            } else {
              alert('Failed to update profile photo');
            }
          },
          error: function(xhr, status, error) {
            alert('Error: ' + error);
          }
        });
      })
    });
  </script>
@endpush