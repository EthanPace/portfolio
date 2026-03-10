<x-layout>
    <x-h.title>Stats</x-h.title>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-7 gap-2 text-xs w-100% 2xl:max-w-[90rem]">
        @php 
            $start = $weather->first()->date;
            $startDay = $start->dayOfWeek === 0 ? 7 : $start->dayOfWeek;
            $weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            $max = $git->max('commit_count') ?: 1;
            $shades = [900, 800, 700, 600, 500, 400, 300, 200, 100, 50]
        @endphp

        @for ($i = 1; $i < $startDay; $i++)
            <div class="flex flex-col items-center bg-gray-900 text-gray-600 text-xl border-2 border-gray-900 rounded p-2 gap-2 rounded-xl">
                {{ $weekdays[$i] }}
            </div>
        @endfor

        @foreach ($weather as $w)
            @php
                $c = $git->get($w->date->toDateString());
                $count = $c?->commit_count ?? 0;
                $ratio = $count / $max;
                $darkness = $shades[(int) round($ratio * (count($shades) - 1))];
            @endphp

            <div class="flex flex-col items-center bg-gray-{{ $darkness }} text-gray-{{ $darkness > 400 ? '50' : '900' }} border-2 border-gray-900 rounded p-2 gap-2 rounded-xl font-semibold">
                <div class="font-bold text-sm mb-1 pb-1 px-2 border-b w-full flex justify-between">
                    <h1>{{ $w->date->format('l,') }}</h1>
                    <h1>{{ $w->date->format('d/m') }}</h1>
                </div>
                
                <p>{{ $w->cloud_cover }}% Cloud Cover</p>
                <p>{{ $w->high_temp }}°C High</p>
                <p>{{ $w->low_temp }}°C Low</p>
                <p>{{ $w->precipitation }}mm Precipitation</p>
                <p>{{ $c?->commit_count ?? 0 }} Commits</p>
            </div>
        @endforeach
    </div>
</x-layout>