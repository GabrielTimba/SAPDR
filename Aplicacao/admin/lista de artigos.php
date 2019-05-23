<?php
    include('header.php');
?>
    <div class="container-fluid" id="conteudo">
        
    <div class="row conteudo-dir pt-4">
            <h5 class="ml-3">Artigos</h5>
            <p class="ml-5 dir"><a href="painel-admin.html">Inicio</a> >><span class="text-sucess">Artigos</span></p>
        </div>

        <div class="row mt-2">
            <div class="col-sm-11 ">
                <div class="float-right">
                    <a class="btn btn-primary ml-5 " href="adicionar artigos.php">
                            <i class="fa fa-plus"></i>
                    </a>
                    <a class="btn btn-danger ml-2" href="">
                            <i class="fa fa-trash"></i>    
                    </a>   
                </div>
                
            </div>
                
        </div>

        <div class="row justify-content-center">

            <table class="table col-lg-10 col-md-10 col-sm-10 tabela mt-2">
                <thead >
                    <tr class="cor-creme">
                        <td class="titulo-tabela" colspan="3"><i class="fa fa-list mr-2"></i>Lista de Artigos</td>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="texto-verde">Titulo do Artigo</th>
                        <th class="texto-verde">Autor</th>
                        <th class="texto-verde" >
                            <a href="">Accao</a>
                        </th>
                    </tr>
                    <tr>
                        <td>Artigo 1</td>
                        <td>Folege</td>
                        <td> 
                            <button class="btn cor-verde" >
                                <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Artigo 2</td>
                        <td>Folege</td>
                        <td> 
                            <button class="btn cor-verde" >
                                <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Artigo 3</td>
                        <td>Folege</td>
                        <td> 
                            <button class="btn cor-verde" >
                                <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Artigo 4</td>
                        <td>Folege</td>
                        <td> 
                            <button class="btn cor-verde" >
                                <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Artigo 5</td>
                        <td>Folege</td>
                        <td> 
                            <button class="btn cor-verde" >
                                <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

<?php
    include('footer.php');
?>