<div
    class="todos-head bg-gray-100 rounded-md items-center border-b px-12 sm:px-4 w-full  flex justify-between p-2 text-stone-500">
    <div class="todos-nav flex gap-2">
        <div class="todos-head__item sm:text-xs flex-items-center sm:py-2">
            <a href="{{ route('dashboard') }}" @if ($active == 'home') class="text-black" @endif>Proses <span
                    class="ml-1" style="color:#FF2E56">||</span></a>
        </div>
        <div class="todos-head__item flex items-center sm:text-xs">
            <a href="/selesai" @if ($active == 'done') class="text-black" @endif>Sudah Selesai</a>
        </div>
    </div>
    <div class="add-todos">
        <a href="/create" class=" flex items-center gap-3 rounded-md font-bold text-blue-500"><i
                class="fa-solid fa-plus"></i>
            <p class="sm:hidden">Tambah Todo</p>
        </a>
    </div>
</div>
