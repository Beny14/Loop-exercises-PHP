<?php
// Probleme if elseif else
// ............... 1 .............
/*
    Pe pagină există variabila $page. În variabilă, este permisă existenţa
    uneia din două valori pe baza cărora va fi încărcată pagina. Cele două
    valori sunt "index" şi "products". Dacă valoarea este "index", se
    încarcă pagina index.html, dacă valoarea este "products", se încarcă
    pagina products.html. Dacă nicio valoare nu coincide cu valoarea
    solicitată, se încarcă pagina login.html.
*/

    // $page = 'index';

    // if ($page == 'index') {
    //     $page = 'index.html';
    // }elseif($page == 'product') {
    //     $page = 'product.html';
    // }else{
    //     $page = 'login.html';
    // }
    // echo $page;

// ............... 2 .............
/*
    În sistemul pentru monitorizarea autoturismelor, există patru statusuri
    ale autoturismelor: în staționare, în mişcare, dispărut, necunoscut.
    Aceste statusuri sunt marcate cu cifrele 1, 2, 3 şi 4.
    În aplicaţie, intră ultimul status cunoscut al autoturismului, precum şi
    statusul curent al acestuia. Statusurile respective intră în variabilele
    $lastStatus şi $status:
    $lastStatus = 2;
    $status = 4;
    Trebuie să se atribuie valoarea variabilei $statusName. Acest nume va
    conţine reprezentarea textuală a statusului autoturismului (în mişcare,
    în staționare, necunoscut etc.).
    Astfel, trebuie să se respecte următoarea regulă: dacă ultima stare a
    autoturismului a fost "în mişcare", iar noul status este "necunoscut",
    noua stare trebuie să fie "dispărut".
    Variabila $statusName trebuie emisă la ieşire.

*/

    // $lastStatus = 2;
    // $status = 4;
    // $statusName = 'necunoscut';

    // if ($status == 1) {
    //     $statusName = 'staționare';
    // }elseif($status == 2){
    //     $statusName = 'miscare';
    // }elseif($status == 3){
    //     $statusName = 'disparut';
    // }elseif($status == 4){
    //     if($lastStatus == 2){
    //         $statusName = "disparut";
    //     }else{
    //         $statusName = "necunoscut";
    //     }
    // }
    // echo $statusName;

// ............. 3 ...............
/*
    La un magazin de mobilier de birou, proprietarii au stabilit reduceri în
    luna ianuarie pentru achiziţionarea scaunelor de birou, conform
    următoarelor reguli:
    Pentru mai puţin de 10 scaune cumpărate – nu există reducere;
    Pentru 10 – 49 scaune cumpărate – reducere de 5%;
    Pentru 50 – 99 scaune cumpărate – reducere de 10%;
    Pentru 100 de scaune cumpărate sau mai multe – reducere de 15%.
    Trebuie scris codul de programare care, folosind structurile if
    else, va calcula reducerile în momentul achiziţionării.
    Recomandare: utilizaţi operatorul de conjuncţie ( &&).
*/
    // $scaun = 15;

    // if ($scaun == 10) {
    //     $discount = 0;
    // }elseif($scaun >= 10 && $scaun <= 49){
    //     $discount = 5;
    // }elseif($scaun >= 50 && $scaun <= 99){
    //     $discount = 10;
    // }elseif($scaun >= 100){
    //     $discount = 15;
    // }

    // echo $discount;
    

// Probleme Switch
// ............... 1 ...............
/*
    Un exemplu concret de verificare a unei variabile, daca este egala 
    sau nu cu output-ul dat.
*/

    // $x = 2;

    // switch ($x) {
    //     case '1':
    //         echo 'X este egal cu 1.';
    //          break;
    //     case '2':
    //         echo 'X este egal cu 2.';
    //          break;
    //     default:
    //         echo 'X nu este egal nici cu 1 nici cu 2.';
    //          break;
    // }

// ................ 2 ..............
/*
    Se afişează descrierea zilei prin intermediul structurii switch-case. 
    Dacă este luni, descrierea este "prima zi din săptămână" etc.
*/
    // $day = 'MONDAY';

    // switch ($day) {
    //     case 'MONDAY':
    //             echo 'Prima zi din săptămână.';
    //         break;
    //     case 'TUESDAY':
    //             echo 'Astazi este TUESDAY.';
    //         break;
    //     case 'WEDNESDAY':
    //             echo 'Astazi este WEDNESDAY.';
    //         break;
    //     case 'THURSDAY':
    //             echo 'Astazi este THURSDAY.';
    //         break;
    //     case 'FRIDAY':
    //             echo 'Astazi este FRIDAY.';
    //         break;
    //     case 'Sambata':
    //             echo 'Astazi este Sambata.';
    //         break;
    //     case 'Duminica':
    //             echo 'Astazi este Duminica.';
    //         break;
        
    //     default:
    //         echo 'Aceasta denumire de zi, nu exista.';
    //         break;
    // }

