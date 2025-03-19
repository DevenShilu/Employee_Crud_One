@extends('layouts.master')

@section('title', 'Employee List')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Employee List</h3>
            <a href="{{ route('create') }}" class="btn btn-light btn-sm fw-bold">+ Add Employee</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>email@example.com</td>
                        <td>1234567890</td>
                        <td>1234 Main St</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="View Employee">
                                <i class="material-icons">visibility</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Employee">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Employee">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>



                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>9876543210</td>
                        <td>5678 Side St</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="View Employee">
                                <i class="material-icons">visibility</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Employee">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Employee">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>9876543210</td>
                        <td>5678 Side St</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="View Employee">
                                <i class="material-icons">visibility</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Employee">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Employee">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>9876543210</td>
                        <td>5678 Side St</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="View Employee">
                                <i class="material-icons">visibility</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Employee">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Employee">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>9876543210</td>
                        <td>5678 Side St</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="View Employee">
                                <i class="material-icons">visibility</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-warning text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Employee">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Employee">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


