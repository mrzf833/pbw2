<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("employee.index");
    }

    public function datatables()
    {
        $query = Employee::query();
        return datatables()->of($query)
            ->addColumn('action', function($data){
                $button = '<a href="' . route('employee.show', $data->id) . '" class="btn btn-success btn-detail-barang m-1" data="'. $data->id .'">View</a>';
                $button .= '<button class="btn btn-danger btn-delete-employee m-1" data="'. $data->id .'">Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view("employee.create");
    }

    public function store(StoreEmployeeRequest $requet)
    {
        try{
            Employee::create($requet->validated());
            return redirect()->route("employee.index")->with('success', 'employee created');
        }catch(Exception $e){
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function show($id)
    {
        $data = Employee::findOrFail($id);
        return view("employee.show", [
            'data' => $data
        ]);
    }

    public function edit(EditEmployeeRequest $requet, $id)
    {
        try{
            $employee = Employee::findOrFail($id);
            $employee->update($requet->validated());
            return redirect()->route("employee.index")->with('success', 'employee updated');
        }catch(Exception $e){
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try{
            $employee = Employee::findOrFail($id);
            $employee->delete();
            return redirect()->route("employee.index")->with('success', 'employee deleted');
        }catch(Exception $e){
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
}
