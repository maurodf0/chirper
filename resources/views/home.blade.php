<x-layout>
    <x-slot:title>
        Meta Title Here
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chipr) 
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold"> </h1>
                    <p class="mt-4 text-base-content/60"><?=  $chipr['message']; ?>
                        <?= $chipr['author']; ?>    </p>
                </div>
            </div>
        </div>
          @endforeach
    </div>
    <div class="this max-w-2xl mx-auto mt-6">
        this is slot
    </div>
</x-layout>