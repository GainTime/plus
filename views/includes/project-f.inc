<form action="../controllers/project_controller<?php echo (isset($project)) ? '?id='.$project->id : ''; ?>" method="POST" enctype="multipart/form-data" class="s-form">
    <div class="msg-fixed warning" id="top-msg">Os campos com * são obrigatórios.</div>
    <div class="field has-label">
        <label for="title">Nome*</label>
        <input type="text" name="title" id="title" value="<?php echo (isset($project)) ? $project->title : ''; ?>" required>
    </div>
    <div class="field has-label">
        <label for="description">Descrição*</label>
        <input type="text" name="description" id="description" value="<?php echo (isset($project)) ? $project->description : ''; ?>" required>
    </div>
    <div class="btn-pair">
        <a href="projects" class="btn cancel">Voltar</a>
        <button name="action" value="store" type="submit" class="btn send">Salvar</button>
    </div>
</form>
