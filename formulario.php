<form>
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>" /
    <ul class="noticias-list">
    <label>
    <fieldset>
        <legend>Nova tarefa</legend>
        <label>
            Tarefa:<br />
            <input type="text" name="nome"
            value="<?php echo $tarefa['nome']; ?>" /><br />

        </label>

        <label>
            Descricao (Opcional):<br />
            <textarea name="descricao">
                <?php echo $tarefa['descricao']; ?>
            </textarea><br />
        </label>
        <label>
            Prazo(Opcional)<br />
            <input type="text" name="prazo"
            value="<?php
                echo traduz_data_para_exibir($tarefa['prazo']);
            ?>" /><br />

        </label>
        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="1"
                    <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : '';
                       ?>/> baixa
                <input type="radio" name="prioridade" value="2"
                    <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : '';
                    ?>    />  Media
                <input type="radio" name="prioridade" value="3"
                <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : '';
                ?> /> Alta
            </label>
        </fieldset>
        <label>
            Tarefas concluidas:
            <input type="checkbox" name="concluida" value="1"
                <?php echo ($tarefa['concluida'] == 1) ? 'checked' : '';
                ?>                />

            <?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?>
        </label>
        <input type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?> ">
    </fieldset>
    </label>
    </ul>
</form>