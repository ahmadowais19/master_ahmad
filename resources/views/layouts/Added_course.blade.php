@extends('index_dash')


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
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card shadow-sm w-100">
                        @if ($category->image)
                            <a href="{{ route('categories.courses.create', $category->id) }}"
                                class="btn btn-primary btn-sm">Add Course</a>


                            @php
                                $firstCourse = $category->courses->first();
                            @endphp

                            @if ($firstCourse)
                                <a href="{{ route('courses.videos.index', $firstCourse->id) }}">
                                    <img src="{{ asset('storage/' . $category->image) }}" class="card-img-top"
                                        alt="صورة الكورس">
                                </a>
                            @else
                                <div class="alert alert-warning">لا يوجد كورسات داخل هذا التصنيف</div>
                            @endif
                        @else
                            <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top"
                                alt="لا توجد صورة">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ Str::limit($category->description, 100) }}</p>
                            @if ($category->video)
                                {{-- <a href="{{ $course->video_course }}" target="_blank" class="btn btn-primary mt-auto mb-2">مشاهدة الفيديو</a> --}}
                            @endif
                            <p class="card-text"><strong>price:</strong> {{ $category->courseShow ?? 'مجاناً' }} $</p>
                        </div>
                        <div class="card-footer text-center bg-white">
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning btn-sm">edit</a>
                            <a href="{{ route('courses.videos.create', $category->id) }}"
                                class="btn btn-primary btn-sm">Add videos</a>

                            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
