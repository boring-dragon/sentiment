<div>

        @if (session()->has('message'))
        <div class="mt-4">
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert">
                <p>{{session('message')}}</p>
              </div>
        </div>
        
        @endif

    <div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->
        <div class="flex items-start px-4 py-6">
           <div class="">
               <h2 class="text-red-400">ID: {{$comment->id}}</h2>
               <h2 class="text-red-400">Source: {{$comment->source}}</h2>
              <p class="mt-3 text-gray-700 text-md text-right para-dhivehi" style="direction: rtl;">
                {!!$comment->comment!!}
                
              </p>
           </div>
        </div>

        
     </div>

     <div class="-my-56">
         <div class="mt-2">
            <button wire:click="edit(1, {{$comment->id}})" class="tracking-wider text-white bg-green-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold" title="">
                Positive
             </button>
   
             <button wire:click="edit(2, {{$comment->id}})" class="tracking-wider text-gray-800 bg-gray-300 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold" title="">
               Neutral
            </button>
   
            <button wire:click="edit(0, {{$comment->id}})" class="tracking-wider text-white bg-red-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold" title="">
               Negative
            </button>
         </div>
        
    </div>
    
</div>
