<div class="form-group">
    <label for="nome">Nome Completo</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome']?>" required>
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" value="<?php echo $resultado['email']?>" required>
</div>
<div class="form-group">
    <label for="nome">Usuário</label>
    <input type="text" class="form-control" name="usuario" value="<?php echo $resultado['usuario']?>" required>
</div>
<div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha" style="width: 50%" required>
</div>
<div class="form-group">
    <label class="control-label">Nível de Acesso</label>
    <select class="form-control" name="nivel_acesso_id" style="width: 50%">
        <option>Selecionar</option>
        <option value="Administrativo"
            <?php
            if($resultado['nivel_acesso_id'] == 'Administrativo'){
                echo 'selected';
            }
            ?>
        >Administrativo</option>
        <option value="Usuário"
            <?php
            if($resultado['nivel_acesso_id'] == 'Usuário'){
                echo 'selected';
            }
            ?>
        >Usuário</option>
    </select>
</div>