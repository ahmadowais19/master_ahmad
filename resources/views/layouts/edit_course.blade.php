{{-- @extends('index_dash') --}}



{{-- @section('content6') --}}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-4">تعديل الكورس</h4>

                    <form action="{{ route('course.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name_course" class="form-label">اسم الكورس</label>
                            <input type="text" name="name_course" id="name_course" class="form-control" 
                                   value="{{ old('name_course', $course->name_course) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description_course" class="form-label">وصف الكورس</label>
                            <textarea name="description_course" id="description_course" class="form-control">{{ old('description_course', $course->description_course) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image_course" class="form-label">رابط صورة الكورس</label>
                            <input type="text" name="image_course" id="image_course" class="form-control" 
                                   value="{{ old('image_course', $course->image_course) }}">
                        </div>

                        <div class="mb-3">
                            <label for="video_course" class="form-label">رابط فيديو الكورس</label>
                            <input type="text" name="video_course" id="video_course" class="form-control" 
                                   value="{{ old('video_course', $course->video_course) }}">
                        </div>

                        <div class="mb-3">
                            <label for="price_course" class="form-label">سعر الكورس</label>
                            <input type="number" name="price_course" id="price_course" step="0.01" class="form-control" 
                                   value="{{ old('price_course', $course->price_course) }}">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">تحديث الكورس</button>
                            <a href="{{ route('course.index') }}" class="btn btn-secondary">رجوع</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
