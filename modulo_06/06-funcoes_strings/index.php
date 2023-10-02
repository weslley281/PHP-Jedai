<?php

$conteudo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";

echo "<pre>";
echo $conteudo;
echo "</pre>";

$substring = substr($conteudo, 0, 11);
echo $substring;

$conteudoDividido = explode(" ", $conteudo);

echo "<pre>";
print_r($conteudoDividido);
echo "</pre>";


$conteudoConcatenado = implode(" ", $conteudoDividido);

echo "<pre>";
print_r($conteudoConcatenado);
echo "</pre>";

