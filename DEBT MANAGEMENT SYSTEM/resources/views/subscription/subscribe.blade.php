<x-app-layout>
    <form action="/subscribe/premium" method="POST">
        <div
            class="text-xl  p-10 gap-4 text-center w-96 cursor-pointer m-auto mt-20 bg-emerald-400 rounded-xl shadow-lg hover:bg-emerald-200">
            @csrf
            @method('POST')
            <button class="font-bold px-8 py-4">
                PREMIUM
            </button>
        </div>
    </form>


</x-app-layout>