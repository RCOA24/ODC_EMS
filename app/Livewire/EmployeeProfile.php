<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Employee;

class EmployeeProfile extends Component
{
    public $fname;
    public $mname;
    public $lname; 
    public $gender; 
    public $cno; 
    public $address; 
    public $employeeId; 
    public $email;
    
    // protected $listeners = ['editEmployee' => 'loadEmployee'];


    public function loadEmployee()
    {
        try {
            $this->employeeId = 3066; // Force a valid employee ID for testing
            $url = env('EMPLOYEE_API_URL') . "/Employee/search/" . $this->employeeId;
            // dd($this->employeeId);
            $token = env('EMPLOYEE_API_TOKEN');
            
            $response = Http::withToken($token)->get($url);
            if ($response->successful()) {
                $data = $response->json();
                $this->fname = $data['fname'] ?? '';
                $this->mname = $data['mname'] ?? '';
                $this->lname = $data['lname'] ?? '';
                $this->gender = $data['gender'] ?? '';
                $this->cno = $data['cno'] ?? '';
                $this->address = $data['address'] ?? '';
                $this->employeeId = $data['id'] ?? '';
                // dd($this->employeeId);
                // dd($data);
                $this->email = $data['email'] ?? '';

                // Debugging logs
                logger('Employee Data Loaded', $data);

                // Dispatch event for Alpine.js
                $this->dispatch('edit-modal');

                session()->flash('info', 'Employee data loaded and edit-modal event dispatched');
            } else {
                session()->flash('error', 'Failed to fetch employee data: ' . $response->status());
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Exception: ' . $e->getMessage());
        }
    }

    public function editEmployee($employeeId)
    {
        // dd($empId);
        try {
            $url = env('EMPLOYEE_API_URL') . "/Employee/search/" . $employeeId;
            // dd($this->employeeId);
            $token = env('EMPLOYEE_API_TOKEN');
            
            $response = Http::withToken($token)->get($url);
            if ($response->successful()) {
                $data = $response->json();
                $this->fname = $data['fname'] ?? '';
                $this->mname = $data['mname'] ?? '';
                $this->lname = $data['lname'] ?? '';
                $this->gender = $data['gender'] ?? '';
                $this->cno = $data['cno'] ?? '';
                $this->address = $data['address'] ?? '';
                $this->employeeId = $data['id'] ?? '';
                // dd($this->employeeId);
                // dd($data);
                $this->email = $data['email'] ?? '';

                // Debugging logs
                logger('Employee Data Loaded', $data);

                // Dispatch event for Alpine.js
                $this->dispatch('edit-modal');

                session()->flash('info', 'Employee data loaded and edit-modal event dispatched');
            } else {
                session()->flash('error', 'Failed to fetch employee data: ' . $response->status());
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Exception: ' . $e->getMessage());
        }
    }

    public function click(): void
    {
        dd("xx");
    }


    
    
    public function updateEmployee()
    {
        $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'cno' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ]);
    
        if (!$this->employee_id) {
            session()->flash('error', 'No employee selected.');
            return;
        }
    
        $url = env('EMPLOYEE_API_URL') . $this->employee_id;
        $token = env('EMPLOYEE_API_TOKEN');
    
        $response = Http::withToken($token)->put($url, [
            'fname' => $this->fname,
            'mname' => $this->mname,
            'lname' => $this->lname,
            'gender' => $this->gender,
            'cno' => $this->cno,
            'address' => $this->address,
            'email' => $this->email,
        ]);
    
        if ($response->successful()) {
            session()->flash('success', 'Employee updated successfully.');
            $this->dispatch('closeEditModal');
            $this->dispatch('refreshComponent');
        } else {
            session()->flash('error', 'Failed to update employee data.');
        }
    }

    public function mount($employeeId = null)
    {
        // $this->employeeId = $employeeId ?? Auth::id();
        $this->loadEmployee();
        // dd("xxx");
    }

    

    public function render()
    {
        return view('livewire.employee-profile');
    }
}
