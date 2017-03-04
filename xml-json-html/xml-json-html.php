<?php
//XML
//simple xml load string - http://php.net/manual/pt_BR/libxml.constants.php
//  simplexml_load_file segue as mesmas regras da string a diferenca é quye uma carrega de string e outra carrega por arquivo
// class MeuSimplesXml extends SimpleXMLElement  {}
// $meuXML = '<root/>';
// $xml = simplexml_load_string($meuXML,  'MeuSimplesXml', LIBXML_VERSION, 'namespace');
// print_r($xml);

//Class SimpleXMLEelement
// $meuXml = <<<XMLDATA
// <zce>
//   <basico>
//       <sintaxe>
//         PHP tags, Bitwise
//       </sintaxe>
//   </basico>
// </zce>
// XMLDATA;
// $meuXml  = new SimpleXMLElement($meuXml);
// $meuXml->addChild('teste', 'testeval');
// print_r($meuXml);
//http://php.net/manual/en/refs.xml.php

//Dom Document - http://php.net/manual/en/book.dom.php
//Carregando um arquivo xml
// $load = new DOMDocument();
// $load->load('/caminho/para/arquivo/meu.xml');
//Carregando html por string
// $loadHtml = new DOMDocument();
// $loadHtml->loadHTML('<html><p>Hello</p><br></html>');
// print_r($loadHtml->documentElement);
//Carregando arquivo html
// $loadHtmlFile = new DOMDocument();
// $loadHtmlFile->loadHTMLFile('/caminho/para/arquivo/meu.html');
//Carregando xml por string
// $loadString = new DOMDocument();
// $loadString->loadXML('<root><nome>PHP</nome></root>');
// print_r($loadString->getElementsByTagName('nome')->item(0));

//Convertendo domdocument para simplexmlelement
// $no = new DOMDocument();
// $meuXml = <<<XMLDATA
// <zce>
//   <basico>
//       <sintaxe>
//         PHP tags, Bitwise
//       </sintaxe>
//   </basico>
// </zce>
// XMLDATA;
// $no->loadXML($meuXml);
// $convertedToSimpleXML = simplexml_import_dom($no);
// print_r($convertedToSimpleXML);exit;

//Convertendo do simplexml para dom document DOMElement
// $meuXml = <<<XMLDATA
// <zce>
//   <basico>
//       <sintaxe>
//         PHP tags, Bitwise
//       </sintaxe>
//   </basico>
// </zce>
// XMLDATA;
// $simpleXMLElement = new SimpleXMLElement($meuXml);
// $docElement = dom_import_simplexml($simpleXMLElement);
// print_r($docElement);exit;

//Domdocument Xpath if we using load* functions and we make and xpath query, everything we change here, will change in the main document stored variable
// $xml  = '
// <biblioteca>
//   <livro  id="1">
//       <nome>PHP</nome>
//       <descricao>Aprenda  PHP</descricao>
//   </livro>
//   <livro  id="drao">
//       <nome>Drão</nome>
//       <descricao>Aprenda  PHP com o Drão</descricao>
//   </livro>
// </biblioteca>';
// $document  = new DOMDocument();
// $document->loadXML($xml);
// $xpath  = new DOMXpath($document);
// $elements = $xpath->query("//livro[contains(@id, 'drao')]");
//Multiplos elementos
// if ($elements->length) {
//   foreach ($elements as $element) {
//     print_r($element); echo PHP_EOL;
//   }
// }
//single ou indexed elements
// if ($elements->item(0)) {
//   $element = $elements->item(0);
//   print_r($element);
// }

//Mais exemplos
// $xml  = '
// <biblioteca>
//   <estante  identificador="draophp">
//     <livro  id="1">
//             <nome>PHP</nome>
//             <descricao>Aprenda  PHP</descricao>
//     </livro>
//     <livro  id="2">
//             <nome>Zend  framework</nome>
//             <descricao>Como utilizar  o Zend  framework</descricao>
//     </livro>
//   </estante>
//   <estante  identificador="D1">
//     <livro  id="5">
//             <nome>Bitwise</nome>
//             <descricao>Manipulação  de  bitwise para  ninjas</descricao>
//     </livro>
//   </estante>
// </biblioteca>';
// $document  = new DOMDocument();
// $document->loadXML($xml);
// $xpath  = new DOMXpath($document);
//Pega todos elementos livro
// $element = $xpath->query('//livro');
//Pega somente livros da estante do Drão
// $element = $xpath->query('//biblioteca/estante[@identificador="draophp"]//livro');
// print_r($element);

//Xpath no simplexml
// $texto  = '
// <biblioteca>
//   <livro  id="1">
//     <nome>PHP</nome>
//     <descricao>Aprenda  PHP</descricao>
//   </livro>
//   <livro  id="2" class="drão">
//     <nome>PHP</nome>
//     <descricao>Aprenda PHP com o Drão</descricao>
//   </livro>
// </biblioteca>';
// $xml  = simplexml_load_string($texto);
// $elementos  = $xml->xpath("/biblioteca/livro[contains(@class, 'drão')]");
// print_r($elementos);

//Json encode geralmente passamos arrays (indexados ou associativos) ou objeto, se passar objeto os valores só são encodados se for em propriedade publica, se for protegida, privada ou uma constante, os dados nao sao encodados 
// class test {
//   public $a = 1;
//   public $b = 2;
//   public $c = 3;
//   const CARAI = 4;
// }
// $jsonTest = new test();
// print json_encode($jsonTest);
// print json_encode([
//   'zcpe'  =>  [
//     'a' => 'basico <> "',
//     'b' => 'avancado',
//     'c' => ['drao' => 'monster', 'zica' => 'do pantano'],
//     'd' => ['malanderssan', 'dos objetos', 'a' => ['1']]
//   ]
// ], JSON_HEX_QUOT | JSON_HEX_TAG, 4);

//json decode - retorna um objeto se o segundo parametro nao for passado como true, se o segundo parametro for true retorna um array associativo
// print_r(json_decode('{"zcpe":{"a":"basico \u003C\u003E \u0022","b":"avancado","c":{"drao":"monster","zica":"do pantano"}}}', false));