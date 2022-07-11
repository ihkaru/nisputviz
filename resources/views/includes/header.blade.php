
        <navbar class="flex justify-between p-4 bg-white items-center">
            <div class="text-lg font-medium text-orange-500 basis-3/4">Indonesia's IRIO Visualization</div>
            <ul class="flex basis-1/4 text-gray-300 justify-end gap-x-4">
                @if(!Auth::check())
                <li class="hover:text-orange-500 hover:cursor-pointer duration-200 ease-in-out border rounded-lg border-white hover:border-gray-200 px-4 py-2">
                    <a href="{{route('filament.auth.login')}}">Login</a>
                </li>
                @else
                <li class="hover:text-orange-500 hover:cursor-pointer duration-200 ease-in-out border rounded-lg border-white hover:border-gray-200 px-4 py-2">
                    <a href="{{route('filament.pages.dashboard')}}">Admin Dashboard</a>
                </li>
                @endif
            </ul>
        </navbar>
        <div class="text-center text-3xl text-white font-medium p-24 bg-orange-500 ">
            <span>{!! $tab->judul !!}</span>
        </div>
