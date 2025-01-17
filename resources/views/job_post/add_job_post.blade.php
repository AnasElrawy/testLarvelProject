@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Post Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-section {
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-section h3 {
            margin-bottom: 20px;
        }
        .btn-edit {
            margin-top: 20px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Job Post Form</h2>
        <form action="{{ route('job_posts.store') }}" method="POST">
            @csrf

            <div class="form-section">
                <h3>Job Details</h3>
                <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" class="form-control" id="job_title" name="job_title">
                    @error('job_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="responsibilities">Responsibilities</label>
                    <textarea class="form-control" id="responsibilities" name="responsibilities" rows="3"></textarea>
                    @error('responsibilities')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="required_skills">Required Skills</label>
                    <textarea class="form-control" id="required_skills" name="required_skills" rows="3"></textarea>
                    @error('required_skills')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="qualifications">Qualifications</label>
                    <textarea class="form-control" id="qualifications" name="qualifications" rows="3"></textarea>
                    @error('qualifications')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="salary_range">Salary Range</label>
                    <input type="text" class="form-control" id="salary_range" name="salary_range">
                    @error('salary_range')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-section">
                <h3>Additional Information</h3>
                <div class="form-group">
                    <label for="benefits_offered">Benefits Offered</label>
                    <textarea class="form-control" id="benefits_offered" name="benefits_offered" rows="3"></textarea>
                    @error('benefits_offered')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location">
                    @error('location')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="work_type">Work Type</label>
                    <select class="form-control" id="work_type" name="work_type">
                        <option value="full-time">Full-Time</option>
                        <option value="part-time">Part-Time</option>
                        <option value="freelancing-job">Freelancing Job</option>
                    </select>
                    @error('work_type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="work_from">Work From</label>
                    <select class="form-control" id="work_from" name="work_from">
                        <option value="remote">Remote</option>
                        <option value="on-site">On-Site</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                    @error('work_from')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="application_deadline">Application Deadline</label>
                    <input type="date" class="form-control" id="application_deadline" name="application_deadline">
                    @error('application_deadline')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


        <label for="inputGroupFile02" class="form-label">Profile Image</label>
        <div class="input-group mb-3">
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">User Image</label>
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror  
        </div>

             

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
