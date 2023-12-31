@extends('layout')

@section('title')
    New-Post
@endsection

@section('banner')
<div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Post a Job</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Post a Job</span></p>
      </div>
    </div>


@endsection

@section('content')
<div class="site-section bg-light">
      <div class="container">
        @if(session()->has('success'))
          <div class="alert alert-success">
            {{session()->get('success')}}
          </div>
        @endif
        <?php session()->forget('success'); ?>
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="{{route('job.create')}}" method="post" class="p-5 bg-white">
              @csrf 
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Название</label>
                  <input type="text" id="fullname" class="form-control" name="title" placeholder="eg. Full Stack Frontend">
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Компания</label>
                  <select name="company_id" id="company" class="form-control">
                  @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                  @endforeach
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12"><h3>Тип вакансии</h3></div>
                @foreach($types as $type)
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-1">
                    <input value="{{$type->id}}" type="radio" id="option-job-type-1" 
                    name="type_id"> {{$type->name}}
                  </label>
                </div>
                @endforeach
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Локация</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <select name="location_id" id="location" class="form-control">
                  @foreach($locations as $location)
                    <option value="{{$location->id}}">{{$location->name}}</option>
                  @endforeach
                  </select>
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="salary" class="form-control"
                   placeholder="Зарплата (сом.)">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Описание</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                    Добавить
                  </button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>


        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>

      </div>
    </div>


@endsection
