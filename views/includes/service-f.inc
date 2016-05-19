<form action="../controllers/service_controller<?php echo (isset($service)) ? '?id='.$service->id : ''; ?>" method="POST" enctype="multipart/form-data" class="s-form">
    <div class="msg-fixed warning" id="top-msg">Os campos com * são obrigatórios.</div>
    <div class="field has-label">
        <label for="title">Nome*</label>
        <input type="text" name="title" id="title" value="<?php echo (isset($service)) ? $service->title : ''; ?>" required>
    </div>
    <div class="field has-label">
        <label for="description">Descrição*</label>
        <input type="text" name="description" id="description" value="<?php echo (isset($service)) ? $service->description : ''; ?>" required>
    </div>
    <div class="btn-pair">
        <a href="services" class="btn cancel">Voltar</a>
        <button name="action" value="store" type="submit" class="btn send">Salvar</button>
    </div>
</form>
