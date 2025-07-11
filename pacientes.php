<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Pacientes - Prontuário+</title>
  <link rel="stylesheet" href="./css/dashboard.css">
  <link rel="stylesheet" href="./css/pacientes.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<div class="sidebar">
  <img src="./img/logo-branco.png" alt="Logo Prontuário+" class="logo">
  <nav>
    <a href="dashboard.php" title="Dashboard"><i class="bi bi-house-door-fill"></i></a>
    <a href="pacientes.php" title="Pacientes"><i class="bi bi-people-fill"></i></a>
    <a href="ajuda.php" title="Ajuda"><i class="bi bi-question-circle-fill"></i></a>
    <a href="seguranca.php" title="Segurança"><i class="bi bi-shield-lock-fill"></i></a>
    <a href="logout.php" title="Sair"><i class="bi bi-power"></i></a>
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
    <div class="patients-container">
      <div class="patients-header">
        <h1><i class="bi bi-people-fill"></i> Gerenciamento de Pacientes</h1>
        <button class="btn-primary" onclick="window.location.href='adicionar-paciente.php'">
          <i class="bi bi-plus-circle"></i> Novo Paciente
        </button>
      </div>

      <!-- Barra de pesquisa e filtros -->
      <div class="search-filters">
        <div class="search-box">
          <i class="bi bi-search"></i>
          <input type="text" id="searchInput" placeholder="Pesquisar por nome, CPF ou telefone..." onkeyup="filterPatients()">
        </div>
        <div class="filters">
          <select id="filterAge" onchange="filterPatients()">
            <option value="">Todas as idades</option>
            <option value="crianca">Crianças (0-12)</option>
            <option value="adolescente">Adolescentes (13-17)</option>
            <option value="adulto">Adultos (18-59)</option>
            <option value="idoso">Idosos (60+)</option>
          </select>
          <select id="filterGender" onchange="filterPatients()">
            <option value="">Todos os gêneros</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
        </div>
      </div>

      <!-- Estatísticas rápidas -->
      <div class="stats-row">
        <div class="stat-card">
          <div class="stat-icon">
            <i class="bi bi-people"></i>
          </div>
          <div class="stat-info">
            <h3 id="totalPatients">350</h3>
            <p>Total de Pacientes</p>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon">
            <i class="bi bi-person-plus"></i>
          </div>
          <div class="stat-info">
            <h3>12</h3>
            <p>Novos este mês</p>
          </div>
        </div>
        <div class="stat-card">
          <div class="stat-icon">
            <i class="bi bi-calendar-check"></i>
          </div>
          <div class="stat-info">
            <h3>45</h3>
            <p>Consultas hoje</p>
          </div>
        </div>
      </div>

      <!-- Lista de pacientes -->
      <div class="patients-list">
        <div class="list-header">
          <h2>Lista de Pacientes</h2>
          <div class="view-options">
            <button class="view-btn active" onclick="toggleView('grid')">
              <i class="bi bi-grid-3x3-gap"></i>
            </button>
            <button class="view-btn" onclick="toggleView('list')">
              <i class="bi bi-list"></i>
            </button>
          </div>
        </div>

        <!-- Visualização em grid (padrão) -->
        <div id="gridView" class="patients-grid">
            
          <!-- Paciente 1 -->
          <div class="patient-card" data-name="Maria Silva Santos" data-age="65" data-gender="F">
            <div class="patient-header">
              <div class="patient-avatar">
                <i class="bi bi-person-circle"></i>
              </div>
              <div class="patient-basic-info">
                <h3>Maria Silva Santos</h3>
                <p>65 anos • Feminino</p>
              </div>
            </div>
            <div class="patient-details">
              <div class="detail-row">
                <i class="bi bi-telephone"></i>
                <span>(11) 98765-4321</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-card-text"></i>
                <span>123.456.789-10</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-calendar-event"></i>
                <span>Última consulta: 05/07/2025</span>
              </div>
            </div>
            <div class="patient-actions">
              <button class="btn-view" onclick="viewPatient(1)" title="Visualizar">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn-edit" onclick="editPatient(1)" title="Editar">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="btn-delete" onclick="deletePatient(1)" title="Excluir">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>

          <!-- Paciente 2 -->
          <div class="patient-card" data-name="João Oliveira Costa" data-age="42" data-gender="M">
            <div class="patient-header">
              <div class="patient-avatar">
                <i class="bi bi-person-circle"></i>
              </div>
              <div class="patient-basic-info">
                <h3>João Oliveira Costa</h3>
                <p>42 anos • Masculino</p>
              </div>
            </div>
            <div class="patient-details">
              <div class="detail-row">
                <i class="bi bi-telephone"></i>
                <span>(11) 99876-5432</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-card-text"></i>
                <span>987.654.321-00</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-calendar-event"></i>
                <span>Última consulta: 08/07/2025</span>
              </div>
            </div>
            <div class="patient-actions">
              <button class="btn-view" onclick="viewPatient(2)" title="Visualizar">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn-edit" onclick="editPatient(2)" title="Editar">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="btn-delete" onclick="deletePatient(2)" title="Excluir">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>

          <!-- Paciente 3 -->
          <div class="patient-card" data-name="Ana Paula Ferreira" data-age="28" data-gender="F">
            <div class="patient-header">
              <div class="patient-avatar">
                <i class="bi bi-person-circle"></i>
              </div>
              <div class="patient-basic-info">
                <h3>Ana Paula Ferreira</h3>
                <p>28 anos • Feminino</p>
              </div>
            </div>
            <div class="patient-details">
              <div class="detail-row">
                <i class="bi bi-telephone"></i>
                <span>(11) 97654-3210</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-card-text"></i>
                <span>456.789.123-45</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-calendar-event"></i>
                <span>Última consulta: 10/07/2025</span>
              </div>
            </div>
            <div class="patient-actions">
              <button class="btn-view" onclick="viewPatient(3)" title="Visualizar">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn-edit" onclick="editPatient(3)" title="Editar">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="btn-delete" onclick="deletePatient(3)" title="Excluir">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>

          <!-- Paciente 4 -->
          <div class="patient-card" data-name="Carlos Eduardo Lima" data-age="75" data-gender="M">
            <div class="patient-header">
              <div class="patient-avatar">
                <i class="bi bi-person-circle"></i>
              </div>
              <div class="patient-basic-info">
                <h3>Carlos Eduardo Lima</h3>
                <p>75 anos • Masculino</p>
              </div>
            </div>
            <div class="patient-details">
              <div class="detail-row">
                <i class="bi bi-telephone"></i>
                <span>(11) 96543-2109</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-card-text"></i>
                <span>789.123.456-78</span>
              </div>
              <div class="detail-row">
                <i class="bi bi-calendar-event"></i>
                <span>Última consulta: 02/07/2025</span>
              </div>
            </div>
            <div class="patient-actions">
              <button class="btn-view" onclick="viewPatient(4)" title="Visualizar">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn-edit" onclick="editPatient(4)" title="Editar">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="btn-delete" onclick="deletePatient(4)" title="Excluir">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Visualização em lista -->
        <div id="listView" class="patients-table" style="display: none;">
          <table>
            <thead>
              <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Gênero</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Última Consulta</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Maria Silva Santos</td>
                <td>65</td>
                <td>Feminino</td>
                <td>(11) 98765-4321</td>
                <td>123.456.789-10</td>
                <td>05/07/2025</td>
                <td>
                  <button class="btn-view" onclick="viewPatient(1)" title="Visualizar">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="btn-edit" onclick="editPatient(1)" title="Editar">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn-delete" onclick="deletePatient(1)" title="Excluir">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>João Oliveira Costa</td>
                <td>42</td>
                <td>Masculino</td>
                <td>(11) 99876-5432</td>
                <td>987.654.321-00</td>
                <td>08/07/2025</td>
                <td>
                  <button class="btn-view" onclick="viewPatient(2)" title="Visualizar">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="btn-edit" onclick="editPatient(2)" title="Editar">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn-delete" onclick="deletePatient(2)" title="Excluir">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>Ana Paula Ferreira</td>
                <td>28</td>
                <td>Feminino</td>
                <td>(11) 97654-3210</td>
                <td>456.789.123-45</td>
                <td>10/07/2025</td>
                <td>
                  <button class="btn-view" onclick="viewPatient(3)" title="Visualizar">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="btn-edit" onclick="editPatient(3)" title="Editar">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn-delete" onclick="deletePatient(3)" title="Excluir">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>Carlos Eduardo Lima</td>
                <td>75</td>
                <td>Masculino</td>
                <td>(11) 96543-2109</td>
                <td>789.123.456-78</td>
                <td>02/07/2025</td>
                <td>
                  <button class="btn-view" onclick="viewPatient(4)" title="Visualizar">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="btn-edit" onclick="editPatient(4)" title="Editar">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn-delete" onclick="deletePatient(4)" title="Excluir">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</div>

