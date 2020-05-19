<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php google faq | Francesco Scarniglia</title>
</head>
<body>
  <!-- Descrizione
  Riscrivere questa pagina del sito google https://policies.google.com/faq
  Ci sono diverse domande con relative risposte. Gestire il “Database” (array) e la visualizzazione di queste domande e risposte con PHP.
  Non preoccupatevi dei link presenti nel testo delle risposte -->

  <?php
  $faq = [
    'question1' => [
      'title_question' => 'Titolo',
      'text_question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    ],
    'question2' => [
      'title_question' => 'Titolo',
      'text_question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    ],
    'question3' => [
      'title_question' => 'Titolo',
      'text_question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    ],
    'question4' => [
      'title_question' => 'Titolo',
      'text_question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ]
  ];

  // $result = array_merge_recursive($faq['question1'],$faq['question2']);
  // print_r($result);
  ?>


  <ul>
    <?php
      foreach($faq as $key => $post) { ?>
        <li>
          <?php echo $key; ?> <br>
          <?php
          foreach ($post as $data) { ?>
            <h2><?php echo $data['title_question']; ?> </h2>
            <p><?php echo $data['text_question']; ?></p>
          <?php
            }
           ?>
        </li>

    <?php
      }
     ?>
  </ul>





  </script>
</body>
</html>
