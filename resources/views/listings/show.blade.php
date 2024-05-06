<x-layout>
    <div class="lg:grid  gap-2 space-y-4 md:space-y-0 mx-4">

        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        {{$listing->title}}
                    </h3>
                    <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                    <x-listing-tags :tagsCsv="$listing->tags" />
                    <p>
                        {{$listing['description']}}
                    </p>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                    </div>
                </div>
            </div>
        </div>


        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </x-card>
    </div>


</x-layout>
