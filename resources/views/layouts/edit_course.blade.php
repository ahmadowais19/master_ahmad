{{-- @extends('index_dash') --}}

{{-- @section('content6') --}}
<style>
    .card {
        border-radius: 1rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        border: none;
        background-color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-weight: 600;
        color: #2d3748;
    }

    .form-label {
        font-weight: 500;
        color: #4a5568;
    }

    .form-control {
        border-radius: 0.5rem;
        border: 1px solid #e2e8f0;
        transition: border-color 0.2s;
    }

    .form-control:focus {
        border-color: #5e72e4;
        box-shadow: 0 0 0 0.2rem rgba(94, 114, 228, 0.25);
    }

    .btn-primary {
        background-color: #5e72e4;
        border-color: #5e72e4;
        border-radius: 0.5rem;
        font-weight: 500;
    }

    .btn-primary:hover {
        background-color: #324cdd;
        border-color: #324cdd;
    }

    .btn-secondary {
        background-color: #adb5bd;
        border-color: #adb5bd;
        border-radius: 0.5rem;
        font-weight: 500;
    }

    .btn-secondary:hover {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .mb-3 label {
        margin-bottom: 0.3rem;
    }

    .d-flex.justify-content-between {
        gap: 1rem;
        flex-wrap: wrap;
    }
</style>

<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">اسم التصنيف</label>
        <input type="text" name="name" id="name" class="form-control"
               value="{{ old('name', $category->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">وصف التصنيف</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $category->description) }}</textarea>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">تحديث</button>
        <a href="{{ route('Added_course') }}" class="btn btn-secondary">رجوع</a>
    </div>
</form>



{{-- @endsection --}}





     {{-- <div class="mb-3">
                            <label for="image" class="form-label">رابط صورة الكورس</label>
                            <input type="text" name="image" id="" class="form-control" 
                                   value="{{ old('image', $course->image) }}">
                        </div> --}}
{{-- 
                        <div class="mb-3">
                            <label for="video" class="form-label">رابط فيديو الكورس</label>
                            <input type="text" name="video" id="video" class="form-control" 
                                   value="{{ old('video', $category->video_) }}">
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="price_course" class="form-label">سعر الكورس</label>
                            <input type="number" name="price" id="price" step="0.01" class="form-control" 
                                   value="{{ old('price', $category->price) }}">
                        </div> --}}