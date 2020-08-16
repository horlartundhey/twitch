<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">

        {{-- Avatar should be 50px when working with it or use flex-shrink-0--}}

        <img src="images/avatar_icons/avatar.png" alt="" class="rounded-full mr-2">
    </div>

    <div >
    <h5 class="font-bold mb-4">{{$twitch->user->name}}</h5>         
        
        <p class="text-sm">
            {{$twitch->body}}
        </p>
        
    </div>

</div>