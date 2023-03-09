<style>
.ck-editor__editable_inline {
    min-height: 60vh;
    box-shadow: 0 10px 8px rgb(0 0 0 / 0.04);
}
</style>

<x-app-layout>
    <div class="flex-col mt-10 m-auto w-9/12">
        <form action="/likha/{{$likha->id}}/edit" method="POST" enctype="multipart/form-data">
            @csrf
            
            @method('PUT')
            <div class="flex align-middle">
                <input value="{{$likha->title}}" class="mb-5 w-1/3 border-gray-300 rounded-xl shadow-lg" placeholder="Title" type="text" name="title" id="title">
                @error('title')
                    <p class="text-red-500 text-xs my-auto ml-5">{{$message}}</p>
                @enderror
            </div>
            <textarea class="ck-editor__editable ck-editor__editable_inline bg-transparent border-none shadow-none resize-none" name="editor" id="editor" cols="30" rows="10">
                {!!$likha->editor !!}
            </textarea>
             @error('editor')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <button class="mt-2 px-12 py-3 max-w-sm ml-auto bg-slate-50 rounded-xl shadow-lg flex items-center hover:bg-green-300">save changes</button>
        </form>
    </div>
    @section('scripts')
        <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
        </script>
    @endsection
</x-app-layout>