<x-app-layout>
    @php
    $user = Auth::user();
    $currentUser = auth()->id();
    $data = \App\Models\User::find($currentUser);
    $likhaProjects = $data->LikhaProjects;
    $isPremium = $data->UserSubscription->isPremium ?? false;

    @endphp

    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 my-auto">
                {{ __('Dashboard') }}
            </h2>

            @if (!$isPremium && count($likhaProjects) >= 3)
            <div class="ml-auto font-bold px-12 py-3 max-w-sm text-slate-400 bg-slate-50 rounded-xl shadow-lg flex">
                Debt
            </div>
            @else
            <a class="ml-auto" href="/editor">
                <button
                    class="font-bold px-12 py-3 max-w-sm bg-slate-50 rounded-xl shadow-lg flex items-center hover:bg-slate-300/25">
                    Create
                </button>
            </a>
            @endif
            @unless ($isPremium)
            <a class="ml-5" href="/subscribe">
                <div
                    class="font-bold px-12 py-3 max-w-sm bg-amber-100 rounded-xl shadow-lg flex items-center hover:bg-amber-200">
                    <h1>GO PREMIUM</h1>
                </div>
            </a>
            @else
            <div class="font-bold px-12 py-3 max-w-sm bg-emerald-200 rounded-xl shadow-lg ml-5 flex items-center">
                <h1>PREMIUM</h1>
            </div>
            @endunless
        </div>
    </x-slot>

    @if (!$isPremium)
    <x-call-to-subscribe />
    @endif

    <h1 class="text-5xl my-10 font-extrabold m-auto text-center w-1/4">Debt Management</h1>
    {{-- @dd($likhaProjects->isEmpty()) --}}
    @unless ($likhaProjects->isEmpty())

    <div class="p-10 gap-4 w-4/6 m-auto grid grid-cols-3 grid-row-2 bg-slate-50 rounded-xl shadow-lg">
        <x-likha-projects :likhaProjects="$likhaProjects" />
    </div>
    @else
    <div class="p-10 w-fit m-auto bg-slate-50 rounded-xl shadow-lg">
        <h1 class="text-5xl text-black text-center">You do not have a <a class="text-emerald-400 hover:text-emerald-200"
                href="/editor"> debt list </a> yet!</h1>
    </div>
    @endunless















</x-app-layout>