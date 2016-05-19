<form action="../controllers/partner_controller<?php echo (isset($partner)) ? '?id='.$partner->id : ''; ?>" method="POST" enctype="multipart/form-data" class="s-form">
    <div class="msg-fixed warning" id="top-msg">Os campos com * são obrigatórios.</div>
    <div class="field has-label">
        <label for="name">Nome*</label>
        <input type="text" name="name" id="name" value="<?php echo (isset($partner)) ? $partner->name : ''; ?>" required>
    </div>
    <div class="field has-label">
        <label for="description">Descrição*</label>
        <input type="text" name="description" id="description" value="<?php echo (isset($partner)) ? $partner->description : ''; ?>" required>
    </div>
    <div class="btn-pair">
        <a href="partners" class="btn cancel">Voltar</a>
        <button name="action" value="store" type="submit" class="btn send">Salvar</button>
    </div>
</form>
