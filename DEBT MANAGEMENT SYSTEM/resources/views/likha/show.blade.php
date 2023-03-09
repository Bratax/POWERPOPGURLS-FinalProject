<x-app-layout>
    <div class="m-20 p-10 flex-col bg-white rounded-xl shadow-lg">
                    <h1 class="text-2xl font-semibold mb-5">{{$likha->title}}</h1>
                    {!! html_entity_decode($likha->editor) !!}
                    <h2 class="mt-10 text-sm font-semibold">last updated: {{substr($likha->updated_at, 0, 10)}}</h2>
    </div>
</x-app-layout>