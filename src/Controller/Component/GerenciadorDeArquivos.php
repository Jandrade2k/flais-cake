<?php
namespace App\Controller\Component;

use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
use Cake\Utility\Text;

class GerenciadorDeArquivos
{
    /**
     * Função responsável por realizar o upload de arquivos
     *
     * @param array  $arquivo    Arquivo
     * @param string $diretorio  Diretório
     *
     * @return bool
     */
    public function upload(array $arquivo, $nome_arquivo,$diretorio = null)
    {
        // Se nenhum erro foi enviado e o arquivo tem o tamanho diferente de 0
        if (!$arquivo['error'] && $arquivo['size']) {
            // Removo a primeira barra do titulo
            $diretorioLocal = substr($diretorio, 0, -1);
            // Declaro onde salvar os arquivos
            $diretorioLocal = WWW_ROOT . str_replace(['/'], DS, $diretorio);
            // Verifica se existe a pasta
            if (!is_dir($diretorioLocal)) {
                // Caso não exista eu chamo o utilite folder
                $pasta = new Folder();
                // Crio a pasta já verificando se consegui
                if ($pasta->create($diretorioLocal)) {
                    // Se conseguiu criar o diretório eu dou permissão
                    $pasta->chmod($diretorioLocal, 0755, true);
                } else {
                    // Se não foi possivel informo um erro
                    return false;
                }
            }
            
            // Com diretório devidamente criado, declaro o arquivo temporário
            $arquivoTmp = new File($arquivo['tmp_name'], false);
            // Pega os dados dele
            $dados = $arquivoTmp->read();
            // Fecha o arquivo
            $arquivoTmp->close();
            // Extensão do arquivo
            $ext = explode('.', $arquivo['name']);
            $extensao = end($ext);
            // Monta o nome do arquivo
            // $nome = time() . '_' . Text::slug($arquivo['name']);
            $nome = $nome_arquivo;
            // Cria nosso arquivo
            $arquivoNome = new File($diretorioLocal . DS . $nome . '.' . $extensao, false, 0644);
            // Cria
            $arquivoNome->create();
            // Escreve os dados armazenados
            $arquivoNome->write($dados);
            // Fecha o arquivo
            $arquivoNome->close();
            // Redimenciona se for uma imagem
            //$this->redimencionar($nome . '.' . $extensao, $diretorioLocal);
            // Retorna uma string com o caminho do arquivo
            return $diretorio . $nome . '.' . $extensao;
        } else {
            // Se deu erro no upload
            return false;
        }
    }
    /**
     * Método para remover um arquivo
     *
     * @param string $caminho Caminho do arquivo
     *
     * @return void
     */
    public function remover(String $caminho)
    {
        // Instancia o File utitily
        $file = new File(WWW_ROOT . $caminho, false, 0777);
        // Remove a imagem
        $file->delete();
    }
    /**
     * Método para redimencionar imagem
     *
     * @param string $imagem Imagem
     * @param string $caminho Caminho do arquivo
     * @param string $largura Largura
     * @param string $altura Altura
     *
     * @return void
     */
    public function redimencionar($imagem, $caminho, $largura = 900, $altura = 900)
    {
        // Pega a extensão do arquivo
        $arr_img = explode('.', $imagem);
        $extensao = end($arr_img);
        // Verifica se é uma imagem
        if (in_array(strtolower($extensao), ['jpg', 'png', 'gif', 'bmp'])) {
            // Pegamos a largura e altura originais, além do tipo de imagem
            list($largura_orig, $altura_orig, $tipo, $atributo) = getimagesize($caminho . $imagem);
            /**
                * Se largura é maior que altura, dividimos a
                * largura determinada pela original e multiplicamos
                * a altura pelo resultado, para manter a proporção da imagem
                */
            if($largura_orig > $altura_orig){
                $altura = ($largura / $largura_orig) * $altura_orig;
            /**
                * Se altura é maior que largura, dividimos a altura
                * determinada pela original e multiplicamos a largura
                * pelo resultado, para manter a proporção da imagem
                */
            } elseif($largura_orig < $altura_orig){
                $largura = ($altura / $altura_orig) * $largura_orig;
            }
            // Criando a imagem com o novo tamanho
            $novaimagem = imagecreatetruecolor($largura, $altura);
            // Loop para descobrir o tipo da imagem
            switch($tipo) {
                // Se o tipo da imagem for gif
                case 1:
                    // Obtém a imagem gif original
                    $origem = @imagecreatefromgif($caminho . $imagem);
                    // Copia a imagem original para a imagem com novo tamanho
                    @imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $largura, $altura, $largura_orig, $altura_orig);
                    // Envia a nova imagem gif para o lugar da antiga
                    @imagegif($novaimagem, $caminho . $imagem);
                    break;
                // Se o tipo da imagem for jpg
                case 2:
                    // Obtém a imagem jpg original
                    $origem = @imagecreatefromjpeg($caminho . $imagem);
                    // Copia a imagem original para a imagem com novo tamanho
                    @imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $largura, $altura, $largura_orig, $altura_orig);
                    // Envia a nova imagem jpg para o lugar da antiga
                    @imagejpeg($novaimagem, $caminho . $imagem);
                    break;
                // Se o tipo da imagem for png
                case 3:
                    // Obtém a imagem png original
                    $origem = @imagecreatefrompng($caminho . $imagem);
                    // Copia a imagem original para a imagem com novo tamanho
                    @imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $largura, $altura, $largura_orig, $altura_orig);
                    // Envia a nova imagem png para o lugar da antiga
                    @imagepng($novaimagem, $caminho . $imagem);
                    break;
            }
            // Destrói a imagem nova criada e já salva no lugar da original
            imagedestroy($novaimagem);
            // Destrói a cópia de nossa imagem original
            imagedestroy($origem);
        }
    }
}
