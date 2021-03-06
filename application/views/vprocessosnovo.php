<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 main">
      <h1 class="page-header">Novo Processo</h1>
      <form class="form-group" action="<?=base_url('processos/insere');?>" method="post">

        <?php
          $localizacaosel = set_value('localizacao');

          if (validation_errors() == TRUE) {
            echo '<div class="row">';
            echo '<div class="col-md-4">';
            echo '<div class="alert alert-danger" role="alert">';
            echo validation_errors();
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        ?>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="numero_processo">Número do Processo</label>
              <input type="text" class="form-control" id="numero_processo" name="numero_processo" autofocus
                value="<?=set_value('numero_processo');?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="numero_interno">Número Interno</label>
              <input type="text" class="form-control" id="numero_interno" name="numero_interno"
                value="<?=set_value('numero_interno');?>">
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-4">
            <label for="localizacao">Localização</label>
            <div class="input-group">
              <select class="form-control" id='localizacao' name='localizacao'>
                <?php
                foreach($localizacoes as $row) {
                  echo "<option value='$row->id_localizacoes'";
                  echo $localizacaosel==$row->id_localizacoes?'selected':'';
                  echo ">".$row->descricao."</option>";
                }
                ?>
              </select>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default" name="submit" value="atualizarlocalizacoes">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                </button>
              </span>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="data_abertura">Data (dd/mm/aaaa)</label>
              <input type="text" class="form-control" id="data_abertura" name="data_abertura"
                value="<?=set_value('data_abertura');?>">
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="valor_causa">Valor da Causa</label>
              <input type="number" step="0.01" class="form-control" id="valor_causa" name="valor_causa" value="0">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <textarea class="form-control" id="descricao" name="descricao"><?=set_value('descricao');?></textarea>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" name="submit" value="inserir">Inserir</button>

      </form>
    </div>
  </div>
</div>