// ............... 3 ................
/*
    Trebuie scris un cod care, pe baza variabilelor $operator, $operand1 şi
    $operand2, va executa operaţia de calcul şi va afişa rezultatul.
    În acest scop, trebuie să se folosească structura switch-case.
*/

    // $operator = '+';
    // $operator1 = 2;
    // $operator2 = 4;

    // switch ($operator) {
    //     case '-':
    //         $total =  $operator1 - $operator2;
    //          break;
    //     case '+':
    //         $total =  $operator1 + $operator2;
    //          break; 
    //     case '*':
    //         $total =  $operator1 * $operator2;
    //          break;
    //     case '/':
    //         $total =  $operator1 / $operator2;
    //          break;
    //     default:
    //         echo 'Unknown result.';
    //          break;  
    // }

    // echo 'Rezultatul este calculului ' . $operator1 . ' ' . $operator . ' ' . $operator2 . ' este: '  . $total;

// Probleme For loop
// ................ 1 .............
/*
    Un exemplu concret de blucla care trece printr-un array si afiseaza valorile.
*/
 
    // $colors = array('red', 'green', 'blue', 'yellow','white');

    // for ($i = 0; $i < sizeof($colors); $i++){
    //     $br = $i + 1;
    //     echo "Value of element $br is $colors[$i].<br>";
    // }

// .............. 2 .............. 
/*
    Un exemplu concret de bucla incorporata.
*/

    // for($i = 0; $i < 10; $i++){
    //     for($u = 0; $u < 10; $u++){
    //         echo $u . "<br>";
    //     }
    // echo "--- $i <br>";
    // }

// ............ 3 ................
/*
    În acest exemplu, i-am transmis buclei să fie executată atâta timp cât
    variabila i este mai mică decât zece cu increment 1. Iar apoi în bloc ne-am 
    răzgândit şi i-am spus că, în cazul în care counter-ul este mai mare
    decât 5 (decat 6), acesta să obţină valoarea 10. 
*/

    // for($i = 0; $i < 10; $i++){
    //     if($i > 5){
    //         $i = 10;
    //     }
    //     echo $i . "<br>";  
    // }

// .............. 4 ..............
/*
    În acest exemplu, i-am transmis buclei să fie executată atâta timp cât
    variabila i este mai mică decât zece cu increment 1. Iar apoi în bloc ne-am 
    răzgândit şi i-am spus că, în cazul în care counter-ul este mai mare
    decât 5 (decat 6), acesta să se opreasca. (break)
*/

    // for($i = 0; $i < 10; $i++){
    //     if($i > 5){
    //         break;
    //     }
    //     echo $i;
    // }

// ................ 5 ............

    // $numCol = 2;
    // $numRow = 10;

    // for($i = 0; $i < $numCol; $i++){
    //     for($u = 0; $u < $numRow; $u++){
    //         echo 'x';
    //     }
    //     echo '<br>';
    // }
    
// .............. 6 ...............
/*
    În aplicaţie, intră un anumit număr care se află în variabila
    $selectedNumber. Trebuie să se facă o buclă care se execută de atâtea
    ori cât este valoarea variabilei $selectedNumber şi cu ocazia fiecărei
    iteraţii creşte la exponentul egal cu numărul iteraţiei curente a buclei
    (primul circuit al buclei ^1, al doilea circuit ^2...).

*/

    // $selectedNumber = 20;

    // for($i = 1; $i <= $selectedNumber; $i++){
    //     echo pow($selectedNumber, $i) . "<br>";
    // }

// ............. 7 ................
/*
    Pe baza următoarelor variabile:
    $a = 5;
    $b = 8;
    şi a buclelor încorporate, trebuie să se obţină următoarea ieşire:
    012345678
    100000008
    200000008
    300000008
    412345678
*/

    // $a = 5;
    // $b = 8;

    // for($i = 0; $i < $a; $i++){
    //     echo $i;
    //     for ($u = 0; $u < $b; $u++) { 
    //         if ($u == $b || $i == 0 || $i == $a-1) {
    //             echo $u;
    //         }else{
    //             echo '0';
    //         }
    //     }
    // echo "<br>";
    // }

// ............ 8 ...............
/*
    În aplicaţie, intră două variabile:
    $numberOfCharacters = 50;
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    Trebuie creată o aplicaţie care generează parola pe baza setului de
    caractere atribuit şi a numărului. Parola trebuie să conţină majuscule şi
    minuscule din lista de caractere $characters. De asemenea, parola
    trebuie să aibă atâtea caractere câte sunt indicate în variabila
    $numberOfCharacters.
    Parola trebuie emisă la ieşire.
*/

    // $numberOfCharacters = 10;
    // $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // $allCharacters = $characters . strtolower($characters);
    // $pass = "";

    // for($i = 0; $i < $numberOfCharacters; $i++){
    //     $pass .= $allCharacters[rand(0, strlen($allCharacters)-1)];
    // }
    // echo $pass;

