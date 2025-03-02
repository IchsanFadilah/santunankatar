@extends('front.layouts.app')
@section('title', 'Donasi Selesai')
@section('content')
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden">
        <div class="header flex flex-col overflow-hidden h-[220px] relative">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="{{ route('front.details', $fundraising->slug) }}" class="w-10 h-10 flex shrink-0">
                        <img src="{{asset('assets/images/icons/back.svg')}}" alt="icon">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="font-semibold text-sm">#KirimDonasi</p>
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="{{asset('assets/images/icons/menu-dot.svg')}}" alt="icon">
                </a>
            </nav>
            <div class="flex items-center px-4 my-auto gap-[14px]">
                <div class="w-[90px] h-[100px] flex shrink-0 rounded-2xl overflow-hidden relative">
                    <img src="{{ Storage::url($fundraising->thumbnail) }}" class="w-full h-full object-cover"
                        alt="thumbnail">
                    <p
                        class="w-[90px] h-[23px] bg-[#4541FF] text-center p-[4px_12px] absolute bottom-0 font-bold text-[10px] leading-[15px] text-white">
                        VERIFIED</p>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="font-bold leading-[22px]">{{ $fundraising->name }}</p>
                    <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp
                            {{ number_format($fundraising->target_amount, 0, ',', '.') }}</span></p>
                </div>
            </div>
        </div>
        <div class="flex flex-col z-30">
            <div id="content"
                class="w-full min-h-[calc(100vh-220px)] h-full bg-white rounded-t-[40px] flex flex-col gap-[30px] p-[30px_24px_30px]">
                <h1 class="text-center font-extrabold text-[24px] leading-[36px]">Pilih Nominal <br>yang ingin di donasikan
                </h1>
                <div class="grid grid-cols-2 w-fit mx-auto justify-center gap-[10px]">

                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 10000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 10.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 15000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 15.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 20000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 20.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 25000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 25.000</span>
                    </a>

                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 50000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp 50.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 100000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp 100.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 150000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp 150.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 200000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp 200.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 250000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 250.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 500000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 500.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 750000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 750.000</span>
                    </a>
                    <a href="{{ route('front.checkout', ['fundraising' => $fundraising->slug, 'totalAmountDonation' => 1000000]) }}"
                        class="w-[160px] flex flex-col gap-4 p-4 rounded-[30px] border border-[#E8E9EE] items-center">

                        <span class="font-bold text-lg">Rp. 1.000.000</span>
                    </a>

                </div>
            </div>
        </div>

    </section>

@endsection