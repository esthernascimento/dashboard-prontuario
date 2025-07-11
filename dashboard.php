<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Prontuário+</title>
  <link rel="stylesheet" href="./css/dashboard.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="sidebar">
  <img src="./img/logo-branco.png" alt="Logo Prontuário+" class="logo">
  <nav>
    <a href="#"><i class="bi bi-house-door-fill"></i></a>
    <a href="#"><i class="bi bi-people-fill"></i></a>
    <a href="#"><i class="bi bi-question-circle-fill"></i></a>
    <a href="#"><i class="bi bi-shield-lock-fill"></i></a>
    <a href="logout.php"><i class="bi bi-power"></i></a>
  </nav>
</div>

<div class="main-dashboard-wrapper">
  <header class="header">
    <div class="user-info">
      <img src="./img/julia.png" alt="Foto da Dra. Júlia">
      <span>Dra. Júlia Marcelli</span>
    </div>
  </header>

  <main class="main-dashboard">
    <h1>OVERVIEW</h1>

    <div class="metrics">
      <div class="metric-card">Adm cadastrados<br><strong>5</strong></div>
      <div class="metric-card">Pacientes cadastrados<br><strong>350</strong></div>
      <div class="metric-card">Exames pendentes<br><strong>104</strong></div>
    </div>

    <div class="content-wrapper">
        <div id="bar-chart-container" class="chart-container">
            <canvas id="graficoBarras"></canvas>
        </div>
        <div id="line-chart-container" class="chart-container">
            <canvas id="graficoLinha"></canvas>
        </div>
        
        <div class="info-cards-container">
            <div class="info-card">
              <h3>Índice de gênero</h3>
              <div style="width: 120px; height: 120px;">
                <canvas id="graficoDonutGenero"></canvas>
              </div>
            </div>
            <div class="info-card">
                <h3>75% IDOSOS</h3>
            </div>
            <div class="info-card">
                <h3>UBS cadastradas</h3>
                <strong>10</strong>
            </div>
            <div class="info-card">
              <h3>A cada 10 usuários:</h3>
              <p>7 são mulheres<br>3 são homens<br>8 são idosos</p>
            </div>
        </div>
    </div>
  </main>
</div>

<script>
const textColor = '#555'; // Cor padrão para os textos dos gráficos

// Gráfico de barras
new Chart(document.getElementById('graficoBarras'), {
    type: 'bar',
    data: {
        labels: ['Usuários', 'Mulheres', 'Homens'],
        datasets: [{
            label: 'Usuários',
            data: [260, 230, 110],
            backgroundColor: '#0023A0', // Cor da barra
            borderRadius: 5
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // Essencial para o container controlar a altura
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: { color: textColor } // MUDANÇA AQUI
            },
            x: {
                ticks: { color: textColor } // MUDANÇA AQUI
            }
        }
    }
});

// Gráfico de linha
new Chart(document.getElementById('graficoLinha'), {
    type: 'line',
    data: {
        labels: ['Grupo A', 'Grupo B', 'Grupo C'],
        datasets: [
          { label: 'Mulheres', data: [18, 24, 27], borderColor: '#339CFF', backgroundColor: '#339CFF' },
          { label: 'Homens', data: [22, 25, 30], borderColor: '#888', backgroundColor: '#888' }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: { ticks: { color: textColor } }, // MUDANÇA AQUI
            x: { ticks: { color: textColor } }  // MUDANÇA AQUI
        },
        plugins: {
            legend: {
                labels: { color: textColor } // MUDANÇA AQUI
            }
        }
    }
});

// Gráfico de Donut (Gênero)
new Chart(document.getElementById('graficoDonutGenero'), {
    type: 'doughnut',
    data: {
        labels: ['Mulheres', 'Homens'],
        datasets: [{
            data: [67, 33],
            backgroundColor: ['#0033CC', '#B0B0FF'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '70%',
        plugins: {
            legend: { display: false }
        }
    }
});
</script>

</body>
</html>