@extends('layouts.master')

@section('title', 'Add Employee')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Add Employee Details</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <h4 class="text-primary">Personal Details</h4>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Upload Image</label>
                        <input type="file" name="user_image_path" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Middle Name</label>
                        <input type="text" name="middlename" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Spouse / Father Name</label>
                        <input type="text" name="sousename" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Alternate Phone</label>
                        <input type="text" name="alter_phone" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Gender <span class="text-danger">*</span></label>
                        <select name="gender" class="form-select">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <h4 class="text-primary mt-4">Aadhar Details</h4>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Aadhar Address</label>
                        <input type="text" name="adhar_address" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Aadhar Taluka</label>
                        <input type="text" name="adhar_taluka" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Aadhar PIN</label>
                        <input type="text" name="adhar_pin" class="form-control">
                    </div>
                </div>

                <h4 class="text-primary mt-4">Emergency Contact</h4>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Contact Name</label>
                        <input type="text" name="emergency_contact_name" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Phone</label>
                        <input type="text" name="emergency_contact_phone" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Relation</label>
                        <input type="text" name="emergency_contact_relation" class="form-control">
                    </div>
                </div>

                <h4 class="text-primary mt-4">Children Details</h4>
                <div id="children-details">
                    <div class="row child-row">
                        <div class="col-md-4">
                            <label class="form-label">Child Name</label>
                            <input type="text" name="children[0][name]" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Age</label>
                            <input type="text" name="children[0][age]" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">School</label>
                            <input type="text" name="children[0][school]" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary mt-2" id="add-child">Add Child</button>

                <h4 class="text-primary mt-4">Education Details</h4>
                <div id="education-details">
                    <div class="row education-row">
                        <div class="col-md-4">
                            <label class="form-label">Degree</label>
                            <input type="text" name="education[0][degree]" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Institute Name</label>
                            <input type="text" name="education[0][institute_name]" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Passing Year</label>
                            <input type="text" name="education[0][passing_year]" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary mt-2" id="add-education">Add Education</button>

                <h4 class="text-primary mt-4">Upload Documents</h4>
                <div id="document-section">
                    <div class="row document-row">
                        <div class="col-md-6">
                            <label class="form-label">Document Name</label>
                            <input type="text" name="documents[0][doc_name]" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Upload Document</label>
                            <input type="file" name="documents[0][doc_image_url_path]" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary mt-2" id="add-document">Add Document</button>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                    <a href="{{Route('index')}}" class="btn btn-danger px-10">Go Back and Refuse</a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
    }
    .form-label {
        font-weight: bold;
    }
    .btn-secondary {
        border-radius: 20px;
    }
    .btn-primary {
        border-radius: 20px;
        font-size: 18px;
    }
</style>

<script>
    document.getElementById('add-child').addEventListener('click', () => {
        let clone = document.querySelector('.child-row').cloneNode(true);
        document.getElementById('children-details').appendChild(clone);
    });

    document.getElementById('add-education').addEventListener('click', () => {
        let clone = document.querySelector('.education-row').cloneNode(true);
        document.getElementById('education-details').appendChild(clone);
    });

    document.getElementById('add-document').addEventListener('click', () => {
        let clone = document.querySelector('.document-row').cloneNode(true);
        document.getElementById('document-section').appendChild(clone);
    });
</script>
@endsection
