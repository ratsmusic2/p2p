<x-app-layout>
    <div class="breadcrumb mb-4">
        <p class="text-sm text-gray-500"><span class="mr-2">Pages</span> / <span class="text-white ml-2">Exchange Binance</span></p>
        <h1 class="text-xl font-semibold my-2">Exchange Binance</h1>
    </div>
    <!-- Dynamic Content -->
    <div class="content">  
        <div class="container mx-auto p-6">
            <!-- Header -->
            <div class="flex justify-between flex-col sm:flex-row items-center mb-6">
                <img src="{{ asset('assets/images/binance.png') }}" alt="Binance" class="h-12">
                <div class="p-4 bg-secondaryBg rounded-lg w-3/4 my-6 sm:w-1/4 ml-auto flex flex-col items-end">
                    <label for="fiat-select" class="block text-sm font-medium py-2">Moneda FIAT</label>
                    <select class="w-full bg-primaryBg border border-brand text-white focus:ouline-none focus:border-brand py-2 px-4 rounded-lg cursor-pointer">
                        <option>ARS</option>
                        <option>ETH</option>
                        <option>BTC</option>
                    </select>
                </div>
            </div>

            <!-- Crypto Cards -->
            <div class="grid grid-cols-responsive-fit sm:grid-cols-custom-fit gap-4 mb-6 p-6 bg-secondaryBg">
                <div class="bg-[#25324A] p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold flex items-center">
                        <img src="{{ asset('assets/images/ada.png') }}" alt="ADA">
                        <span class="ml-2 font-semibold text-xl text-brand">ADA</span>
                    </div>
                    <div class="text-[#7B809A] text-sm mt-2">USD 0,460</div>
                </div>
                <div class="bg-[#25324A] p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold flex items-center">
                        <img src="{{ asset('assets/images/bnb.png') }}" alt="BNB">
                        <span class="ml-2 font-semibold text-xl text-brand">BNB</span>
                    </div>
                    <div class="text-[#7B809A] text-sm mt-2">USD 603,100</div>
                </div>
                <div class="bg-[#25324A] p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold flex items-center">
                        <img src="{{ asset('assets/images/btc.png') }}" alt="BTC">
                        <span class="ml-2 font-semibold text-xl text-brand">BTC</span>
                    </div>
                    <div class="text-[#7B809A] text-sm mt-2">USD 68.600,430</div>
                </div>
                <div class="bg-[#25324A] p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold flex items-center">
                        <img src="{{ asset('assets/images/dogecoin.png') }}" alt="DOGE">
                        <span class="ml-2 font-semibold text-xl text-brand">DOGE</span>
                    </div>
                    <div class="text-[#7B809A] text-sm mt-2">USD 0,170</div>
                </div>
                <div class="bg-[#25324A] p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold flex items-center">
                        <img src="{{ asset('assets/images/eth.png') }}" alt="ETH">
                        <span class="ml-2 font-semibold text-xl text-brand">ETH</span>
                    </div>
                    <div class="text-[#7B809A] text-sm mt-2">USD 3.866,280</div>
                </div>
                <div class="bg-[#25324A] p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold flex items-center">
                        <img src="{{ asset('assets/images/xrp.png') }}" alt="XRP">
                        <span class="ml-2 font-semibold text-xl text-brand">XRP</span>
                    </div>
                    <div class="text-[#7B809A] text-sm mt-2">USD 0,530</div>
                </div>
            </div>

            <!-- Exchange Rates -->
            <div class="grid grid-cols-responsive-fit sm:grid-cols-custom-fit gap-4 mb-6">
                <div class="bg-secondaryBg p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold text-xl text-[#26922A]">Dolar oficial</div>
                    <div class="mt-2 font-semibold">935.00 ARS</div>
                </div>
                <div class="bg-secondaryBg p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold text-xl text-[#26922A]">Dolar MEP</div>
                    <div class="mt-2 font-semibold">1206.00 ARS</div>
                </div>
                <div class="bg-secondaryBg p-4 rounded-lg text-center flex flex-col items-center justify-between">
                    <div class="font-bold text-xl text-[#26922A]">Dolar BLUE</div>
                    <div class="mt-2 font-semibold">1210.00 ARS</div>
                </div>
            </div>

            <!-- Navigation Tabs -->
            <div class="rounded mb-6">
                <div class="flex flex-col sm:flex-row border-b border-brand">
                    <div class="tab-1 w-full sm:w-1/2 p-3 text-center bg-brand rounded-tl-lg rounded-tr-lg cursor-pointer">Tabla de arbitraje avanzada</div>
                    <div class="tab-2 w-full sm:w-1/2 p-3 text-center cursor-pointer">Tabla de arbitraje principiantes</div>
                </div>
            </div>

            <!-- Table for Traders -->
            <div class="bg-secondaryBg p-4 rounded-lg text-center mb-6">
                <div class="font-bold">Tabla para comerciantes</div>
            </div>

            <!-- Table -->
            <div class="treaders-table overflow-x-auto mb-6">
            </div>
            
            <!-- Graph -->
                <div class="flex gap-5 mb-6 flex-col md:flex-row">
                <div class="bg-secondaryBg p-4 rounded-lg w-full">
                        <div class="font-bold">Volumen de compra</div>
                        <div class="graph p-5"></div>
                </div>
                <div class="bg-secondaryBg p-4 rounded-lg w-full">
                    <div class="font-bold">Volumen de venta</div>
                    <div class="graph p-5"></div>
                    </div>
                </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // for toggling tabs
            const tab1 = document.querySelector('.tab-1');
            const tab2 = document.querySelector('.tab-2');

            tab1.addEventListener('click', () => {
                tab1.classList.add('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
                tab2.classList.remove('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
            });

            tab2.addEventListener('click', () => {
                tab2.classList.add('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
                tab1.classList.remove('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
            });
        });
    </script>
</x-app-layout>