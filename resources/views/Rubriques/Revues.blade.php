@extends('../Template.index')

@section('contenu')

    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <div class="row">
                    <h2 class="josefin-bold">La revue</h2>

                    <section class="col s8">

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-01.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXVI, 116ème année, N°1, février 2016</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#">AJOUTER AU PANIER</a>
                                    <a class="modal-trigger right" href="#revue01">EN SAVOIR +</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-04.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXV, 115ème année, N°3, Octobre 2015</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#">AJOUTER AU PANIER</a>
                                    <a class="modal-trigger right" href="#revue02">EN SAVOIR +</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-03.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXV, 115ème année, N°2, Juin 2015</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#">AJOUTER AU PANIER</a>
                                    <a class="modal-trigger right" href="#revue03">EN SAVOIR +</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-02.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXV, 115ème année, N°1, Février 2015</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#">AJOUTER AU PANIER</a>
                                    <a class="modal-trigger right" href="#revue04">EN SAVOIR +</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-05.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXIV, 114ème année, N°3, Décembre 2014</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#">AJOUTER AU PANIER</a>
                                    <a class="modal-trigger right" href="#revue05">EN SAVOIR +</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col s12">
                            <div class="card-image waves-effect waves-block waves-light col s4">
                                <img class="activator margin-10" src="media/revue-06.jpg">
                            </div>
                            <div class="card-content col s8">
                                <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                <p>CXIV, 114ème année, N° 2, Septembre 2014</p>
                                <span class="card-price grey-text text-lighten-1">50€</span>
                                <div class="card-action">
                                    <a href="#">AJOUTER AU PANIER</a>
                                    <a class="modal-trigger right" href="#revue06">EN SAVOIR +</a>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!-- Modal Structure -->
                    <div id="revue01" class="modal bottom-sheet">
                        <div class="modal-content">
                            <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : N°1, février 2016<i class="modal-action modal-close material-icons right">close</i></span>
                            <div class="border-right col s3 center">
                                <div class="col s12">
                                    <img src="media/revue-01.jpg" alt="couverture" >
                                </div>
                                <div class="col s12">
                                    <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                    <p>CXVI, 116ème année, N°1, février 2016</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div>
                                        <a href="#">AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s9">
                                <p>BOUYER Th., Description de nouvelles espèces et notes sur les priones africains (Coleoptera, Cerambycidae, Prioninae) : 4-12
                                    <br>THOMAES A., RENNESON J.-L., DRUMONT A., DESCHEPPER C. Range shift of Oxythyrea funesta Poda, 1761 in Belgium (Coleoptera, Cetoniidae) : 13-27
                                    <br>GIBEAUX C h. Corrigenda à l'Étude du genre Regobarrosia Watson , 1975, avec description d'espèces nouvelles (Lepidoptera, Erebidae, Arctiinae, Phaegopterini) (7 ème note) : 28
                                    <br>KARISCH T. Eine neue afrikanische Metallospora -Art (Lepidoptera, Geometridae, Ennominae) : 29-31
                                    <br>BOUYER Th., Description de nouvelles espèces de Macrotomini d'Afrique occidentale (Coleoptera, Cerambycidae, Prioninae, Macrotomini) : 32-38
                                    <br>VERHULT J.,WEISS J.-C. & STROOBANTS D. Voyage entomologique à la recherche des Hipparchia Fabricius , 1807 et des Gonepteryx Leach , 1815 des îles canariennes de Ténérife, La Gomera, El Hierro et La Palma (Lepidoptera, Rhopalocera, Arctiidae) : 39-55
                                    <br>KLEINFELD F. & PUCHNER A. Zwei Carabus -Neubeschreibungen aus der chinesischen Provinz Sichuan ( Pseudocranion, Neoplesius ) nebst einer Untersuchung zum typischen Fundort des C . ( Neoplesius ) lama Semenow , 1898 (Coleoptera, Carabidae, Carabini) : 56-66
                                    <br>CAVAZZUTI P. & KOZLOV A. Un Nuovo Procerus dell'Armenia meridionale e revisione dello status di Carabus ( Procerus ) elbursianus myskai Cavazzuti , 2004 (Coleoptera, Carabidae) : 67-71
                                    <br>FLOQUET Ph . Découverte et description de la forme rouge d' Agrias phalcidon excelsior Lathy , 1924, Brésil f. akai nov. Floquet , 2015 (Lepidoptera, Nymphalidae) : 72-73
                                    <br>MOUCHERON B. Données complémentaires concernant le Scolyte Xylechinus pilosus ( Ratzeburg , 1837) (Coleoptera, Curculionidae, Scolytinae) : 74-76
                                    <br>KARISCH T. Eineneue Xanthorhoe -Art vom Kivu (Lepidoptera, Geometridae, Larentiinae) : 77-79
                                    <br>BOUYER Th . Note sur une collecte de priones de Tanzanie (Coleoptera, Cerambycidae, Prioninae) : 80-82
                                    <br>KARISCH T. Zur Kenntnis von Prasinocyma germinaria ( Guenée , [1858]) (Lepidoptera, Geometridae) : 83-85
                                    <br>VITALI F. New Acalolepta from the Philippines (Coleoptera, Cerambycidae) : 86-91
                                    <br>Articles parus en 2015 : 92-93
                                    <br>Nouveaux taxons publiés en 2015 : 94</p>
                            </div>
                        </div>

                        <div class="footer-bottom-sheet col s12 grey darken-4">
                            <div class="white-text">
                                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                            </div>
                        </div>
                    </div>

                    <div id="revue02" class="modal bottom-sheet">
                        <div class="modal-content">
                            <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : N°3, Octobre 2015<i class="modal-action modal-close material-icons right">close</i></span>

                            <div class="border-right col s3 center">
                                <div class="col s12">
                                    <img src="media/revue-04.jpg" alt="couverture" >
                                </div>
                                <div class="col s12">
                                    <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                    <p>CXV, 115ème année, N°3, Octobre 2015</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div>
                                        <a href="#">AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s9">
                                <p>CARRIERE, J - Évaluation du statut écologique d’Acanthocinus aedilis Linné, 1758, pour le Département de la Lozère. Complément éthologique. (Coleoptera, Cerambycidae) : 180-188
                                    <br>BREVIGNON, C - Description de nouveaux taxa du genre Anteros Hübner, [1819] de Guyane française.
                                    (Lepidoptera, Riodinidae, Riodininae, Helicopini) : 189-194
                                    <br>VIVES, E - Cerambícidos nuevos o interesantes de Vietnam.
                                    (Coleoptera, Cerambycidae). (Pars II) : 195-200
                                    <br>MOLINO-OLMEDO, F- Redescripcion de la larva de Phalacrognathus muelleri (Macleay, 1855).
                                    (Coleoptera, Lucanidae) : 201-205
                                    <br>MULLER, A - Ergänzende Bemerkungen zur systematischen Stellung von Carabus (Macrothorax) morbillosus lampedusae Born, 1925. (Coleoptera, Carabidae, Carabini) : 206-208
                                    <br>GIBEAUX, C - Note sur les Pterophoridae du Guatémala
                                    (Lepidoptera, Pterophoridae, Ochyroticinae, Pterophorinae).
                                    Étude des Pterophoridae : 42ème note : 209-216
                                    <br>RAZOWSKI, J & KARISH, T - Records of Tortricidae (Lepidoptera) from Bioco Island : 217-233
                                    <br>FLOQUET, P - Note sur les populations d’Agrias aedon Hewitson, 1848 du Costa Rica. (Lepidoptera, Nymphalidae) : 234-238</p>
                            </div>
                        </div>

                        <div class="footer-bottom-sheet col s12 grey darken-4">
                            <div class="white-text">
                                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                            </div>
                        </div>
                    </div>

                    <div id="revue03" class="modal bottom-sheet">
                        <div class="modal-content">
                            <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : N°2, Juin 2015<i class="modal-action modal-close material-icons right">close</i></span>

                            <div class="border-right col s3 center">
                                <div class="col s12">
                                    <img src="media/revue-03.jpg" alt="couverture" >
                                </div>
                                <div class="col s12">
                                    <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                    <p>CXV, 115ème année, N°2, Juin 2015</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div>
                                        <a href="#">AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s9">
                                <p>TAUZIN, P.-H. ‒ Chorologie du complexe spécifique Protaetia (Potosia) cuprea Fabricius, 1775 en France (Coleoptera, Cetoniinae, Cetoniini) : 99-174</p>
                            </div>
                        </div>

                        <div class="footer-bottom-sheet col s12 grey darken-4">
                            <div class="white-text">
                                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                            </div>
                        </div>
                    </div>

                    <div id="revue04" class="modal bottom-sheet">
                        <div class="modal-content">
                            <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : N°1, Février 2015<i class="modal-action modal-close material-icons right">close</i></span>

                            <div class="border-right col s3 center">
                                <div class="col s12">
                                    <img src="media/revue-02.jpg" alt="couverture" >
                                </div>
                                <div class="col s12">
                                    <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                    <p>CXV, 115ème année, N°1, Février 2015</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div>
                                        <a href="#">AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s9">
                                <p>ATTAL S. & BÜCHE M. Symmachia aureus Attal, 2009 au Pérou, une troisième sous-espèce (Lepidoptera, Riodinidae, Symmachiini): 4-6
                                    <br>VITALI F. The first fossil of Ibidionini Thomson, 1860 from Dominican amber, with taxonomic notes on the tribe (Coleoptera, Cerambycidae) : 7-11
                                    <br>BOUYER Th. & DUCARNE R.Note sur les Iridana Aurivillius, 1920 (Lepidoptera, Lycaenidae) Etude sur les Lycaenidae : note n° 18 : 12-14
                                    <br>GIBEAUX C. Étude du genre Regobarrosia Watson, 1975, avec description d’espèces nouvelles (Lepidoptera, Erebidae, Arctiinae, Phaegopterini) (7ème note) : 15-39
                                    <br>CARRIERE J. Agapanthia (Synthapsia) kirbyi Gyllenhal, 1817 en Gévaudan Dynamique salvatrice sur Verbascum lychnitis L. ? (Coleoptera, Cerambycidae) : 40-52
                                    <br>KLEINFELD F. & PUCHNER A. Beitrag zur Kenntnis der Caraben aus den chinesischen Provinzen Qinghai und Sichuan mit drei Neubeschreibungen (Rhigocarabus, Pseudocranion, Eccoptopterus) (Coleoptera, Carabidae, Carabini) (Ergebnisse entomologischer Reisen, 78. Beitrag) : 53-64
                                    <br>VIVES E. New or interesting Cerambycidae from the Philippines. Revisión del género Pseudodoliops Schultze, 1934 (Pars XII). (Coleoptera, Cerambycidae, Lamiinae) : 65-73
                                    <br>BREVIGNON C. Description de nouveaux Mesosemiina de Guyane française (Lepidoptera, Riodinidae, Riodininae, Mesosemiini) (Troisième partie) : 74-81
                                    <br>COENEN F. Description d’un Argynnis nouveau de Chine : A. gibeauxi n. sp. (Lepidoptera, Nymphalidae, Heliconiinae) : 82-87
                                    <br>
                                    <br>Nouveaux taxons publiés en 2012 : 88
                                    <br>Nouveaux taxons publiés en 2013 : 89
                                    <br>Nouveaux taxons publiés en 2014 : 90
                                    <br>Articles parus en 2014 : 92</p>
                            </div>
                        </div>

                        <div class="footer-bottom-sheet col s12 grey darken-4">
                            <div class="white-text">
                                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                            </div>
                        </div>
                    </div>

                    <div id="revue05" class="modal bottom-sheet">
                        <div class="modal-content">
                            <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : N°3, Décembre 2014<i class="modal-action modal-close material-icons right">close</i></span>

                            <div class="border-right col s3 center">
                                <div class="col s12">
                                    <img src="media/revue-05.jpg" alt="couverture" >
                                </div>
                                <div class="col s12">
                                    <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                    <p>CXIV, 114ème année, N°3, Décembre 2014</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div>
                                        <a href="#">AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s9">
                                <p>VITALI, F. & GOUSSEY, F. New Acalolepta from the Solomon Islands (Coleoptera, Cerambycidae) : 222-226
                                    <br>XIBERRAS, S. & DUCAUD, P. Nouvelles synonymies dans le genre Typophyllum (Orthoptera, Tettigoniidae, Pseudophyllinae, Pterochrozini) : 227-244
                                    <br>GIBEAUX, C. & COENEN, F. Caractérisation de Toulgoetarctia Coenen & Gibeaux, 2014, nouveaux d’Amérique néotropicale (Lepidoptera, Erebidae, Arctiinae, Phaegopterini) (6ème note) : 245-259
                                    <br>DURANTE, A. & POTENZA, L. Novitates from Gabon (Erebidae, Arctiinae, Syntomini, Thyretina) : 260-263
                                    <br>BOUYER, Th. Description de deux nouvelles espèces de Dynastinae africains (Coleoptera, Scarabaeidae) : 264-268
                                    <br>FLOQUET, P. Variations chez Agrias amydon athenais Fruhstorfer, 1912 et description d’une forme nouvelle auriflamma f. nov. (Lepidoptera, Nymphalidae) : 269-270
                                    <br>LI, J., MÜLLER, A. & ZHANG, X. Über eine Aufsammlung von Carabus aus Nordkorea, Provinz Süd Hamgyong sowie Bemerkungen zur Carabus-Fauna Frankreichs : 271-273
                                    <br>MARKLUND, D. & MARKLUND, S. Description of two new species of Phytoecia (Pilemia) Fairmaire, 1864 from Eastern Turkey (Coleoptera, Cerambycidae, Phytoeciini) : 274-277</p>
                            </div>
                        </div>

                        <div class="footer-bottom-sheet col s12 grey darken-4">
                            <div class="white-text">
                                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                            </div>
                        </div>
                    </div>

                    <div id="revue06" class="modal bottom-sheet">
                        <div class="modal-content">
                            <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : N° 2, Septembre 2014<i class="modal-action modal-close material-icons right">close</i></span>

                            <div class="border-right col s3 center">
                                <div class="col s12">
                                    <img src="media/revue-06.jpg" alt="couverture" >
                                </div>
                                <div class="col s12">
                                    <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                    <p>CXIV, 114ème année, N° 2, Septembre 2014</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div>
                                        <a href="#">AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col s9">
                                <p>DRUMONT, A. Présentation d'une nouvelle donnée de capture pour Agapanthia (Epoptes) dahli (Richter, 1820) en Belgique (Coleoptera, Cerambycidae, Lamiinae) : 94-95
                                    <br>LASSALLE, B. Deux nouveaux Carabus L., 1758 de Sibérie et du Laos (Coleoptera, Carabidae) : 96-98
                                    <br>BERNAUD, D. & MURPHY, R. Analyse d'ouvrage Acraeinae of Malawi : 99-100
                                    <br>THIEREN, Y. Aperçu des Histeridae de la collection Warlet (Coleoptera, Histeroidea) : 101-104
                                    <br>MAES, K. V. N . New taxa of the subfamily Pyraustinae from the Afrotropical region (Pyraloidea, Crambidae, Pyraustinae) : 105-112
                                    <br>VERHULST, J. Troisième voyage entomologique au Ladakh : 113-125
                                    <br>ABADIE, E. I. A new species of Brachysiderus Waterhouse, 1881 from Mato Grosso state, Brazil (Coleoptera, Scarabaeidae, Dynastinae) : 126-127
                                    <br>VIVES, E. Dos nuevas especies de longicornios del Sudeste Asiático (Coleoptera, Cerambycidae, Cermabycinae) : 128-131
                                    <br>COENEN, F. & GIBEAUX, Ch .Description de Chrysomallos , genre nouveau dans la sous-famille des Arctiinae (Lepidoptera, Erebidae, Arctiinae, Phaegopterini) (5 e note) ( 1 ) : 132-138
                                    <br>MAES, K. V. N. Notes on the Crambidae of Africa with new synononyms and combinations. (Lepidoptera, Pyraloidea, Crambidae) : 139-143
                                    <br>WIESNER, J. Records of Tiger Beetles collected in Cambodia III (Coleoptera, Cicindelidae) (120th Contribution towards the knowledge of Cicindelidae) : 144-146
                                    <br>CAVAZZUTI, P. & KOZLOV, A. Nuove ed inattese sottospecie di Carabus (Procerus) dell'Anatolia meridionale. Descrizione di due nuovi taxa di Procerus bulgharmaadensis (Coleoptera, Carabidae) : 147-152</p>
                            </div>
                        </div>

                        <div class="footer-bottom-sheet col s12 grey darken-4">
                            <div class="white-text">
                                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                            </div>
                        </div>
                    </div>

                    <aside class="col s4">

                        <nav>
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field white">
                                        <input id="search" type="search" placeholder="Recherchez" required>
                                        <label for="search"><i class="material-icons grey-text text-darken-3">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>

                        <div class="margin-top-30">
                            <h5 class="josefin-bold">Options de tri</h5>
                        </div>

                        <form action="#">
                            <p>
                                <input name="group1" type="radio" id="test1" />
                                <label for="test1">Année 2016</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test2" />
                                <label for="test2">Année 2015</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test3" />
                                <label for="test3">Année 2014</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test4" />
                                <label for="test4">Année 2013</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test5" />
                                <label for="test5">Année 2012</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test6" />
                                <label for="test6">Année 2011</label>
                            </p>
                        </form>

                    </aside>

                    <div class="col s12">
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="bleu active"><a href="#!">1</a></li>
                            <li class="waves-effect bleu"><a href="#!">2</a></li>
                            <li class="waves-effect bleu"><a href="#!">3</a></li>
                            <li class="waves-effect bleu"><a href="#!">4</a></li>
                            <li class="waves-effect bleu"><a href="#!">5</a></li>
                            <li class="waves-effect bleu"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection