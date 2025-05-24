

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
      max-width: 600px;
      width: 100%;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      padding: 20px;
    }
  
    form .mb-3 label {
      font-weight: 600;
    }
  
    form .mb-3 input,
    form .mb-3 textarea {
      border-radius: 8px;
      padding: 10px;
    }
  
    .btn {
      border-radius: 8px;
      min-width: 100px;
    }
  
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
  
  <div class="page-wrapper">
    <div class="card">
      <div class="card-body">
        {{-- زر لإضافة كورس جديد --}}
        <a href="{{ route('categories.course.create', $category->id) }}" class="btn btn-primary">Add video</a>

        {{-- <a href="{{ route('courses.create', ['category' => $category->id]) }}" class="btn btn-primary">Add video</a> --}}
  
        {{-- نموذج إنشاء كورس --}}
        <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
          @csrf
  
          {{-- ضروري لإرسال رقم التصنيف --}}
          <input type="hidden" name="category_id" value="{{ $category->id }}">
  
          <div class="mb-3">
            <label for="name_course" class="form-label">Course Name</label>
            <input type="text" name="name_course" id="name_course" class="form-control" placeholder="Enter course name" required>
          </div>
  
          <div class="mb-3">
            <label for="description_course" class="form-label">Description</label>
            <textarea name="description_course" id="description_course" rows="4" class="form-control" placeholder="Course description" required></textarea>
          </div>
  
          <div class="mb-3">
            <label for="image_course" class="form-label">Course Image</label>
            <input type="file" name="image_course" id="image_course" class="form-control" accept="image/*" required>
          </div>
  
          <div class="mb-3">
            <label for="video_course" class="form-label">Course Video</label>
            <input type="file" name="video_course" id="video_course" class="form-control" accept="video/*" required>
          </div>
  
          <div class="mb-3">
            <label for="price_course" class="form-label">Price (USD)</label>
            <input type="number" name="price_course" id="price_course" class="form-control" step="0.01" placeholder="Enter price" required>
          </div>
  
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-upload me-2">Save</button>
            {{-- زر الإلغاء يرجع للصفحة السابقة أو لمسار آخر حسب ما تراه مناسب --}}
            <a href="{{ route('course.create', $category->id) }}" class="btn btn-back">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
