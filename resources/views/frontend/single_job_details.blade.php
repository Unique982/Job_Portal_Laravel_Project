@extends('frontend.includes.main')
@section('main-container')
<style>
    .job_details-pages{
        padding: 50px;
        background-color: #fff;
    }
    a{
        list-style: none;
    }
    .black-link{
        color: #28a745;
        font-weight: bold;
    }
    .conatiner{
        background: #fff;
        padding: 50px;
    }
    .job-details{
        padding: 20px;
        border: 1px solid #ffffff;

            border-radius: 0.5rem;
             margin-bottom: 1.5rem;
    }
    .job-title{
        font-size: 30px;
        font-weight: bold;
        color: #28a745;
    }
    .job-description {
            margin-top: 1.5rem;
        }
</style>
<section class="job_details-pages" id="job_details-pages"></section>
<div class="container">
    <a href="#" class="black-link">&larr;Go To Back</a>
<div class="row">
    <div class="col-lg-8 mt-5">
        <div class="job-details">
            <div class="job-title">
                Web Developer
                <p class="text-muted"><i class=" fas fa-map-marker-alt"></i>KTM, Nepal <span class="ml-3"><i class="fas fa-clock"></i> Part-time</span></p></div>
                <hr>
                <div class="job-description mt-4">
                <h3>Job Description</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eligendi, autem provident vitae aspernatur tenetur, deleniti asperiores sapiente qui consectetur nisi culpa tempore earum ipsa, nesciunt fuga. Ipsum, qui eaque?</p>
               </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
