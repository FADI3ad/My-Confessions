@extends('master')
@section('csspath', 'newserved')
@section('title', 'Add New Served')
@section('addnewserved-active', 'active')
@section('content')
    <main>

        <div class="form-container">
            <form action="{{ route('served.store') }}" method="POST">
                @csrf
                <h2>Service Registration 🙋‍♂️</h2>

                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="First Middle Last"
                        required />
                </div>

                <div class="form-group">
                    <label for="photo">Upload Photo</label>
                    <input type="file" id="photo" name="photo" class="form-control-file" accept="image/*"
                        required />
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="form-control" required />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="work">Work</label>
                        <input type="text" id="work" name="work" class="form-control"
                            placeholder="e.g. Engineer, Student" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="talents">Talents</label>
                    <textarea id="talents" name="talents" rows="3" class="form-control"
                        placeholder="e.g. singing, acting, drawing..."></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control" required>
                            <option value="">-- Select Gender --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="status">Marital Status</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="">-- Select Status --</option>
                            <option value="married">Married</option>
                            <option value="widow">Widow</option>
                            <option value="widower">Widower</option>
                            <option value="divorced">Divorced</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="service">Service Type</label>
                    <select id="service" name="service" class="form-control" required>
                        <option value="">-- Select Service --</option>
                        <option value="children">Children</option>
                        <option value="prep">Preparatory</option>
                        <option value="secondary">Secondary</option>
                        <option value="youth">Youth</option>
                        <option value="other">Other Services</option>
                    </select>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="deacon" name="deacon">
                    <label class="form-check-label" for="deacon">Is a Deacon?</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
