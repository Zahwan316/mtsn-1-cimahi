<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
        <div class="w-full aspect-[16/9] bg-slate-100 overflow-hidden">
            <img
                src="{{ asset($img) }}"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                alt="Perkemahan Pramuka"
            />
        </div>
        <div class="p-5 flex flex-col space-y-2">
            <h4 class="text-base font-bold text-slate-800 leading-snug group-hover:text-[#0B2D72] transition-colors line-clamp-2">
                {{ $title }}
            </h4>
            <div class="flex items-center gap-1.5 text-xs text-slate-400 font-medium">
                @if(!empty($date))
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ $date }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
