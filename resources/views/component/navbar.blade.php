     <nav class="flex px-40 sm:px-12 justify-between fixed top-0  items-center h-16 text-white w-full shadow font-mono "
         role="navigation" style="background:#8F6DFF">
         <div>
             <a class="p-2" href="/">Todos</a>
         </div>
         <div class="navigation">
             <p class="cursor-pointer flex items-center gap-4"><img width="35px" class="rounded-full"
                     src="{{ asset('assets/images/' . Auth::user()->image) }}" alt="">
                 {{ Auth::user()->username }}</span> <i class="fa-solid fa-caret-down"></i></p>

             <div
                 class="dropdown absolute top-16 rounded-lg overflow-hidden sm:right-0  flex flex-col text-right  hidden">
                 <div class="w-full  bg-white sm:border-t-2 py-2 border w-full hidden sm:block  px-4 ">
                     <a class=" text-black logout-btn ">{{ Auth::user()->username }}</a>
                 </div>
                 <div class="w-full bg-white py-2 border w-full sm:border-b-2   px-4 "><a
                         class=" text-black  logout-btn2 " href="/profile"><i class="fa-regular fa-user"></i> Profil</a>
                 </div>
                 <div class="w-full bg-white py-2 border w-full sm:border-b-2   px-4 "><a
                         class=" text-black  logout-btn2 " href="/logout"><i
                             class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                 </div>
             </div>
         </div>

     </nav>
     <script src="{{ asset('assets/js/main.js') }}"></script>
