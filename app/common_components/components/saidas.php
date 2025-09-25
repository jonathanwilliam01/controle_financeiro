<?php
include_once __DIR__ . '/db-operations/consultas.php';
include_once __DIR__ . '/db-operations/inserts.php';
?>

<div class="container">
    <div class="nome-tela">
        <h1>Saídas</h1>
    </div>

    <div class="form-saidas">
        <form method="post" class="formulario">
            <div class="form-row">
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao" placeholder="Descrição do gasto" required>
                </div>
                
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" id="valor" name="valor" step="0.01" min="0" placeholder="R$" required>
                </div>

                <div class="form-group">
                    <label for="origem">Origem:</label>
                    <select id="origem" name="origem" required>
                        <option value="">Selecione...</option>

                        <?php foreach($origens as $ori_dados): ?>
                        <option value="<?php $ori_dados['id_origem']?>"> <?php echo $ori_dados['desc_origem']?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <select id="categoria" name="categoria" required>
                        <option value="">Selecione...</option>

                        <?php foreach($categorias as $cat_dados): ?>
                        <option value="<?php $cat_dados['id_categoria']?>"> <?php echo $cat_dados['desc_categoria']?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" required>
                </div>

                <div class="form-group">
                    <label for="parcelas">Parcelas:</label>
                    <select id="parcelas" name="parcelas" required>
                        <option value="">Selecione...</option>
                        <option value="">Selecione...</option>
                    </select>
                </div>
            </div>
                        
            <div class="form-actions">
                <button type="reset" class="btn-limpar" name="salvar_saida">🗑️ Limpar</button>
                <button type="submit" class="btn-salvar">💾 Salvar Saída</button>
            </div>
        </form>
    </div>

    <div class="saidas_cad">
        <div class="table-header">
            <h2>Últimas Saídas Cadastradas</h2>
            <div class="table-actions">
                <button class="btn-exportar">📊 Exportar</button>
                <button class="btn-filtrar">🔍 Filtrar</button>
            </div>
        </div>
        
        <table class="tabela-saidas">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Valor (R$)</th>
                    <th>Observação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>15/03/2024</td>
                    <td>Supermercado</td>
                    <td>Alimentação</td>
                    <td>R$ 250,00</td>
                    <td>Compra do mês</td>
                    <td>
                        <button class="btn-editar">✏️</button>
                        <button class="btn-excluir">❌</button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><strong>Total:</strong></td>
                    <td><strong>R$ 1.630,00</strong></td>
                    <td colspan="2"></td>
                </tr>
            </tfoot>
        </table>
        
        <div class="table-info">
            <span>Mostrando 3 de 15 registros</span>
            <div class="pagination">
                <button>⟨</button>
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button>⟩</button>
            </div>
        </div>
    </div>
</div>

<style>
.form-saidas {
    background: rgba(255,255,255,0.05);
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 30px;
}

.formulario {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-row {
    display: flex;
    gap: 20px;
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.form-group.full-width {
    flex: 0 0 100%;
}

label {
    margin-bottom: 5px;
    font-weight: 500;
    color: #ddd;
}

input, select, textarea {
    padding: 7px;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 5px;
    background: rgba(255,255,255,0.1);
    color: white;
    font-size: 14px;
}

option{
    color:black;
}

input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: #ff4d4d;
    background: rgba(255,255,255,0.15);
}

.form-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
    margin-top: 10px;
}

.btn-salvar, .btn-limpar, .btn-exportar, .btn-filtrar {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-salvar {
    background: #28a745;
    color: white;
}

.btn-limpar {
    background: #6c757d;
    color: white;
}

.btn-salvar:hover {
    background: #218838;
}

.btn-limpar:hover {
    background: #5a6268;
}

/* Estilos da Tabela */
.saidas_cad {
    background: rgba(255,255,255,0.05);
    padding: 15px;
    border-radius: 8px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.table-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.table-actions {
    display: flex;
    gap: 10px;
}

.btn-exportar, .btn-filtrar {
    background: #9c1515ff;
    color: white;
    padding: 8px 15px;
    font-size: 14px;
    border: 1px solid black;;
}

.btn-exportar:hover, .btn-filtrar:hover{
    background: #c92828ff;
} 

.tabela-saidas {
    width: 100%;
    border-collapse: collapse;
    background: rgba(255,255,255,0.02);
    border-radius: 5px;
    overflow: hidden;
    color:white;
}

.tabela-saidas th,
.tabela-saidas td {
    padding: 9px;
    text-align: left;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.tabela-saidas th {
    background: rgba(180, 2, 2, 0.3);
    font-weight: 600;
}

.tabela-saidas tbody tr:hover {
    background: rgba(255,255,255,0.05);
}

.tabela-saidas tfoot {
    background: rgba(180, 2, 2, 0.2);
    font-weight: bold;
}

.btn-editar, .btn-excluir {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 16px;
    padding: 5px;
    border-radius: 3px;
    transition: all 0.3s ease;
}

.btn-editar:hover {
    background: rgba(255,193,7,0.2);
}

.btn-excluir:hover {
    background: rgba(220,53,69,0.2);
}

.table-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
    padding: 10px;
    background: rgba(255,255,255,0.05);
    border-radius: 5px;
}

.pagination {
    display: flex;
    gap: 5px;
}

.pagination button {
    padding: 5px 10px;
    border: 1px solid rgba(255,255,255,0.2);
    background: rgba(255,255,255,0.1);
    color: white;
    cursor: pointer;
    border-radius: 3px;
}

.pagination button.active {
    background: #ff4d4d;
    border-color: #ff4d4d;
}

.pagination button:hover {
    background: rgba(255,255,255,0.2);
}

/* Responsividade */
@media (max-width: 1200px) {
    .form-row {
        flex-direction: column;
        gap: 10px;
    }
    
    .tabela-saidas {
        font-size: 14px;
    }
    
    .tabela-saidas th,
    .tabela-saidas td {
        padding: 8px;
    }
}
</style>