<?php 
/*
* Configurações do sistema de destaques
*/
$destaques = array(
    // Dados de conexão ao MySQL
	'mysql' => array(
		'servidor' => 'localhost',
		'usuario' => 'root',
		'senha' => 'root',
		'banco' => 'destaques'),
    // Nome da tabela com os destaques
	'tabela' => 'destaques',
    // Limite máximo de destaques que serão exibidos
	'limite' => 5
	);


/**
 * Conexão com o MySQL
 *
 * Atenção: Comente as próximas linhas se o seu site já se
 *  conectar com o MySQL fora desse script
 */
mysql_connect(
	$destaques['mysql']['servidor'],
	$destaques['mysql']['usuario'],
	$destaques['mysql']['senha']) OR trigger_error('ERRO: ' . mysql_error()
	);
	mysql_select_db($destaques['mysql']['banco']) OR trigger_error('ERRO: ' . mysql_error());

/*
 * Busca os dados na tabela de destaques
 */
$sql = "SELECT `titulo`, `link`, `imagem`
FROM `{$destaques['tabela']}`
WHERE `ativo` = 1
ORDER BY `id` DESC
LIMIT {$destaques['limite']}";
$query = mysql_query($sql) OR trigger_error('ERRO: ' . mysql_error());

/**
 * Loop que traz os dados do MySQL e armazena-os em um array $lista_destaques
 */
$lista_destaques = array();
while ($registro = mysql_fetch_object($query)) {
	$lista_destaques[] = $registro;
}


?>