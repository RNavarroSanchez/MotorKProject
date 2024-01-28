
    <!-- Filtros -->
    <div class="flex flex-row">
        <img src="/storage/svg/filter.svg" alt="Filtro SVG" class="w-6 h-6">
        <div class="text-base font-semibold text-gray-700">Filters</div>
    </div>
    <div class="w-full h-1 bg-gray-200"></div>

    <!-- Búsqueda -->
    <div class="flex flex-col space-y-4 w-full">
        <div class=" font-semibold text-gray-700 w-full">Search</div>
        <input x-data x-model="searchQuery" x-on:input.debounce.300ms="search" class="border border-gray-300 px-3 py-2 rounded" placeholder="Search here">
    </div>
    <div class="w-full h-1 bg-gray-200"></div>
    <div x-show="searchResults.length">
        <h2>Resultados:</h2>
        <ul>
            <li x-for="car in searchResults" x-text="car.name"></li>
        </ul>
    </div>

    <!-- Unidad de medida -->
    <div class="flex flex-col space-y-4 w-full">
        <div class="flex font-semibold text-gray-700">Unit of measure</div>  
            <div x-data="{ activeButton: 'buttonkilometres' }" x-init="$watch('activeButton', value => { $dispatch('toggle-button', { button: value }); })" class="flex flex-row space-x-1">
                <button @click="activeButton = 'buttonkilometres'"
                        :class="{ 'text-white bg-gray-700 p-2 leading-5 rounded-sm w-1/2': activeButton === 'buttonkilometres', 'text-black p-2 leading-5 rounded-sm border border-black w-1/2': activeButton !== 'buttonkilometres' }">
                    Km
                </button>
                <button @click="activeButton = 'buttonmillas'"
                        :class="{ 'text-white bg-gray-700 p-2 leading-5 rounded-sm w-1/2': activeButton === 'buttonmillas', 'text-black p-2 leading-5 rounded-sm border border-black w-1/2': activeButton !== 'buttonmillas' }">
                    Miles
                </button>
            </div>
    </div>
    @push('scripts')
    <script>
        function search() {
            return {
                searchQuery: '',
                searchResults: [],
                async search() {
                    if (!this.searchQuery.trim()) {
                        this.searchResults = [];
                        return;
                    }

                    try {
                        const response = await fetch('app/json/vehicles.json');
                        const cars = await response.json();

                        this.searchResults = cars.filter(car => car.name.toLowerCase().includes(this.searchQuery.toLowerCase()));
                    } catch (error) {
                        console.error('Error fetching search results:', error);
                    }
                },
            };
        }
    </script>
@endpush
