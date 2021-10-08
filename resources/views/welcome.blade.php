@extends('layouts.app')
@section('title', 'Rekap Kasus')
@section('content')
<div class="container-xxl">
  <div class="row mb-3">
    <div class="d-flex justify-content-between align-items-center">
      <h1 class="pb-2">Rekap kasus</h1>
      <a href="/bulk_add" class="btn btn-primary p-2 shadow">+ Tambah Kasus</a>
    </div>
  </div>
  <button onclick="saveImage('imagesave1')" class="btn btn-warning">Download</button>
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5" id="imagesave1">
        <canvas id="myChart" style="margin-left: 3rem;"></canvas>
        <table class="table table-bordered" width="100%">
          <tbody>
            <tr>
              <td width="8%">
                <div style="width:1rem;height:1rem;background:#aa0808;border:solid 3px #aa0808;"></div> Jan-Des 2020
              </td>
              <td width="15.3333333%">{{ $wilayah20[5] }}</td>
              <td width="15.3333333%">{{ $wilayah20[0] }}</td>
              <td width="15.3333333%">{{ $wilayah20[1] }}</td>
              <td width="15.3333333%">{{ $wilayah20[2] }}</td>
              <td width="15.3333333%">{{ $wilayah20[3] }}</td>
              <td width="15.3333333%">{{ $wilayah20[4] }}</td>
            </tr>
            <tr>
              <td>
                <div style="width:1rem;height:1rem;background:#f89603;border:solid 3px #f89603;"></div> Jan-Des 2019
              </td>
              <td width="15.3333333%">{{ $wilayah19[5] }}</td>
              <td width="15.3333333%">{{ $wilayah19[0] }}</td>
              <td width="15.3333333%">{{ $wilayah19[1] }}</td>
              <td width="15.3333333%">{{ $wilayah19[2] }}</td>
              <td width="15.3333333%">{{ $wilayah19[3] }}</td>
              <td width="15.3333333%">{{ $wilayah19[4] }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <button onclick="saveImage('imagesave2')" class="btn btn-warning">Download</button>
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5" id="imagesave2">
        <canvas id="myLineChart" style="margin-left: 3rem;"></canvas>
        <table class="table table-bordered" width="100%">
          <tbody class="text-center">
            <tr>
              <td width="4%">2020</td>
              <td width="8%">{{ $bulan20[0] }}</td>
              <td width="8%">{{ $bulan20[1] }}</td>
              <td width="8%">{{ $bulan20[2] }}</td>
              <td width="8%">{{ $bulan20[3] }}</td>
              <td width="8%">{{ $bulan20[4] }}</td>
              <td width="8%">{{ $bulan20[5] }}</td>
              <td width="8%">{{ $bulan20[6] }}</td>
              <td width="8%">{{ $bulan20[7] }}</td>
              <td width="8%">{{ $bulan20[8] }}</td>
              <td width="8%">{{ $bulan20[9] }}</td>
              <td width="8%">{{ $bulan20[10] }}</td>
              <td width="8%">{{ $bulan20[11] }}</td>
            </tr>
            <tr>
              <td>2019</td>
              <td>{{ $bulan19[0] }}</td>
              <td>{{ $bulan19[1] }}</td>
              <td>{{ $bulan19[2] }}</td>
              <td>{{ $bulan19[3] }}</td>
              <td>{{ $bulan19[4] }}</td>
              <td>{{ $bulan19[5] }}</td>
              <td>{{ $bulan19[6] }}</td>
              <td>{{ $bulan19[7] }}</td>
              <td>{{ $bulan19[8] }}</td>
              <td>{{ $bulan19[9] }}</td>
              <td>{{ $bulan19[10] }}</td>
              <td>{{ $bulan19[11] }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <button onclick="saveImage('imagesave3')" class="btn btn-warning">Download</button>
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5" id="imagesave3">
        <div class="row">
          <strong class="text-center mb-3">Perbandingan Trend Kebakaran Berdasarkan Dugaan Penyebab Kebakaran di Provinsi DKI Jakarta (Januari s.d Desember) Tahun 2019 dan 2020</strong>
          <div class="col">
            <!-- <canvas id="myPieChart"></canvas> -->
            <div id="myPieChart" style="width: 200%;"></div>
          </div>
          <div class="col">
            <canvas id="myPie1Chart"></canvas>
          </div>
          <div class="row">
            <div class="col">
              <div class="col">LS : Lisrik</div>
              <div class="col">Gas : Gas</div>
            </div>
            <div class="col">
              <div class="col">MS : Membakar Sampah</div>
              <div class="col">RK : Rokok</div>
            </div>
            <div class="col">
              <div class="col">LLN : Lilin</div>
              <div class="col">LN : Lainnya</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button onclick="saveImage('imagesave4')" class="btn btn-warning">Download</button>
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5" id="imagesave4">
        <div class="row">
          <strong class="text-center mb-3">Perbandingan Trend Kebakaran Berdasarkan Objek Kejadian Kebakaran di Provinsi DKI Jakarta (Januari s.d Desember) Tahun 2019 dan 2020</strong>
          <div class="col">
            <canvas id="myPieChartObjek"></canvas>
          </div>
          <div class="col">
            <canvas id="myPie1ChartObjek"></canvas>
          </div>
          <div class="row">
            <div class="col">
              <div class="col">BP : Bang. Perumahan</div>
              <div class="col">BUP : Bang. Umum dan Perdagangan</div>
              <div class="col">ILG : Instansi Luar Gedung</div>
            </div>
            <div class="col">
              <div class="col">BI : Bang. Industri</div>
              <div class="col">LPK : Lapak</div>
              <div class="col">TB : Tumbuhan</div>
            </div>
            <div class="col">
              <div class="col">KD : Kendaraan</div>
              <div class="col">S : Sampah</div>
              <div class="col">LN : Lain - Lain</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button onclick="saveImage('imagesave5')" class="btn btn-warning">Download</button>
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5" id="imagesave5">
        <canvas id="myChartDiatasi"></canvas>
      </div>
    </div>
  </div>
  <button onclick="saveImage('imagesave6')" class="btn btn-warning">Download</button>
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5" id="imagesave6">
        <canvas id="myChartDiatasi1" style="margin-left: 3rem;"></canvas>
        <table class="table table-bordered" width="100%">
          <tbody>
            <tr>
              <td width="8%">
                <div style="width:1rem;height:1rem;background:#aa0808;border:solid 3px #aa0808;"></div> Jan-Des 2020
              </td>
              <td width="15.3333333%">{{ $wilayah20[0] }}</td>
              <td width="15.3333333%">{{ $wilayah20[1] }}</td>
              <td width="15.3333333%">{{ $wilayah20[2] }}</td>
              <td width="15.3333333%">{{ $wilayah20[3] }}</td>
              <td width="15.3333333%">{{ $wilayah20[4] }}</td>
            </tr>
            <tr>
              <td>
                <div style="width:1rem;height:1rem;background:#f89603;border:solid 3px #f89603;"></div> Jan-Des 2019
              </td>
              <td width="15.3333333%">{{ $wilayah19[0] }}</td>
              <td width="15.3333333%">{{ $wilayah19[1] }}</td>
              <td width="15.3333333%">{{ $wilayah19[2] }}</td>
              <td width="15.3333333%">{{ $wilayah19[3] }}</td>
              <td width="15.3333333%">{{ $wilayah19[4] }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://apps.sistemit.com/tutorial/html2canvas/html2canvas.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work',     11],
      ['Eat',      2],
      ['Commute',  2],
      ['Watch TV', 2],
      ['Sleep',    7]
    ]);

    var options = {
      title: 'My Daily Activities'
    };

    var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));

    chart.draw(data, options);
  }
