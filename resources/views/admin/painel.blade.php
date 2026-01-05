<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f3f2f1;
    color: #323130;
    overflow: hidden;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #fff;
    border-bottom: 1px solid #edebe9;
    padding: 0 24px;
    height: 48px;
    position: sticky;
    top: 0;
    z-index: 100;
}

.logo {
    font-size: 20px;
    font-weight: bold;
    color: #0078d4;
}

.search-bar {
    flex: 1;
    display: flex;
    max-width: 550px;
    margin: 0 24px;
}

.search-bar input {
    width: 80%;
    padding: 8px 12px;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    font-size: 14px;
    outline: none;
    transition: border 0.2s;
}

.search-bar input:focus {
    border: 1px solid #0078d4;

}

.search-bar button {
    width: 17%;
    padding: 8px 12px;
    background-color: #0078d4;
    color: #fff;
    border: 1px solid #edebe9;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
}

.search-bar button:hover {
    background-color: #02599b;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 16px;
}

.header-actions button {
    background: none;
    border: none;
    padding: 8px;
    cursor: pointer;
    border-radius: 4px;
}

.header-actions button:hover {
    background-color: #f3f2f1;
}

.c-status-btn {
font-size: 19px; 
}

.main-container {
    display: flex;
    height: calc(100vh - 48px);
}

.sidebar {
    width: 220px;
    background-color: #f3f3f3;
    height: calc(100vh - 50px);
    position: fixed;
    top: 50px;
    left: 0;
    overflow-y: auto;
    border-right: 1px solid #dad8d6;
    padding: 38px 0;
}

.sidebar ul {
    list-style: none;
}

.sidebar li {
    padding: 12px 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #605e5c;
    border-left: 3px solid transparent;
}
.sidebar li a{
    font-size: 14px;
    color: #605e5c;
    text-decoration: none;
}

.sidebar li:hover {
    background-color: #edebe9;
    color: #323130;
}

.sidebar li.active {
    background-color: #e1dfdd;
    color: #323130;
    border-left-color: #0078d4;
}

.main-content {
    margin-left: 220px;
    height: calc(100vh - 50px);
    flex: 1;
    overflow-y: auto;
    padding: 24px;
    background-color: white;

}

.content-left {
    flex: 1;
    padding-right: 24px;
}

.content-header{
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 8px;
}
.content-text{
    font-size: 16px;
    color: #605e5c;
    margin-bottom: 18px;
}


.tabs {
    display: flex;
    background-color: #fff;
    border-bottom: 1px solid #edebe9;
    padding: 0 24px;
    height: 48px;
    align-items: center;
}

.tab {
    padding: 12px 16px;
    cursor: pointer;
    border-bottom: 2px solid transparent;
    font-size: 14px;
    color: #605e5c;
    margin-right: 24px;
}

.tab.active {
    color: #323130;
    font-weight: 500;
    border-bottom-color: #02599b;
}

.tab:last-child {
    margin-right: 0;
}

