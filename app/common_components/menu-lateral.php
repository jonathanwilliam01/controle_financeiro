    <button class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
    </button>

    <div class="container-menu-lateral" id="menuLateral">
        <a href='' style="all:unset; cursor: pointer;"> 
            <div class="logo">
                <i class="fas fa-chart-line"></i>
                <h1>Finanças</h1>
            </div>
        </a>
        <div class="options">
            <form method="post">
                <button class="opcao " name="dashboard" type="submit">
                    <i class="fa-solid fa-grip"></i>
                    <span>Dashboard</span>
                </button>
                <button class="opcao " name="entradas" type="submit">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Entradas</span>
                </button>
                <button class="opcao " name="saidas" type="submit">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Saídas</span>
                </button>
                <button class="opcao " name="metas" type="submit">
                    <i class="fas fa-bullseye"></i>
                    <span>Metas</span>
                </button>
                <button class="opcao " name="relatorios" type="submit">
                    <i class="fas fa-chart-bar"></i>
                    <span>Relatórios</span>
                </button>
                <button class="opcao " name="configuracoes" type="submit">
                    <i class="fas fa-cog"></i>
                    <span>Configurações</span>
                </button>
            </form>
        </div>

        <div class="user-area">
            <div class="user-avatar">U</div>
            <div class="user-info">
                <div class="user-name">Usuário</div>
                <div class="user-role">Administrador</div>
            </div>
        </div>
    </div>

        <style>
        .container-menu-lateral {
            background: linear-gradient(180deg, #3a3a3a 0%, #2a2a2a 100%);
            height: 100vh;
            width: 250px;
            border-radius: 0 12px 12px 0;
            display: flex;
            flex-direction: column;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            left: 0;
            top: 0;
            z-index: 100;
            transition: width 0.3s ease;
        }

        .logo {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo h1 {
            color: white;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .logo i {
            margin-right: 10px;
            font-size: 24px;
            color: #ff4d4d;
        }

        .options {
            flex: 1;
            padding: 0 15px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .opcao {
            width: 100%;
            height: 50px;
            border-radius: 8px;
            background-color: transparent;
            border: none;
            font-size: 18px;
            color: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            padding: 0 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: left;
        }

        .opcao i {
            margin-right: 15px;
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .opcao:hover {
            background-color: rgba(180, 2, 2, 0.3);
            color: white;
            transform: translateX(5px);
        }

        .opcao.active {
            background-color: rgba(180, 2, 2, 0.65);
            color: white;
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .user-area {
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            color: white;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ff4d4d;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: bold;
        }

        .user-info {
            flex: 1;
        }

        .user-name {
            font-size: 14px;
            font-weight: 500;
        }

        .user-role {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
        }

        .menu-toggle {
            display: none;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 101;
            background: #3a3a3a;
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .content {
            flex: 1;
            padding: 30px;
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container-menu-lateral {
                width: 70px;
                overflow: hidden;
            }

            .container-menu-lateral.expanded {
                width: 250px;
            }

            .logo h1, .opcao span, .user-info {
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .container-menu-lateral.expanded .logo h1,
            .container-menu-lateral.expanded .opcao span,
            .container-menu-lateral.expanded .user-info {
                opacity: 1;
            }

            .menu-toggle {
                display: block;
            }

            .content {
                margin-left: 70px;
            }

            .container-menu-lateral.expanded + .content {
                margin-left: 250px;
            }
        }

        @media (max-width: 480px) {
            .container-menu-lateral {
                width: 0;
            }

            .container-menu-lateral.expanded {
                width: 100%;
                border-radius: 0;
            }

            .content {
                margin-left: 0;
            }

            .container-menu-lateral.expanded + .content {
                margin-left: 0;
            }
        }
    </style>

    <script>
        // Funcionalidade para alternar menu em dispositivos móveis
        const menuToggle = document.getElementById('menuToggle');
        const menuLateral = document.getElementById('menuLateral');
        
        menuToggle.addEventListener('click', function() {
            menuLateral.classList.toggle('expanded');
        });

        // Funcionalidade para selecionar opções do menu
        const opcoes = document.querySelectorAll('.opcao');
        
        opcoes.forEach(opcao => {
            opcao.addEventListener('click', function() {

                opcoes.forEach(o => o.classList.remove('active'));

                this.classList.add('active');
                
                if (window.innerWidth <= 768) {
                    menuLateral.classList.remove('expanded');
                }
            });
        });
    </script>
