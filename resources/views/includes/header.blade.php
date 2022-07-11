<navbar class="flex justify-between p-4 bg-white items-center">
    <div class="text-lg font-medium text-orange-500 basis-3/4">Visualisasi Inter-Regional Input-Output Indonesia 2016
    </div>
    <ul class="flex basis-1/4 text-gray-300 justify-end gap-x-4">
        <li
            class="dropdown inline-block relative text-white bg-orange-500 hover:cursor-pointer h-11 duration-200 ease-in-out border rounded-lg border-white hover:border-gray-200 px-4 py-2">
            <div>
            <a class='flex items-center' style="min-width: 80px"><span class="truncate w-64">Lihat: {!! $tab->judul !!}</span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </a>
            <ul class="dropdown-menu absolute hidden text-gray- pt-1 bg-white rounded-lg py-2">
                @foreach ($tabs as $t)
                <li class=""><a class="rounded-t-lg text-orange-500 hover:cursor-pointer hover:bg-gray-100 duration-200 ease-in-out p-4 block whitespace-no-wrap" href="/dash/{{explode(" ",$t->jenis_dashboard)[1]}}">{!! $t->judul !!}</a></li>
                @endforeach
            </ul>
            </div>
        </li>
        @if(!Auth::check())
        <li
            class="hover:text-white h-11 hover:bg-orange-500 hover:cursor-pointer duration-200 ease-in-out border rounded-lg border-orange-400 text-orange-400 hover:border-gray-200 px-4 py-2">
            <a href="{{route('filament.auth.login')}}">Login</a>
        </li>
        @else
        <li
            class="hover:text-white h-11 hover:bg-orange-500 hover:cursor-pointer duration-200 ease-in-out border rounded-lg border-orange-400 text-orange-400 hover:border-gray-200 px-4 py-2">
            <a class="truncate" href="{{route('filament.pages.dashboard')}}">Admin Dashboard</a>
        </li>
        @endif
    </ul>
</navbar>
<div class="text-center text-3xl text-white font-medium p-24 bg-orange-500 ">
    <span>{!! $tab->judul !!}</span>
</div>

