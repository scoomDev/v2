<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Article;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('Je vous souhaite la bienvenue !');
        $article1->setContent('<p style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Toujours dans le but de partager ma passion pour le 
        jeux vid&eacute;o, j&rsquo;ai d&eacute;cid&eacute; d&rsquo;ouvrir ce site que l&rsquo;on m&rsquo;a propos&eacute; de me d&eacute;velopper.<br /></span>Ici 
        vous trouverez des articles principalement sur le jeux vid&eacute;o, mais d&rsquo;autres th&egrave;mes peuvent &eacute;galement &ecirc;tre abord&eacute;s 
        de mani&egrave;re ponctuelle. Avis, news, tests (m&ecirc;me si je n&rsquo;aime pas trop le terme) et autres dossiers seront au rendez-vous.<br /><br />
        <span style="font-weight: 400;">Je ne sais pas encore &agrave; quelle fr&eacute;quence je publierais car la r&eacute;daction prend du temps, d&rsquo;autant 
        plus que je d&eacute;bute encore dans le domaine. Mais j\'essaierai d&rsquo;en ajouter le plus r&eacute;guli&egrave;rement possible, en fonction de mon emploi 
        du temps mais aussi de l&rsquo;actualit&eacute;.<br /></span><span style="font-weight: 400;">Niveau r&eacute;daction je n&rsquo;ai aucune formation dans le 
        domaine, pardonnez donc mon manque d&rsquo;exp&eacute;rience si vous le ressentez. Mais c&rsquo;est en forgeant que l&rsquo;on devient forgeron ! 
        N&rsquo;h&eacute;sitez pas &agrave; me faire vos retours, je ferais mon maximum pour m&rsquo;am&eacute;liorer et vous pr&eacute;senter des articles de 
        qualit&eacute; croissante.<br /><br /></span><span style="font-weight: 400;">Un syst&egrave;me de tags a &eacute;t&eacute; mis en place. En effet, chaque 
        article a des tags qui permettent de les identifier. Gr&acirc;ce &agrave; cela, lorsque vous cliquez sur un tag cela vous affiche la liste de tous les 
        articles le contenant !<br /><br /></span><span style="font-weight: 400;">Vous pouvez &eacute;galement ajouter des commentaires sur chaque post. 
        N&rsquo;h&eacute;sitez donc pas &agrave; partager votre avis sur le sujet ou autres remarques. Je vous demande juste de <span style="text-decoration: 
        underline;"><strong>rester respectueux et courtois</strong></span>, je me r&eacute;serve le droit de masquer les commentaires jug&eacute; 
        insultant ou comportant tout autres sujets qui n&rsquo;ont rien &agrave; faire ici (menace, racisme, etc&hellip;).<br /></span><span style="font-weight: 
        400;">Vous avez aussi la possibilit&eacute; de signaler un commentaire, il pourra alors &ecirc;tre examin&eacute; pour &ecirc;tre masqu&eacute; ou non.
        <br /></span><span style="font-weight: 400;"><span style="text-decoration: underline;"><strong>Les publicit&eacute;s sont &eacute;galement interdites.
        </strong></span><br /><br /></span><span style="font-weight: 400;">Parmi les pages disponibles en en-t&ecirc;te, une page &ldquo;Contact&rdquo; 
        qui vous permet de m&rsquo;envoyer un mail directement. La page &ldquo;A propos&rdquo; sera quant &agrave; elle aliment&eacute;e un peu plus tard.
        <br /><br /></span><span style="font-weight: 400;">Sur ce bonne lecture !</span></p>');
        $article1->setAuthor('Zhato');
        $article1->setCreatedAt(new \DateTimeImmutable('2018-04-12'));
        $article1->setUpdatedAt(new \DateTimeImmutable());
        $article1->setImage('test.jpg');
        $article1->setSlug('je-vous-souhaite-la-bienvenue');
        $article1->setIsPublished(true);

        $article2 = new Article();
        $article2->setTitle('Metroid Samus Returns : Retour de l’être aimé ?');
        $article2->setContent('<div style="text-align: justify; text-indent: 20px;"><strong>25 ans apr&egrave;s la sortie du jeu original, Nintendo nous propose de revivre l&rsquo;aventure de Metroid II : 
            Return of Samus &agrave; travers ce remake sorti le 15 septembre 2017 sur 3DS et d&eacute;velopp&eacute; par MercurySteam. Un grand retour pour l\'h&eacute;ro&iuml;ne Samus Aran qui, depuis Metroid : 
            Other M en 2010, ne figurait qu&rsquo;en guise de guest-star dans d&rsquo;autres jeux de la firme au plombier comme Smash Bros.</strong></div>
        <div style="text-align: justify;"><strong>Je dois bien avouer qu&rsquo;&agrave; l&rsquo;annonce de ce remake j&rsquo;ai &eacute;t&eacute; assez sceptique. MercurySteam devait populariser sans doute 
        l&rsquo;&eacute;pisode le moins connu de la s&eacute;rie. Remettre au go&ucirc;t du jour un jeu riche et ambitieux mais limit&eacute; par les capacit&eacute;s techniques de la Game Boy s&rsquo;av&egrave;re 
        &ecirc;tre une lourde t&acirc;che pour le studio espagnol. D&rsquo;autant plus qu&rsquo;il n&rsquo;avait pas une grande exp&eacute;rience en mati&egrave;re d&rsquo;action-plateforme 2D. En effet leur 
        seul jeu du style &eacute;tait <em>Castlevania: Lords of Shadow - Mirror of Fate</em> sur 3DS, jeu dont les avis sont assez partag&eacute;s. Nintendo a-t-il mis&eacute; sur le bon poulain pour ce 
        remake ?</strong></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Nous incarnons donc Samus Aran, chasseuse de primes, sortie victorieuse de sa mission sur la plan&egrave;te 
        Z&egrave;bes, stoppant ainsi la menace des Pirates de l&rsquo;espace voulant mener une guerre bact&eacute;riologique gr&acirc;ce &agrave; une esp&egrave;ce extraterrestre appel&eacute;e Metroid 
        issu de la plan&egrave;te SR388. Suite &agrave; cela, la f&eacute;d&eacute;ration galactique d&eacute;cide d&rsquo;envoyer une sonde sur ladite plan&egrave;te afin de s&rsquo;assurer qu&rsquo;aucun 
        d&rsquo;entre eux ne soit encore vivant. H&eacute;las, peu de temps apr&egrave;s son envoi, la f&eacute;d&eacute;ration perd toutes traces de la sonde, ainsi que celle de l&rsquo;&eacute;quipe 
        envoy&eacute;e apr&egrave;s cette disparition. Ce n&rsquo;est qu&rsquo;apr&egrave;s avoir missionn&eacute; un groupe de forces sp&eacute;ciales qu&rsquo;elle parvient &agrave; obtenir quelques 
        donn&eacute;es sur la plan&egrave;te avant de dispara&icirc;tre &eacute;galement, indiquant donc que les Metroid sont toujours en vie. C&rsquo;est alors qu&rsquo;ils vont engager Samus afin 
        d&rsquo;&eacute;radiquer l&rsquo;esp&egrave;ce une bonne fois pour toutes.</span></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-align: center;"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" 
        src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-opening-1.jpg" alt="intro Metroid Samus Returns - Zhato.fr" /></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Le premier constat que l&rsquo;on peut faire est que MercurySteam a fait un travail de tr&egrave;s 
        bonne qualit&eacute; du point de vue artistique. Les d&eacute;cors sont assez jolis et fourmillent de d&eacute;tails. La musique quant &agrave; elle est assez discr&egrave;te la plupart 
        du temps, mais cela apporte un gros plus &agrave; l&rsquo;ambiance du jeu. Son absence accentue cette tension &agrave; explorer seul une plan&egrave;te inconnue regorgeant de cr&eacute;atures 
        mortelles, tandis que des morceaux bien plus p&ecirc;chus et remarquables viendront agr&eacute;menter nos face-&agrave;-face avec les boss du jeu. Un gros travail a &eacute;t&eacute; fait sur 
        la mise en sc&egrave;ne. De l&rsquo;introduction &agrave; la sc&egrave;ne finale, le jeu nous propose plusieurs petites sc&egrave;nes renfor&ccedil;ant l&rsquo;immersion : que ce soit les 
        sc&egrave;nes d&rsquo;ascenseur rappelant celles des Metroid Prime (m&ecirc;me si elles souffrent de quelques ralentissements), les quelques s&eacute;quences surprises, ou encore les sc&egrave;nes 
        suivant un contre sur un boss un peu &agrave; la mani&egrave;re d&rsquo;un QTE (Quick Time Event).</span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;"><img class="materialboxed img-top-left" 
        src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-contre-metroid.jpg" alt="Metroid Samus Return contre - zhato.fr" width="100%" height="auto" />Ce dit contre, qui est l&rsquo;une 
        des principales nouveaut&eacute;s apport&eacute;es au gameplay de la s&eacute;rie, va permettre &agrave; Samus de contrecarrer une attaque rapide d&rsquo;un ennemi permettant ensuite de lui 
        assigner quelques lasers ou missiles en guise de contre-attaque. Certes l&rsquo;id&eacute;e est plaisante et tr&egrave;s bien mise en sc&egrave;ne, mais je ne vous cache pas mon impression 
        de &ldquo;simplification&rdquo; du jeu. Pour pas mal de boss, il vous suffira d&rsquo;attendre le bon moment pour y glisser un contre et pouvoir lui placer une rafale de missile sans trop 
        d&rsquo;efforts. De m&ecirc;me pour les ennemis de bases : entre le choix de devoir tirer jusqu&rsquo;&agrave; une dizaine de fois sur un monstre pour le tuer ou bien d&rsquo;attendre sagement 
        de le contra-attaquer et le vaincre d&rsquo;un seul coup, le choix est vite fait. D&rsquo;autant plus que les r&eacute;compenses seront plus grandes en proc&eacute;dant ainsi, notamment 
        en Aeion, une &eacute;nergie permettant d&rsquo;utiliser des capacit&eacute;s tel qu&rsquo;un scan des environs. </span></div>
        <div style="text-align: justify;"><span style="font-weight: 400;">Et c&rsquo;est bien l&agrave; un reproche que j&rsquo;ai pu faire au jeu : sa difficult&eacute; un peu l&eacute;g&egrave;re 
        &agrave; mon go&ucirc;t. Je dirais que l&rsquo;ajustement de la difficult&eacute; a &eacute;t&eacute; fait essentiellement sur la quantit&eacute; de vie des monstres et leurs d&eacute;g&acirc;ts. 
        Certains pourront dire que si ce contre rend le jeu tellement facile, pourquoi je ne m&rsquo;en priverais pas ? Principalement car les monstres du jeu sont de v&eacute;ritables &ldquo;sacs 
        &agrave; PV (point de vie)&rdquo; ! M&ecirc;me en utilisant le contre, la plupart des combats de boss sont assez longs. Lorsque l&rsquo;on affronte ces derniers, il s&rsquo;agit davantage 
        d&rsquo;un marathon que d&rsquo;un affrontement intense. Les patterns des boss sont assez simples &agrave; comprendre, de ce fait une fois ce pattern compris, il sera tr&egrave;s ais&eacute; 
        de perfect un boss, m&ecirc;me les plus retors. Par contre, le moindre coup fait fondre votre barre de vie comme neige au soleil, ce qui ne pardonne pas beaucoup les erreurs. Il vous faudra 
        donc une certaine endurance, certes pour r&eacute;aliser des actions simples, mais sur un combat qui peut durer 4 &agrave; 5 minutes sans temps morts le risque de faire une erreur augmente 
        avec la fatigue d&rsquo;un affrontement trop long.</span></div>
        <figure class="grey lighten-2 center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;"><img class="materialboxed center" style="display: block; margin-left: auto; 
        margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-metroid-vs-samus.jpg" alt="Metroid Samus Return cin&eacute;matique - Zhato.fr" />
        <figcaption class="center-align">"Il est mort ?"</figcaption>
        </figure>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Le jeu consistant essentiellement &agrave; &eacute;radiquer l&rsquo;esp&egrave;ce des Metroid implique 
        tacitement qu&rsquo;ils vont repr&eacute;senter la plupart de vos combats de boss. Une quarantaine est &agrave; tuer r&eacute;partie sur plusieurs de leur stades d&rsquo;&eacute;volutions. 
        Ce qui fait que, mis &agrave; part un ou deux d&eacute;tail pr&egrave;s, quasiment tous vos combats contre ces derniers se ressembleront. Les premiers affrontements d&rsquo;une esp&egrave;ce 
        seront plus difficiles car vous ne connaissez pas leurs comportements. Par contre pour les autres si vous avez bien saisi la fa&ccedil;on de les battre, &ccedil;a ne sera qu&rsquo;un 
        r&eacute;cital du m&ecirc;me sch&eacute;ma que le combat pr&eacute;c&eacute;dent, d&rsquo;autant plus que plus l&rsquo;aventure avance et plus Samus gagne en puissance ce qui donne la 
        sensation de juste &eacute;craser un pauvre insecte pour les esp&egrave;ces les moins &eacute;volu&eacute;s. Mais le rythme plut&ocirc;t malin du jeu fera en sorte que ce soit juste &agrave; 
        ce moment o&ugrave; une petite lassitude due &agrave; la r&eacute;p&eacute;tition commence &agrave; se sentir, qu&rsquo;un nouveau stade d&rsquo;&eacute;volution ou nouvel ennemi 
        appara&icirc;t.</span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;"><img class="materialboxed img-top-right" 
        src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-dual-screen.jpg" alt="Image dual screen Metroid Samus Return - Zhato.fr" width="100%" height="auto" />D&rsquo;un point de vue 
        jouabilit&eacute;, le maniement de la chasseuse de primes est globalement agr&eacute;able et offre davantage de souplesse que dans les pr&eacute;c&eacute;dents opus 2D, particuli&egrave;rement 
        gr&acirc;ce &agrave; cette vis&eacute;e bien plus pr&eacute;cise permettant tirer &agrave; 360&deg; (auparavant la vis&eacute;e se faisait sur 8 directions). J&rsquo;ai cependant pu noter 
        quelques soucis d&rsquo;ergonomie pour certaines choses, comme pour la boule morphing par exemple. Il existe bien un raccourci pour se transformer en appuyant sur l&rsquo;&eacute;cran tactile, 
        mais avec positionnement des mains sur la console, l&rsquo;acc&egrave;s n&rsquo;est pas des plus instinctifs. Ce genre de probl&egrave;me peut para&icirc;tre anodin, mais dans des moments 
        d&rsquo;urgences o&ugrave; la moindre erreur est punie s&eacute;v&egrave;rement, &ccedil;a l&rsquo;est beaucoup moins. Il peut s&rsquo;av&eacute;rer tr&egrave;s frustrant de se prendre un coup 
        faisant extr&ecirc;mement mal ou de mourir sur ce type d&rsquo;erreur car madame n&rsquo;a pas voulu se mettre en boule ou encore qu&rsquo;elle n&rsquo;arrive pas &agrave; encha&icirc;ner 
        des sauts vrill&eacute;s. &nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-weight: 400;">Pour ce qui est de l&rsquo;utilisation du double &eacute;cran de la 3DS, celle-ci est tr&egrave;s utile. Cela permet d&rsquo;avoir 
        en permanence la carte de la zone sur l&rsquo;&eacute;cran inf&eacute;rieur, ce qui &eacute;vite de nombreux aller-retour dans les menus. Et cerise sur le g&acirc;teau, il est m&ecirc;me possible 
        de positionner des marqueurs sur la carte, tr&egrave;s pratique dans un jeu du genre &ldquo;Metroidvania&rdquo;. </span></div>
        <div style="text-align: justify;">&nbsp;<span style="font-weight: 400;">J&rsquo;ai parl&eacute; un peu plus haut des capacit&eacute;s utilisant de l&rsquo;&eacute;nergie Aeion, qui est un autre 
        point sur le tableau des nouveaut&eacute;s. Il en existe quatre qui permettront de vous aider dans votre progression. La premi&egrave;re est un scan autour de vous, r&eacute;v&eacute;lant la partie 
        de la carte du p&eacute;rim&egrave;tre o&ugrave; vous vous trouvez ainsi que les blocs destructibles. Libre &agrave; vous d\'utiliser ou non cette comp&eacute;tence qui est optionnelle pour 
        continuer contrairement aux 3 autres. </span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Niveau dur&eacute;e de vie, celle-ci est un peu sup&eacute;rieure aux pr&eacute;c&eacute;dents &eacute;pisode 2D. 
        Pour ma part j&rsquo;ai boucl&eacute; le jeu, en prenant mon temps, au bout de 9-10h en &eacute;tant &agrave; environ 45%. La plan&egrave;te SR388 regorge de secrets qui vous occupera quelques 
        heures suppl&eacute;mentaires si vous voulez le 100% (2-3h en plus pour moi), sans oublier le fait qu&rsquo;une fois l&rsquo;aventure termin&eacute; le mode Difficile est d&eacute;bloqu&eacute;. 
        Et comme &agrave; son habitude, le jeu poss&egrave;de plusieurs images de fins en fonction de votre temps, soit 3 par mode de difficult&eacute;.</span></div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Mais il reste un gros b&eacute;mol au titre que j&rsquo;ai beaucoup de mal &agrave; dig&eacute;rer :
             malgr&eacute; tous vos efforts il vous sera impossible de d&eacute;bloquer tout le contenu pr&eacute;sent sur la cartouche sans repasser &agrave; la caisse. En effet, le jeu est compatible 
             avec les amiibo de la s&eacute;rie Metroid, et ces derniers seront votre unique moyen d&rsquo;avoir acc&egrave;s &agrave; tout, et je trouve &ccedil;a vraiment scandaleux de la part de 
             Nintendo (d&rsquo;autant plus que, soit dit en passant, certains de ces amiibos sont tr&egrave;s difficilement trouvables au prix &ldquo;normal&rdquo;). Dans ce que d&eacute;bloque les 
             quatres amiibo, il y a notamment le mode Fusion (mode de difficult&eacute; ultime du jeu), mais aussi le SoundTest, des artworks et des bonus en jeu.</span></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-indent: 20px;"><span style="font-weight: 400;"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" 
        src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-samus-intro.jpg" alt="Samus Intro Metroid Samus Return - Zhato.fr" /></span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px; padding: 15px; background-color: rgba(0,0,0,0.5); color: white;"><strong>Pour conclure, ce remake de Metroid II : 
            Return of Samus m&eacute;rite son appellation. Il r&eacute;interpr&egrave;te habilement le jeu dont il est tir&eacute;, tout en approfondissant son univers avec des ajouts 
            plaisants et coh&eacute;rents, avec en plus quelques &eacute;l&eacute;ments d&eacute;di&eacute;s aux fans de la s&eacute;rie. C&rsquo;est d&rsquo;ailleurs ce que l&rsquo;on 
            pourrait retenir du jeu : il comblera tous les joueurs. Son accessibilit&eacute; en fait un tr&egrave;s bon &eacute;pisode pour d&eacute;couvrir la s&eacute;rie, tandis que 
            les fans auront l&rsquo;acc&egrave;s &agrave; un &eacute;pisode cl&eacute; de la saga dont ils n&rsquo;ont peut &ecirc;tre jamais pu jouer et qui est rempli d&rsquo;intentions 
            &agrave; leur &eacute;gard, m&ecirc;me si certains trouveront que le jeu ne leur pose pas de grandes difficult&eacute;s (en mode normal tout du moins). Le pari est donc 
            globalement r&eacute;ussi pour MercurySteam, qui avait l&agrave; un dossier assez complexe et tr&egrave;s surveill&eacute; par les fans tant les stigmates d&rsquo;un certain 
            Metroid Prime Federation Force restent pr&eacute;sents dans leurs esprits. Retour r&eacute;ussi de Samus Aran, en attendant le futur et tr&egrave;s attendu Metroid Prime 4.</strong></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><br /><em>Compl&eacute;ment : certains pourront le noter, je n&rsquo;ai pas parl&eacute; du Project AM2R durant cet article. 
        Pour ceux qui ne le connaissent pas, il s&rsquo;agit d&rsquo;un autre remake de Metroid II mais ici d&eacute;velopp&eacute; par un amateur, fan de la s&eacute;rie, avec le moteur de 
        Metroid Zero Mission.</em></div>
        <div style="text-align: justify;"><em>H&eacute;las le projet a &eacute;t&eacute; avort&eacute; en ao&ucirc;t 2016 par Nintendo qui ne rigole absolument pas avec leurs licences et 
        condamne tout fan-games. </em></div>
        <div style="text-align: justify;"><em>Difficile donc de ne pas comparer le remake de MercurySteam avec ce dernier. Mais je dirais que les deux sont compl&eacute;mentaires puisqu&rsquo;
        ils fournissent chacun leur interpr&eacute;tation du jeu original, avec leur lot d&rsquo;ajouts propres. Le premier tend vers plus d\'accessibilit&eacute; et une r&eacute;alisation solide, 
        alors qu&rsquo;AM2R est un jeu cr&eacute;&eacute; par un fan et pour les fans mettant l&rsquo;accent sur la fid&eacute;lit&eacute; et le respect de l&rsquo;esprit de la s&eacute;rie. &nbsp;</em></div>
        <div style="text-align: justify;"><em>Je n&rsquo;aurais qu&rsquo;un seul conseil &agrave; donner &agrave; ce sujet : si vous &ecirc;tes fan de la s&eacute;rie, jouez aux deux ! Je ne suis 
        pas un grand sp&eacute;cialiste de la saga, mais j&rsquo;ai ma petite pr&eacute;f&eacute;rence pour AM2R, mais &ccedil;a n&rsquo;engage que moi.</em></div>
        ');
        $article2->setAuthor('Zhato');
        $article2->setCreatedAt(new \DateTimeImmutable('2018-04-25'));
        $article2->setUpdatedAt(new \DateTimeImmutable());
        $article2->setImage('test.jpg');
        $article2->setSlug('metroid-samus-returns-retour-de-letre-aime-1');
        $article2->setIsPublished(false);
        $article2->addCategory($this->getReference('Test'));
        $article2->addPlatform($this->getReference('3DS'));

        $article3 = new Article();
        $article3->setTitle('Super Nintendo Classic Mini : un mini coffre aux trésors');
        $article3->setContent('<p style="text-align: justify; text-indent: 20px;"><strong>Apr&egrave;s le succ&egrave;s fulgurant de la NES Mini, Nintendo continue de surfer sur la vague de la nostalgie en 
        sortant sa petite soeur. Au vu des ventes de ces deux consoles il semble que toucher aux souvenirs des gens soit une strat&eacute;gie payante pour la firme japonaise. La NES Mini souffrait de 
        quelques d&eacute;fauts, portant principalement sur l&rsquo;ergonomie, Nintendo a-t-il appris de ces erreurs pour cette Super Nintendo Classic Mini ?</strong></p>
        <p style="text-align: justify;">&nbsp;</p>
        <h3 style="text-align: justify;">Une petite taille pour une grande console</h3>
        <p style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Avant de parler de jeu, parlons tout d&rsquo;abord de l&rsquo;objet en lui-m&ecirc;me. Cette version miniaturis&eacute;e 
        de la 16bits de Nintendo se veut tr&egrave;s fid&egrave;le &agrave; l&rsquo;original et permettra d&rsquo;ajouter une petite touche R&eacute;tro &agrave; votre salon.&nbsp;</span>La reproduction est 
        quasi parfaite. Le bouton Power que l&rsquo;on doit glisser vers le haut pour voir la petite diode rouge s&rsquo;allumer, ainsi que le bouton Reset servant ici pour le retour au menu principal, seul 
        le port cartouche et le bouton Eject sont &eacute;videmment factices &eacute;tant donn&eacute; que les jeux sont directement int&eacute;gr&eacute;s &agrave; la console. Seule alt&eacute;ration &agrave; 
        son design d&rsquo;origine : les ports manettes, toujours au format propri&eacute;taire Wii, sont cach&eacute; par une petite trappe imitant les ports originels.</p>
        <p style="text-align: justify;"><img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" 
        src="https://image.noelshack.com/fichiers/2017/42/7/1508694864-dsc-0693.jpg" alt="Comparaison Super Nintendo Mini et l\'original - Zhato.fr" /><br /><br /><span style="font-weight: 400; text-indent: 
        20px;">Niveau connectique, pas de changements &agrave; noter par rapport &agrave; la pr&eacute;c&eacute;dente, la console se connecte toujours &agrave; la TV via le port HDMI et un c&acirc;ble micro-USB 
        lui sert d&rsquo;alimentation. Tout est fourni sauf l&rsquo;adaptateur permettant de brancher le c&acirc;ble USB sur la prise secteur, obligeant ainsi de soit brancher votre console en USB sur votre TV 
        par exemple ou alors d&rsquo;acheter un adaptateur trouvable facilement dans le commerce (attention toutefois &agrave; l&rsquo;amp&eacute;rage, r&eacute;f&eacute;rez-vous &agrave; la bo&icirc;te de 
        votre SNES Mini), m&ecirc;me si Nintendo propose bien un adaptateur &ldquo;officiel&rdquo; mais plus on&eacute;reux.<br /></span><span style="font-weight: 400;">Quant aux manettes, cette fois-ci 
        fournies par paires, elles sont l&rsquo;exacte r&eacute;plique de celle de la console d&rsquo;origine. Ce port propri&eacute;taire les rend compatibles avec la plupart des manettes&nbsp;sorties 
        pr&eacute;c&eacute;demment sur ce format. Si vous n&rsquo;avez pas pu avoir une seconde manette pour votre NES Mini, il vous sera donc possible d\'utiliser celles-ci comme substitut; l&rsquo;inverse 
        est &eacute;galement possible mais il vous manquera alors 4 boutons ce qui est plut&ocirc;t handicapant pour la plupart des jeux propos&eacute;s. </span></p>
        <p style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Ce qui nous vient &agrave; parler de l&rsquo;ergonomie de la console, gros point noir de la NES Mini.&nbsp;</span>
        <span style="font-weight: 400;">Nintendo a entendu certaines plaintes des joueurs mais a &eacute;t&eacute; peut-&ecirc;tre un peu fain&eacute;ant, si je peux dire, pour corriger ces d&eacute;fauts. 
        Certes ils ont presque doubl&eacute; la longueur du c&acirc;ble des manettes ridiculement court de la NES Mini (145cm contre 80cm), mais cela reste insuffisant pour des salons &ldquo;moderne&rdquo; 
        o&ugrave; l&rsquo;on est &agrave; 3m de la TV, chose qui est relativement courante de nos jours. Rajoutant &agrave; cela l&rsquo;obligation d&rsquo;utiliser le bouton Reset pour acc&eacute;der au 
        menu principal, permettant de changer de jeu ou encore d&rsquo;avoir acc&egrave;s aux quelques fonctionnalit&eacute;s de la console, il vous faudra avoir la console pr&egrave;s de soi si vous voulez 
        jouer confortablement assis sur votre canap&eacute; sous votre couverture pr&eacute;f&eacute;r&eacute; (A moins d&rsquo;avoir de tr&egrave;s longs bras&hellip;). M&ecirc;me si certains jeux, notamment 
        les RPG, pr&eacute;sent sur la console vous promettent de longues sessions sans avoir besoin de vous lever.<br /></span>Niveau fonctionnalit&eacute;s, nous avons le droit &agrave; quelques options 
        d&rsquo;affichage telle que la possibilit&eacute; de jouer en 4:3, en d&eacute;finition originale ou avec un effet &ldquo;cathodique&rdquo; , et un habillage pour combler les bords noirs du 16:9. 
        Mais ce qui va le plus nous int&eacute;ress&eacute;, c&rsquo;est certainement la Sauvegarde Rapide et le Replay.<br /><span style="font-weight: 400;">La premi&egrave;re permet de sauvegarder quand 
        on veut, sur un des 4 emplacements d&eacute;di&eacute;s disponible par jeu, comme on pourrait le faire sur un &eacute;mulateur. La seconde permet de faire un retour arri&egrave;re sur les 
        40 derni&egrave;res seconde de votre partie, permettant par exemple d&rsquo;&eacute;viter le pi&egrave;ge qui vient de vous tuer. Une fonctionnalit&eacute; qui, certes certains qualifieront 
        de &ldquo;triche&rdquo;, ravira certainement les nombreux joueurs ayant &ldquo;try-hard&rdquo; sur Contra III ou Super Ghouls&lsquo;n Ghost jusqu&rsquo;&agrave; en saigner des doigts sans pour 
        autant voir l&rsquo;&eacute;cran de fin.</span></p>
        <div class="row">
        <div class="col s6"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto;" src="https://image.noelshack.com/fichiers/2017/46/3/1510772336-save.jpg" alt="Sauvegarde 
        rapide SNES Mini - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto;" src="https://image.noelshack.com/fichiers/2017/46/3/1510772338-sfii-replay2.jpg" alt="Mode 
        Replay SNES Mini - zhato.fr" /></div>
        </div>
        <p style="text-align: justify;">&nbsp;</p>
        <h3>Et les jeux dans tout &ccedil;a ?</h3>
        <p style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Il faut l&rsquo;avouer, Nintendo ne s&rsquo;est pas moqu&eacute; de nous sur les 21 des jeux propos&eacute;s, 
        m&ecirc;me si certains pourront pleurer l&rsquo;absence de tel ou tel titre&hellip; Oui il y a des absents mais pour une console ayant accueilli tellement de perles, difficile de faire une s&eacute;lection 
        sans sacrifice. Ici que du tr&egrave;s lourd, en effet seul Kirby&rsquo;s Dream Course aurait pu &eacute;ventuellement &ecirc;tre remplac&eacute;, par un Chrono Trigger par exemple. 
        Nous avons acc&egrave;s &agrave; des jeux qui ne sont jamais sortis en Europe &agrave; l&rsquo;&eacute;poque comme EarthBound (Mother 2 au Japon), Super Mario RPG ou encore Final Fantasy VI.<br /></span>
        <span style="font-weight: 400;">Il est utile de pr&eacute;ciser que nous avons l&agrave; les versions am&eacute;ricaines, offrant ainsi des jeux tournant en 60Hz et donc non ralentis comme les jeux 
        PAL tournant eux en 50Hz. Mais qui dit version am&eacute;ricaine dit jeu en anglais ! Nous perdons donc les quelques rares traductions fran&ccedil;aises que nous avions eu, exit donc 
        les &ldquo;Lougarou&rdquo; et les &ldquo;Coincoin&rdquo; de Secret of Mana. Ce qui explique aussi certaines jaquettes diff&eacute;rentes des n&ocirc;tres et l\'apparence de certains jeux : comme 
        Contra III devenu Super Probotector en Europe avec des robots &agrave; la place des personnages embl&eacute;matiques de la s&eacute;rie, ou encore de l\'appellation de Final Fantasy III au lieu de 
        Final Fantasy VI.<br /></span><span style="font-weight: 400;">Niveau technique, il n&rsquo;y a rien &agrave; reprocher &agrave; la qualit&eacute; et la fid&eacute;lit&eacute; de l&rsquo;&eacute;mulation. 
        L&rsquo;exp&eacute;rience de jeu para&icirc;t identique &agrave; l&rsquo;original, avec les ralentissements d&rsquo;un jeu utilisant un peu trop de ressources pour la console qui vont avec. Et oui, 
        malgr&eacute; la puce SuperFX pr&eacute;sente dans la cartouche de Starwing (Starfox), le jeu malmenait la Super Nintendo avec ces polygones permettant d&rsquo;offrir un jeu en 3D. Une prouesse 
        technique &agrave; l&rsquo;&eacute;poque que peu parvenaient &agrave; faire sur console de salon.</span></p>
        <p style="text-align: justify;"><br /><img class="materialboxed img-top-left" src="https://image.noelshack.com/fichiers/2017/42/7/1508698580-starfox2.jpg" alt="Starfox 2 jaquette - zhato.fr" 
            width="100%" height="auto" /><span style="font-weight: 400; text-indent: 20px;">Petit apart&eacute; sur LE jeu star de cette SNES Mini : Starfox 2 (qui est &agrave; d&eacute;bloquer en finissant 
            le premier niveau du premier opus). Cette suite initialement pr&eacute;vue pour 1995-1996 a &eacute;t&eacute; annul&eacute; au dernier moment par Nintendo, alors que le d&eacute;veloppement 
            &eacute;tait termin&eacute;. Ce choix est purement commercial, en effet la sortie de la Nintendo 64 &eacute;tait imminente et le choix a donc &eacute;t&eacute; de se concentrer principalement 
            sur cette derni&egrave;re. On peut aussi penser au fait que la Playstation et la Saturn &eacute;tant d&eacute;j&agrave; sortie, Nintendo s&rsquo;inqui&eacute;tait de la comparaison avec les 
            jeux de la nouvelle g&eacute;n&eacute;ration 32bits, malgr&eacute; la pr&eacute;sence de la SuperFX 2 rajoutant encore plus de m&eacute;moire que la premi&egrave;re.<br /></span><span 
            style="font-weight: 400;">Pourtant une fois le jeu d&eacute;marr&eacute;, on ne peut que rester bouche b&eacute;e face &agrave; une telle performance. Au revoir le &ldquo;simple&rdquo; 
            rail shooter lin&eacute;aire qu&rsquo;&eacute;tait le premier. Ici nous avons plusieurs types de niveau, dont certains sur des plan&egrave;tes ou dans de gros vaisseaux m&egrave;res o&ugrave; 
            on est libre de ses d&eacute;placements. Il nous est m&ecirc;me possible de transformer notre vaisseau en un engin bip&egrave;de appel&eacute; Walker, un v&eacute;hicule apparu pour la toute 
            premi&egrave;re fois dans Star Fox Zero sortie en 2016 soit 20 ans apr&egrave;s ! &Eacute;videmment le tout en 3D, m&ecirc;me si certains diront que &ldquo;&ccedil;a pique les yeux&rdquo;, 
            il faut se remettre dans le contexte de l&rsquo;&eacute;poque et surtout se dire qu&rsquo;on est l&agrave; sur de la Super Nintendo, ce qui est assez fou. Bref je ne ferais pas un test complet 
            du jeu ici, mais Nintendo montre encore une fois son talent et son sens de l&rsquo;innovation. &Ccedil;a sonne tr&egrave;s &ldquo;Fanboy&rdquo; mais il faut &ldquo;rendre &agrave; C&eacute;sar 
            ce qui est &agrave; C&eacute;sar&rdquo;. Merci &agrave; eux de nous avoir partag&eacute; ce regrett&eacute; &eacute;pisode, dont les id&eacute;es et innovations auront tout de m&ecirc;me servi 
            pour les jeux de la s&eacute;rie &agrave; venir comme Lylat Wars (Star Fox 64) et Star Fox Zero</span><span style="font-weight: 400;">.</span></p>
        <p style="text-align: justify;"><br /><br /></p>
        <p style="text-align: justify;">&nbsp;</p>
        <p style="text-align: justify; text-indent: 20px; padding: 15px; background-color: rgba(0,0,0,0.5); color: white;"><span style="font-weight: 400;">Pour conclure la Super Nintendo Classic Mini est 
        un objet &agrave; poss&eacute;der pour les nostalgiques ou les curieux d&eacute;sirant de d&eacute;couvrir cette &eacute;poque, bien plus que l&rsquo;&eacute;tait la NES Mini &agrave; mon humble avis. 
        Fonctionnalit&eacute;s utiles, cette fois-ci fournis avec 2 manettes, peu de reproches sont &agrave; faire &agrave; cette console. Les jeux de cette g&eacute;n&eacute;ration ont sans doute mieux 
        vieilli que ceux de la pr&eacute;c&eacute;dente et se laisseront davantage parcourir. Avec des jeux comme Secret of Mana et Final Fantasy VI, vous aurez l&agrave; plus d&rsquo;une centaine d&rsquo;heures 
        de jeu minimum avec ce catalogue quasi irr&eacute;prochable.</span></p>
        <p style="text-align: justify;"><br /><br /><em><span style="font-weight: 400;">Pour les stocks, nous sommes tr&egrave;s loin de la grande p&eacute;nurie qu&rsquo;a connu la NES Mini. La demande 
        est forte mais Nintendo fourni derri&egrave;re et continuera de fournir en 2018 contrairement &agrave; ce qu&rsquo;ils avaient annonc&eacute; au d&eacute;but. Il y a du stock, soyez juste patient 
        et vous pourrez vous aussi l&rsquo;avoir. Ne succombez pas &agrave; tous ces escrocs qui ont achet&eacute; une partie du stock Day One uniquement pour la revendre minimum 50% plus ch&egrave;re.<br />
        </span>Nintendo a aussi annonc&eacute; qu&rsquo;ils allaient reproduire des NES Mini courant 2018.</em></p>
        <p style="text-align: justify;">&nbsp;</p>
        <h5 style="text-align: left;">Galerie de captures d\'&eacute;crans, avec diff&eacute;rents filtres et habillages :</h5>
        <div class="slider">
        <ul class="slides">
        <li><img src="https://image.noelshack.com/fichiers/2017/46/3/1510772336-fzero.jpg" alt="F-Zero SNES Mini - zhato.fr" /></li>
        <li><img src="https://image.noelshack.com/fichiers/2017/46/3/1510772336-castle.jpg" alt="Super Castlevania IV SNES Mini - zhato.fr" /></li>
        <li><img src="https://image.noelshack.com/fichiers/2017/46/3/1510772336-kirby.jpg" alt="Kirby Super Star SNES Mini - zhato.fr" /></li>
        <li><img src="https://image.noelshack.com/fichiers/2017/46/3/1510772336-mmx.jpg" alt="Megaman X SNES Mini - zhato.fr" /></li>
        <li><img src="https://image.noelshack.com/fichiers/2017/46/3/1510772338-som.jpg" alt="Secret of Mana SNES Mini - zhato.fr" /></li>
        <li><img src="https://image.noelshack.com/fichiers/2017/46/3/1510772338-zelda.jpg" alt="Zelda III A Link To The Past SNES Mini - zhato.fr" /></li>
        </ul>
        </div>');
        $article3->setAuthor('Zhato');
        $article3->setCreatedAt(new \DateTimeImmutable('2018-05-04'));
        $article3->setUpdatedAt(new \DateTimeImmutable());
        $article3->setImage('test.jpg');
        $article3->setSlug('super-nintendo-classic-mini-un-mini-coffre-aux-tresors');
        $article3->setIsPublished(true);
        $article3->addCategory($this->getReference('Console'));
        $article3->addPlatform($this->getReference('SNES'));

        $article4 = new Article();
        $article4->setTitle('Your Name : le chef-d\'œuvre de tout les records');
        $article4->setContent('<p style="text-align: justify; text-indent: 20px;"><strong>&Agrave; l&rsquo;occasion de sa sortie en Blu-ray et DVD le 22 novembre, je tenais beaucoup &agrave; vous parler 
        du plus gros succ&egrave;s de l&rsquo;ann&eacute;e 2016 au Japon : le film d&rsquo;animation &ldquo;Your Name&rdquo; de Makoto Shinkai.</strong></p>
        <p style="text-align: justify; text-indent: 20px;">Cinqui&egrave;me long-m&eacute;trage de celui que certains voient comme la rel&egrave;ve du grand Hayao Miyazaki, &ldquo;Your Name&rdquo; 
        a r&eacute;gn&eacute; en ma&icirc;tre sur le box-office nippon pendant plusieurs semaines lors de sa sortie au cin&eacute;ma le 26 ao&ucirc;t 2016. Makoto Shinkai &eacute;tait loin d\'imaginer 
        que son film allait devenir le second film le plus rentable de l&rsquo;histoire du Japon, juste derri&egrave;re &ldquo;Le Voyage de Chihiro&ldquo;.</p>
        <p style="text-align: justify; text-indent: 20px;">Il met en sc&egrave;ne deux adolescents que tout oppose : Mitsuha, une lyc&eacute;enne lass&eacute;e de sa vie dans une petite ville de campagne 
        et qui r&ecirc;ve de partir pour Tokyo. De l&rsquo;autre c&ocirc;t&eacute;, Taki un &eacute;tudiant habitant &agrave; la capitale et vivant gr&acirc;ce &agrave; son travail de serveur dans un 
        restaurant.<br />Apr&egrave;s avoir fait le souhait d&rsquo;&ecirc;tre un beau gar&ccedil;on vivant &agrave; Tokyo, Mitsuha se r&eacute;veille dans une chambre qui n&rsquo;est pas la sienne et 
        s\'aper&ccedil;oit qu&rsquo;elle se trouve dans le corps de Taki, qui quant &agrave; lui vit l&rsquo;exp&eacute;rience inverse. R&ecirc;ve ou r&eacute;alit&eacute; ? C&rsquo;est ce qu&rsquo;ils 
        vont chercher &agrave; savoir lors de ces &eacute;changes de vies.</p>
        <p style="text-align: justify; text-indent: 20px;">Le premier constat que l\'on peut effectuer est qu\'artistiquement le film est magnifique. Les dessins sont fins, l&rsquo;animation est tr&egrave;s 
        bien r&eacute;alis&eacute;e, et les paysages paraissent plus vrais que nature. On y retrouve &eacute;galement un des ingr&eacute;dients in&eacute;vitables de l&rsquo;univers de l&rsquo;auteur : 
        les jeux de lumi&egrave;re tr&egrave;s soign&eacute;s qui occupe une place importante dans la mise en sc&egrave;ne. La bande-son sign&eacute; par RADWIMPS, un groupe pop-rock populaire au Japon, 
        colle tr&egrave;s bien au film et vient appuyer les diff&eacute;rentes s&eacute;quences marquantes.<br /><br /><img class="materialboxed center" style="display: block; margin-left: auto; 
        margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2017/48/7/1512319262-your-name-1.jpg" alt="Your Name - zhato.fr" /></p>
        <p style="text-align: justify; text-indent: 20px;">Certains pouvaient reprocher &agrave; Shinkai une certaine lenteur dans le rythme de ses pr&eacute;c&eacute;dentes oeuvres. Les remarques semblent 
        avoir &eacute;t&eacute; entendu car ici le film ne souffre d&rsquo;aucun temps mort, notamment gr&acirc;ce &agrave; ses diff&eacute;rents rebondissements. Pour beaucoup de films il y a toujours 
        ce petit moment de creux &agrave; mi-parcours o&ugrave; le rythme baisse un peu, "Your Name" esquive brillamment ce moment en prenant un virage &agrave; 180&deg; relan&ccedil;ant imm&eacute;diatement 
        toute l\'intrigue. C&rsquo;est d&rsquo;ailleurs un autre point assez remarquable de ce titre : sa capacit&eacute; &agrave; cacher ses secrets jusqu&rsquo;&agrave; ce qu&rsquo;ils surgissent de 
        mani&egrave;re inattendue. L&agrave; o&ugrave; pour certains longs-m&eacute;trages la bande-annonce a d&eacute;j&agrave; tout d&eacute;voil&eacute;, celle de &ldquo;Your Name&rdquo; ne vous montrera 
        que l\'emballage de ce &ldquo;Kinder Surprise&rdquo; qui ne cessera de vous surprendre au fil de sa d&eacute;gustation. L\'auteur arrive &agrave; jongler habilement avec nos &eacute;motions avec 
        des passages &eacute;mouvants mais aussi des passages dr&ocirc;les apport&eacute; par exemple par un running-gag auquel on ne s\'attendait pas de lui. D&rsquo;autant plus qu&rsquo;il est assez ais&eacute; 
        de s&rsquo;identifier aux deux personnages, on peut facilement se mettre &agrave; leur place et comprendre ce qu&rsquo;ils peuvent ressentir.</p>
        <p style="text-align: justify; text-indent: 20px;">En bref, vous l&rsquo;aurez compris &ldquo;Your Name&rdquo; a &eacute;t&eacute; un v&eacute;ritable coup de coeur pour moi. Je pense qu&rsquo;il 
        est difficile de ne pas en sortir touch&eacute; et &eacute;mu par cette belle aventure que vivent les deux protagonistes, sublim&eacute; par une direction artistique au sommet.<br />Je ne peux que 
        vous recommander de l&rsquo;ajouter &agrave; votre liste de No&euml;l !&nbsp;</p>
        <h4 style="text-align: left;">Voici la bande-annonce fran&ccedil;aise :</h4>
        <div class="video-container" style="text-align: center;"><iframe src="https://www.youtube.com/embed/AROOK45LXXg" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
        <p style="text-align: justify;"><br />Cet article est l\'occasion aussi pour moi de vous parler d\'une artiste que j\'appr&eacute;cie &eacute;norm&eacute;ment qui &oelig;uvre<em>&nbsp;</em>sur YouTube ! 
        <a href="https://www.youtube.com/user/Mi0uneTV">Mioune</a>, chanteuse, autodidacte (comme l\'est Makoto Shinkai), r&eacute;alise des covers et des adaptations de musiques de jeux vid&eacute;o et 
        d\'anim&eacute;s. Une voix magnifique que j\'ai pu voir grandir au fil du temps depuis les quelques ann&eacute;es que je la suis.<br /><br />Suite &agrave; de nombreuses demandes de sa communaut&eacute;, 
        elle a r&eacute;alis&eacute; une adaptation fran&ccedil;aise de la chanson &ldquo;Nandemonaiya&rdquo; de &ldquo;Your Name&rdquo; que je vous laisse d&eacute;couvrir :</p>
        <div class="video-container" style="text-align: center;"><iframe src="https://www.youtube.com/embed/9bwcABsB4p0" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>');
        $article4->setAuthor('Zhato');
        $article4->setCreatedAt(new \DateTimeImmutable('2018-05-11'));
        $article4->setUpdatedAt(new \DateTimeImmutable());
        $article4->setImage('test.jpg');
        $article4->setSlug('your-name-le-chef-doeuvre-de-tout-les-records');
        $article4->setIsPublished(true);
        $article4->addCategory($this->getReference('Manga'));
        $article4->addPlatform($this->getReference('Blu-ray'));

        $article5 = new Article();
        $article5->setTitle('L\'édition spécial de Bayonetta 1 & 2 sur Nintendo Switch');
        $article5->setContent('<p style="text-align: justify; text-indent: 20px;"><strong>La sorci&egrave;re la plus glamour du paysage vid&eacute;oludique revient sur Nintendo Switch avec ce portage des deux 
        premier Bayonetta, en attendant le 3 qui est en cours de d&eacute;veloppement exclusivement sur cette m&ecirc;me plateforme. Nintendo nous propose donc deux jeux pour le prix d&rsquo;un : Bayonetta 2 
        en &eacute;dition physique contenant un code de t&eacute;l&eacute;chargement pour le premier qui lui n&rsquo;est qu&rsquo;en d&eacute;mat&eacute;rialiser. Et c</strong><strong>omme quasiment toutes 
        grosses sorties maintenant, une &eacute;dition sp&eacute;ciale limit&eacute;e sort en parall&egrave;le et c&rsquo;est ce qui va nous int&eacute;resser ici pour cette petite pr&eacute;sentation.</strong></p>
        <p style="text-align: justify; text-indent: 20px;">Cette &eacute;dition se pr&eacute;sente sous la forme d&rsquo;une bo&icirc;te &agrave; peine plus large que celles des jeux Switch, &agrave; 
        la d&eacute;coration simple mais efficace. On est dans la m&ecirc;me lign&eacute;e des autres &eacute;ditions limit&eacute;es Nintendo, loin des gros collectors avec plein de goodies et autres 
        statuettes &agrave; l&rsquo;int&eacute;rieur.</p>
        <p style="text-align: justify; text-indent: 20px;"><img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" 
        src="https://image.noelshack.com/fichiers/2018/07/5/1518738982-bayonetta-1.jpg" alt="Bo&icirc;te - Edition limit&eacute;e Bayonetta Switch - zhato.fr" /></p>
        <p style="text-align: justify;">Justement en parlant de son contenu, voici ce que nous offre cette &eacute;dition affich&eacute;e au tarif de 79,99&euro; :</p>
        <p style="text-align: justify; padding-left: 30px;">- Bayonetta 2 en bo&icirc;te, avec le premier en code de t&eacute;l&eacute;chargement<br />- Un steelbook &agrave; l\'effigie des 2 opus<br />- 
        3 planches d&rsquo;autocollants<br />- Les cartes de versets de Bayonetta 2</p>
        <p style="text-align: justify;"><img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" 
        src="https://image.noelshack.com/fichiers/2018/07/5/1518738982-bayonetta-2.jpg" alt="Contenu - Edition limit&eacute;e Bayonetta Switch - zhato.fr" /></p>
        <p style="text-align: justify; text-indent: 20px;">En ouvrant la bo&icirc;te du jeu, on s\'aper&ccedil;oit que la jaquette est en fait r&eacute;versible avec celle du premier Bayonetta de 
        l&rsquo;autre c&ocirc;t&eacute;. Une sympathique attention de la part de Sega mais qui laisse un petit go&ucirc;t amer par rapport &agrave; l&rsquo;&eacute;dition japonaise o&ugrave; les deux sont en 
        bo&icirc;te (voir plus bas), qui peut laisser comme message &ldquo;On y a pens&eacute;, mais en fait non. Voici au moins la jaquette&rdquo;. <br />Concernant le reste du contenu : le steelbook est 
        assez joli, les cartes avec un effet brillant sont de bonne facture, et les autocollants sont sympa mais sans plus (je n&rsquo;ai jamais &eacute;t&eacute; fan de &ccedil;a).</p>
        <div class="row">
        <div class="col s6"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto;" src="https://image.noelshack.com/fichiers/2018/07/5/1518738982-bayonetta-3.jpg" 
        alt="Bo&icirc;te jeux ouverte - Edition limit&eacute;e Bayonetta Switch - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto;" src="https://image.noelshack.com/fichiers/2018/07/5/1518738982-bayonetta-4.jpg" 
        alt="Cartes de verset - Edition limit&eacute;e Bayonetta Switch - zhato.fr" /></div>
        <div class="col s6">&nbsp;</div>
        <div class="col s6">&nbsp;</div>
        </div>
        <p style="text-align: justify; text-indent: 20px; padding: 15px; background-color: rgba(0,0,0,0.5); color: white;"><strong>Pour conlure, je pense que cette &eacute;dition s&rsquo;adresse surtout 
        aux gros fans de la s&eacute;rie. L&rsquo;&eacute;dition simple est trouvable facilement &agrave; 44,99&euro;, ce qui fait 35&euro; suppl&eacute;mentaire pour un steelbook et un paquet de carte 
        ce qui fait un peu ch&egrave;re &agrave; mon go&ucirc;t. Elle aurait &eacute;t&eacute; bien plus attractive si nous avions eu en exclusivit&eacute; le premier opus en &eacute;dition physique.</strong></p>
        <p style="text-align: justify; text-indent: 20px;">&nbsp;</p>
        <p style="text-align: justify; text-indent: 20px; padding: 15px; border-style: double; background-color: #f2f2f2;">Petite parenth&egrave;se sur l&rsquo;&eacute;dition sp&eacute;ciale japonaise 
        qui diff&egrave;re un peu. Comme tr&egrave;s souvent h&eacute;las les japonais sont mieux lotis que nous : une bo&icirc;te plus d&eacute;taill&eacute;e et mieux illustr&eacute;e et surtout, comme je 
        l\'ai &eacute;voqu&eacute; plus haut, le premier opus de la s&eacute;rie &agrave; lui aussi le droit &agrave; sa propre cartouche. Petit d&eacute;tail toujours appr&eacute;ciable, le steelbook japonais 
        contient 2 emplacements de cartouche Switch permettant de rassembler les 2 jeux dedans.<br /><br /><img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; 
        width: 100%;" src="https://image.noelshack.com/fichiers/2018/07/5/1518738982-bayonetta-collector-jap.jpg" alt="Climax Edition JAP - Bayonetta Switch - zhato.fr" /></p>
        <p style="text-align: justify;">&nbsp;</p>
        <p>&nbsp;</p>');
        $article5->setAuthor('Zhato');
        $article5->setCreatedAt(new \DateTimeImmutable('2018-05-18'));
        $article5->setUpdatedAt(new \DateTimeImmutable());
        $article5->setImage('test.jpg');
        $article5->setSlug('ledition-special-de-bayonetta-1-2-sur-nintendo-switch');
        $article5->setIsPublished(true);
        $article5->addCategory($this->getReference('Collector'));
        $article5->addPlatform($this->getReference('Switch'));

        $article6 = new Article();
        $article6->setTitle('La "King\'s Edition" de Ni no Kuni 2 : porte-t-elle bien son nom ?');
        $article6->setContent('<p style="text-align: justify; text-indent: 20px;"><strong> Il y a 5 ans maintenant, Ni No Kuni premier du nom en a &eacute;merveill&eacute; plus d&rsquo;un notamment gr&acirc;ce 
        &agrave; la collaboration entre le studio Level-5 (Professeur Layton, certains Dragon Quest&hellip;) et le studio Ghibli (Princesse Mononoke, Mon voisin Totoro&hellip;). Aujourd&rsquo;hui sort sur PS4 
        et PC le second &eacute;pisode, sous-titr&eacute; &ldquo;L\'Av&egrave;nement d\'un nouveau royaume&rdquo;, cette fois-ci sans l&rsquo;aide de Ghibli mais tout en essayant d&rsquo;en garder la touche 
        gr&acirc;ce &agrave; l&rsquo;aide d&rsquo;anciens du studio.</strong><br /><strong>Bandai Namco nous propose 3 &eacute;ditions pour le jeu : l&rsquo;&eacute;dition simple, l&rsquo;&eacute;dition 
        steelbook et l&rsquo;&eacute;dition collector (ces deux derni&egrave;res sont nomm&eacute; respectivement &ldquo;Prince&rsquo;s Edition&rdquo; et &ldquo;King&rsquo;s Edition&rdquo;). J&rsquo;ai 
        opt&eacute; pour l&rsquo;&eacute;dition collector que j&rsquo;attendais avec impatience tant elle se r&eacute;v&eacute;lait prometteuse. L&rsquo;ayant maintenant re&ccedil;u, voyons ce que &ccedil;a 
        donne ! </strong></p>
        <p style="text-align: justify; text-indent: 20px;">Propos&eacute;e au tarif de 149,99&euro; (139,99&euro; pour la version PC), cette &ldquo;King&rsquo;s Edition&rdquo; se pr&eacute;sente sous la forme 
        d&rsquo;une assez grande bo&icirc;te (~33x33x17cm) orn&eacute;e d&rsquo;un bel artwork s&rsquo;&eacute;tendant un peu sur le c&ocirc;t&eacute; de cette derni&egrave;re, avec un fourreau.<br /><br />
        <img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2018/12/6/1521848360-ni-no-kuni2-2.jpg" 
        alt="Bo&icirc;te - Edition collector Ni No Kuni 2 - zhato.fr" /></p>
        <p style="text-align: justify;">Voici le contenu g&eacute;n&eacute;reux que renferme ladite bo&icirc;te :</p>
        <p style="text-align: justify; padding-left: 30px;">- Le jeu dans sa bo&icirc;te PS4<br />- Le Season Pass (inclus dans la bo&icirc;te du jeu)<br />- Le steelbook<br />- Le Making-of du jeu sur 
        Blu Ray (dans le steelbook)<br />- 3 cartes postales (dans le steelbook)<br />- Un vinyle illustr&eacute; avec 2 morceaux, dont le th&egrave;me du jeu, dans une pochette avec une illustration pop-up 3D
        <br />- Un artbook de 148 pages<br />- Une bo&icirc;te &agrave; musique de 20cm de haut, renfermant 2 dioramas qui tourne en jouant le th&egrave;me principal du jeu</p>
        <p>&nbsp;</p>
        <p style="text-align: justify; text-indent: 20px;">La premi&egrave;re chose que l&rsquo;on d&eacute;couvre lorsque l&rsquo;on retire le couvercle est la pochette contenant le vinyle, avec un artwork 
        crayonn&eacute; du h&eacute;ros sur la premi&egrave;re de couverture. A son ouverture, on retrouve l&rsquo;illustration pop-up 3D repr&eacute;sentant les 3 personnages principaux avec le ch&acirc;teau 
        en arri&egrave;re-plan. Et enfin le vinyle magnifiquement illustr&eacute;, contenant 2 morceaux de l&rsquo;OST du jeu qui a &eacute;t&eacute; compos&eacute; par Joe Hisaishi, compositeur d&rsquo;un 
        grand nombre de films du studio Ghibli.<br />C&rsquo;est une tr&egrave;s belle pi&egrave;ce de collection ! Peu de jeux proposent leurs musiques sur vinyle et encore moins inclus avec le jeu, vendus 
        s&eacute;par&eacute;ment g&eacute;n&eacute;ralement. Pour &ecirc;tre un peu tatillon, on pourrait dire que l&rsquo;on n&rsquo;aurait pas &eacute;t&eacute; contre avoir plus que 2 musiques, mais ne 
        soyons pas trop difficile.</p>
        <div class="container">
        <section class="row">
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848360-ni-no-kuni2-4.jpg" alt="Pochette vinyle - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848360-ni-no-kuni2-5.jpg" alt="Illustration pop-up 3D - Edition collector Ni No Kuni 2 - zhato.fr" />
        </div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848361-ni-no-kuni2-6.jpg" alt="Vinyle face A - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848362-ni-no-kuni2-7.jpg" alt="Vinyle face B - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        </section>
        </div>
        <p style="text-align: justify; text-indent: 20px;">Vient ensuite un artbook de 148 pages, plus grand que les images pouvaient nous laisser penser puisqu&rsquo;il fait environ la m&ecirc;me taille que 
        la bo&icirc;te. On y retrouve les personnages, monstres, v&eacute;hicules et autres paysages que l&rsquo;on d&eacute;couvrira au cours de l&rsquo;aventure. J&rsquo;ai volontairement peu consult&eacute; 
        l&rsquo;artbook, afin de me laisser le plaisir de la d&eacute;couverte en jouant au jeu.</p>
        <p><img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2018/12/6/1521848363-ni-no-kuni2-8.jpg" 
        alt="Artbook - Edition collector Ni No Kuni 2 - zhato.fr" /></p>
        <div class="container">
        <section class="row">
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848363-ni-no-kuni2-9.jpg" alt="Extrait Artbook - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848364-ni-no-kuni2-10.jpg" alt="Extrait Artbook - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848366-ni-no-kuni2-11.jpg" alt="Extrait Artbook - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521848384-ni-no-kuni2-12.jpg" alt="Extrait Artbook - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        </section>
        </div>
        <p style="text-align: justify; text-indent: 20px;">Puis nous d&eacute;couvrons enfin ce qui nous int&eacute;resse quand m&ecirc;me le plus : le jeu, accompagn&eacute; de son steelbook. La bo&icirc;te 
        du jeu est quasi identique &agrave; celle de la version standard, &agrave; l\'exception qu&rsquo;il s&rsquo;agit ici d&rsquo;une version europ&eacute;enne et non fran&ccedil;aise (pr&eacute;sence du 
        logo USK en plus du PEGI, sous-titre en anglais...). Le steelbook quant &agrave; lui est plut&ocirc;t joli, renfermant donc le making-of ainsi que 3 cartes postales illustr&eacute;es d&rsquo;artworks.</p>
        <p><img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2018/12/6/1521852537-ni-no-kuni2-13.jpg" 
        alt="Jeu + bo&icirc;te &agrave; musique - Edition collector Ni No Kuni 2 - zhato.fr" /></p>
        <div class="container">
        <section class="row">
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521852537-ni-no-kuni2-14.jpg" alt="Jeu + steelbook - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521852537-ni-no-kuni2-15.jpg" 
        alt="Int&eacute;rieur steelbook - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        </section>
        </div>
        <p style="text-align: justify; text-indent: 20px;">Et enfin une bo&icirc;te (reprenant le m&ecirc;me artwork mais faisait cette fois-ci tout le tour) renfermant l&rsquo;une des pi&egrave;ces 
        ma&icirc;tresses de cette &eacute;dition : la bo&icirc;te &agrave; musique. La finition est correcte sans &ecirc;tre parfaite, on y retrouve des petits d&eacute;fauts que l&rsquo;on note 
        habituellement (malheureusement) dans ce genre de figurines : &eacute;p&eacute;e tordue ou encore strabisme de certains personnages. On actionne le m&eacute;canisme &agrave; l&rsquo;aide d&rsquo;une petite 
        cl&eacute; situ&eacute; en dessous jouant ainsi la m&eacute;lodie tout en faisant tourner les dioramas. La m&eacute;lodie est tr&egrave;s jolie et on sent que le m&eacute;canisme est plut&ocirc;t de bonnes 
        factures.</p>
        <div class="container">
        <section class="row">
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521854994-ni-no-kuni2-18.jpg" alt="Bo&icirc;te &agrave; musique face avant - 
        Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521854993-ni-no-kuni2-20.jpg" alt="Bo&icirc;te &agrave; musique face arri&egrave;re - 
        Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521854993-ni-no-kuni2-16.jpg" alt="Petite bo&icirc;te - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        <div class="col s6"><img class="materialboxed" src="https://image.noelshack.com/fichiers/2018/12/6/1521854993-ni-no-kuni2-17.jpg" alt="Petite bo&icirc;te - Edition collector Ni No Kuni 2 - zhato.fr" /></div>
        </section>
        </div>
        <p style="text-align: justify;">Je vous ai captur&eacute; la m&eacute;lodie via mon micro, en esp&eacute;rant retranscrire au mieux ce que l&rsquo;on entend r&eacute;ellement :</p>
        <div class="video-container" style="text-align: center;"><iframe src="https://www.youtube.com/embed/8DumoD8NIck" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
        <p><br /><br /></p>
        <p style="text-align: justify; text-indent: 20px; padding: 15px; background-color: rgba(0,0,0,0.5); color: white;"><strong> En conclusion je suis vraiment s&eacute;duit par cette &ldquo;King&rsquo;s 
        Edition&rdquo;, je ne regrette absolument pas mon achat. La bo&icirc;te &agrave; musique est une tr&egrave;s bonne id&eacute;e et repr&eacute;sente une belle pi&egrave;ce, le vinyle est magnifique, 
        l&rsquo;artbook est plus grand que ce qu&rsquo;on avait imagin&eacute;... </strong><br /><strong>Bandai Namco nous propose donc un collector g&eacute;n&eacute;reux &agrave; un tarif correct pour 
        son contenu, contrairement &agrave; certains concurrents (Square Enix, si tu nous regardes...). Si vous &ecirc;tes amateur de collector et qu&rsquo;il en reste encore, foncez ! </strong><br /><strong>
        Pour ma part je vais attendre de terminer Xenoblade Chronicle 2 pour commencer le jeu ! </strong></p>
        <p><br /><br /></p>
        <div style="padding: 15px; border-style: double; background-color: #f2f2f2;">
        <p style="text-align: justify;">Pour ce qui est de la &ldquo;Prince&rsquo;s Edition&rdquo; propos&eacute; au tarif de 94,99&euro; (trouvable chez certains vendeurs &agrave; 69,99&euro;), 
        cette derni&egrave;re comprend :</p>
        <p style="text-align: justify; padding-left: 30px;">- Le jeu dans sa bo&icirc;te PS4<br />- Le Season Pass (inclus dans la bo&icirc;te du jeu)<br />- Le steelbook<br />- Le Making-of du jeu sur 
        Blu Ray (dans le steelbook)<br />- 3 cartes postales (dans le steelbook)</p>
        <img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2018/12/6/1521890889-steelbook-ni-no-kuni-2.jpg" 
        alt="Edition steelbook Ni No Kuni 2 - zhato.fr" /></div>
        <p>&nbsp;</p>');
        $article6->setAuthor('Zhato');
        $article6->setCreatedAt(new \DateTimeImmutable());
        $article6->setUpdatedAt(new \DateTimeImmutable());
        $article6->setImage('test.jpg');
        $article6->setSlug('la-kings-edition-de-ni-no-kuni-2-porte-t-elle-bien-son-nom');
        $article6->setIsPublished(true);
        $article6->addCategory($this->getReference('Collector'));
        $article6->addPlatform($this->getReference('PS4'));

        $manager->persist($article1);
        $manager->persist($article2);
        $manager->persist($article3);
        $manager->persist($article4);
        $manager->persist($article5);
        $manager->persist($article6);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            PlatformFixtures::class,
        ];
    }
}