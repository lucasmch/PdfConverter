# Conversor de PDF

Esse código percorre todos os arquivos na pasta "temp_in" e executa o Ghostscript para processar cada arquivo PDF, convertendo-o para uma nova versão do PDF com configurações específicas, e, em seguida, salva o resultado na pasta "temp_done". As informações de saída e possíveis erros são exibidos durante o processo.


## Funcionalidades

- Converter PDFs para 1.4
- Comprimir PDFs para otimização em geral


## Instalação

Você precisa ter o GhostScript instalado.

```bash
sudo apt-get -y install ghostscript
```
    
## Uso/Exemplos

Para converter PDFs para 1.4 e comprimir use:
```shell
php compress.php
```

Para somente converter PDFs para 1.4:
```shell
php convert.php
```