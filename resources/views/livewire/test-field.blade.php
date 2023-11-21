<div class="">
    @if ($success)
        <div role="alert" class="alert absolute top-2   right-96 w-1/3 alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ $success }}</span>
        </div>
    @endif

    @if ($error)
        <div role="alert" class="alert alert-error absolute top-2   right-96 w-1/3">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ $error }}</span>
        </div>
    @endif
    <div class="bg-blue-500 p-4  mx-6 my-2 flex justify-around">
        <h1 class="text-white font-serif font-bold text-2xl">
            Test Fields
        </h1>
        <div class="flex justify-around  items-center">
            <label for="" class="text-white mr-3">Test:</label>
            <select wire:model='test' wire:change='getFeilds' class="select select-primary w-full max-w-xs">
                <option value="" selected>Choose a Test</option>
                {{-- <option class="hidden">Game of Thrones</option> --}}
                @foreach ($tests as $test)
                    <option value="{{ $test->id }}">{{ $test->TestName }}</option>
                @endforeach

            </select>
            <button wire:click='check' class="btn btn-secondary btn-sm mx-4">Get</button>
        </div>
    </div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <form id="myForm" class="m-6 bg-base-100  p-4 shadow-md" method="post" wire:submit.prevent='sub'>

        <div class="grid !grid-cols-5  gap-2 gap-x-8">
            <div class="col-span-5 bg-slate-400 flex  justify-center items-center h-10 text-white text-center">
                <h2 style="font-size: 18px" class='font-bold italic'> Add a New Test Field</h2>
            </div>
        </div>
        <div class="grid !grid-cols-4 !grid-rows-1 gap-2 gap-x-8">
            <div class="row-start-2  rounded  form-control  px-4 pb-3">
                <label for="hi" class="label">Test Field :</label>
                <input type="text" wire:model='name' class="input input-bordered rounded-none   input-sm"
                    placeholder="Field Name">
                @error('name')
                    <span class="bg-error text-white px-1">{{ $message }}</span>
                @enderror


            </div>
            <div class="row-start-2  rounded  form-control  px-4 pb-3">
                <label for="hi" class="label">Min Value :</label>
                <input type="text" wire:model='min' oninput="this.value = this.value.replace(/[^0-9.]/g, '');" class="input input-bordered rounded-none   input-sm"
                    placeholder="Enter Minimum Value">
                @error('min')
                    <span class="bg-error text-white px-1">{{ $message }}</span>
                @enderror

            </div>
            <div class="row-start-2  rounded  form-control  px-4 pb-3">
                <label for="hi" class="label">Max Value :</label>
                <input type="text" wire:model='max' oninput="this.value = this.value.replace(/[^0-9.]/g, '');" class="input input-bordered rounded-none   input-sm"
                    placeholder="Enter Maximum Value">
                @error('max')
                    <span class="bg-error text-white px-1">{{ $message }}</span>
                @enderror

            </div>
            <div class="row-start-2  rounded  form-control  px-4 pb-3">
                <label for="hi" class="label">Unit :</label>
                <input type="text " wire:model='unit' class="input input-bordered rounded-none   input-sm"
                    placeholder="Enter Unit">
                @error('unit')
                    <span class="bg-error text-white px-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="row-start-2  rounded   flex justify-center items-center  form-control">
                <button class="btn btn-primary w-full text-white">Add</button>
            </div>
        </div>

    </form>
    <div class="m-6 bg-base-100  p-4 shadow-md">
        <table class="table  table-zebra">
            <!-- head -->
            <thead>
                <tr>
                    <th class="text-center   text-cyan-700">Test Field</th>
                    <th class="text-center   text-cyan-700">Range</th>
                    <th class="text-center   text-cyan-700">Unit</th>
                    <th class="text-center   text-cyan-700">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @if ($fields)
                    
               
                @forelse ($fields as $field)
                    <tr>
                        <th class="text-center   ">{{ $field->FieldName }} </th>
                        <td class="text-center   ">
                            {{ $field->MinValue}}&nbsp;&nbsp;--&nbsp;&nbsp;{{ $field->MaxValue }}
                        </td>
                        <td class="text-center   ">{{ $field->Unit }}</td>
                        <td class="text-center"><button wire:click='del({{ $field->id }})' wire:confirm='Are You Sure You Want To Delete {{ $field->FieldName }} Field' class="btn  btn-sm bg-red-400 text-white">Delete</button></td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center   text-cyan-700" colspan="5">Nothing Here</td>
                @endforelse
                @endif


            </tbody>


        </table>
    </div>
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Clear all input fields
            var inputs = document.getElementById('myForm').getElementsByTagName('input');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].value = '';
            }
        });
    </script>
</div>
