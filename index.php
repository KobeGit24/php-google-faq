<!--GOAL:
Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo.
Snack 6
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<!--
 <div style="background-color:#ccc; border:3px solid black; padding:30px;">

   <h2 style="color:red;">Snack 1</h2>
   <hr>
   <br>
   <b>

     <?php

        $arrNBA = [
          "match1" => [
            "team1" => "Lakers",
            "team2" => "Celtic",
            "pt1" => 80,
            "pt2" => 75
          ],
          "match2" => [
            "team1" => "Knicks",
            "team2" => "Heat",
            "pt1" => 92,
            "pt2" => 83
          ],
          "match3" => [
            "team1" => "Rockets",
            "team2" => "Clippers",
            "pt1" => 102,
            "pt2" => 99
          ],
          "match4" => [
            "team1" => "Suns",
            "team2" => "Spurs",
            "pt1" => 112,
            "pt2" => 105
          ],
          "match5" => [
            "team1" => "Magic",
            "team2" => "Bulls",
            "pt1" => 91,
            "pt2" => 99
          ],
        ];

        foreach ($arrNBA as $value) {
          echo $value["team1"] . " - " . $value["team2"] . " | " . $value["pt1"] . " - " . $value["pt2"];
          echo "<br><br>..........<br><br>";
        }

        // $keys = array_keys($arrNBA);
        //
        // for ($i=0; $i < count($keys); $i++) {
        //
        //   $key = $keys[$i];
        //   $m = $arrNBA[$key];
        //   echo $m["team1"] . " - " . $m["team2"] . " | " . $m["pt1"] . " - " . $m["pt2"];
        //   echo "<br><br>..........<br><br>";
        //
        // }

     ?>

   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 2</h2>
   <hr>
   <b>

     <?php

        $name = $_GET["name"];
        $nameLong = strlen($name);
        echo $name;
        echo "<br>........<br>";
        $mail = $_GET["mail"];
        $isDot = strpos($mail,".");
        $isAt = strpos($mail,"@");
        echo $mail;
        echo "<br>........<br>";
        $age = $_GET["age"];
        $isInt = is_numeric($age);
        echo $age;
        echo "<br>........<br>";
        if ($nameLong>3 && $isDot !== false && $isAt !== false && $isInt) {
          echo "Accesso riuscito";
        } else {
          echo "Accesso negato";
        }
      ?>

   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 3</h2>
   <hr>
   <br>

   <b>
     <?php

        $posts = [

          '10/01/2019' => [
          [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
          ],
          [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
          ],
          ],
          '10/02/2019' => [
          [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
          ]
          ],
          '15/05/2019' => [
          [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
          ],
          [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
          ],
          [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
          ]
          ],
        ];

        foreach ($posts as $key => $value) {

          echo $key;
          echo "<br>";

          foreach ($value as $p) {

            echo $p["title"];
            echo "<br>";
            echo $p["author"];
            echo "<br>";
            echo $p["text"];
            echo "<br>--------<br>";
          }

          echo "<br><br>";
        }
      ?>
   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 4</h2>
   <hr>
   <b>

     <?php

        $a = [];
        while (count($a) < 15) {
          $numRan = rand(1,100);
          if (!in_array($numRan, $a)) {
            $a[] = $numRan;
          }
        }
        var_dump($a);
      ?>

   </b>
 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 5</h2>
   <hr>
   <br>

   <b>

     <?php

        $p = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        $y = explode(".", $p);

        foreach ($y as $value) {

          if (!empty($value)) {

            echo "<p>" . trim($value) . ".</p>";
          }
        }

        // for ($i=0; $i < count($y) - 1; $i++) {
        //
        //   echo "<p>" . trim($y[$i]) . ".</p>";
        // }

      ?>

   </b>

 </div>

 <div style="background-color:#ccc; border:3px solid black; padding:20px;">

   <h2 style="color:red;">Snack 6</h2>
   <hr>
   <br>

   <b>

     <?php

     $db = [
       'teachers' => [
         [
           'name' => 'Michele',
           'lastname' => 'Papagni'
         ],
         [
           'name' => 'Fabio',
           'lastname' => 'Forghieri'
         ]
       ],
       'pm' => [
         [
           'name' => 'Roberto',
           'lastname' => 'Marazzini'
         ],
         [
           'name' => 'Federico',
           'lastname' => 'Pellegrini'
         ]
       ]
     ];

     foreach ($db as $key => $value) {

       echo $key;

       foreach ($value as $p) {

         if ($key === 'teachers') {
           echo '<div style="background-color:red;">' . $p["name"] . " " . $p["lastname"] . '</div>';
         } else if($key === 'pm') {
           echo '<div style="background-color:green;">' . $p["name"] . " " . $p["lastname"] . '</div>';
         }
       }

       echo "<br>";
     }

     ?>


   </b>

 </div>

