<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Example</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <style>
        /* Đặt ảnh nền */
        body {
            background-image: url('https://cdn.mobilecity.vn/mobilecity-vn/images/2025/02/review-phim-na-tra-ma-dong-nao-hai-review-1-2.jpg.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        /* Tạo lớp overlay để làm mờ ảnh nền */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Màu tối nhẹ */
            backdrop-filter: blur(5px);
            z-index: -1;
        }
    </style>
</head>

<body class="bg-gray-900">
    <div id="default-carousel" class="relative w-full max-w-4xl mx-auto mt-10" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-64 md:h-96 overflow-hidden rounded-lg shadow-lg">
            @foreach ($sl as $index => $slide)
                <div class="{{ $loop->first ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('source/image/slide/' . $slide['image']) }}" 
                        class="absolute block w-full h-full object-cover top-0 left-0 rounded-lg shadow-xl" 
                        alt="Slide {{ $index + 1 }}">
                </div>
            @endforeach
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
            @foreach ($sl as $index => $slide)
                <button type="button" class="w-3 h-3 rounded-full bg-blue-500 hover:bg-blue-700 transition-all"
                    aria-current="{{ $loop->first ? 'true' : 'false' }}" 
                    aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}">
                </button>
            @endforeach
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-500/70 hover:bg-blue-700 transition-all">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-blue-500/70 hover:bg-blue-700 transition-all">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</body>

</html>
