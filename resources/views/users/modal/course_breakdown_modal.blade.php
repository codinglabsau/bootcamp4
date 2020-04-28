<div id="enrolment_{{ $enrolment->id }}" class="fixed w-screen h-screen bottom-0 inset-x-0 flex items-center hidden overflow-hidden">
    <div class="fixed inset-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div class="container mx-auto z-10 w-3/4 h-3/4 bg-gray-100 rounded overflow-hidden">
        <div class="flex flex-col overflow-auto">

            <!-- Head section of modal -->
            <div class="fixed w-3/4 flex items-center justify-center text-center bg-orange-500 text-2xl text-white rounded-t shadow-lg">
                <h1 class="flex-1 ml-8">{{ $enrolment->course->name }}</h1>
                <button onclick="closeModal({{ $enrolment->id }})" class="self-end px-8 py-8 hover:text-gray-300 focus:outline-none">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L18 18" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                        <path d="M18 2L2 18" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>

            <div style="height:425px" class="mx-auto mt-32 w-3/4 overflow-x-auto px-4">
                @foreach ($enrolment->course->sections as $section)
                <!-- Section -->
                    <div class="flex flex-col items-center mb-4">
                        <!-- Section header -->
                        <div class="w-full flex bg-white rounded mb-2 items-center shadow">
                            <button id="{{ $section->id }}" onclick="toggleSection({{ $section->id }})" class="p-4 focus:outline-none text-xl">+</button>
                            <h2 class="flex-1 text-2xl px-4">{{ $section->name }}</h2>
                            <div class="mr-8 {{ $enrolment->sectionComplete($section) ? 'text-black' : 'text-white'}}">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="23" height="23" rx="4" fill="#FFF"/>
                                    <line x1="6.70711" y1="12.2929" x2="11.7071" y2="17.2929" stroke="currentColor" stroke-width="2"/>
                                    <line x1="11.1958" y1="17.4056" x2="19.3258" y2="6.40557" stroke="currentColor" stroke-width="2"/>
                                    <path d="M11.2971 17.3894C11.3468 17.5168 11.3507 17.7486 11.5216 17.7486" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="1" y="1" width="23" height="23" rx="4" stroke="#C0B8B8" stroke-width="2"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Section content -->
                        <div id="section_{{ $section->id }}" class="w-full flex flex-col bg-white hidden overflow-auto">
                            <h2 class="py-4 px-14 text-left">Lessons</h2>
                            <div class="flex flex-col items-center text-sm">
                                @foreach ($section->lessons as $lesson)
                                    <div class="w-full flex items-center justify-between pr-9 py-2">
                                        <p class="flex-1 pl-24">{{ $lesson->name }}</p>
                                        @if ($enrolment->lessons->where('lesson_id', $lesson->id)->first())
                                            <p class="flex-1 pl-24">{{ $enrolment->lessons->where('lesson_id', $lesson->id)->first()->created_at }}</p>
                                        @else
                                            <p class="flex-1 pl-24">n/a</p>
                                        @endif
                                        <div></div>
                                        <div class="{{ $enrolment->lessons->where('lesson_id', $lesson->id)->first() != null ? 'text-black' : 'text-white' }}">
                                            <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="1" y="1" width="23" height="23" rx="4" fill="#FFF"/>
                                                <line x1="6.70711" y1="12.2929" x2="11.7071" y2="17.2929" stroke="currentColor" stroke-width="2"/>
                                                <line x1="11.1958" y1="17.4056" x2="19.3258" y2="6.40557" stroke="currentColor" stroke-width="2"/>
                                                <path d="M11.2971 17.3894C11.3468 17.5168 11.3507 17.7486 11.5216 17.7486" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                <rect x="1" y="1" width="23" height="23" rx="4" stroke="#C0B8B8" stroke-width="2"/>
                                            </svg>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <h2 class="py-4 px-14 text-left">Assessments</h2>
                            <div class="flex flex-col items-center text-sm pb-4">
                                @foreach ($section->assessment->assessmentItems as $assessmentItem)
                                    <div class="w-full flex items-center justify-evenly pl-24 pr-9 py-2">
                                        <p class="flex-1">{{ $assessmentItem->name}}</p>
                                        @if ($enrolment->assessmentItems->where('assessment_item_id', $assessmentItem->id)->first())
                                            <p class="flex-1">
                                                {{ $enrolment->assessmentItems->where('assessment_item_id', $assessmentItem->id)->first()->created_at }}
                                            </p>
                                            <p class="flex-1">
                                                {{ $enrolment->assessmentItems->where('assessment_item_id', $assessmentItem->id)->first()->mark }}/10
                                            </p>
                                            <div class="{{ $enrolment->assessmentItems->where('assessment_item_id', $assessmentItem->id)->first()->getAssessmentStatus() }}">
                                                <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1" y="1" width="23" height="23" rx="4" fill="currentColor"/>
                                                    <rect x="1" y="1" width="23" height="23" rx="4" stroke="#C0B8B8" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        @else
                                            <p class="flex-1">-/10</p>
                                            <div class="text-white">
                                                <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1" y="1" width="23" height="23" rx="4" fill="currentColor"/>
                                                    <rect x="1" y="1" width="23" height="23" rx="4" stroke="#C0B8B8" stroke-width="2"/>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function closeModal(enrolment_id) {
            document.getElementById(`enrolment_${enrolment_id}`).classList.add('hidden');
        }

        function toggleSection(section_id) {
            let section = document.getElementById(`section_${section_id}`);
            let hidden = section.classList.contains('hidden');
            document.getElementById(section_id).innerHTML = hidden ? '-' : '+';
            hidden ? section.classList.remove('hidden') : section.classList.add('hidden');
        }
    </script>
</div>
