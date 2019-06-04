<?php
/**
 * MyBB 1.8 Portuguese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 * Translated by Begincaos user MyBB "www.pt4um.com/forum"
 */

$l['system_health'] = "Saúde do Sistema";
$l['system_health_desc'] = "Aqui você pode visualizar informações sobre a saúde do seu sistema.";
$l['utf8_conversion'] = "Conversão UTF-8";
$l['utf8_conversion_desc'] = "Você está de momento a converter a tabela da base de dados para o formato UTF-8. Tenha cuidado que este processo pode demorar bastantes horas, dependendo do tamanho do seu fórum e desta tabela. Quando o processo ficar completo, você vai retornar para a página principal da conversão de ficheiros UTF-8.";
$l['utf8_conversion_desc2'] = "Esta ferramenta verifica as tabelas da base de dados, para ter a certeza que elas estão no formato UTF-8 e permite-lhe converte-las se não estiveram nessa condição.";

$l['convert_all'] = "Converter Tudo";
$l['converting_to_utf8'] = "O MyBB está de momento a converter a tabela \"{1}\" para a codificação de idioma UTF-8 de {2} codificação.";
$l['convert_to_utf8'] = "Você está prestes a converter a tabela \"{1}\" para a codificação de idioma UTF-8 de {2} codificação.";
$l['convert_all_to_utf'] = "Você está prestes a converter todas as tabelas para a codificação de idioma UTF-8 de {1} codificação.";
$l['convert_all_to_utf8mb4'] = "Você está prestes a converter todas as tabelas para a codificação do idioma 4-Byte UTF-8 Unicode da codificação {1}.";
$l['converting_to_utf8mb4'] = "O MyBB está de momento a converter a tabela \"{1}\" para a codificação de idioma 4-Byte UTF-8 Unicode da codificação {2}.";
$l['please_wait'] = "Por favor aguarde...";
$l['converting_table'] = "A converter a Tabela:";
$l['convert_table'] = "Converter Tabela";
$l['convert_tables'] = "Converter Todas as Tabelas";
$l['convert_database_table'] = "Converter Tabela Base Dados";
$l['convert_database_tables'] = "Converter Todas as Tabelas Base Dados";
$l['table'] = "Tabela";
$l['status_utf8'] = "Estado UTF-8";
$l['status_utf8mb4'] = "Suporte 4-Byte UTF-8 <br />(necessário o MySQL 5.5.3 ou acima)";
$l['not_available'] = "Não disponível";
$l['all_tables'] = "Todas as Tabelas";
$l['convert_now'] = "Converter Agora";
$l['totals'] = "Totais";
$l['attachments'] = "Anexos";
$l['total_database_size'] = "Tamanho Total da Base de Dados";
$l['attachment_space_used'] = "Espaço Usado por Anexos";
$l['total_cache_size'] = "Tamanho Total da Cache";
$l['estimated_attachment_bandwidth_usage'] = "Largura de Banda usada pelos anexos";
$l['max_upload_post_size'] = "Envio Max MAX/ Tamanho da Mensagem";
$l['average_attachment_size'] = "Tamanho Médio de Anexos";
$l['stats'] = "Estado";
$l['task'] = "Tarefa";
$l['run_time'] = "Hora de Execução";
$l['next_3_tasks'] = "Próximas 3 Tarefas";
$l['no_tasks'] = "Não existem tarefas a correr neste momento.";
$l['backup_time'] = "Tempo de Backup";
$l['no_backups'] = "De momento ainda não foram efetuados backups.";
$l['existing_db_backups'] = "Backup de Base de Dados existentes";
$l['writable'] = "Gravável";
$l['not_writable'] = "Não Gravável";
$l['please_chmod_777'] = "Por favor altere o CHMOD para 777.";
$l['chmod_info'] = "Por favor altere as configurações CHMOD para uma especificada no ficheiro em baixo. Para mais informações em como efetuar o CHMOD, veja o";
$l['file'] = "Ficheiro";
$l['location'] = "Localização";
$l['settings_file'] = "Definições do Ficheiro";
$l['config_file'] = "Configuração do Ficheiro";
$l['file_upload_dir'] = "Diretoria de Ficheiros Enviados";
$l['avatar_upload_dir'] = "Diretoria de Avatares Enviados";
$l['language_files'] = "Ficheiros de Idioma";
$l['backup_dir'] = "Diretoria de Backups";
$l['cache_dir'] = "Diretoria de Cache";
$l['themes_dir'] = "Diretoria de Temas";
$l['chmod_files_and_dirs'] = "CHMOD Ficheiros e Diretorias";

$l['notice_process_long_time'] = "Este processo pode demorar algumas horas, dependendo do tamanho do seu fórum e desta tabela.";
$l['notice_mb4_warning'] = "O suporte 4-Byte UTF-8 necessita do MySQL 5.5.3 ou acima. Não vai conseguir importar a base de dados de um servidor MySQL com outra versão.";

$l['check_templates'] = "Verifica os Templates";
$l['check_templates_desc'] = "Verifica problemas de segurança conhecidos em todos os templates instalados.";
$l['check_templates_title'] = "Verifica a Segurança do Template";
$l['check_templates_info'] = "Este processo vai verificar os seus templates contra problemas de segurança que possam afetar o seu fórum e o servidor onde ele corre. Isto pode demorar um pouco se você tiver instalado muitos Temas.
<br /><br />Para iniciar o processo clique no botão 'Proceder' em baixo.";
$l['check_templates_info_desc'] = "Os templates em baixo coincidem com problemas conhecidos de segurança. Por favor reveja-os.";
$l['full_edit'] = "Edição Total";

$l['error_chmod'] = "dos ficheiros e diretorias necessárias não têm as configurações adequadas de CHMOD.";
$l['error_invalid_table'] = "A tabela especificada não existe.";
$l['error_db_encoding_not_set'] = "As suas definições atuais do MyBB não estão configuradas para usar esta ferramenta ainda. Por favor veja o <a href=\"https://docs.mybb.com/Utf8_setup.html\">MyBB Docs</a> para mais informações em como configurar.";
$l['error_not_supported'] = "O motor da sua base de dados atual não é suportado pela ferramenta de conversão UTF-8.";
$l['error_invalid_input'] = "Ocorreu um problema ao verificar o Template. Por favor tente outra vez ou contacte o Grupo MyBB para suporte.";
$l['error_master_templates_altered'] = "Os Templates Principais foram alterados. Por favor contacte o Grupo MyBB para suporte, de como altera-lo.";
$l['error_utf8mb4_version'] = "A sua versão MySQL não suporta a codificação 4-Byte UTF-8.";


$l['warning_multiple_encodings'] = "É recomendado que não use codificações diferentes na sua base de dados. Isso pode causar comportamentos inesperados ou erros de MySQL.";
$l['warning_utf8mb4_config'] = "Para suporte 4-Byte UTF-8 total, necessita de alterar <i>\$config['database']['encoding'] = 'utf8';</i> para <i>\$config['database']['encoding'] = 'utf8mb4';</i> no seu inc/config.php.";

$l['success_templates_checked'] = "Modelos verificados com sucesso - não foram encontradas falhas de segurança!";
$l['success_all_tables_already_converted'] = "Todas as tabelas já se encontram convertidas, ou já estão no formato UTF-8.";
$l['success_table_converted'] = "A tabela \"{1}\" foi convertida para UTF-8 com sucesso.";
$l['success_chmod'] = "Todos os ficheiros e diretorias necessários, estão com as configurações CHMOD corretas.";
