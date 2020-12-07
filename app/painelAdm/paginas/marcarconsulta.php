<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Marcar Consulta</h1>
                </div>
            </div>


            <div class="row">
                <div class="col-1 mt-4"> </div>
                <div class="col-3 mt-4"> <img src="app/painelAdm/dist/img/medd.png" alt=""> </div>
                <div class="col-6  mb-3">
                    <!-- formulario -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="inputAddress">Nome Completo do Paciente </label>
                            <input class="form-control" type="text" name="field-name" placeholder="joaquin lopes ....">
                        </div>
                        <div class="row">
                            <div class="form-group  col-md-6">
                                <label for="inputEmail4">RG</label>
                                <input class="form-control rg" type="text" required="required" name="rg" pattern="[0-9]+$" placeholder="9.858.659" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">CPF</label>
                                <input type="text" required="required" name="cpf" pattern="[0-9]+$" class="form-control cpf" placeholder="133.151.154-56" id="inputPassword4">
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group   col-md-6">
                                <label for="inputState">Medicos</label>

                                <select id="inputState" class="form-control">
                                    <option selected>Escolha</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>

                                </select>
                            </div>
                            <div class="form-group   col-md-6">
                                <label for="inputState">Data</label>

                                <select id="inputState" class="form-control">
                                    <option selected>Data</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>

                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-lg btn-block"> Enviar<span class="icon-cheveron-right"></span> </button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /parte do meio -->



</div>
<!-- /.final meio -->