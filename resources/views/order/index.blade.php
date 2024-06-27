<x-app-layout>
    <div class="breadcrumb mb-4">
        <p class="text-sm text-gray-500"><span class="mr-2">Pages</span> / <span class="text-white ml-2">Libro de órdenes</span></p>
        <h1 class="text-xl font-semibold my-2">Libro de órdenes</h1>
    </div>
    <!-- Dynamic Content -->
    <div class="content">
        <div class="order-table w-[320px] sm:w-full mx-auto mt-16 p-6 bg-secondaryBg rounded-2xl">
            <!-- Green Header -->
            <div class="p-4 relative z-[5px] -top-10 flex bg-table-header-gradient justify-between items-center">
                <h1 class="text-base sm:text-xl font-medium">Tabla de ordenes</h1>
                <button class="text-sm sm:text-base bg-[#2A9D2F] hover:bg-green-700 text-white font-medium py-2 px-4 rounded">
                    Crear tabla
                </button>
            </div>
            <!-- Search Filter -->
            <div class="flex flex-col md:flex-row mb-7 space-y-2 md:space-y-0 space-x-0 md:space-x-4 text-sm">
                <select class="bg-primaryBg border border-brand text-white focus:ouline-none focus:border-brand py-2 px-4 rounded-lg cursor-pointer w-full">
                    <option>Filtrar por tipo de operación</option>
                    <option>Buy</option>
                    <option>Sell</option>
                </select>
                <input type="text" placeholder="Buscar por fecha y hora" class="bg-primaryBg border border-brand focus:ouline-none focus:outline-none text-white py-2 px-4 rounded-lg w-full">
                <input type="text" placeholder="Buscar por exchange" class="bg-primaryBg border border-brand focus:outline-none text-white py-2 px-4 rounded-lg w-full">
                <button class="w-full sm:w-3/4 bg-primaryBg hover:bg-brand border border-brand text-white font-bold py-2 px-4 rounded-lg flex items-center justify-between">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="white" d="M10.0001 14.0667C10.0334 14.3167 9.95011 14.5833 9.75844 14.7583C9.68135 14.8356 9.58977 14.8969 9.48896 14.9387C9.38815 14.9805 9.28008 15.002 9.17094 15.002C9.0618 15.002 8.95373 14.9805 8.85292 14.9387C8.75211 14.8969 8.66054 14.8356 8.58344 14.7583L5.24178 11.4167C5.15094 11.3278 5.08187 11.2191 5.03995 11.0991C4.99803 10.9792 4.98439 10.8511 5.00011 10.725V6.45833L1.00844 1.35C0.873116 1.17628 0.812054 0.956048 0.838599 0.737442C0.865144 0.518835 0.977138 0.319622 1.15011 0.183333C1.30844 0.0666667 1.48344 0 1.66678 0H13.3334C13.5168 0 13.6918 0.0666667 13.8501 0.183333C14.0231 0.319622 14.1351 0.518835 14.1616 0.737442C14.1882 0.956048 14.1271 1.17628 13.9918 1.35L10.0001 6.45833V14.0667ZM3.36678 1.66667L6.66678 5.88333V10.4833L8.33344 12.15V5.875L11.6334 1.66667H3.36678Z"/>
                    </svg>                                
                    <span class="ml-2">Aplicar filtros</span>
                </button>
            </div>
            <!-- Main Table -->
            <div class="overflow-x-auto w-full mb-3 text-sm sm:text-base">
                <table class="min-w-[500%] sm:min-w-[300%] md:min-w-[200%] rounded-lg">
                    <thead class="bg-primaryBg">
                        <tr class="flex p-2">
                            <th class="py-2 w-full text-left">País</th>
                            <th class="py-2 w-full text-left">Fecha y hora</th>
                            <th class="py-2 w-full text-left">Exchange</th>
                            <th class="py-2 w-full text-left">Moneda comprada</th>
                            <th class="py-2 w-full text-left">Precio USD comprado</th>
                            <th class="py-2 w-full text-left">Precio FIAT comprado</th>
                            <th class="py-2 w-full text-left">Cantidad FIAT comprada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-[#09BE8B] flex p-2">
                            <td class="py-2 w-full">Argentina</td>
                            <td class="py-2 w-full">18/04/23</td>
                            <td class="py-2 w-full">Binance</td>
                            <td class="py-2 w-full">USDT</td>
                            <td class="py-2 w-full">500</td>
                            <td class="py-2 w-full">200</td>
                            <td class="py-2 w-full">100</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>