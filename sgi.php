<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="img/favicon1.png" type="image/x-icon" size="16x16">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>SGI</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <div class="navbar-nav mx-auto">
            <a class="navbar-brand mx-auto" href="#"><img src="./img/logoBrancoNR.png" alt="Logo"  class="logo"/></a>
        </div>
    </div>
</nav>
<h1 class="sgi-h1">SGI</h1>
<div class="container index">
    <h1 class="my-4">Departamentos</h1>
    <div class="row">
        <div class="col-lg-4">
            <div class="list-group" id="document-list">
            <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-pol-sgi" aria-expanded="false" aria-controls="dropdown-pol-sgi">
                    <i class="fas fa-book"></i> Políticas<i class="fas fa-angle-down"></i>
                </div>
                <div class="collapse" id="dropdown-pol-sgi">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-politica-qualidade" aria-expanded="false" aria-controls="dropdown-politica-qualidade">
                        Política da Qualidade<i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-politica-qualidade">
                            <div class="list-group sub-sub-item">
                            <?php
                                $directory = "./pdf/politica/qualidade/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
        
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-politica-ambiental" aria-expanded="false" aria-controls="dropdown-politica-ambiental">
                        Política Ambiental <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-politica-ambiental">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de Processos -->
                                <?php
                                $directory = "./pdf/politica/ambiental/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-politica-saude" aria-expanded="false" aria-controls="dropdown-politica-saude">
                        Política de Saúde e Segurança do Trabalho <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-politica-saude">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de Processos -->
                                <?php
                                $directory = "./pdf/politica/saude/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-politica-missao" aria-expanded="false" aria-controls="dropdown-politica-missao">
                        Missão, Visão e Valores <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-politica-missao">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de Processos -->
                                <?php
                                $directory = "./pdf/politica/missao/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-sgi" aria-expanded="false" aria-controls="dropdown-sgi">
                    <i class="fas fa-book"></i> SGI <i class="fas fa-angle-down"></i>
                </div>
                <div class="collapse" id="dropdown-sgi">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-manual" aria-expanded="false" aria-controls="dropdown-manual">
                        MN - Manuais<i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-manual">
                            <div class="list-group sub-sub-item">
                            <?php
                                $directory = "./pdf/sgi/manual/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po" aria-expanded="false" aria-controls="dropdown-po">
                        PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-po">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de po -->
                                <?php
                                $directory = "./pdf/sgi/po/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-sgi" aria-expanded="false" aria-controls="dropdown-for-sgi">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-sgi">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/sgi/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Outros departamentos -->
                <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-almoxarifado" aria-expanded="false" aria-controls="dropdown-almoxarifado">
                                <i class="fas fa-book"></i> Almoxarifado <i class="fas fa-angle-down"></i>
                            </div>
                            <div class="collapse" id="dropdown-almoxarifado">
                                <div class="list-group">
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-almoxarifado" aria-expanded="false" aria-controls="dropdown-it-almoxarifado">
                                     IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-it-almoxarifado">
                                        <div class="list-group sub-sub-item">
                                            <?php
                                                $directory = "./pdf/almoxarifado/it/";
                                                $pdfs = glob($directory . "*.pdf");

                                                foreach($pdfs as $pdf) {
                                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                                }
                                            ?>
                                            <!-- Itens do departamento de it -->
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-almoxarifado" aria-expanded="false" aria-controls="dropdown-po-almoxarifado">
                                    PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-po-almoxarifado">
                                        <div class="list-group sub-sub-item">
                                            <!-- Itens do departamento de it -->
                                            <?php
                                            $directory = "./pdf/almoxarifado/po/";
                                            $pdfs = glob($directory . "*.pdf");

                                            foreach($pdfs as $pdf) {
                                                $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                            }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-almoxarifado" aria-expanded="false" aria-controls="dropdown-for-almoxarifado">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-almoxarifado">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/almoxarifado/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-compras" aria-expanded="false" aria-controls="dropdown-compras">
                                <i class="fas fa-book"></i> Compras <i class="fas fa-angle-down"></i>
                            </div>
                            <div class="collapse" id="dropdown-compras">
                                <div class="list-group">
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-compras" aria-expanded="false" aria-controls="dropdown-it-compras">
                                     IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-it-compras">
                                        <div class="list-group sub-sub-item">
                                            <?php
                                                $directory = "./pdf/compras/it/";
                                                $pdfs = glob($directory . "*.pdf");

                                                foreach($pdfs as $pdf) {
                                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                                }
                                            ?>
                                            <!-- Itens do departamento de it -->
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-compras" aria-expanded="false" aria-controls="dropdown-po-compras">
                                    PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-po-compras">
                                        <div class="list-group sub-sub-item">
                                            <!-- Itens do departamento de it -->
                                            <?php
                                            $directory = "./pdf/compras/po/";
                                            $pdfs = glob($directory . "*.pdf");

                                            foreach($pdfs as $pdf) {
                                                $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                            }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-compras" aria-expanded="false" aria-controls="dropdown-for-compras">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-compras">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/compras/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-comercial" aria-expanded="false" aria-controls="dropdown-comercial">
                    <i class="fas fa-book"></i> Comercial <i class="fas fa-angle-down"></i>
                </div>
                <div class="collapse" id="dropdown-comercial">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-comercial" aria-expanded="false" aria-controls="dropdown-it-comercial">
                         IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-it-comercial">
                            <div class="list-group sub-sub-item">
                            <?php
                                $directory = "./pdf/comercial/po/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                                <!-- Itens do departamento de it -->
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-comercial" aria-expanded="false" aria-controls="dropdown-po-comercial">
                        PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-po-comercial">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/comercial/po/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-comercial" aria-expanded="false" aria-controls="dropdown-for-comercial">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-comercial">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/comercial/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-financeiro" aria-expanded="false" aria-controls="dropdown-financeiro">
                    <i class="fas fa-book"></i> Financeiro <i class="fas fa-angle-down"></i>
                </div>
                <div class="collapse" id="dropdown-financeiro">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-financeiro" aria-expanded="false" aria-controls="dropdown-it-financeiro">
                         IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-it-financeiro">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/financeiro/it/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-financeiro" aria-expanded="false" aria-controls="dropdown-po-financeiro">
                        PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-po-financeiro">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de po -->
                                <?php
                                $directory = "./pdf/financeiro/po/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-financeiro" aria-expanded="false" aria-controls="dropdown-for-financeiro">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-financeiro">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/financeiro/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-marketing" aria-expanded="false" aria-controls="dropdown-marketing">
                                <i class="fas fa-book"></i> Marketing <i class="fas fa-angle-down"></i>
                            </div>
                            <div class="collapse" id="dropdown-marketing">
                                <div class="list-group">
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-marketing" aria-expanded="false" aria-controls="dropdown-it-marketing">
                                     IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-it-marketing">
                                        <div class="list-group sub-sub-item">
                                            <?php
                                                $directory = "./pdf/marketing/it/";
                                                $pdfs = glob($directory . "*.pdf");

                                                foreach($pdfs as $pdf) {
                                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                                }
                                            ?>
                                            <!-- Itens do departamento de it -->
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-marketing" aria-expanded="false" aria-controls="dropdown-po-marketing">
                                    PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-po-marketing">
                                        <div class="list-group sub-sub-item">
                                            <!-- Itens do departamento de it -->
                                            <?php
                                            $directory = "./pdf/marketing/po/";
                                            $pdfs = glob($directory . "*.pdf");

                                            foreach($pdfs as $pdf) {
                                                $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                            }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-contabilidade" aria-expanded="false" aria-controls="dropdown-for-contabilidade">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-contabilidade">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/contabilidade/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                                </div>
                            </div>

                            
                            <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-noc" aria-expanded="false" aria-controls="dropdown-noc">
                                <i class="fas fa-book"></i> NOC <i class="fas fa-angle-down"></i>
                            </div>
                            <div class="collapse" id="dropdown-noc">
                                <div class="list-group">
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-noc" aria-expanded="false" aria-controls="dropdown-it-noc">
                                     IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-it-noc">
                                        <div class="list-group sub-sub-item">
                                            <?php
                                                $directory = "./pdf/noc/it/";
                                                $pdfs = glob($directory . "*.pdf");

                                                foreach($pdfs as $pdf) {
                                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                                }
                                            ?>
                                            <!-- Itens do departamento de it -->
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-noc" aria-expanded="false" aria-controls="dropdown-po-noc">
                                    PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="collapse" id="dropdown-po-noc">
                                        <div class="list-group sub-sub-item">
                                            <!-- Itens do departamento de it -->
                                            <?php
                                            $directory = "./pdf/noc/po/";
                                            $pdfs = glob($directory . "*.pdf");

                                            foreach($pdfs as $pdf) {
                                                $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                                echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                            }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-noc" aria-expanded="false" aria-controls="dropdown-for-noc">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-noc">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/noc/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                                </div>
                            </div>

                           
   
                
                <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-operacional" aria-expanded="false" aria-controls="dropdown-operacional">
                    <i class="fas fa-book"></i> Operacional <i class="fas fa-angle-down"></i>
                </div>
                <div class="collapse" id="dropdown-operacional">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-operacional" aria-expanded="false" aria-controls="dropdown-it-operacional">
                         IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-it-operacional">
                            <div class="list-group sub-sub-item">
                                <?php
                                    $directory = "./pdf/operacional/it/";
                                    $pdfs = glob($directory . "*.pdf");

                                    foreach($pdfs as $pdf) {
                                        $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                        echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                    }
                                ?>
                                <!-- Itens do departamento de it -->
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-operacional" aria-expanded="false" aria-controls="dropdown-po-operacional">
                        PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-po-operacional">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/operacional/po/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-operacional" aria-expanded="false" aria-controls="dropdown-for-operacional">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-operacional">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/operacional/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-rh" aria-expanded="false" aria-controls="dropdown-rh">
                    <i class="fas fa-book"></i> RH <i class="fas fa-angle-down"></i>
                </div>
                <div class="collapse" id="dropdown-rh">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-rh" aria-expanded="false" aria-controls="dropdown-it-rh">
                         IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-it-rh">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/rh/it/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-rh" aria-expanded="false" aria-controls="dropdown-po-rh">
                        PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-po-rh">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/rh/po/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-rh" aria-expanded="false" aria-controls="dropdown-for-rh">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-rh">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/rh/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item list-group-item-action dep-bg main-item" data-toggle="collapse" data-target="#dropdown-suporte" aria-expanded="false" aria-controls="dropdown-suporte">
                    <i class="fas fa-book"></i> Suporte <i class="fas fa-angle-down"></i>
                </div>
                <div class="collapse" id="dropdown-suporte">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-it-suporte" aria-expanded="false" aria-controls="dropdown-it-suporte">
                         IT - Instrução de Trabalho<i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-it-suporte">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/suporte/it/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-po-suporte" aria-expanded="false" aria-controls="dropdown-po-suporte">
                        PO - Procedimento Operacional <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-po-suporte">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de po -->
                                <?php
                                $directory = "./pdf/suporte/po/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action dep-bg sub-item" data-toggle="collapse" data-target="#dropdown-for-suporte" aria-expanded="false" aria-controls="dropdown-for-suporte">
                          FOR - Formulários <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="collapse" id="dropdown-for-suporte">
                            <div class="list-group sub-sub-item">
                                <!-- Itens do departamento de it -->
                                <?php
                                $directory = "./pdf/suporte/formulario/";
                                $pdfs = glob($directory . "*.pdf");

                                foreach($pdfs as $pdf) {
                                    $filename = pathinfo($pdf, PATHINFO_FILENAME);
                                    echo '<a href="'.$pdf.'" class="list-group-item list-group-item-action"><i class="fas fa-file-alt"></i> '.$filename.'</a>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div id="document-viewer">
                <button id="viewFullScreen" class="btn btn-primary d-none">Ver PDF em Tela Cheia</button>
                <div id="document-container" class="embed-responsive embed-responsive-16by9">
                    <object class="embed-responsive-item" id="document-object" type="application/pdf" data=""></object>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>



<script src="https://cdn.jsdelivr.net/npm/interactjs@1.10.11/dist/interact.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
