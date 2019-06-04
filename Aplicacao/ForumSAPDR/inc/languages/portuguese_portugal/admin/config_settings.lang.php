<?php
/**
 * MyBB 1.8 Portuguese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 * Translated by Begincaos user MyBB "www.pt4um.com/forum"
 */

$l['board_settings'] = "Configurações do Fórum";
$l['change_settings'] = "Alterar Configurações";
$l['change_settings_desc'] = "Esta secção permite gerir todas as configurações e ajustes referentes ao seu fórum. Para iniciar, selecione um grupo abaixo para gerir as configurações atuais no mesmo.";
$l['add_new_setting'] = "Ad Nova Configuração";
$l['add_new_setting_desc'] = "Esta seção permite-lhe adicionar uma nova configuração ao seu fórum.";
$l['modify_existing_settings'] = "Modificar Configuração";
$l['modify_existing_settings_desc'] = "Esta secção permite-lhe modificar uma configuração existente no seu fórum.";
$l['add_new_setting_group'] = "Ad Novo Grupo de Configurações";
$l['add_new_setting_group_desc'] = "Esta secção permite-lhe criar um grupo de configurações, para  categorizar configurações individuais.";
$l['edit_setting_group'] = "Editar Grupo de Configuração";
$l['edit_setting_group_desc'] = "Esta secção permite-lhe editar um grupo de configurações existente.";

$l['title'] = "Título";
$l['description'] = "Descrição";
$l['group'] = "Grupo";
$l['display_order'] = "Ordem de Visualização";
$l['name'] = "Identificador";
$l['name_desc'] = "Este identificador único é usado numa matriz de configurações para fazer referência a esta configuração (em scripts, traduções, e modelos).";
$l['group_name_desc'] = "Este identificador único é usado para o sistema de tradução.";
$l['text'] = "Texto";
$l['numeric_text'] = "Texto numérico";
$l['textarea'] = "Área de texto";
$l['yesno'] = "Opção Sim / Não";
$l['onoff'] = "Opção Ligado / Desligado";
$l['select'] = "Caixa de Seleção";
$l['radio'] = "Botões de Rádio";
$l['checkbox'] = "Caixas de Seleção";
$l['language_selection_box'] = "Caixa de seleção de Idioma";
$l['forum_selection_box'] = "Caixa de seleção do fórum";
$l['forum_selection_single'] = "Caixa de seleção do única";
$l['group_selection_box'] = "Caixa de seleção do grupo";
$l['group_selection_single'] = "Caixa de seleção do grupo única";
$l['adminlanguage'] = "Caixa de seleção de Administração de Idioma";
$l['cpstyle'] = "Painel de Controlo da caixa da seleção de estilo";
$l['php'] = "PHP Avaliado";
$l['type'] = "Tipo";
$l['extra'] = "Extra";
$l['extra_desc'] = "Se esta configuração for uma seleção, botão de opção ou botão de marcação, informe a lista de chaves combinadas (chave=Item) para mostrar. Separe cada uma das chaves com uma linha. Se for código PHP, digite-o para ser avaliado.";
$l['value'] = "Valor";
$l['insert_new_setting'] = "inserir Nova Configuração";
$l['edit_setting'] = "Editar Configuração";
$l['delete_setting'] = "Remover Configuração";
$l['setting_configuration'] = "Definição das Configurações";
$l['update_setting'] = "Atualizar Configurações";
$l['save_settings'] = "Guardar Configurações";
$l['setting_groups'] = "Grupos de Configurações";
$l['bbsettings'] = "Configurações";
$l['insert_new_setting_group'] = "Inserir Grupo de Configurações";
$l['setting_group_setting'] = "Grupo de Configurações / Definições";
$l['order'] = "Ordem";
$l['delete_setting_group'] = "Apagar Grupo de Configurações";
$l['save_display_orders'] = "Guardar Ordens de Visualização";
$l['update_setting_group'] = "Atualizar Grupo de Configurações";
$l['modify_setting'] = "Alterar Configuração";
$l['search'] = "Procurar";
$l['plugin_settings'] = "Configurações Plugin";

$l['show_all_settings'] = "Mostrar todas as Configurações";
$l['settings_search'] = "Procurar por Configurações";

$l['confirm_setting_group_deletion'] = "Tem a certeza que quer apagar este grupo de Configurações?";
$l['confirm_setting_deletion'] = "Tem a certeza que quer apagar esta configuração?";

