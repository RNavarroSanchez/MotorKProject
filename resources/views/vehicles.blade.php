<!-- resources/views/vehicles.blade.php -->

@if ($vehicles)
    @foreach ($vehicles as $vehicle)
    <div class="w-full sm:w-1/2 md:w-1/3 p-4">
            <div class="relative">
                <img src="{{$vehicle->image}}" class="w-full h-40 object-cover object-center">
                <div x-data="{ km0: {{ $vehicle->isKM0 ? 'true' : 'false' }} }">
                    <div x-show="km0">
                        <div class="absolute top-2 left-2 w-14 rounded-full bg-white flex items-center justify-center space-x-2">
                            <span class="w-3 h-3 rounded-full bg-blue-500"></span>
                            <p class="text-gray-800 text-xs font-bold">km0</p>
                        </div>
                    </div> 
                </div>      
            </div>
            <div class="flex flex-col space-y-4">
                <div>
                    <p class="break-all">{{$vehicle->make}} {{$vehicle->model}}</p>
                    <p class="break-all">{{$vehicle->version}}</p>
                </div>
                <div class="border-b-2 border-orange-400 pb-4 w-1/3"></div>
                <div class="flex">
                    <div class="flex w-1/2">
                        <div>
                            <p>A partir de</p>
                            <p>€ {{$vehicle->price}}</p>
                        </div>
                    </div>
                    <div class="flex w-1/2 justify-end pr-4">
                        <div x-data="{ currentSvg: 'Heart-off.svg' }">
                            <div @click="currentSvg = (currentSvg === 'Heart-off.svg') ? 'Heart.svg' : 'Heart-off.svg'" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-400 cursor-pointer"><img :src="`{{ asset('storage/svg') }}/${currentSvg}`" alt="Heart" class="w-6 h-6">
                            </div>    
                        </div>
                    </div>
                </div>
                <div>
                    <p>{{$vehicle->registrationYear}} - {{$vehicle->km}} km </p>
                    <p>Cons. Comb. Carburante {{$vehicle->consumptionCombined}}</p>
                    <p>{{$vehicle->unitOfMeasure}} - CO2:{{$vehicle->co2}} g/km</p>
                </div>
            </div>
    </div>
    @endforeach
    @else
        <p>no hay datos</p>
@endif  
