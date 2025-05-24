




<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>{{ $course->name_course }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
</head>
<body style="background-color: #f9f9f9; padding: 40px; font-family: Arial, sans-serif;">

    <!-- عنوان الكورس -->
    <h2 style="color: #010059; font-size: 2em; font-weight: bold; text-align: center; margin-bottom: 20px;">
        {{ $course->name_course }}
    </h2>

    <!-- وصف الكورس -->
    <p style="color: #555; font-size: 1.1em; text-align: center; max-width: 800px; margin: 0 auto 30px;">
        {{ $course->description_course }}
    </p>

    <!-- تبويبات Bootstrap -->
    <ul class="nav nav-tabs justify-content-center" id="courseTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">
                discription 
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab">
                videos
            </button>
        </li>
    </ul>

    <!-- محتوى التبويبات -->
    <div class="tab-content mt-4" id="courseTabsContent">
        <!-- تبويب معلومات -->
        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
            <p style="text-align: center; color: #444;">{{ $course->description_course }}</p>
        </div>

        <!-- تبويب الفيديوهات -->
        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
            <h4 class="mt-4 mb-4 text-center">videos:</h4>

            @if($course->videos->count())
                <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                    @foreach($course->videos as $video)
                        <div style="
                            width: 300px;
                            background: #f1f9fc;
                            border-radius: 16px;
                            padding: 24px;
                            margin: 12px;
                            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
                            text-align: center;
                        ">
                            <h5 style="color: #010059; margin-bottom: 10px;">{{ $video->title }}</h5>
                            <video width="100%" controls style="border-radius: 8px; margin-bottom: 10px;">
                                <source src="{{ assets('storage/course_videos/' . $video->video_path) }}" type="video/mp4">
                            </video>
                            <a href="{{ route('courses.play', $video->id) }}" style="
                                display: inline-block;
                                background-color: #00c8f8;
                                color: white;
                                text-decoration: none;
                                padding: 10px 24px;
                                border-radius: 30px;
                                font-weight: bold;
                            ">مشاهدة</a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">لا توجد فيديوهات لهذا الكورس.</p>
            @endif
        </div>
    </div>

    <!-- سكربت Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

























{{-- @extends('index') --}}
{{-- @section('content') --}}
{{-- <div class="container" style="padding: 20px;">
    <!-- عنوان الكورس -->
    <h2 style="color: #010059; font-size: 2em; font-weight: bold; text-align: center; margin-bottom: 20px;">
        {{ $course->title }}
    </h2>
    <!-- وصف الكورس -->
    <p style="color: #555; font-size: 1.1em; text-align: center; max-width: 800px; margin: 0 auto 30px;">
        {{ $course->description }}
    </p>

    <!-- تبويبات Bootstrap -->
    <ul class="nav nav-tabs" id="courseTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="videos-tab" data-toggle="tab" href="#videos" role="tab">
                الفيديوهات
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab">
                تفاصيل أخرى
            </a>
        </li>
    </ul>

    <div class="tab-content" style="margin-top: 20px;">
        <!-- تبويب الفيديوهات -->
        <div class="tab-pane fade show active" id="videos" role="tabpanel">
            <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                @foreach ($course->videos as $video)
                    <!-- بطاقة الفيديو -->
                    <div style="
                        width: 300px;
                        background: #f1f9fc;
                        border-radius: 10px;
                        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                        margin: 10px;
                        padding: 15px;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        text-align: center;
                    ">
                        <!-- عنوان الفيديو -->
                        <h4 style="font-size: 1.1em; color: #010059; margin-bottom: 10px;">
                            {{ $video->title }}
                        </h4>
                        <!-- مشغل الفيديو -->
                        <video src="{{ asset($video->path) }}" controls style="width: 100%; border-radius: 5px; margin-bottom: 10px;">
                            <!-- في حال لم يدعم المتصفح وسم الفيديو -->
                            متصفحك لا يدعم وسم الفيديو.
                        </video>
                        <!-- زر مشاهدة الفيديو -->
                        <a href="{{ route('courses.play', $video->id) }}"
                           style="
                             display: inline-block;
                             margin-top: 10px;
                             background-color: #00c8f8;
                             color: #fff;
                             text-decoration: none;
                             padding: 8px 20px;
                             border: none;
                             border-radius: 20px;
                           ">
                            مشاهدة
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- تبويب تفاصيل أخرى (اختياري) -->
        <div class="tab-pane fade" id="other" role="tabpanel">
            <!-- محتوى إضافي هنا -->
        </div>
    </div>
</div> --}}
{{-- @endsection --}}







{{-- @extends('index') --}}


{{-- @section('content') --}}
{{-- <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; padding: 40px; background-color: #f9f9f9;">
    @foreach ($course as $courses)
        <div style="width: 300px; background-color: #f1f9fc; border-radius: 16px; padding: 24px; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">
            <div style="font-size: 48px; color: #00c8ff;">{{ $course['icon'] }}</div>
            <div style="color: #555; margin-top: 8px; font-size: 16px;">{{  $course[' $courses'] }}</div>
            <h3 style="font-size: 20px; color: #0a1d4e; margin: 12px 0;">{{  $course['title'] }}</h3>
            <a href="{{  $course['link'] }}" style="display: inline-block; background-color: #22d3ee; color: white; text-decoration: none; padding: 12px 24px; border-radius: 40px; font-weight: bold;">Read More</a>
        </div>
    @endforeach
</div> --}}

  

{{-- @endsection --}}