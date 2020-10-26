<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employee_list') -> with('employees', $employees);
    }

    public function edit($id) {
        $employee = Employee::findOrFail($id);
        return view ('edit_employee') -> with('employee', $employee);
    }

    public function update(Request $request, $id) {
        $employee = Employee::findOrFail($id);

        $employee -> name = $request -> name;
        $employee -> surname = $request -> surname;
        $employee -> position = $request -> position;
        $employee -> phone = $request -> phone;
        $employee -> is_hired = $request -> is_hired;

        $employee -> save();
        return redirect('/employeelist');
    }
}
