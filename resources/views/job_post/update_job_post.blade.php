@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Job Post</h2>
    <form action="{{ route('job_posts.update', $job_post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-section mb-4 p-4 border rounded bg-light shadow-sm">
            <h4 class="mb-3">Job Details</h4>
            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title', $job_post->job_title) }}">
                @error('job_title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $job_post->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="responsibilities">Responsibilities</label>
                <textarea class="form-control" id="responsibilities" name="responsibilities" rows="3">{{ old('responsibilities', $job_post->responsibilities) }}</textarea>
                @error('responsibilities')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="required_skills">Required Skills</label>
                <textarea class="form-control" id="required_skills" name="required_skills" rows="3">{{ old('required_skills', $job_post->required_skills) }}</textarea>
                @error('required_skills')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="qualifications">Qualifications</label>
                <textarea class="form-control" id="qualifications" name="qualifications" rows="3">{{ old('qualifications', $job_post->qualifications) }}</textarea>
                @error('qualifications')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="salary_range">Salary Range</label>
                <input type="text" class="form-control" id="salary_range" name="salary_range" value="{{ old('salary_range', $job_post->salary_range) }}">
                @error('salary_range')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-section mb-4 p-4 border rounded bg-light shadow-sm">
            <h4 class="mb-3">Additional Information</h4>
            <div class="form-group">
                <label for="benefits_offered">Benefits Offered</label>
                <textarea class="form-control" id="benefits_offered" name="benefits_offered" rows="3">{{ old('benefits_offered', $job_post->benefits_offered) }}</textarea>
                @error('benefits_offered')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $job_post->location) }}">
                @error('location')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="work_type">Work Type</label>
                <select class="form-control" id="work_type" name="work_type">
                    <option value="full-time" {{ old('work_type', $job_post->work_type) == 'full-time' ? 'selected' : '' }}>Full-Time</option>
                    <option value="part-time" {{ old('work_type', $job_post->work_type) == 'part-time' ? 'selected' : '' }}>Part-Time</option>
                    <option value="freelancing-job" {{ old('work_type', $job_post->work_type) == 'freelancing-job' ? 'selected' : '' }}>Freelancing Job</option>
                </select>
                @error('work_type')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="work_from">Work From</label>
                <select class="form-control" id="work_from" name="work_from">
                    <option value="remote" {{ old('work_from', $job_post->work_from) == 'remote' ? 'selected' : '' }}>Remote</option>
                    <option value="on-site" {{ old('work_from', $job_post->work_from) == 'on-site' ? 'selected' : '' }}>On-Site</option>
                    <option value="hybrid" {{ old('work_from', $job_post->work_from) == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                </select>
                @error('work_from')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="application_deadline">Application Deadline</label>
                <input type="date" class="form-control" id="application_deadline" name="application_deadline" value="{{ old('application_deadline', $job_post->application_deadline) }}">
                @error('application_deadline')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
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

        <button type="submit" class="btn btn-primary">Update Job Post</button>
        <a href="{{ route('job_posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

@section('styles')
    <style>
        .form-section {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .form-section h4 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .alert {
            margin-top: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            margin-left: 10px;
        }
    </style>
@endsection
