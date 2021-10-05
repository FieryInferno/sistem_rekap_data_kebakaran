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
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5">
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
  <div class="row mb-5">
    <div class="col">
      <div class="row card border-white shadow p-5">
        <canvas id="myLineChart" style="margin-left: 3rem;"></canvas>
        <table class="table table-bordered" width="100%">
          <tbody class="text-center">
            <tr>
              <td width="4%">2020</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
              <td width="8%">2</td>
            </tr>
            <tr>
              <td>2019</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
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
        data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
        backgroundColor: ['#aa0808'],
        borderColor: ['#aa0808'],
        borderWidth: 1
      }, {
        label: '2019',
        data: [12, 11, 10, 9, 8, 7, 6 , 5, 4, 3, 2, 1],
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
</script>
@endsection