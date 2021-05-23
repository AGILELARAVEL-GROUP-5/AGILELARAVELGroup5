@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Methodology</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
      <h3>What is Agile Development Methodology?</h3>
      <br>
      <p>
       The Agile Development methodology is the innovative approach
       to develop software products 
       where flexibility and speed hold precedence. 
       Agile introduces the iterative and incremental development method 
       to ensure foolproof and <u>accelerated delivery</u>.
      </p>

        <br>
      <p>
      Traditionally, development methodologies such as Waterfall dominated the software industry.
      But, then it followed a rigid path where no backward movement was permitted. 
      This left no room for adding newer features while 
      it made maintenance a challenging process. 
      The worst thing you can deliver in a two-year project 
      is exactly what the customer wanted on day one. 
      — Mike Cohn, Contributor, Scrum Software Development Method
      </p>

      <br>
      <p>
      The Agile process addresses this issue by not only allowing backward tracking 
      but also allows working in increments where smaller parts of the broader feature 
      set are developed in time-boxed cycles.
      </p>

      <br>

      <p>
    The Agile approach to software development follows the typical development process, i.e.,
    — <b>requirements gathering, design, development, testing, deployment, and maintenance.</b> 
    However, the strategy to approach each of these stages changes when implementing 
    Agile development methodology.
    </p>

    <br>
    
   
      <img src="{{asset('/images/waterfallprocess.jpg')}}" style="height: 100%; width: 100%; position: relative;">
    
     
      <br>

      <p>
         Iterative development — handling feature creep and bugs
     </p>

      <p>
      Incremental development — developing software in smaller segments 
      that add up to make up the larger product later on
     </p>

    <p>
        Working in time-boxed sprints — weekly or monthly cycles 
        organized to deliver a workable user story
    </p>

    <p>
    Cross-functional setups — constant communication and collaboration 
    among the different teams across the organization to ensure everyone’s on the same page
    </p>

    <p>
    Efficient management of product backlogs — making informed-decisions when planning for 
    the next sprint cycles in the Agile Product Development process
    </p> 
    <p>
    Retrospectives — learning from past experiences and rectifying 
    the mistakes in the following sprints and projects.
    </p> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

