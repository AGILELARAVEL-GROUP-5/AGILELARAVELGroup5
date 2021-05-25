@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-dark rounded">
                <div class="card-header h1 bg-info">
                    Stages
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
      <h3>What are the Stages of Agile Development?</h3>
      <br>
      <p>
      The Agile Development lifecycle process follows the plan, code, test, deploy, and repeat model. 
      The stages are similar to traditional software development lifecycle.
      </p>

        <br>
      <p>
      1. Requirements Gathering<br><br>
The initial user problems that can be solved are prioritized 
by the scrum masters, product owners, and the team comprising designers, developers, and testers.<br>
Scrums and daily standups are arranged to ensure regular and meaningful brainstorming sessions.<br>
If the product is trying to propose an innovative solution, 
a PoC is developed to check the idea’s feasibility and the associated technology.

      </p>

      <br>
      <p>
      2. Design<br><br>
The designers, architects, and developers work collaboratively to develop 
the software architecture and the corresponding UI and UX for the product.<br>
Prototypes are also built at this stage for product owners and stakeholders to approve.

      </p>
  
     
      <br>

      <p>
      3. Develop<br><br>
The engineering teams work in accordance with the designed software architecture and 
build user stories in time-boxed sprints. They collaborate with the testing team at 
the end of every sprint to identify and fix issues.<br>
The Agile developers can also implement pair programming 
where one developer types the code, and the other developer 
reviews those lines of written code to increase speed and productivity.

     </p>

     <br>

      <p>
      4. Testing <br><br>
The Agile Testing team members jump in at the end of every sprint cycle 
to identify the bugs and inconsistencies. The agile testing team conducts various 
types of software tests and reports the bugs back to the developers. The developers 
then plan and fix the code in the following sprints.<br>
The testers also conduct pair testing where two testers sit at the same system, 
where one tester tests the code and the other reviews and builds the report around it.

     </p>

     <br>

    <p>

    5. Deployment <br><br>
This stage of Agile Development involves launching the completed user stories in the market. 
This starts with the launching of MVPs, i.e., the basic versions and the following user stories 
and launches follow as the initial feedback flows in. <br>
When all the user stories are delivered and launched, 
the deployment is called the full-fledged product deployment.


    </p>

    <br>

    <p>
        6. Maintenance <br><br>
            This stage involves maintaining the product to accommodate newer changes 
            and features and bugs and inconsistencies fixtures.<br>
            The Agile Development methodology promotes following 
            the product mindset over the project mindset for maintenance, i.e., 
            preference is given to managing the product throughout its lifetime.

    </p>

    <br>

    <h3>The Agile development methodology lifecycle? </h3>
    <br>
    <div class = "text-center">
    <img src="{{asset('/images/waterprocesslifecycle.jpg')}}"  class="img-fluid" >
    </div>
    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
