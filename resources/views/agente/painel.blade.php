<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel inicial</title>
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
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
    height: 45px;
    width: 45px;
    cursor:pointer;
}
 .logo img{
            width: 100%;
            height: 100%;  
            border-radius: 100px; 
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
            border-right: 1px solid #edebe9;
            padding: 8px 0;
        }

        .sidebar ul {
            list-style: none;
            padding-top: 10px;
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

        .sidebar li a {
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
            overflow-y: auto;
            padding: 24px;
            background-color: white;
            display: flex;
            flex: 1; 
            transition: all 0.3s ease;
            min-width: 0;
        }

        .content-left {
            flex: 1;
            padding-right: 0;
            transition: padding-right 0.3s ease;
            width: 100%; 
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
        }

        .table-header {
            display: flex;
            padding: 12px 16px;
            background: #fafafa;
            font-weight: 600;
            font-size: 14px;
            color: #323130;
            margin-left: 3px;
            border-bottom: 1px solid #edebe9;
        }

        .col-name {
            flex: 1.3
        }

        .col-file {
            flex: 1.2
        }

        .col-owner {
            flex: 1.1
        }

        .col-templates {
            flex: 0.5
        }

        .table-row {
            display: flex;
            padding: 12px 16px;
            border-bottom: 1px solid #edebe9;
            cursor: pointer;
            font-size: 14px;
            align-items: center;
            transition: background-color 0.2s;
        }

        .table-row.selected {
            background: #e1dfdd;
        }

        .table-row:hover {
            background-color: #f5f3f2ff;
        }
        .table-row.selected:hover {
            background-color: #edebe9;

        }

        .col {
            color: #323130;
            padding: 0 4px;
        }

        .details-panel {

            position: sticky;
            top: 0;
            z-index: 100;
            width: 400px;
            background: white;
            border: 1px solid #edebe9;
            border-radius: 4px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.192);
            display: none;
        }

        .details-title {
            font-size: 18px;
            font-weight: 600;
            color: #8E24AA;
            margin-bottom: 16px;
        }

        .detail-group {
            margin-bottom: 20px;
        }

        .detail-label {
            font-size: 12px;
            font-weight: 600;
            color: #605e5c;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .detail-text {
            font-size: 14px;
            color: #323130;
            padding: 8px 0;
            line-height: 1.4;
            word-break: break-word;
        }

        .checkbox-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 4px 0;
        }

        .checkbox input {
            accent-color: #107c10;
            width: 16px;
            height: 16px;
        }

        .domain-pub {
            display: flex;
            justify-content: space-between;
            margin-top: 8px;
        }

        .sub-detail {
            margin-left: 16px;
            border-left: 1px solid #edebe9;
            padding-left: 12px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #f3f2f1;
            border-radius: 4px;
            overflow: hidden;
            margin-top: 4px;
        }

        .progress-fill {
            height: 100%;
            background: #c8c6c4;
            width: 50%;
        }

        .checkbox {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #323130;
        }

        .checkbox input {
            margin-right: 8px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background: #107c10;
            border-radius: 50%;
            margin-left: 4px;
        }

        .c-status-btn {
            font-size: 19px;
        }

        .footer {
            height: 32px;
            background-color: #fff;
            border-top: 1px solid #edebe9;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0 24px;
            font-size: 12px;
            color: #605e5c;
        }

        .close-btn {
            position: absolute;
            top: 8px;
            right: 8px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #605e5c;
        }

        .close-btn:hover {
            color: #323130;
        }

        .content-left.with-padding {
            padding-right: 24px;
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="../img/bnd.png" alt="bnd">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisa pelo Nº Processo, BI ou passaporte">
            <button id="btnsearch">Pesquisar</button>
        </div>
        <div class="header-actions">
            <button class="c-status-btn" title="Notificações"> <i class='bx  bxs-menu-notification'
                    style='color:#020202'></i> </button>
            <button class="c-status-btn" title="Perfil"><i class='bx  bxs-user' style='color:#242424'></i> </button>
        </div>
    </header>

    <div class="main-container">
        <nav class="sidebar">
            <ul>

                <li data-section="queries">Início</li>
                <li data-section="config">Meus Casos</li>
                <li data-section="defender" class="active">Processos</li>
                <li data-section="workbooks">Relatorios</li>
                <li data-section="media">Rigistar Ocorrência</li>
                <li data-section="threat">Detalhes da Unidade</li>
                <li data-section="worktools">Configurações Central</li>
            </ul>
        </nav>

        <main class="main-content">

            <div class="content-left">
                <div class="content-panel">
                    <h1 class="content-header">Processo criminais</h1>
                    <p class="content-text">Acompanhe os novos processos abaixo. Reigistra um novo processo ou escrever
                        um relatório e reencaminhar aos supervisores.</p>
                </div>
                <div class="tabs">
                    <div class="tab active">Casos recentes</div>
                    <div class="tab">Mês passado</div>
                </div>


                <div class="templates-section">
                    <div class="table-header">
                        <div class="col-name">Nº Processo</div>
                        <div class="col-file">Título</div>
                        <div class="col-owner">Estado</div>
                        <div class="col-templates">Data</div>
                    </div>
                    <div class="table-row" data-item="analytics">
                        <div class="col col-name">P_Nº1234565630</div>
                        <div class="col col-file">Corrupção</div>
                        <div class="col col-owner">Em andamento</div>
                        <div class="col col-templates">20/01/2025</div>
                    </div>
                    <div class="table-row" data-item="analytics">
                        <div class="col col-name">P_Nº1234567890</div>
                        <div class="col col-file">Roubo de viaura</div>
                        <div class="col col-owner">Arquivado</div>
                        <div class="col col-templates">20/11/2025</div>
                    </div>
                    <div class="table-row" data-item="analytics">
                        <div class="col col-name">P_Nº1234560004</div>
                        <div class="col col-file">Atentado Terrorista</div>
                        <div class="col col-owner">Arquivado</div>
                        <div class="col col-templates">12/07/2025</div>
                    </div>
                    <div class="table-row" data-item="analytics">
                        <div class="col col-name">P_Nº1234567121</div>
                        <div class="col col-file">Vandalismo</div>
                        <div class="col col-owner">Na Justiça</div>
                        <div class="col col-templates">05/03/2025</div>
                    </div>
                </div>
            </div>

            <aside class="details-panel">
                <button class="close-btn"><i class='bx bx-x'></i></button>
                <div class="details-title">Nº do Processo</div>
                <div class="detail-text">
                    <strong>P_Nº1234567890</strong><br>
                </div>
                <div class="detail-group">

                    <div class="detai-text">
                        Roubo de viatura - Viana, Luanda
                    </div>
                </div>


                <div class="detail-group">
                    <div class="domain-pub">
                        <div class="sub-detail">
                            <div class="detail-label">Data Registro</div>
                            <div class="detail-text">20/11/2025</div>
                        </div>

                    </div>
                </div>

                <div class="detail-group">
                    <div class="detail-label">Resumo dos Factos</div>
                    <div class="detail-text"
                        style="background: #fafafa; padding: 10px; border-radius: 4px; border: 1px solid #edebe9;">
                        Ocorrência registada às 14h. Viatura Toyota Hilux subtraída sob coação. Diligências em curso
                        para localização do suspeito.
                    </div>
                </div>

                <div class="detail-group" style="margin-top: 30px; border-top: 1px solid #edebe9; padding-top: 15px;">
                    <div class="detail-label">Responsável</div>
                    <div class="detail-text">Inspetor Manuel Domingos</div>

                    <div class="detail-text"><a href="">ver processo</a></div>

                </div>
            </aside>
        </main>

    </div>

    <script>
        const detailsPanel = document.querySelector('.details-panel');
        const closeBtn = document.querySelector('.close-btn');
        const contentLeft = document.querySelector('.content-left');

        document.querySelectorAll('.table-row').forEach(row => {
            row.addEventListener('click', () => {
                document.querySelectorAll('.table-row').forEach(r => r.classList.remove('selected'));
                row.classList.add('selected');
                detailsPanel.style.display = 'block';
                contentLeft.classList.add('with-padding');
            });
        });

        closeBtn.addEventListener('click', () => {
            detailsPanel.style.display = 'none';
            document.querySelectorAll('.table-row').forEach(r => r.classList.remove('selected'));
            contentLeft.classList.remove('with-padding');
        });
    </script>
</body>

</html>