$l['error_format_dimension'] = "O formato {1} definido é inválido.";
$l['error_field_postmaxavatarsize'] = "Dimensões máximas do Avatar";
$l['error_field_useravatardims'] = "Dimensões por defeito do Avatar";
$l['error_field_maxavatardims'] = " Dimensões máximas do Avatar";
$l['error_field_memberlistmaxavatarsize'] = "Dimensões máximas  visualizadas do Avatar";
$l['error_missing_title'] = "Você não inseriu um título para esta configuração";
$l['error_missing_group_title'] = "Você não inseriu um título para este grupo de configurações";
$l['error_invalid_gid'] = "Você não selecionou um grupo válido onde colocar esta configuração";
$l['error_invalid_gid2'] = "Você seguiu um link para um grupo de configuração inválido. Por favor, tenha a certeza que existe.";
$l['error_missing_name'] = "Você não inseriu um identificador para esta configuração";
$l['error_missing_group_name'] = "Você não inseriu um identificador para este grupo de configurações";
$l['error_invalid_type'] = "Você não selecionou um tipo válido para esta configuração";
$l['error_invalid_sid'] = "A configuração especificada não existe";
$l['error_duplicate_name'] = "O identificador especificado já está a ser usado pela configuração \"{1}\" -- deverá ser o único";
$l['error_duplicate_group_name'] = "O identificador especificado já está a ser usado pelo grupo de configurações \"{1}\" -- deverá ser o único";
$l['error_no_settings_found'] = "Não foi encontrada nenhuma configuração para o termo de pesquisa especificado.";
$l['error_cannot_edit_default'] = "Configurações e grupos de configurações padrão não podem ser editados ou removidos.";
$l['error_cannot_edit_php'] = "Este é um tipo especial de configuração que não pode ser editado.";
$l['error_ajax_search'] = "Ocorreu um problema ao efetuar pela pesquisa de configuração:";
$l['error_ajax_unknown'] = "ocorreu um erro desconhecido enquanto efetuava a pesquisa de configurações.";
$l['error_chmod_settings_file'] = "A configuração do ficheiro \"./inc/settings.php\" não é editável. Por favor edite o CHMOD para 777.<br />Para saber como fazer o CHMOD veja mais informações em <a href=\"https://docs.mybb.com/1.8/administration/security/file-permissions\" target=\"_blank\" rel=\"noopener\">MyBB Docs</a>.";

$l['success_setting_added'] = "A configuração foi criada com sucesso.";
$l['success_setting_updated'] = "A configuração foi atualizada com sucesso.";
$l['success_setting_deleted'] = "A configuração selecionada foi apagada com sucesso.";
$l['success_settings_updated'] = "As configurações foram atualizadas com sucesso.";
$l['success_settings_updated_hiddencaptchaimage'] = '<div class="smalltext" style="font-weight: normal;">Por favor, note que a configuração do <strong> campo de CAPTCHA</strong> foi alterado para <strong>{1}</strong> devido a um conflito com <strong>{2}</strong> campo do formulário de registo.</div>';
$l['success_settings_updated_username_method'] = '<div class="smalltext" style="font-weight: normal;"> Por favor, note que a configuração dos <b> métodos permitidos de login </b> não foram atualizados devido a vários utilizadores estarem a usar, o mesmo endereço de e-mail neste momento. </div>';
$l['success_settings_updated_allowmultipleemails'] = '<div class="smalltext" style="font-weight: normal;">Por favor note que a configuração de <b>Permitir que os emails registam múltiplas vezes?</b> (não)/ podem ser ativados, porque a configuração dos <b>Métodos permitidos de login</b> permite aos utilizadores fazer o login por endereço de Email.</div>';
$l['success_settings_updated_captchaimage'] = '<div class="smalltext" style="font-weight: normal;"> Por favor note que a configuração de <strong> CAPTCHA de Imagens para registo &; mensagens</strong> foi alterado para <strong>MyBB Default Captcha</strong> devido à falta de chaves publica/privadas (s).</div>';
$l['success_display_orders_updated'] = "As ordens de visualização da configuração foram atualizadas com sucesso.";
$l['success_setting_group_added'] = "O grupo de configuração foi criado com sucesso.";
$l['success_setting_group_updated'] = "O grupo de configuração foi atualizado com sucesso.";
$l['success_setting_group_deleted'] = "O grupo de configuração selecionado foi apagado com sucesso.";
$l['success_duplicate_settings_deleted'] = "Todos os grupo de configurações duplicados foram apagados com sucesso.";

$l['searching'] = 'A procurar...';
$l['search_error'] = 'Ocorreu um erro ao obter os resultados de pesquisa:';
$l['search_done'] = 'Concluído!';

