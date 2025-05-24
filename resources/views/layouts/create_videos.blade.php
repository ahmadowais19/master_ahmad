<style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  
    .page-wrapper {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f8f9fa;
      padding: 20px;
    }
  
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 15px;
      overflow: hidden;
      max-width: 500px;
      width: 100%;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      padding: 20px;
    }
  
    form .mb-3 label {
      font-weight: 600;
    }
  
    form .mb-3 input[type="text"],
    form .mb-3 input[type="file"] {
      border-radius: 8px;
      padding: 10px;
    }
  
    .btn {
        border-radius: 8px;
        min-width: 100px;
      min-width: 100px;
    }
  
    /* ألوان مخصصة للأزرار */
    .btn-upload {
      background-color: #007bff;
      color: white;
    }
  
    .btn-upload:hover {
      background-color: #0069d9;
    }
  
    .btn-back {
      background-color: #dc3545;
      color: white;
    }
  
    .btn-back:hover {
      background-color: #c82333;
    }
  </style>
<form method="POST" action="{{ route('courses.videos.store') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="course_id" value="{{ $course->id }}">

  <input type="text" name="title" required>
  <input type="file" name="video_path" accept="video/*" required>

  <button type="submit">Upload</button>
</form>




{{-- <div class="page-wrapper">
  <div class="card">
    <div class="card-body">
      <h3 class="text-center font-weight-bolder mb-4">
<a href="{{ route('courses.videos.create',  $course ->id) }}" class="btn btn-primary btn-sm">Add videos</a>

      </h3>

      <form method="POST" action="{{ route('videos.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">

        <div class="mb-3">
          <label for="video_title" class="form-label">Video title</label>
          <input type="text" name="video_title" id="video_title" class="form-control" placeholder="Enter video title" required>
        </div>

        <div class="mb-3">
          <label for="video_path" class="form-label">Video file</label>
          <input type="file" name="video_path" id="video_path" class="form-control" accept="video/*" required>
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-upload me-2">Upload</button>
          <a href="{{ route('course.show', $course->id) }}" class="btn btn-back">  Back  </a>
        </div>
      </form>
    </div>
  </div>
</div> --}}
  