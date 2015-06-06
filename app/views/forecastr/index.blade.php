@extends('layouts.default')

@section('content')



    @if(isset($location))
        <div class="locale">
            <div class="container inner">
                <p>Current Conditions for {{ $location }}</p>
            </div>
        </div>
    @endif



<!-- Begin Alerts Area-->

   @if(isset($alerts))

        <div class="panel-group container alerts-body" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <h4 class="panel-title alert alert-danger">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Alerts

                    ({{count($alerts)}})

                  <i class="glyphicon glyphicon-chevron-down"></i>
                </a>
            </h4>
          </div>

            <!-- Below the collapse class default is in, but isn't set on collapse.  Target class for glyphicon change-->
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body alert alert-danger">
                    @foreach($alerts as $id => $alert)
                      <div class="container">
                        <p>{{ $alert->description }}</p>
                        <p style="font-style:italic">(expires: {{ gmdate("D, F j, Y, g:i a", $alert->expires ) }} )</p>
                      </div>

                      <hr>
                    @endforeach
                </div>

          </div>
        </div>

   @endif

<!-- End Alerts Area-->

<!-- Begin Main Content Area-->
    <div class="container main-content">

      <!-- Begin Current Conditions-->
      @if(isset($currentTemp))
          <div class="container current-conditions">
              <h2>Current Conditions</h2>
              <hr>
              <div class="row">
                <div class="col-sm-2">
                  <i class="wi {{ $seticon }}"></i>
                </div>



                <div class="col-sm-3">
                  <p style="font-size:32px">{{ round($currentTemp) }}&#176</p>
                  <p> and {{ $currentCondition }}</p>
                  <p>rain: {{ $currentPrecip * 100 }}&#37</p>
                </div>
            </div>

          </div>
      @endif

        <h2>Hourly Temperature and Rain</h2>
      <canvas id="hourlyGraph" width="1050" height="400"></canvas>
      <!-- End Current Conditions-->


            <!-- Begin Weekly Forecast-->
            <div class="container">
                <h2>Weekly Forecast</h2>
                <hr>
                  @if(isset($daily))
                    @foreach($daily as $id => $day)
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="heading{{ $id }}">
                            <h4 class="panel-title">

                              <a data-toggle="collapse" data-parent="#accordion{{ $id }}" href="#collapse{{ $id }}" aria-expanded="true" aria-controls="collapseOne" class="dayIcon">
                                <span class="toggle-icon glyphicon glyphicon-plus-sign"></span>

                                {{ gmdate("D", $day->time) }}
                              </a>
                              <span class="day">{{ gmdate("M d", $day->time) }}</span>
                            </h4>
                          </div>
                          <div id="collapse{{ $id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-sm-2">
                                  <i class="weekly wi {{ $day->icon }}"></i>
                                </div>

                                <div class="col-sm-3">
                                  <p>{{ round($day->apparentTemperatureMin) }}&#176 - {{ round($day->temperatureMax) }}&#176</p>
                                  <p>{{ $day->summary }}</p>
                                  <p>rain: {{ $day->precipProbability * 100 }}&#37</p>
                                </div>

                              </div>


                            </div>
                          </div>
                        </div>
                      </div>

                  <!-- End Weekly Forecast-->
                    @endforeach
                  @endif
              </div>


<!-- End Main Content Area-->
        </div>
    </div>
        <script>
            //returning data objects from controller and binding to vars for Chart.js plugin in themescripts.js
            var hours = <?php echo json_encode($hours); ?>;
            var rainPercent = <?php echo json_encode($hourlyRain); ?>;
            var hourlyTemp = <?php echo json_encode($hourlyTemp); ?>
        </script>

@stop
