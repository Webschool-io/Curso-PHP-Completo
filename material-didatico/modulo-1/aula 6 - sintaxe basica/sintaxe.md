## Sintaxe Básica

Link da vídeo aula: https://www.youtube.com/watch?v=Oll3YlK67rg

Como já comentamos anteriormente, o php não compila o código. Ele interpreta o código toda vez que algum arquivo foi solicitado e retorna o resultado.

Os arquivos com códigos PHP são salvos em arquivos que possuem a extensão **.php**, mas esses arquivos não possuem somente códigos php. No caso de sistemas web ele pode conter linhas de códigos css, html e javascript. Mas como o interpretador encontra o código php? Simples, ele programa o código entre algumas tags bem específicas:

Para começar um código php utilize "**<?php**" (sem as aspas).

**Obs:** Também é possível usar "**<?**" embora não seja recomendado tal uso pela  [PSR-1](http://www.php-fig.org/psr/psr-1/pt-br/).  Essa opção somente irá funcionar se o a opção "Short open tags" estiver habilitada nas configurações do PHP.


Para finalzar um código php é só utilizar "**?>**" (sem as aspas). O exemplo abaixo mostra um código php que irá mostrar a data atual:

```php
<?php 

/* AQUI VEM O CÓDIGO */
echo date('d-m-Y');

?>
```

