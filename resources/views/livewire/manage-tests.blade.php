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
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <form id="myForm" class="m-6 bg-base-100  p-4 shadow-md" method="post" wire:submit.prevent='sub'>

        <div class="grid !grid-cols-4  gap-2 gap-x-8">
            <div class="col-span-4 bg-blue-400 flex  justify-center items-center h-16 text-white text-center">
                <h2 style="font-size: 28px" class='font-bold italic'> Add a New Test</h2>
            </div>
        </div>
        <div class="grid !grid-cols-4 !grid-rows-1 gap-2 gap-x-8">
            <div class="row-start-2  rounded  form-control  px-4 pb-3">
                <label for="hi" class="label">Test Code :</label>
                <input type="number" class="input input-bordered rounded-none   input-sm" placeholder="Test Code" 
                    wire:model='code'>
                @error('code')
                    <span class="bg-error text-white px-1">{{ $message }}</span>
                @enderror

            </div>
            <div class="row-start-2  rounded  form-control  px-4 pb-3">
                <label for="hi" class="label">Test Name :</label>
                <input type="text"  class="input input-bordered rounded-none   input-sm" placeholder="Test Name" wire:model='name'>
                @error('name')
                    <span class="bg-error text-white px-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="row-start-2  rounded  form-control  px-4 pb-3">
                <label for="hi" class="label">Price :</label>
                <input type="number" class="input input-bordered rounded-none   input-sm" placeholder="Test Price " 
                    wire:model='price'>
                @error('price')
                    <span class="bg-error text-white px-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="row-start-2  rounded   flex justify-center items-center  form-control">
                <button class="btn btn-primary w-1/2 text-white">Add</button>
            </div>
        </div>
        
    </form>
    <div  class="m-6 bg-base-100  p-4 shadow-md">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th class="text-center   text-cyan-700">Test Code</th>
                    <th class="text-center   text-cyan-700">Test Name</th>
                    <th class="text-center   text-cyan-700">Test Price</th>
                    <th class="text-center   text-cyan-700">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($tests as $test)
                    <tr wire:key='{{ $test->id }}'>
                        <th class='text-center'>
                            {{ $test->TestCode }}
                        </th>
                        <th class='text-center'>
                            {{ $test->TestName }}
                        </th>
                        <th class='text-center'>
                            Rs.{{ $test->Price }}
                        </th class='text-center'>
                        <td class='text-center   w-[32%]'>
                            <div class="">
                                <button class='btn btn-primary mx-2  text-slate-200  btn-sm '  wire:click='addfield({{ $test->id }})'> Add Fields</button>
                            {{-- <button class='btn btn-secondary btn-sm mx-2'> Edit</button> --}}
                            <button class='btn hover:bg-red-700 hover:text-slate-200 bg-red-500 text-white btn-sm ml-2' wire:confirm='Are You Sure You Want To Delete Test {{ $test->TestName }}' wire:click='del({{ $test->id }})'> Delete</button>
                        </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>


        </table>
    </div>
    <script>
        document.getElementById('myForm').addEventListener('submit', function (event) {
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
