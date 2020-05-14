<div class="flex-1 mb-8 flex bg-white rounded shadow">
    <a class="px-8 py-4" href="{{ route('home') }}">
        <img class="object-fill rounded-full h-24 w-24" src="{{ asset('images/imgs/headshot.jpg') }}"
             alt="User Avatar" />
    </a>

    <div class="flex flex-col text-gray-800">
        <h1 class="py-4 text-2xl font-semibold">{{ auth()->user()->name }}</h1>
        <p>Student</p>
    </div>

    <div class="w-32 text-gray-400 -ml-12">
        <svg preserveAspectRatio="none" viewBox="0 0 100 100">
            <polygon points="0,100 100,0 100,100" fill="currentColor"/>
        </svg>
    </div>
    <div class="flex-1 flex items-center bg-gray-400 text-white text-xl rounded-r">
        <a class="px-8 font-semibold" href="#">
            My Account
        </a>
        <a class="px-8 font-semibold" href="#">
            My Courses
        </a>
    </div>
</div>