.templates-section {
    background: white;
    border: 1px solid #edebe9;
    border-radius: 4px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.table-header, .table-row {
    display: flex; 
    align-items: center;
    padding: 12px 16px;
    border-bottom: 1px solid #edebe9;
    font-size: 14px;
}

.table-header {
    background: #fafafa;
    font-weight: 600;
    color: #323130;
}

.table-row {
    cursor: pointer;
    color: #323130;
}

.table-row:hover {
    background-color: #f3f2f1;
}

.table-row.selected {
    background: #e1dfdd;
}

.c-name      { flex: 2; min-width: 150px; } 
.c-dept      { flex: 1.5; }                 
.c-id        { flex: 1.2; }                   
.c-unit      { flex: 1; }                   
.c-role      { flex: 1.5; }                 
.c-email     { flex: 2; overflow: hidden; text-overflow: ellipsis; }
.c-status    { flex: 0.8; text-align: right; } 
.c-status {
font-size: 16px; 
}

.table-header > div, .table-row > div {
    padding-right: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.table-row {
    display: flex;
    padding: 12px 16px;
    border-bottom: 1px solid #edebe9;
    cursor: pointer;
    font-size: 14px;
    align-items: center;
}

.table-row.selected {
    background: #e1dfdd;
}

.table-row.selected:hover {
    background-color: #edebe9;

}

.col {
    color: #323130;
    padding: 0 4px;
}
.profile {
      display: flex;
      align-items: center;
      gap: 12px
    }

    .profile i {
      font-size: 18px;
      background: var(--accent);
      border:1px solid var(--accent);
      color: #fff;
      width: 42px;
      height: 42px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center
    }

    .profile .name {
      font-size: 14px;
      font-weight: 500
    }
    
    /* Adicionado para SPA sem AJAX */
    .section-content { display: none; }
    .section-content.active { display: block; }
    
    /* Animação de loading simples */
    #loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
    .spinner {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #0078d4;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Estilos adicionais para variar as seções, mantendo tipografia consistente */
    .summary-list {
        list-style: none;
        margin-bottom: 24px;
    }
    .summary-item {
        font-size: 16px;
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid #edebe9;
    }
    .summary-item strong {
        font-weight: 600;
    }
    .log-list {
        list-style: none;
        border: 1px solid #edebe9;
        border-radius: 4px;
        overflow: hidden;
    }
    .log-item {
        padding: 12px 16px;
        border-bottom: 1px solid #edebe9;
        font-size: 14px;
        color: #323130;
    }
    .log-item:last-child {
        border-bottom: none;
    }
    .evidence-list {
        list-style: none;
    }
    .evidence-item {
        margin-bottom: 16px;
        padding: 12px;
        background: #fafafa;
        border: 1px solid #edebe9;
        border-radius: 4px;
    }
    .evidence-item h4 {
        font-size: 16px;
        margin-bottom: 8px;
        font-weight: 600;
    }
    .evidence-item p {
        font-size: 14px;
        color: #605e5c;
        margin: 4px 0;
    }
    .config-list {
        list-style: none;
    }
    .config-item {
        font-size: 14px;
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
    }
    .config-item strong {
        font-weight: 600;
    }
    .api-list {
        list-style: none;
    }
    .api-item {
        margin-bottom: 16px;
        padding: 12px;
        background: #fafafa;
        border: 1px solid #edebe9;
        border-radius: 4px;
    }
    .api-item h4 {
        font-size: 16px;
        margin-bottom: 8px;
        font-weight: 600;
    }
    .api-item p {
        font-size: 14px;
        color: #605e5c;
        margin: 4px 0;
    }


    /* estilos adicionais */



    .identidade-section {
    display: none;
}

.identidade-section.active {
    display: block;
}

button {
    padding: 6px 12px;
    border: none;
    background: #0078d4;
    color: white;
    cursor: pointer;
    border-radius: 4px;
}

    </style>
</head>

<body>

    <header class="header">
        <div class="logo">Sistema de Investigations</div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisa pelo Nº Processo, BI ou passaporte">
            <button id="btnsearch">Pesquisar</button>
        </div>
        <div class="header-actions">
            <button class="c-status-btn" title="Notificações"> <i class='bx  bxs-menu-notification' style='color:#020202'></i> </button>
            <button class="c-status-btn" title="Perfil"><i class='bx  bxs-user' style='color:#242424'></i> </button>
        </div>
    </header>

    <div class="main-container">
        <nav class="sidebar">

            <ul>
                <li onclick="showSection('inicio')" data-section="inicio">Início</li>
                <li onclick="showSection('gestao-identidade')" class="active" data-section="gestao-identidade">Gestão de Identidade</li>
                <li onclick="showSection('gestao-processos')" data-section="gestao-processos">Gestão de processos</li>
                <li onclick="showSection('gestao-evidencias')" data-section="gestao-evidencias">Gestão de evidências</li>
                <li onclick="showSection('logs-atividade')" data-section="logs-atividade">Logs de Atividade</li>
                <li onclick="showSection('backups-restauro')" data-section="backups-restauro">Backups e Restauro</li>
                <li onclick="showSection('integracoes-api')" data-section="integracoes-api">Integrações (API)</li>
                <li onclick="showSection('configuracoes-central')" data-section="configuracoes-central">Configurações Central</li>
            </ul>
        </nav>

        <main class="main-content">
            <!-- Seções pré-carregadas com variações únicas e sérias -->

            <div id="inicio" class="section-content">
                <div class="content-left">
                    <h2 class="content-header">Bem-vindo ao Sistema de Investigations</h2>
                    <p class="content-text">Resumo operacional da Polícia Nacional de Angola. Visualize métricas essenciais para monitoramento diário de atividades investigativas.</p>
                    <ul class="summary-list">
                        <li class="summary-item"><strong>Casos Abertos:</strong> 45</li>
                        <li class="summary-item"><strong>Usuários Ativos no Sistema:</strong> 28</li>
                    </ul>
                    <div class="tabs">
                        <div class="tab active">Resumo Diário</div>
                        <div class="tab">Tendências Semanais</div>
                    </div>
                </div>
            </div>

            <div id="gestao-identidade" class="section-content active">
                <div class="content-left">
                    <div class="content-panel">
                        <h2 class="content-header">Gestão de Identidade</h2>
                        <p class="content-text">Monitorize e gerencie acessos de agentes, com detalhes sobre departamentos e status de credenciais.</p>
                    </div>

                <!-- TABS INTERNAS DA GESTÃO DE IDENTIDADE -->
<div class="tabs">
    <div class="tab active" onclick="openIdentidadeTab('ativos')">Agentes Ativos</div>
    <div class="tab" onclick="openIdentidadeTab('inativos')">Agentes Inativos</div>
    <div class="tab" onclick="openIdentidadeTab('novo')">Novo Agente</div>
</div>

<!-- SUB-SEÇÃO: AGENTES ATIVOS -->
<div id="identidade-ativos" class="identidade-section active">
    <div class="templates-section">
        <div class="table-header">
            <div class="c-name">Nome</div>
            <div class="c-dept">Departamento</div>
            <div class="c-unit">Unidade</div>
            <div class="c-role">Cargo</div>
            <div class="c-status">Ação</div>
        </div>

       @foreach ($agentesAtivos as $agente)
    <div class="table-row">
        <div class="c-name">{{ $agente->nome_completo }}</div>
        <div class="c-dept">{{ $agente->departamento }}</div>
        <div class="c-unit">{{ $agente->unidade }}</div>
        <div class="c-role">{{ $agente->cargo }}</div>
        <div class="c-status">
            <button>Desativar</button>
        </div>
    </div>
@endforeach

    </div>
</div>

<!-- SUB-SEÇÃO: AGENTES INATIVOS -->
<div id="identidade-inativos" class="identidade-section">
    <div class="templates-section">
        <div class="table-header">
            <div class="c-name">Nome</div>
            <div class="c-unit">Unidade</div>
            <div class="c-role">Cargo</div>
            <div class="c-status">Ação</div>
        </div>

       @forelse ($agentesInativos as $agente)
    <div class="table-row">
        <div class="c-name">{{ $agente->nome_completo }}</div>
        <div class="c-unit">{{ $agente->unidade }}</div>
        <div class="c-role">{{ $agente->cargo }}</div>
        <div class="c-status">
            <button>Ativar</button>
        </div>
    </div>
@empty
    <div class="table-row">
        <div class="c-name">Nenhum agente inativo</div>
    </div>
@endforelse

    </div>
</div>

<!-- SUB-SEÇÃO: NOVO AGENTE -->
<div id="identidade-novo" class="identidade-section">
    <form>
        <h3>Criar Novo Agente</h3><br>

        <input type="text" placeholder="Nome completo"><br><br>
        <input type="text" placeholder="NIP / Nº funcional"><br><br>
        <input type="email" placeholder="Email institucional"><br><br>

        <select>
            <option>Unidade</option>
            <option>Viana</option>
            <option>Rangel</option>
        </select><br><br>

        <select>
            <option>Cargo</option>
            <option>Agente</option>
            <option>Inspetor</option>
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>
</div>


                </div>
            </div>

            <div id="gestao-processos" class="section-content">
                <div class="content-left">
                    <h2 class="content-header">Gestão de Processos</h2>
                    <p class="content-text">Registro e acompanhamento de processos investigativos em andamento na Polícia Nacional de Angola.</p>
                    <div class="tabs">
                        <div class="tab active">Processos Ativos</div>
                        <div class="tab">Processos Encerrados</div>
                    </div>
                    <div class="templates-section">
                        <div class="table-header">
                            <div class="c-name">Nº Processo</div>
                            <div class="c-dept">Departamento</div>
                            <div class="c-id">Data de Abertura</div>
                            <div class="c-unit">Responsável</div>
                            <div class="c-role">Progresso</div>
                            <div class="c-status">Status</div>
                        </div>
                        <div class="table-row selected">
                            <div class="c-name">PROC-2026-001</div>
                            <div class="c-dept">Investigação</div>
                            <div class="c-id">2026-01-01</div>
                            <div class="c-unit">João Silva</div>
                            <div class="c-role">50%</div>
                            <div class="c-status"><i class='bx bxs-check-circle' style='color:#18e036'></i></div>
                        </div>
                        <div class="table-row">
                            <div class="c-name">PROC-2025-456</div>
                            <div class="c-dept">Crimes Financeiros</div>
                            <div class="c-id">2025-12-15</div>
                            <div class="c-unit">Maria Antonieta</div>
                            <div class="c-role">20%</div>
                            <div class="c-status"><i class='bx bxs-x-circle' style='color:#e01919'></i></div>
                        </div>
                        <div class="table-row">
                            <div class="c-name">PROC-2026-002</div>
                            <div class="c-dept">Operações Táticas</div>
                            <div class="c-id">2026-01-02</div>
                            <div class="c-unit">Dadinho António</div>
                            <div class="c-role">80%</div>
                            <div class="c-status"><i class='bx bxs-check-circle' style='color:#18e036'></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="gestao-evidencias" class="section-content">
                <div class="content-left">
                    <h2 class="content-header">Gestão de Evidências</h2>
                    <p class="content-text">Catálogo de evidências coletadas, associadas a processos específicos, com detalhes de cadeia de custódia.</p>
                    <div class="tabs">
                        <div class="tab active">Evidências Recentes</div>
                        <div class="tab">Por Processo</div>
                    </div>
                    <ul class="evidence-list">
                        <li class="evidence-item">
                            <h4>EVID-001: Fotografia de Cena do Crime</h4>
                            <p>Tipo: Digital</p>
                            <p>Processo Associado: PROC-2026-001</p>
                            <p>Data de Registro: 2026-01-01</p>
                            <p>Status: Validada</p>
                        </li>
                        <li class="evidence-item">
                            <h4>EVID-002: Documento Confiscado</h4>
                            <p>Tipo: Físico</p>
                            <p>Processo Associado: PROC-2025-456</p>
                            <p>Data de Registro: 2025-12-20</p>
                            <p>Status: Em Análise</p>
                        </li>
                        <li class="evidence-item">
                            <h4>EVID-003: Gravação de Depoimento</h4>
                            <p>Tipo: Áudio</p>
                            <p>Processo Associado: PROC-2026-002</p>
                            <p>Data de Registro: 2026-01-02</p>
                            <p>Status: Arquivada</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="logs-atividade" class="section-content">
                <div class="content-left">
                    <h2 class="content-header">Logs de Atividade</h2>
                    <p class="content-text">Registro cronológico de ações realizadas no sistema para fins de auditoria interna.</p>
                    <div class="tabs">
                        <div class="tab active">Logs Recentes</div>
                        <div class="tab">Por Departamento</div>
                    </div>
                    <ul class="log-list">
                        <li class="log-item">João Silva acessou o processo PROC-2026-001 em 2026-01-02 às 10:00.</li>
                        <li class="log-item">Maria Antonieta atualizou evidência EVID-002 em 2026-01-02 às 11:15.</li>
                        <li class="log-item">Dadinho António registrou tentativa de acesso inválida em 2026-01-02 às 12:30.</li>
                    </ul>
                </div>
            </div>

            <div id="backups-restauro" class="section-content">
                <div class="content-left">
                    <h2 class="content-header">Backups e Restauro</h2>
                    <p class="content-text">Histórico de backups do sistema para garantia de integridade dos dados investigativos.</p>
                    <div class="tabs">
                        <div class="tab active">Backups Recentes</div>
                        <div class="tab">Histórico Completo</div>
                    </div>
                    <div class="templates-section">
                        <div class="table-header">
                            <div class="c-name">ID Backup</div>
                            <div class="c-dept">Tipo</div>
                            <div class="c-id">Data</div>
                            <div class="c-unit">Tamanho</div>
                            <div class="c-status">Status</div>
                        </div>
                        <div class="table-row selected">
                            <div class="c-name">BK-20260101</div>
                            <div class="c-dept">Automático</div>
                            <div class="c-id">2026-01-01</div>
                            <div class="c-unit">5.2 GB</div>
                            <div class="c-status"><i class='bx bxs-check-circle' style='color:#18e036'></i></div>
                        </div>
                        <div class="table-row">
                            <div class="c-name">BK-20260102</div>
                            <div class="c-dept">Manual</div>
                            <div class="c-id">2026-01-02</div>
                            <div class="c-unit">3.8 GB</div>
                            <div class="c-status"><i class='bx bxs-check-circle' style='color:#18e036'></i></div>
                        </div>
                        <div class="table-row">
                            <div class="c-name">BK-20251231</div>
                            <div class="c-dept">Automático</div>
                            <div class="c-id">2025-12-31</div>
                            <div class="c-unit">4.5 GB</div>
                            <div class="c-status"><i class='bx bxs-x-circle' style='color:#e01919'></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="integracoes-api" class="section-content">
                <div class="content-left">
                    <h2 class="content-header">Integrações (API)</h2>
                    <p class="content-text">Monitoramento de conexões com sistemas externos para troca de dados investigativos.</p>
                    <div class="tabs">
                        <div class="tab active">Integrações Ativas</div>
                        <div class="tab">Logs de Conexão</div>
                    </div>
                    <ul class="api-list">
                        <li class="api-item">
                            <h4>API de Inteligência Nacional</h4>
                            <p>Endpoint: https://intel.gov.ao/api</p>
                            <p>Última Sincronização: 2026-01-02 às 09:00</p>
                            <p>Status: Ativa</p>
                        </li>
                        <li class="api-item">
                            <h4>API de Análise Forense</h4>
                            <p>Endpoint: https://forense.gov.ao/api</p>
                            <p>Última Sincronização: 2026-01-01 às 14:30</p>
                            <p>Status: Inativa</p>
                        </li>
                        <li class="api-item">
                            <h4>API de Banco de Dados Nacional</h4>
                            <p>Endpoint: https://nacional.db.ao/api</p>
                            <p>Última Sincronização: 2026-01-02 às 10:45</p>
                            <p>Status: Ativa</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="configuracoes-central" class="section-content">
                <div class="content-left">
                    <h2 class="content-header">Configurações Central</h2>
                    <p class="content-text">Parâmetros globais do sistema para operação segura e eficiente na Polícia Nacional de Angola.</p>
                    <div class="tabs">
                        <div class="tab active">Configurações Gerais</div>
                        <div class="tab">Segurança</div>
                    </div>
                    <ul class="config-list">
                        <li class="config-item"><strong>Tema do Sistema:</strong> Claro</li>
                        <li class="config-item"><strong>Frequência de Notificações:</strong> Diária</li>
                        <li class="config-item"><strong>Nível de Segurança:</strong> Alto</li>
                        <li class="config-item"><strong>Idioma Padrão:</strong> Português</li>
                    </ul>
                </div>
            </div>

        </main>

    </div>

    <footer class="footer">
        <span>&copy; 2025/2026 TI13B</span>
    </footer>

    <!-- Overlay de loading -->
    <div id="loading-overlay">
        <div class="spinner"></div>
    </div>

    <script>
        function showSection(sectionId) {
            // Mostra o loading
            const loading = document.getElementById('loading-overlay');
            loading.style.display = 'flex';

            // Simula um delay breve para o loading (ex: 500ms)
            setTimeout(() => {
                // Remove active da sidebar
                document.querySelectorAll('.sidebar li').forEach(li => li.classList.remove('active'));
                // Adiciona active ao item clicado
                document.querySelector(`.sidebar li[data-section="${sectionId}"]`).classList.add('active');
                // Esconde todas as seções
                document.querySelectorAll('.section-content').forEach(sec => sec.classList.remove('active'));
                // Mostra a selecionada
                document.getElementById(sectionId).classList.add('active');
                // Esconde o loading
                loading.style.display = 'none';
            }, 500); // Ajuste o tempo se quiser mais longo
        }

        // Função para alternar abas na seção de Gestão de Identidade

function openIdentidadeTab(tab) {

    // tabs
    document.querySelectorAll('#gestao-identidade .tab').forEach(t => {
        t.classList.remove('active');
    });

    event.currentTarget.classList.add('active');

    // seções
    document.querySelectorAll('.identidade-section').forEach(sec => {
        sec.classList.remove('active');
    });

    document.getElementById('identidade-' + tab).classList.add('active');
}

    </script>
</body>

</html>
