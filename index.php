<!-- INSEREZ l'html -->



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JW Corp - Blockchain Solutions</title>
    <link rel="stylesheet" href="sitejwcorp.css">
</head>
<body>
<section class="texte">
        <div class="premier">
            <img src="LOGO SOLUTION BLANCFichier 11.svg" alt="" class="logo">
            
        </div> <br><br>
        <div class="deuxieme">
            <span>
            <h2>
                PAGE DE MAINTENANCE: NOUS METTONS À JOUR LE SITE...
            </h2>
            <span>
                Vous souhaitez prendre contact ? Vous avez un projet Blockchain et un besoin d'accompagnement ? Un retour à nous faire ? <br><br> Laissez nous votre message nous reviendrons vers vous au plus vite !
            <br> <br><br>
            </span>
                <div><!-- ===== Formulaire à insérer ici ===== -->
                    <div>
                         
                        <form method="post"> <!-- </form> a mettre peut etre -->
                
                        <div class="form">
                            <div class="title"></div> <!-- Titre au dessus du formulaire-->
                            <div class="subtitle"></div>
                
                            <div class="input-container ic2">
                              <input id="email" class="input" type="text" name="Email" placeholder=" " />
                              <div class="cut cut-short"></div>
                              <label for="email" class="placeholder">Email</label>
                            </div>
                            <div class="input-container ic1">
                                <textarea id="lastname" class="trucmuche" type="text" name="Message" placeholder=" "></textarea>
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">Votre message</label>
                                <!-- <textarea id="lastname"  
                                rows="5" cols="33" class="placeholder">
                                It was a dark and stormy night...
                                </textarea> -->
                              </div>
                            <button type="text" class="submit" name="envoyer">Envoyer</button>
                          </div>
                        </form>
                        <?php include 'formulaire.php' ?>
                    </div>
                </div>
        </div>
    </section>
    <footer>
        <div class="limageu"> <!-- IMAGE JW SANS DESC-->
            <img src="logojwblancsansdesc.svg" alt="" class="limage">
        </div>
        <div class="leszommes"> <!-- DIV CLASS LESZOMMES-->
            <div class="leszommesun">
                <strong class="contact">
                Tour CB21 - La Défense <br>
                16 Place de l'iris <br>
                92400 Courbevoie, France <br>
                <span>
                Tél: <a href="tel:06 18 28 62 67" class="tel">06 18 28 62 67</a> / <a href="tel:07 70 07 84 84" class="tel">07 70 07 84 84</a><br>
                Email: <a href="mailto: contact@jwcorp.fr"class="mail">contact@jwcorp.fr</a> 
                </span>
                </strong>
            </div>
            <div class="leszommesdeux">
                <strong class="listeservices">
                    <!-- CLASS LISTESERVICES POUR ESPACES ENTRE LIGNES UNIQUEMENT -->
            
                    Nos services <br> 
                
                
                <ul class="listchevron">
                    <!-- LISTCHEVRON CLASS UNIQUEMENT POUR LE TYPE DE TIRET -->
                    <li>
                        Développement de smart-contracts (NFTs & Tokens)
                    </li>    
                    <li>
                        Audit de smart-contracts
                    </li>
                    <li>
                        Accompagnement en intégration Blockchain
                    </li>
                </ul>
                </strong>
            </div>
        </div> <!-- DIV CLASS LESZOMMES-->
    </footer>
</body>
</html>