<script>

// Função para filtrar pacientes
function filterPatients() {
  const searchInput = document.getElementById('searchInput').value.toLowerCase();
  const ageFilter = document.getElementById('filterAge').value;
  const genderFilter = document.getElementById('filterGender').value;
  const patientCards = document.querySelectorAll('.patient-card');

  patientCards.forEach(card => {
    const name = card.dataset.name.toLowerCase();
    const age = parseInt(card.dataset.age);
    const gender = card.dataset.gender;
    
    let showCard = true;

    // Filtro de pesquisa
    if (searchInput && !name.includes(searchInput)) {
      showCard = false;
    }

    // Filtro de idade
    if (ageFilter) {
      switch (ageFilter) {
        case 'crianca':
          if (age > 12) showCard = false;
          break;
        case 'adolescente':
          if (age < 13 || age > 17) showCard = false;
          break;
        case 'adulto':
          if (age < 18 || age > 59) showCard = false;
          break;
        case 'idoso':
          if (age < 60) showCard = false;
          break;
      }
    }

    // Filtro de gênero
    if (genderFilter && gender !== genderFilter) {
      showCard = false;
    }

    card.style.display = showCard ? 'block' : 'none';
  });
}

// Função para alternar entre visualizações
function toggleView(view) {
  const gridView = document.getElementById('gridView');
  const listView = document.getElementById('listView');
  const viewButtons = document.querySelectorAll('.view-btn');

  viewButtons.forEach(btn => btn.classList.remove('active'));

  if (view === 'grid') {
    gridView.style.display = 'grid';
    listView.style.display = 'none';
    viewButtons[0].classList.add('active');
  } else {
    gridView.style.display = 'none';
    listView.style.display = 'block';
    viewButtons[1].classList.add('active');
  }
}

// Funções CRUD
function viewPatient(id) {
  window.location.href = `visualizar-paciente.php?id=${id}`;
}

function editPatient(id) {
  window.location.href = `editar-paciente.php?id=${id}`;
}

function deletePatient(id) {
  if (confirm('Tem certeza que deseja excluir este paciente? Esta ação não pode ser desfeita.')) {
    window.location.href = `excluir-paciente.php?id=${id}`;
  }
}
</script>


</body>
</html>