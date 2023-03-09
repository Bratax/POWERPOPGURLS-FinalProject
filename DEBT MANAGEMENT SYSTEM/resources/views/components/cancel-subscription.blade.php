<form class="ml-auto" method="POST" action="/subscribe/cancel">
    @csrf
    @method('DELETE')
    <button class="font-bold px-12 py-3 max-w-sm bg-red-200 rounded-xl shadow-lg flex items-center hover:bg-red-300">
        Cancel Subscription
    </button>
</form>