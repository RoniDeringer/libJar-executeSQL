# 🚀 Biblioteca JAVA
Projeto utilizando padrão **generics** na escolha do banco de dados. Sendo possível implementar a utilização de outro SGBD

Projeto realizado na disciplina de Programação Orientada a Objeto 2.<br>
Orientador: [**Rodrigo Curvêllo**](http://buscatextual.cnpq.br/buscatextual/visualizacv.do)

___
## 📌 Ferramentas e linguagens

[Composer](https://getcomposer.org/)        <br>
[Symfony](https://symfony.com/)         <br>
[Doctrine](https://www.doctrine-project.org)<br>
[Java JDK 17](https://www.oracle.com/java/technologies/javase/jdk17-archive-downloads.html)  <br>
[PHP 7.4](https://www.php.net/releases/7_4_0.php)
 
 ___
## <center> 🎯 Proposta do projeto </center>
<div>
<a align="right"><img align="right" src="web/img/diagrama_poo2.png" width="400"  height="700" alt="Diagrama do projeto"/></a>
<br>

#### O trabalho será desenvolvido em duas etapas:
<br>

<br>

**1ª etapa** será construir um sistema WEB onde terá 2 telas de formulário:<br>
primeira tela será um formulário solicitando as informações do banco - _nome do database, url, porta, user, senha e sgbd (tendo como padrão o MySQL)_. <br>A segunda tela será sobre as tabelas e as colunas (pode haver _n_ tabelas e cada tabela poderá ter _n_ colunas). Informações sobre a tabela será somente o nome, e da coluna será o _nome da coluna, o tipo do dado e poderá ser null_
<br>
<br>
<br>
**2ª etapa** será desenvolver uma biblioteca em JAVA. Que irá mapear os campos do json e irá abrir uma conexão com o banco (já existente) para salvar os dados conforme as informações do banco. Deverá usar o padrão _genercis_ onde futuramente poderá ser implementado outros sistemas de gerenciamento de banco de dados (como postegreesql, mongodb, sqlserver...).
<br>
<br>
<br><br>
<br>
<br>

</div>
<br />

____

## ⚙️ Info

**Instalar no windows**<br>
scoop:<br>
$ `Set-ExecutionPolicy RemoteSigned -scope CurrentUser`
$ `Invoke-Expression (New-Object System.Net.WebClient).DownloadString('https://get.scoop.sh')`

symfony<br>
$ `scoop install symfony-cli`

run project:<br>
$ `symfony server:start`   **Dentro da pasta web** 

instalar as dependencias do composer: <br>
$ `composer install`


## Padrão do JSON

~~~json
{
    "nome": "string",
    "url": "string",
    "porta": 0,
    "usuario": "sring",
    "senha": "string",
    "sgbd": "string",
    "tabela": [
        {
            "nome": "string",
            "coluna": [
                {
                    "nome": "string",
                    "tipo": "string",
                    "isNotNull": true
                }
            ]
        }
    ]
}
~~~
