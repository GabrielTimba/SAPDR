<?php
/**
 * MyBB 1.8 Portuguese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 * Translated by Begincaos user MyBB "www.pt4um.com/forum"
 */

// Tabs
$l['attachments'] = "Anexos";
$l['stats'] = "Estatísticas";
$l['find_attachments'] = "Procurar Anexos";
$l['find_attachments_desc'] = "Usando o sistema de procura de anexos, você consegue procurar por um ficheiro específico que os utilizadores tenham anexado no fórum. Comece por inserir um termo de pesquisa em baixo. Todos os campos são opcionais e não são incluídos no critério de pesquisa, a não ser que contenham um valor.";
$l['find_orphans'] = "Encontrar Anexos órfãos";
$l['find_orphans_desc'] = "Anexos órfãos, são anexos que por alguma razão perderam-se na base de dados ou nos ficheiros de sistema. Este utilitário vai assisti-lo na localização e remove-los.";
$l['attachment_stats'] = "Estatísticas de Anexos";
$l['attachment_stats_desc'] = "Em baixo estão algumas estatísticas gerais  para os anexos existentes no seu fórum.";

// Erros
$l['error_nothing_selected'] = "Por favor selecione um ou mais anexos para apagar.";
$l['error_no_attachments'] = "Não existem nenhuns anexos no seu fórum neste momento. Assim que um anexo for colocado, você vai poder aceder a esta secção.";
$l['error_not_all_removed'] = "Apenas alguns anexos órfãos foram apagados com sucesso, outros não podem ser removidos da diretoria uploads.";
$l['error_count'] = 'Incapaz de remover {1} anexo(s).';
$l['error_invalid_username'] = "O nome de utilizador que inseriu é inválido.";
$l['error_invalid_forums'] = "Um ou mais fóruns que selecionou é inválido.";
$l['error_no_results'] = "Não foram encontrados anexos com os critérios de pesquisa especificado.";
$l['error_not_found'] = "Arquivo anexado não pôde ser encontrado na diretoria de uploads.";
$l['error_not_attached'] = "Anexo enviado há 24 horas atrás, mas não foi anexado a uma mensagem.";
$l['error_does_not_exist'] = "Tópico ou mensagem para este anexo já não existe.";

// Sucesso
$l['success_deleted'] = "Os anexos selecionados foram apagados com sucesso.";
$l['success_orphan_deleted'] = "O anexos órfãos selecionados foram apagados com sucesso.";
$l['success_count'] = '{1} anexo(s) removidos com sucesso.';
$l['success_no_orphans'] = "Não existem anexos órfãos no seu fórum.";

// Confirmar
$l['confirm_delete'] = "Tem a certeza que quer apagar os anexos selecionados?";

// == Páginas
// = Estatísticas
$l['general_stats'] = "Estatísticas Gerais";
$l['stats_attachment_stats'] = "Anexos - Estatísticas de anexos";
$l['num_uploaded'] = "<strong>Nº de Anexos Enviados</strong>";
$l['space_used'] = "<strong>Espaço Usado pelos Anexos</strong>";
$l['bandwidth_used'] = "<strong>Uso Estimado de Largura Banda</strong>";
$l['average_size'] = "<strong>Tamanho Médio dos Anexos</strong>";
$l['size'] = "Tamanho";
$l['posted_by'] = "Colocado por";
$l['thread'] = "Tópico";
$l['downloads'] = "Downloads";
$l['date_uploaded'] = "Data de Envio";
$l['popular_attachments'] = "Top 5 Anexos Mais Popular";
$l['largest_attachments'] = "Top 5 Maiores Anexos";
$l['users_diskspace'] = "Top 5 Utilizadores com mais espaço usado por Anexos";
$l['username'] = "Nome de Utilizador";
$l['total_size'] = "Tamanho Total";

// = Órfãos
$l['orphan_results'] = "Pesquisa de Anexos órfãos - Resultados";
$l['orphan_attachments_search'] = "Pesquisa de Anexos órfãos";
$l['reason_orphaned'] = "Motivo";
$l['reason_not_in_table'] = "Inexistente na tabela de anexos";
$l['reason_file_missing'] = "Ficheiro anexado em falta";
$l['reason_thread_deleted'] = "Tópico apagado";
$l['reason_post_never_made'] = "Mensagem nunca colocada";
$l['unknown'] = "Desconhecido";
$l['results'] = "Resultados";
$l['step1'] = "Passo 1";
$l['step2'] = "Passo 2";
$l['step1of2'] = "Passo 1 de 2 - Pesquisa no Ficheiro do Sistema";
$l['step2of2'] = "Passo 2 de 2 - Pesquisa na Base de Dados";
$l['step1of2_line1'] = "Por favor aguarde, o ficheiro de sistema está de momento a ser pesquisado por anexos órfãos.";
$l['step2of2_line1'] = "Por favor aguarde, a base de Dados está de momento a ser pesquisada por anexos órfãos.";
$l['step_line2'] = "Você vai ser automaticamente redirecionado para o próximo passo, assim que este processo for concluído.";
$l['scanning'] = 'A digitalizar..';

// = Anexos / Início
$l['index_find_attachments'] = "Anexos - Procurar Anexos";
$l['find_where'] = "Encontrar Anexos onde...";
$l['name_contains'] = "Nome de Ficheiro contém";
$l['name_contains_desc'] = "Para procurar por uma correspondência insira *.[extensão do ficheiro]. Exemplo: *.zip.";
$l['type_contains'] = "Tipo de ficheiro contém";
$l['forum_is'] = "Fórum é";
$l['username_is'] = "Nome de Utilizador é";
$l['poster_is'] = "A mensagem é";
$l['poster_is_either'] = "Utilizador ou Visitante";
$l['poster_is_user'] = "Apenas Utilizadores";
$l['poster_is_guest'] = "Apenas Visitantes";
$l['more_than'] = "Mais que";
$l['greater_than'] = "Maior que";
$l['is_exactly'] = "É exatamente";
$l['less_than'] = "Menos que";
$l['date_posted_is'] = "Data de colocação é";
$l['days_ago'] = "dias atrás";
$l['file_size_is'] = "Tamanho do ficheiro é";
$l['kb'] = "KB";
$l['download_count_is'] = "Total de Downloads é";
$l['display_options'] = "Opções de Visualização";
$l['filename'] = "Nome do ficheiro";
$l['filesize'] = "Tamanho do Ficheiro";
$l['download_count'] = "Total de Downloads";
$l['post_username'] = "Nome de utilizador";
$l['asc'] = "Ascendente";
$l['desc'] = "Descendente";
$l['sort_results_by'] = "Ordenar resultados por";
$l['results_per_page'] = "Resultado por página";
$l['in'] = "em";

// Botões
$l['button_delete_orphans'] = "Apagar anexos órfãos marcados";
$l['button_delete_attachments'] = "Apagar anexos marcados";
$l['button_find_attachments'] = "Encontrar Anexos";