// Probleme foreach
// ............... 1 .............
/*
    La fiecare trecere prin buclă, valoarea elementului curent este atribuită
    variabilei $value. Această valoare se scrie apoi în dreptul variabilei
    $colors, împreună cu un caracter gol. La final, rezultatul va fi:
    Colors contained in array: red green blue.
*/

    // $color = '';
    // $arrays = ['red', 'yellow', 'green', 'purple'];

    // foreach($arrays as $array){
    //     $color .= $array . '<br>';
    // }

    // echo $color;

// Probleme while, do ... while
// ............. 1 .............
/*
    Variabila $number primeşte la începutul codului valoarea 5. Apoi, este
    verificată condiţia ($number >= 2). Fiindcă această condiţie este
    îndeplinită, programul începe să execute blocul de instrucţiuni din
    interiorul buclei while. În interiorul acestui bloc, se scrie numărul
    curent, care apoi se micşorează cu 1. După prima trecere prin blocul
    de instrucţiuni, se verifică încă o dată condiţia. Se va repeta
    executarea instrucţiunilor din interiorul buclei atâta timp cât condiţia
    este corectă.
*/
    // $number = 5;

    // while ($number >= 2){
    //     echo $number . "<br/>";
    //     $number -= 1;
    // }

// ............ 2 ..............
/*
    Codul care urmează mai jos este similar cu unul dintre conturile
    anterioare, însă de această dată blocul de cod se execută o singură
    dată, indiferent de condiţie.
*/
    // $number = 5;
    // do{
    //     echo $number . "<br/>";
    //     $number -= 1;
    // }while($number >= 2);

// ............. 3 ..............
/*
    Cu ajutorul buclei, trebuie scris codul care va afişa codul html în
    variabila $html cel puţin o dată, în timp ce numărul maxim de ori
    trebuie menţionat în variabila $divNum.
    Cu ocazia fiecărei iteraţii, în tagul div în loc de semnul #I# va fi
    numărul iteraţiei, în timp ce în loc de semnul #S# trebuie să fie
    stilizarea specificată în variabila $style.
*/
    // $html = <<<HTML
    //     <div style="#S#"> #I# </div>
    // HTML;
    // $divNum = 10;
    // $style = "border: 1px solid black; background: yellow; margin: 5px; padding: 4px;";
    // $html = str_replace("#S#", $style, $html);
    // $i = 1;

    // do{
    //     echo str_replace("#I#", $i, $html);
    //     $i++;
    // }while ($i - 1 < $divNum);

// ............. 4 ..............
/*
    Trebuie scris un program care va aduna numerele de la 1 la 10 şi va
    scrie  le după fiecare adunare a numărului cu suma, iar la final va
    scrie suma tuturor sumelor (Total) din perioada precedentă a adunării.
    Trebuie să se folosească bucla do...while. După executare, programul
    trebuie să scrie următorul conţinut:
    0 + 1 este egal cu : 1
    1 + 2 este egal cu : 3
    3 + 3 este egal cu : 6
    6 + 4 este egal cu : 10
    10 + 5 este egal cu : 15
    15 + 6 este egal cu : 21
    21 + 7 este egal cu : 28
    28 + 8 este egal cu : 36
    36 + 9 este egal cu : 45
    45 + 10 este egal cu : 55
*/
    // $amount = 0;
    // $number = 0;
   
    // do{
    //     $number++;
    //         echo $amount. " + ". $number. " este egal cu : ";
    //     $amount = $amount + $number;
    //         echo $amount. "<br />";
    // }while ( $number != 10 );
   
    // echo "<br />";
    // echo "Amount all numbers: ". $amount;

// ............. 5 .............
/*
    Trebuie să se facă un tabel ca în imaginea de mai jos. Programul
    trebuie să calculeze paşii preţurilor, comparativ cu »Cantitate * Preţ« în
    funcţie de paşii de modificare a cantităţilor. Valoarea iniţială este 10 şi
    merge până la 100, cu pasul de mărire cu 10. Suportul pentru
    formatarea tabelului (codul HTML) se află în partea marcată cu roşu a
    rezolvării:
    Cantitate   Pret
    10          50
    20          100
    30          150
    40          200
    50          250
    60          300
    70          350
    80          400
    90          450
    100            500

*/
    // $price = 5;
    // $counter= 10;

    // echo "<table border = \"1\" align = \"center\" >";
    //     echo "<tr><th> Quantity</th>";
    //     echo "    <th>Price</th>
    //           </tr>";

    //     while ($counter <= 100){
    //         echo "<tr> <td>";
    //             echo $counter;
    //         echo "</td> <td>";
    //             echo $price * $counter;
    //         echo "</td> </tr>";
    //             $counter = $counter + 10;
    //     }
    // echo "</table>";

    echo "<h1 style='text-align:center;'>Exemplele sunt puse in '<span style='color:green;'>comentarii</span>', nu se va afisa nimic pe pagina, deschide-ti fisierul cu ajutorul unui editor code!</h1>";
        echo "<h1 style='text-align:center;'>Exemple: if else, if elseif else, switch case, for, foreach, while, do...while.</h1>"
?>
