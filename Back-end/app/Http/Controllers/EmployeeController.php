<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class EmployeeController extends Controller
{
    private $positions;

    public function __construct()
    {
        $this->positions = ['web_developer', 'web_designer'];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Employee::selectRaw('id, first_name, last_name, position, DATE_FORMAT(create_date, "%Y-%m-%d") as create_date');

        if (Auth::user()->role != 'manager') {
            $query->where('position', Auth::user()->role);
        }

        $employees = $query->paginate(10);

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = $this->positions;
        return view('employees.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {

        $payload = $request->only(['first_name', 'last_name']);
        if (Auth::user()->role === 'manager' && isset($request->position)) {
            $payload['position'] = $request->position;
        } else {
            $payload['position'] = Auth::user()->role;
        }
        $payload['create_date'] = now();
        Employee::create($payload);
        return redirect()->route('employees.index')->with('success', 'Employee has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $Employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $Employee)
    {
        // $positions = $this->positions;
        // return view('employees.show', compact('Employee', 'positions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $Employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payload = [
            'id' => $id
        ];
        // addtional checking if user role has access or permission to delete the id 
        // I just add some additional checking because the system user or attacker can change the id on the inspector element
        if (Auth::user()->role !== 'manager') {
            $payload['position'] = Auth::user()->role;
        }

        $Employee = Employee::where($payload);

        if ($Employee->count()) {

            $Employee = $Employee->first();
            $positions = $this->positions;

            return view('employees.edit', compact('Employee', 'positions'));
        }

        abort(401);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $Employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, $id)
    {

        $payload = [
            'id' => $id
        ];
        // addtional checking if user role has access or permission to delete the id 
        // I just add some additional checking because the system user or attacker can change the id on the inspector element
        if (Auth::user()->role !== 'manager') {
            $payload['position'] = Auth::user()->role;
        }

        $Employee = Employee::where($payload);

        if ($Employee->count()) {

            $Employee->update($request->only(['first_name', 'last_name', 'position']));

            return redirect()->route('employees.index')->with('success', 'Employee Has Been updated successfully');
        }

        abort(401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $Employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payload = [
            'id' => $id
        ];
        // addtional checking if user role has access or permission to delete the id 
        // I just add some additional checking because the system user or attacker can change the id on the inspector element
        if (Auth::user()->role !== 'manager') {
            $payload['position'] = Auth::user()->role;
        }

        $Employee = Employee::where($payload);

        if ($Employee->count()) {
            $Employee->delete();
            return redirect()->route('employees.index')->with('success', 'Employee has been deleted successfully');
        }

        abort(401);
    }
}
