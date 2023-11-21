@extends('mylayouts.extend')
@section('body')
    <section>
        <div class="w-allow flex justify-around px-5 py-16">
            <a href="{{ route('test.create') }}">
                <div class=" border p-6  text-center bg-base-100 shadow-xl w-[222px]  btn block m-8  h-auto btn-ghost">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Options</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Manage Tests</h1>
                </div>
            {{-- </a> --}}
            <a href="{{ route('testField.index') }} " class="w-[222px]">
            <div class=" border p-6  text-center bg-base-100 shadow-xl w-[222px]  btn block m-8  h-auto btn-ghost">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Options</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Manage Test Fields</h1>
            </div>
            </a>
            <div class=" border p-6  text-center bg-base-100 shadow-xl w-1/5 btn block m-8 btn-disabled  h-auto btn-ghost">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Options</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
            </div>
        </div>
    </section>
@endsection
