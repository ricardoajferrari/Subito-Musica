<body><?
/* Defina aqui o tamanho máximo do arquivo em bytes: */
if($arquivo_size > 20480000) {
print "<SCRIPT> alert('File bigger than 30mb'); window.history.go(-1); </SCRIPT>\n";
exit;
}

/* Defina aqui o diretório destino do upload */
if (!empty($arquivo) and is_file($arquivo)) {
$caminho="uploaded/";
$caminho=$caminho.$arquivo_name;

/* Defina aqui o tipo de arquivo suportado */
if ((eregi(".*", $arquivo_name))){
copy($arquivo,$caminho);
print "<h2><right>Upload succeed!</right></h2>";
}
else{
print "<h2><right>File unsent!</right></h2>";
print "<h3><right>File not found!</right></font></h3>";
}
}
?>