<div style="background-color:#ccc; border:3px solid black; padding:20px;">

  <h2 style="color:red;">Snack 7</h2>
  <hr>
  <br>

  <b>

    <?php

      $voti = [
        'Mario Rossi' => [
          5, 7, 9, 5, 5, 6, 7, 8
        ],
        'Francesca Bianchi' => [
          9, 10, 9, 9, 8, 9, 10, 10
        ]
      ];
      foreach ($voti as $name => $v) {
        echo $name . ": ";
        // VERSIONE 1
        // $sum = 0;
        // foreach ($v as $voto) {
        //
        //     $sum += $voto;
        // }
        // $avg = $sum / count($v);
        // VERSIONE 2
        $avg = array_sum($v) / count($v);
        echo $avg;
        echo "<br>";
      };
    ?>

  </b>

</div> -->

<div style="padding:15px; font-family: sans-serif;">

  <div style="display:flex; justify-content: flex-start; align-items: center;">
    <img style="width:120px; height:60px; margin-right: 5px;" src="data:image/png;base64,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">
    <span style="margin-left: 5px; font-size: 22px; color: #5f6368;">Privacy e termini</span>
  </div>
  <div style="display: flex; justify-content: space-between; align-items: center; padding: 0 12px;">
    <ul style="display: flex; justify-content: space-between; list-style-type: none; width: 40%; padding: 0;">
      <li style="cursor:pointer; color: #5f6368; font-size: 15px;">Introduzione</li>
      <li style="cursor:pointer; color: #5f6368; font-size: 15px;">Norme sulla privacy</li>
      <li style="cursor:pointer; color: #5f6368; font-size: 15px;">Termini di servizio</li>
      <li style="cursor:pointer; color: #5f6368; font-size: 15px;">Tecnologie</li>
      <b><li style="color:#3367d6; cursor:pointer; border-bottom: 3px solid #3367d6; padding: 5px;">Domande frequenti</li></b>
    </ul>
    <div style="cursor:pointer; color: #5f6368; font-size: 18px; font-weight: bold;">
      Account Google
    </div>
  </div>
  <hr>
  <div style="padding: 30px; margin: 15px auto; width: 50%;">

    <?php

      $faq = [
        "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" =>
          "La recente <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.<br><br>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br><br>Per presentare una richiesta di rimozione, compila questo <a href='#'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.<br><br>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br><br>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",

        "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" =>
          "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.<br><br>
          Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.<br><br>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'>Centro Google per la sicurezza online</a>.<br><br><a href='#'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",

        "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?" =>
          "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='#'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='#'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.",

        "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?" =>
          "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='#'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='#'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
      ];

      foreach ($faq as $q => $a) {
        ?>
        <h2 style="color: #3c4043; font-size: 24px; line-height: 32px; font-family: 'Google Sans',sans-serif;">
          <?php echo $q ?>
        </h2>
        <p style="color: rgba(0,0,0,0.87); font-family: Roboto,arial,sans-serif; font-size: 14px; font-weight: 400; letter-spacing: .2px; line-height: 24px;">
          <?php echo $a ?>
        </p>
        <?php
      };
    ?>
  </div>
</div>
