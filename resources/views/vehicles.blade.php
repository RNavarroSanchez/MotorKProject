<!-- resources/views/vehicles.blade.php -->

@if ($vehicles)
    @foreach ($vehicles as $vehicle)
   <!-- <div class="flex w-full sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/3 mb-4">-->
        <div class="shadow-md border rounded-md border-gray-400">
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
                <div class="flex flex-col space-y-4 px-4 pb-4">
                    <div class="pt-4">
                        <p class="w-full text-gray-800 text-lg font-bold leading-5">{{$vehicle->make}} {{$vehicle->model}}</p>
                        <p class="text-gray-600 text-lg leading-5 ">{{$vehicle->version}}</p>
                    </div>
                    <div class="border-b-2 border-orange-400 pb-4 w-1/3"></div>
                    <div class="flex">
                        <div class="flex w-1/2">
                            <div>
                                <p class="text-gray-800 text-xs leading-4">A partir de</p>
                                <div x-data="{ numeroSinFormato: {{$vehicle->price}} }">
                                <div x-text="'€ ' + formatNumber(+numeroSinFormato)" class="text-gray-800 text-lg font-bold leading-6 "></div>
                            </div>            
                        </div>
                        </div>
                        <div class="flex w-1/2 justify-end pr-4">
                            <div x-data="{ currentSvg: 'Heart-off.svg' }">
                                <div @click="currentSvg = (currentSvg === 'Heart-off.svg') ? 'Heart.svg' : 'Heart-off.svg'" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-400 cursor-pointer"><img :src="`{{ asset('storage/svg') }}/${currentSvg}`" alt="Heart" class="w-6 h-6">
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="p-2 bg-gray-100 rounded-md flex flex-col justify-between">
                        <div x-data="{ activeButton: 'buttonkilometres' }" x-on:toggle-button.window="activeButton = $event.detail.button">
                            <div x-show="activeButton === 'buttonkilometres'">
                                <div x-data="{ numeroSinFormato: {{$vehicle->km}} }">
                                    <div x-text="'{{$vehicle->registrationYear}} - ' + formatNumber(+numeroSinFormato) + ' km'" class="text-gray-800 text-xs font-bold leading-2"></div>
                                </div>  
                            </div>
                            <div x-show="activeButton === 'buttonmillas'">
                                <div x-data="{ numeroSinFormato: {{$vehicle->km}} }">
                                    <div x-text="'{{$vehicle->registrationYear}} - ' + convertirKilometrosAMillas(formatNumber(+numeroSinFormato)) + ' mi'" class="text-gray-800 text-xs font-bold leading-2"></div>
                                </div>  
                            </div>
                        </div>
                        <div class="w-full text-gray-600 text-xs justify-end items-center flex flex-row">
                            <div class="w-4/5">
                                <p>Cons. Comb. Carburante {{$vehicle->consumptionCombined}}</p>
                                <p>{{$vehicle->unitOfMeasure}} - CO2:{{$vehicle->co2}} g/km</p>
                            </div>
                            <div class="w-1/5">
                                <img src="{{ asset('storage/svg/Energy-label.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <!--</div>-->
    @endforeach
    
    @else
        <p>no hay datos</p>
@endif  
