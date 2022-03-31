@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div id="chart"></div>
    </div>
</div>
@endsection

@push('js')
<!-- echarts js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.6.9/apexcharts.min.js"></script>
<script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
<!-- echarts init -->
<script>
    var ts2 = 1484418600000;
var dates = [];
var spikes = [5, -5, 3, -3, 8, -8];
for (var i = 0; i < 120; i++) {
  ts2 = ts2 + 86400000;
  var innerArr = [ts2, dataSeries[1][i].value];
  dates.push(innerArr);
}

var options = {
  chart: {
    type: "area",
    stacked: false,
    height: 250,
    zoom: {
      type: "x",
      enabled: true
    },
    toolbar: {
      autoSelected: "zoom"
    }
  },
  dataLabels: {
    enabled: false
  },
  series: [
    {
      name: "XYZ MOTORS",
      data: dates
    }
  ],
  markers: {
    size: 0
  },
  title: {
    text: "Stock Price Movement",
    align: "left"
  },
  fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      inverseColors: false,
      opacityFrom: 0.5,
      opacityTo: 0,
      stops: [0, 90, 100]
    }
  },
  yaxis: {
    min: 20000000,
    max: 250000000,
    labels: {
      formatter: function(val) {
        return (val / 1000000).toFixed(0);
      }
    },
    title: {
      text: "Price"
    }
  },
  xaxis: {
    type: "datetime"
  },

  tooltip: {
    shared: false,
    y: {
      formatter: function(val) {
        return (val / 1000000).toFixed(0);
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();

</script>
@endpush