</script>
<script>
  $('#save_image_locally').click(function(){
    html2canvas($('#imagesave'), 
    {
      onrendered: function (canvas) {
        var a = document.createElement('a');
        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
        a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
        a.download = 'grafik.jpg';
        a.click();
      }
    });
  });

  function saveImage(params) {
    html2canvas($('#' + params), 
    {
      onrendered: function (canvas) {
        var a = document.createElement('a');
        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
        a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
        a.download = 'grafik.jpg';
        a.click();
      }
    });
  }
  
  const dataMaintenance = {
    labels: ['Total', 'jakarta pusat', 'jakarta utara', 'jakarta barat', 'jakarta selatan', 'jakarta timur'],
    datasets: [
      {
        data: [{{ $wilayah20[5] }}, {{ $wilayah20[0] }}, {{ $wilayah20[1] }}, {{ $wilayah20[2] }}, {{ $wilayah20[3] }}, {{ $wilayah20[4] }}],
        backgroundColor: ['#aa0808'],
        borderColor: ['#aa0808'],
        borderWidth: 1
      }, {
        data: [{{ $wilayah19[5] }}, {{ $wilayah19[0] }}, {{ $wilayah19[1] }}, {{ $wilayah19[2] }}, {{ $wilayah19[3] }}, {{ $wilayah19[4] }}],
        backgroundColor: ['#f89603'],
        borderColor: ['#f89603'],
        borderWidth: 1
      }
    ]
  };

  const configMaintenance = {
    type: 'bar',
    data: dataMaintenance,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        title: {
          display: true,
          text: 'Perbandingan Trend Kebakaran Berdasarkan Wilayah di Provinsi DKI Jakarta (Januari s.d Desember) Tahun 2019 dan 2020'
        }
      },
    },
  };
  
  var myBarChart = new Chart(document.getElementById("myChart"), configMaintenance);

  const dataLine = {
    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
    datasets: [
      {
        label: '2020',
        data: [{{ $bulan20[0] }}, {{ $bulan20[1] }}, {{ $bulan20[2] }}, {{ $bulan20[3] }}, {{ $bulan20[4] }}, {{ $bulan20[5] }}, {{ $bulan20[6] }}, {{ $bulan20[7] }}, {{ $bulan20[8] }}, {{ $bulan20[9] }}, {{ $bulan20[10] }}, {{ $bulan20[11] }}],
        backgroundColor: ['#aa0808'],
        borderColor: ['#aa0808'],
        borderWidth: 1
      }, {
        label: '2019',
        data: [{{ $bulan19[0] }}, {{ $bulan19[1] }}, {{ $bulan19[2] }}, {{ $bulan19[3] }}, {{ $bulan19[4] }}, {{ $bulan19[5] }}, {{ $bulan19[6] }}, {{ $bulan19[7] }}, {{ $bulan19[8] }}, {{ $bulan19[9] }}, {{ $bulan19[10] }}, {{ $bulan19[11] }}],
        backgroundColor: ['#f89603'],
        borderColor: ['#f89603'],
        borderWidth: 1
      }
    ]
  };

  const configLine = {
    type: 'line',
    data: dataLine,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        },
        title: {
          display: true,
          text: 'Perbandingan Trend Kebakaran Berdasarkan Bulan di Provinsi DKI Jakarta (Januari s.d Desember) Tahun 2019 dan 2020'
        }
      },
    },
  };
  
  var myLineChart = new Chart(document.getElementById("myLineChart"), configLine);
  
  // const dataPie = {
  //   labels: ['LS', 'Gas', 'MS', 'RK', 'LLN', 'LN'],
  //   datasets: [{
  //     data: [{{ $klausa20['k_ls'] }}, {{ $klausa20['k_gas'] }}, {{ $klausa20['k_lln'] }}, {{ $klausa20['k_ms'] }}, {{ $klausa20['k_rk'] }}, {{ $klausa20['k_ln'] }}],
  //     backgroundColor: ['#045e9d', '#9d0404', '#08a51b', '#6108a5', '#06c2ed', '#ed9106'],
  //     hoverOffset: 4
  //   }]
  // };

  // const configPie = {
  //   type: 'pie',
  //   data: dataPie,
  //   options: {
  //     responsive: true,
  //   },
  // };
  
  // var myPieChart = new Chart(document.getElementById("myPieChart"), configPie);

  const dataPie1 = {
    labels: ['LS', 'Gas', 'MS', 'RK', 'LLN', 'LN'],
    datasets: [{
      data: [{{ $klausa19['k_ls'] }}, {{ $klausa19['k_gas'] }}, {{ $klausa19['k_lln'] }}, {{ $klausa19['k_ms'] }}, {{ $klausa19['k_rk'] }}, {{ $klausa19['k_ln'] }}],
      backgroundColor: ['#045e9d', '#9d0404', '#08a51b', '#6108a5', '#06c2ed', '#ed9106'],
      hoverOffset: 4
    }]
  };

  const configPie1 = {
    type: 'pie',
    data: dataPie1,
    options: {
      responsive: true,
    },
  };
  
  var myPie1Chart = new Chart(document.getElementById("myPie1Chart"), configPie1);

  const dataPieObjek = {
    labels: ['BP', 'BUP', 'BI', 'KD', 'ILG', 'TB', 'LPK', 'S', 'LN'],
    datasets: [{
      data: [{{ $klausa20['k_ls'] }}, {{ $klausa20['k_gas'] }}, {{ $klausa20['k_lln'] }}, {{ $klausa20['k_ms'] }}, {{ $klausa20['k_rk'] }}, {{ $klausa20['k_ln'] }}],
      backgroundColor: ['#045e9d', '#9d0404', '#08a51b', '#6108a5', '#06c2ed', '#ed9106'],
      hoverOffset: 4
    }]
  };

  const configPieObjek = {
    type: 'pie',
    data: dataPieObjek,
    options: {
      responsive: true,
    },
  };
  
  var myPieChartObjek = new Chart(document.getElementById("myPieChartObjek"), configPieObjek);

  const dataPie1Objek = {
    labels: ['BP', 'BUP', 'BI', 'KD', 'ILG', 'TB', 'LPK', 'S', 'LN'],
    datasets: [{
      data: [{{ $klausa19['k_ls'] }}, {{ $klausa19['k_gas'] }}, {{ $klausa19['k_lln'] }}, {{ $klausa19['k_ms'] }}, {{ $klausa19['k_rk'] }}, {{ $klausa19['k_ln'] }}],
      backgroundColor: ['#045e9d', '#9d0404', '#08a51b', '#6108a5', '#06c2ed', '#ed9106'],
      hoverOffset: 4
    }]
  };

  const configPie1Objek = {
    type: 'pie',
    data: dataPie1Objek,
    options: {
      responsive: true,
    },
  };
  
  var myPie1ChartObjek = new Chart(document.getElementById("myPie1ChartObjek"), configPie1Objek);

  const dataDiatasi = {
    labels: ['Jan-Des 2019', 'Jan-Des 2020'],
    datasets: [
      {
        data: [{{ $masyTrue['2019'] }}, {{ $masyTrue['2020'] }}],
        backgroundColor: ['#aa0808'],
        borderColor: ['#aa0808'],
        borderWidth: 1
      }, {
        data: [{{ $masyFalse['2019'] }}, {{ $masyFalse['2020'] }}],
        backgroundColor: ['#f89603'],
        borderColor: ['#f89603'],
        borderWidth: 1
      }
    ]
  };

  const configDiatasi = {
    type: 'bar',
    data: dataDiatasi,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        title: {
          display: true,
          text: 'Perbandingan Kebakaran yang Diatasi Oleh Masyarakat Periode Tahun 2019 dan 2020'
        }
      },
    },
  };
  
  var myBarChartDiatasi = new Chart(document.getElementById("myChartDiatasi"), configDiatasi);
  
  const dataDiatasi1 = {
    labels: ['jakarta pusat', 'jakarta utara', 'jakarta barat', 'jakarta selatan', 'jakarta timur'],
    datasets: [
      {
        data: [{{ $wilmasy20[0] }}, {{ $wilmasy20[1] }}, {{ $wilmasy20[2] }}, {{ $wilmasy20[3] }}, {{ $wilmasy20[4] }}],
        backgroundColor: ['#aa0808'],
        borderColor: ['#aa0808'],
        borderWidth: 1
      }, {
        data: [{{ $wilmasy19[0] }}, {{ $wilmasy19[1] }}, {{ $wilmasy19[2] }}, {{ $wilmasy19[3] }}, {{ $wilmasy19[4] }}],
        backgroundColor: ['#f89603'],
        borderColor: ['#f89603'],
        borderWidth: 1
      }
    ]
  };

  const configDiatasi1 = {
    type: 'bar',
    data: dataDiatasi1,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        title: {
          display: true,
          text: 'Persentase Perbandingan Kebakaran yang Dapat Diatasi Masyarakat Berdasarkan Wilayah Provinsi DKI Jakarta Periode Tahun 2019 dan 2020'
        }
      },
    },
  };
  
  var myBarChartDiatasi1 = new Chart(document.getElementById("myChartDiatasi1"), configDiatasi1);
</script>
@endsection