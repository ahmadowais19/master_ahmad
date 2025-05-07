

@extends('index_dash')

{{-- @include('include.navbar_dash') --}}
{{-- 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> --}}

{{-- @extends('include.navbar_dash') --}}

@section('content5')
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="container py-5">
    <div class="row">
        @foreach ($course as $course)
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card shadow-sm w-100">
                    @if($course->image_course)
                        <img src="{{ asset('storage/' . $course->image_course) }}" class="card-img-top" alt="صورة الكورس">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="لا توجد صورة">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $course->name_course }}</h5>
                        <p class="card-text">{{ Str::limit($course->description_course, 100) }}</p>
                        @if($course->video_course)
                            <a href="{{ $course->video_course }}" target="_blank" class="btn btn-primary mt-auto mb-2">مشاهدة الفيديو</a>
                        @endif
                        <p class="card-text"><strong>السعر:</strong> {{ $course->price_course ?? 'مجاناً' }} $</p>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                        <form action="{{ route('course.destroy', $course->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
