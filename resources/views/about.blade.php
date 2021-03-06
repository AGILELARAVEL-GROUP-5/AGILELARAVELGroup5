@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card  border border-dark border-5">
                <div class="card-header h1 font-weight-bolder bg-info">
                        About
                </div>
                
                <div class="card-body h5">
            

      <p>
      According to the State of Agile Report 2020, 95% of the respondents 
      (no. of respondents over 40000) prefer Agile Development methodology. 
      Agile follows the iterative and incremental model 
      while promoting cross-functional team setups across the organization, i.e.,
      the three key elements of Agile Methodology that ensure success.
     </p>
        <br>
      <p>
      The upshot of it — ability to organize work in time-boxed sprints, 
      flexibility for to-and-fro movement across the development cycle, 
      and faster time to market as everyone in the team works collaboratively towards a common goal.
      </p>

      <br>
      <p>
      The Agile project management strategy has rewired the organizational software
      development life cycle over the years while defying the golden hammer bias 
      related to the Waterfall methodology, which leads to piling technical debts.
      </p>
                    <div class="text-center">
                    <img src="{{asset('/images/waterprocess.jpg')}}" class="img-fluid" >
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection





