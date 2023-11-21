<?php

namespace App\Livewire;

use App\Models\test;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ManageTests extends Component
{
    public $error = '';
    public $success = '';
    public $tests;
    #[Validate('required|numeric')]
    public $code;
    #[Validate('required')]
    public $name;
    #[Validate('required|numeric')]
    public $price;
    public $status;
    public function mount()
    {
        // $this->tests = test::all();
        $this->tests();
        


    }
    public function sub()
    {
        $val = $this->validate();
        $existingTest = test::where('TestCode', $val['code'])->first();

        if ($existingTest) {
            // Handle the case where the TestCode already exists
            $this->status[] = ['Error' => 'TestCode already exists.'];
            // $this->reset(['code', 'name', 'price']);
            $this->code=0;
            $this->name='';
            $this->price=0;
            
        } else {
            // TestCode is unique, proceed with creating a new record
            $res = test::create([
                'TestCode' => $val['code'],
                'TestName' => $val['name'],
                'Price'    => $val['price'],
            ]);

            if ($res) {
                $this->success ='Data Entered Successfully';
                $this->tests();
                
            }
            
            // $this->reset(['code', 'name', 'price']);
             $this->code=0;
            $this->name='';
            $this->price=0;
            // dd([$this->code,$this->name,$this->price]);

        }
    }
    public function tests(){
        $this->tests = test::latest()->get();
    }
    public function del($id){
        test::destroy($id);
        $this->tests();
    }
    public function addfield($id){
        		// dd($id);
                return redirect()->route('testField.index')->with('test',$id);
    }
    public function render()
    {
        return view('livewire.manage-tests');
    }
}
