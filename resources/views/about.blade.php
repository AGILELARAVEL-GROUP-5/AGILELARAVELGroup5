<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12 px-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-sans font-semibold text-2xl p-6 bg-white border-8 rounded-3xl border-blue-800">

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

       <img src="{{asset('/images/waterprocess.jpg')}}" class="center" style="height: 500px; width: 800px; position: relative;">



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
