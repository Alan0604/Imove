<?php
$uploaddir = 'imagens/';
if(is_dir($uploaddir)){
	$diretorio = dir($uploaddir);
	while(($arquivo = $diretorio->read()) !== false){
		if(strlen($arquivo)>3)
			echo $arquivo .'<br>';
	}
	$diretorio->close();
}

//echo '<br><hr>';

//echo '<br><br>Arquivos na pasta UPLOADS:<br>';
if ( $handle = opendir($uploaddir) ) {
    while ( $entry = readdir( $handle ) ) {
    	if(strlen($entry)>3)
        	echo $entry . '<br>';
    }
    closedir($handle);
} 

echo '<br><hr>';

//echo '<br>Arquivos na pasta UPLOADS:<br>';
$dir = new DirectoryIterator($uploaddir);
foreach ($dir as $file){
	if(strlen($file->getFilename())>3)
    	echo $file->getFilename() . '<br>';
}

echo '<br><hr><br>';

foreach($_FILES['arquivo']['name'] as $key => $value) {
	if($_FILES['arquivo']['error'][$key] == UPLOAD_ERR_OK){
		$uploadName = $uploaddir . basename($value);
		$uploadfile = $_FILES['arquivo']['tmp_name'][$key];
		$status = move_uploaded_file($uploadfile, $uploadName);
		if($status){
			echo 'Upload de arquivo realizado com sucesso.';
		}else{
			echo 'Upload de arquivo não realizado.';
		}
	}else{
		echo 'Erro ao enviar o arquivo para o servidor.';
	}
	echo ' (' . $value . ')<br>';
}