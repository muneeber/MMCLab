<?php
namespace App\Livewire;
use App\Models\test;
use Livewire\Component;
use App\Models\test_field;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Session;

class TestField extends Component
{
    
    public $test = '';
    public $tests;
    public $error = '';
    public $success = '';
    public $fields;
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $min;
    #[Validate('required')]
    public $max;
    #[Validate('required')]
    public $unit;
    public function mount()
    {
        if (Session::has('test')) {
            $this->test=Session::get('test');
        }
        $this->tests = test::all();
    }
    public function check()
    {
        if ($this->test == '') {
            return false;
        } else {
            return true;
        }
    }
    public function sub()
    {
        if ($this->check()) {
            # code...
            $this->validate();
            if ($this->min < $this->max) {
                # code...
                $res = test_field::create([
                    'test_id' => $this->test,
                    'FieldName' => $this->name,
                    'MinValue' => $this->min,
                    'MaxValue' => $this->max,
                    'Unit' => $this->unit,
                ]);
                if ($res) {
                    # code...
                    $this->success = "Field Entered Succesfully";
                    $this->getFeilds();
                }
            } else {
                $this->error = 'Please select a Test ->';
            }
        }
        
    }
    public function getFeilds()
    {
        $this->error = '';
        $check = $this->check();
        if ($check == true) {
            $this->fields = test_field::where('test_id', $this->test)->latest()->get();
        } else {
            $this->error = 'Please choose the correct test.';
        }
    }
    public function del($id){
        		$res=test_field::destroy($id);
                if ($res) {
                    $this->success='Field Deleted Successfully';
                    $this->getFeilds();
                }
    }
    public function render()
    {
        return view('livewire.test-field');
    }
}
