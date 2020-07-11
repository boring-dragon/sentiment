<div>



   @if (session()->has('message'))
   <div class="mt-4">
      <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert">
         <p>{{session('message')}}</p>
      </div>
   </div>

   @endif

   <div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl ">
      <!--horizantil margin is just for display-->
      <div class="flex items-start px-4 py-6">
         <div class="">
         <h3 class="text-red-700 font-semibold">ID: {{$comment->id}}</h3>
         <h3 class="text-blue-700 font-semibold mb-2">Source: {{$comment->source}}</h3>

            <p class="mt-3 text-gray-700 text-md text-right para-dhivehi" style="direction: rtl;">
               {!!$comment->comment!!}

            </p>
            <div class="mt-4 flex justify-between">
               <div class="flex items-center">
                  <svg class="h-4 w-4" viewBox="0 0 496 496" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M422 48v400c0 17.7-14.3 32-32 32H106c-17.7 0-32-14.3-32-32V48c0-17.7 14.3-32 32-32h284c17.7 0 32 14.3 32 32z"
                        fill="#b9dcff" />
                     <path
                        d="M360 98v50c0 13.3-10.8 24-24 24H160c-13.3 0-24-10.8-24-24V98c0-13.3 10.8-24 24-24h176c13.3 0 24 10.8 24 24z"
                        fill="#d1e7ff" />
                     <path
                        d="M336 105.3H191.3c-13.3 0-24 10.7-24 24V148c0 20.1-30.2 21.3-31.3 1.2-.1-1 0-52.3 0-51.3 0-13.3 10.7-24 24-24h176c21.5.1 20.4 31.4 0 31.4z"
                        fill="#e8f3ff" />
                     <path
                        d="M390.3 51.5H142c-17.7 0-32 14.3-32 32v368.2c0 22.4-36 26.3-36-3.7V48c0-17.7 14.3-32 32-32h284c24.6 0 23.4 35.5.3 35.5z"
                        fill="#d1e7ff" />
                     <g fill="#2e58ff">
                        <path
                           d="M390 0H106C79.5 0 58 21.5 58 48v400c0 26.5 21.5 48 48 48h284c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm16 448c0 8.8-7.2 16-16 16H106c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h284c8.8 0 16 7.2 16 16z" />
                        <path
                           d="M336 58H160c-22.1 0-40 17.9-40 40v50c0 22.1 17.9 40 40 40h176c22.1 0 40-17.9 40-40V98c0-22.1-17.9-40-40-40zm8 90c0 4.4-3.6 8-8 8H160c-4.4 0-8-3.6-8-8V98c0-4.4 3.6-8 8-8h176c4.4 0 8 3.6 8 8zM202 263c0 8.8-7.2 16-16 16h-50c-8.8 0-16-7.2-16-16s7.2-16 16-16h50c8.8 0 16 7.2 16 16zM202 333c0 8.8-7.2 16-16 16h-50c-8.8 0-16-7.2-16-16s7.2-16 16-16h50c8.8 0 16 7.2 16 16zM202 403c0 8.8-7.2 16-16 16h-50c-8.8 0-16-7.2-16-16s7.2-16 16-16h50c8.8 0 16 7.2 16 16zM314 263c0 8.8-7.2 16-16 16h-50c-8.8 0-16-7.2-16-16s7.2-16 16-16h50c8.8 0 16 7.2 16 16zM314 333c0 8.8-7.2 16-16 16h-50c-8.8 0-16-7.2-16-16s7.2-16 16-16h50c8.8 0 16 7.2 16 16zM314 403c0 8.8-7.2 16-16 16h-50c-8.8 0-16-7.2-16-16s7.2-16 16-16h50c8.8 0 16 7.2 16 16zM376 263v140c0 8.8-7.2 16-16 16h-2c-8.8 0-16-7.2-16-16V263c0-8.8 7.2-16 16-16h2c8.8 0 16 7.2 16 16z" />
                     </g>
                  </svg>
                  <h2 class="text-md font-semibold text-gray-600">{{$comments_left}}</h2>
               </div>

               <div class="flex items-center">
                  <svg class="h-4 w-4" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                     <circle cx="64" cy="64" fill="#a2faf3" r="45.877" />
                     <circle cx="64" cy="64" fill="#6cf7ec" r="37.794" />
                     <path
                        d="M59.524 81.447a4.473 4.473 0 01-3.212-1.359L41.764 65.1a4.476 4.476 0 116.424-6.234l11.223 11.562 20.3-22.4a4.477 4.477 0 016.636 6.01l-23.5 25.942a4.481 4.481 0 01-3.247 1.467z"
                        fill="#fff" /></svg>
                  <h2 class="text-md font-semibold text-gray-600">{{$comments_done}}</h2>
               </div>

            </div>

         </div>
      </div>


   </div>

   <div class="-my-56">
      <div class="mt-2">
         <button wire:click="edit(1, {{$comment->id}})"
            class="tracking-wider text-white bg-green-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold"
            title="">
            Positive
         </button>

         <button wire:click="edit(2, {{$comment->id}})"
            class="tracking-wider text-gray-800 bg-gray-300 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold"
            title="">
            Neutral
         </button>

         <button wire:click="edit(0, {{$comment->id}})"
            class="tracking-wider text-white bg-red-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold"
            title="">
            Negative
         </button>
      </div>

   </div>

</div>