    <form action="../controllers/user_controller<?php echo (isset($user)) ? '?id='.$user->id : ''; ?>" method="POST" enctype="multipart/form-data" class="s-form">
        <div class="msg-fixed warning" id="top-msg">Os campos com * são obrigatórios.</div>
        <div class="field has-label">
            <label for="name">Nome*</label>
            <input type="text" name="name" id="name" value="<?php echo (isset($user)) ? $user->name : ''; ?>" required>
        </div>
        <div class="field has-label">
            <label for="email">E-mail*</label>
            <input type="email" name="email" id="email" value="<?php echo (isset($user)) ? $user->email : ''; ?>" required>
        </div>
        <?php if (!isset($user->id)): ?>
        <div class="field has-label">
            <label for="password">Senha*</label>
            <input type="password" name="password" id="password" value="" required>
        </div>
    <?php endif; ?>
        <div>
            <div class="field-mark menot">
                <label>Nível de Acesso *</label>
            </div>
            <label class="radio">
               <input type="radio" name="level" required value="1" <?php echo (isset($user) && $user->level === '1') ? "checked": "";?>> Administrador
            </label>
            <label class="radio">
               <input type="radio" name="level" required value="0" <?php echo (isset($user) && $user->level === '0') ? "checked": "";?>> Usuário
            </label>
        </div>
        <div class="btn-pair">
            <a href="users" class="btn cancel">Voltar</a>
            <button name="action" value="store" type="submit" class="btn send">Salvar</button>
        </div>
    </form>
