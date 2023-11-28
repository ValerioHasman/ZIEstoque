@extends('site.layout')
@section('conteudo')
@include('includes.bootstrap')

<link rel="stylesheet" href="{{ asset('css/style.css')}}" />
<script defer src="{{ asset('js/chart.js') }}"></script>
<script defer src="{{ asset('js/main.js') }}"></script>


  <script type="module">
  
  /* Gráfico 01 */
  var ctx = document.getElementById('myChart');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [{{ $userAno }}],
          datasets: [{
              label: [{!! $userLabel !!}],
              data: [{{ $userTotal }}],
              backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',                         
                  'rgba(255, 159, 64, 1)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',                     
                  'rgba(255, 159, 64, 1)'
              ],
             borderWidth: 1, 
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
  
  /* Gráfico 02 */
  var ctx = document.getElementById('myChart2');
  var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: [{!! $catLabel !!}],
          datasets: [{
              label: 'Visitas',
              data: [{{ $catTotal }}],
              backgroundColor: [
                  'rgba(255, 99, 132)',
                  'rgba(54, 162, 235)',                         
                  'rgba(255, 159, 64)'
              ]
          }]
      }
  });
  </script>

@include('includes.navAdmin')

<div class="container mt-5">
  <div class="row">
    <div class="py-2 col-12 col-md-4">
      <article class="bg-gradient-green card z-depth-4 ">
        <h2><i class="bi bi-coin"></i></h2>
        <p>Faturamento</p>
        <h3>R$ 123,00</h3>
      </article>
    </div>
    <div class="py-2 col-12 col-md-4">
      <article class="bg-gradient-blue card z-depth-4 ">
        <h2><i class="bi bi-person-circle"></i></h2>
        <p>Usuários</p>
        <h3>34 </h3>
      </article>
    </div>
    <div class="py-2 col-12 col-md-4">
      <article class="bg-gradient-orange card z-depth-4 ">
        <h2><i class="bi bi-cart-fill"></i></h2>
        <p>Pedidos este mês</p>
        <h3>0</h3>
      </article>
    </div>
    <div class="py-2 col-12 col-lg-6">
      <section class="graficos">
        <div class="grafico card z-depth-4">
          <h5 class="center"> Aquisição de usuários</h5>
          <canvas id="myChart" width="400" height="200"></canvas>
        </div>
      </section>
    </div>
    <div class="py-2 col-12 col-lg-6">
      <section class="graficos">
        <div class="grafico card z-depth-4">
          <h5 class="center"> Produtos </h5>
          <canvas id="myChart2" width="400" height="200"></canvas>
        </div>
      </section>
    </div>
  </div>
</div>

@endsection