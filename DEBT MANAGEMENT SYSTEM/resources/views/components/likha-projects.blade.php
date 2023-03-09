@props(['likhaProjects'])

@foreach ($likhaProjects as $likha)
            <div class="p-10 flex-col bg-white rounded-xl shadow-lg">
                <div class="mb-10">
                    <a href="/likha/{{$likha->id}}" class="text-2xl font-semibold hover:text-slate-600">{{$likha->title}}</a>
                    <p>{!! substr($likha->editor, 0, 60) . '...' !!}</p>
                    <h2 class="text-sm font-semibold">last updated: {{substr($likha->updated_at, 0, 10)}}</h2>
                </div>
                <div class="flex">
                    <a class="text-sm py-2 px-5 rounded-xl mr-5 mt-4 bg-cyan-100 shadow-xl hover:bg-cyan-400 hover:text-slate-200" href="/likha/{{$likha->id}}/edit"><button>Edit</button></a>
                    <form method="POST" action="/likha/{{$likha->id}}" class="w-fit text-sm py-2 px-5 cursor-pointer rounded-xl mr-5 mt-4 bg-rose-100 shadow-xl hover:bg-rose-400 hover:text-slate-200">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            </div>
@endforeach