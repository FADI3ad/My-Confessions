@extends('master')
@section('csspath', 'newserved')
@section('title', 'Confessor Registration')
@section('addnewserved-active', 'active')
@section('content')
<main>
    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>Confessor Registration 🙋‍♂️</h2>

            <!-- البيانات الشخصية -->
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="First Middle Last" required />
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control" required />
                </div>

                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" class="form-control" required>
                        <option value="">-- Select Gender --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <!-- التواصل والعنوان -->
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="e.g. 01012345678" required>
            </div>



            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="2" class="form-control" placeholder="e.g. 123 Street Name, City, Governorate" required></textarea>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="status">Marital Status</label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="">-- Select Status --</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="work">Work</label>
                    <input type="text" id="work" name="work" class="form-control" placeholder="e.g. Engineer, Student" />
                </div>
            </div>



            <!-- المواهب والخدمة -->
            <div class="form-group">
                <label for="talents">Talents</label>
                <textarea id="talents" name="talents" rows="3" class="form-control" placeholder="e.g. singing, acting, drawing..."></textarea>
            </div>

            <div class="form-group">
                <label for="service">Service Type</label>
                <select id="service" name="service" class="form-control" required>
                    <option value="">-- Select Service --</option>
                    <option value="child">Children</option>
                    <option value="Preparatory">Preparatory</option>
                    <option value="Secondary">Secondary</option>
                    <option value="Youth">Youth</option>
                    <option value="Adult">Adult</option>
                </select>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="deacon" name="deacon">
                <label class="form-check-label" for="deacon">Is a Deacon?</label>
            </div>

            <!-- رفع الصورة -->
            <div class="form-group">
                <label for="photo">Upload Photo</label>
                <input type="file" id="photo" name="photo" class="form-control-file" accept="image/*">
            </div>

            <!-- زر الإرسال -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
@endsection
