<link rel="stylesheet" href="src/components/page/clients/client-documents/client-documents.css">
<script src="src/components/page/clients/client-documents/client-documents.js"></script>

<section class="client-docs">
  <?php
  require_once 'src/components/ui/card-docs/card-docs.php';
  $list = [
    [
      'title' => 'Перечень документов для юридических лиц',
      'link' => '/real/path/document1.pdf',
      'show' => true,
      'dowland' => true,
    ],
    [
      'title' => 'Перечень документов для ИП',
      'link' => '/real/path/document1.pdf',
      'show' => true,
      'dowland' => true,
    ],
    [
      'title' => 'Договор лизинга',
      'link' => '/real/path/document1.pdf',
      'show' => true,
      'dowland' => true,
    ],
    [
      'title' => 'Договор купли-продажи',
      'link' => '/real/path/document1.pdf',
      'show' => true,
      'dowland' => true,
    ]
  ];
  echo generateDynamicCardDocs($list);
  ?>

</section>